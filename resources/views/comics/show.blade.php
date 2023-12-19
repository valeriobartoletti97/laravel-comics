@extends('layouts.app')

@section('title', 'Db Comics')

@section('content')

<div class="card">
    <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
</div>

@endsection