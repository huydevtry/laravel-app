@extends('layouts.master')

@section('title', 'Chat nek')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar override.</p>
@stop

@section('content')
    <p>This is my body content chees.</p>
@stop
