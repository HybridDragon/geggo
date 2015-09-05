@extends('layouts.main')

@section('stylesheets')
    @parent
    <link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/paste.css">
@stop

@section('sidebar')
    <form id="paste-form" name="paste_form" method="post" enctype="text/plain" accept-charset="UTF-8">
        <ul>
            <li>
                <input type="text" name="paste_name" placeholder="paste name" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </li>
            <li>
                <input type="number" name="paste_expiry_value" placeholder="0 (no expiry)" style="display: inline-block;">
                <select name="paste_expiry_type" style="display: inline-block;">
                    <option value="minutes">minute(s)</option>
                    <option value="hours">hour(s)</option>
                    <option value="days">day(s)</option>
                    <option value="weeks">week(s)</option>
                </select>
            </li>
            <li>
                <input type="submit" value="paste!">
            </li>
        </ul>
    </form>
    <br>
    <hr>
    <br>
    @parent
@stop

@section('content')
    <textarea name="paste_data" id="paste-area" form="paste_form" placeholder="paste your code." wrap="off" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required autofocus></textarea>
@stop
