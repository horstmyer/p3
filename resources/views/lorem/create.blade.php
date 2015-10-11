@extends('layouts.master')


@section('title')
    Lorem Form
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/p3/create.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
    <form method="POST" action="/lorem/create">
        <input type="number" name="number">
        <input type="submit">
    </form>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/lorem/create.js"></script>
@stop
