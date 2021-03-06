@extends('layouts.master')


@section('title')
    Your Results
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/style.css" type='text/css' rel='stylesheet'>
@stop


@section('content')

      <h1>Show Results</h1>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/lorem/show.js"></script>
@stop
