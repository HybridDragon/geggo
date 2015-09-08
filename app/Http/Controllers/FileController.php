<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\File;

use Auth;
use Config;

class FileController extends Controller {
	public function postFile()
	{
		$file = new File;
		$file->id = substr(md5_file($_FILES['file']['tmp_name']), 0, 8);
		$file->original_name = basename($_FILES['file']['name']);
		$file->extension = pathinfo($file->original_name, PATHINFO_EXTENSION);
		$file->name = ucwords(basename($file->original_name, ".".$file->extension));
		$file->extension = strtolower($file->extension);
		$file->type = $_FILES['file']['type'];

		if(File::find($file->id))
		{
			$file->id = substr(md5(md5_file($_FILES['file']['tmp_name']) + md5(rand())), 0, 8);
		}

		if(Auth::check())
		{
			$file->uploader = Auth::user()['id'];
		}

		else
		{
			$file->uploader = "anonymous";
		}

		$storage_path = storage_path();
		$file->location = "{$storage_path}/uploads/".
		"{$file->uploader}/{$file->id}.{$file->extension}";

		$file->url = Config::get('app.media_url').
		"/{$file->uploader}/{$file->id}.{$file->extension}";

		if(move_uploaded_file($_FILES['file']['tmp_name'],
		$file->location) && $file->save())
		{
			return redirect($file->url);
		}
	}

	public function postPaste()
	{
		$paste = new Paste;
		$paste->id = crc32($_POST['paste']);
		$paste->content = $_POST['paste'];

		return redirect('/paste/{$paste->id}');
	}

	public function browse()
	{
		$files = File::all();
		return view('browse', ['page_title' => "browse", 'files' => $files]);
	}

	public function view($file_id)
	{
		$file = File::findOrFail($file_id);
		return view('view', ['page_title' => $file->name, 'file' => $file]);
	}
}
