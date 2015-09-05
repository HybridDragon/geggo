@extends('layouts.splash')

@section('css')
    @parent
    <style>
        #filedrop {
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            position: absolute;
            display: block;
        }

        #droparea {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            border: none;
            opacity: 0
        }

        #uploading-message {
            display: none;
        }
    </style>
@stop

@section('splash-content')
    <header class="page" id="front">
        <form id="filedrop" action="/" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <input id="droparea" type="file" name="file" multiple onchange="this.form.submit(); $('#share-message').css('display', 'none'); $('#uploading-message').css('display', 'block');">
            <main id="front-content">
                <p id="share-message">drop file(s) or click to share.</p>
                <p id="uploading-message">file(s) uploading...</p>
            </main>
        </form>
    </header>
@stop
