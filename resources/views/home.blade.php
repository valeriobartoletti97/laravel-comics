@extends('layouts.app')

@section('title', 'Db Comics')

@section('jumbo')

<div class="jumbo-main">
    
</div>

@endsection

@section('content')

<div class="bg-black">
    <div class="container">
      <div class="row flex-wrap justify-content-between py-5">
        @foreach ($comics as $comic)
            <div class="col-2 d-flex flex-wrap px-2 mt-4">
                <div class="my-card">
                    <div class="img-box">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </div>
                    <h5 class="text-uppercase pt-3">
                        {{$comic['title']}}
                    </h5>
                </div>
            </div>
        @endforeach
      </div>
    </div>
</div>

@endsection