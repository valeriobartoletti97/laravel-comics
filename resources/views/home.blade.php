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

@section('merch')

<div class="bg-primary merch">
    <div class="container">
        <ul class="nav d-flex justify-content-between align-items-center flex-nowrap py-5 ">
            <li class="nav-item px-3 text-uppercase">
                <div>
                    <img src="/images/buy-comics-digital-comics.png" alt="merch-logo">
                    <a class="px-2" href="#">
                        Digital Comics
                    </a>
                </div>
            </li>
            <li class="nav-item px-3 text-uppercase">
                <div>
                    <img src="/images/buy-comics-merchandise.png" alt="merch-logo">
                    <a class="px-2" href="#">
                        Dc Merchandise
                    </a>
                </div>
            </li>
            <li class="nav-item px-3 text-uppercase">
                <div>
                    <img src="/images/buy-comics-subscriptions.png" alt="merch-logo">
                    <a class="px-2" href="#">
                        Subscription
                    </a>
                </div>
            </li>
            <li class="nav-item px-3 text-uppercase">
                <div>
                    <img src="/images/buy-comics-shop-locator.png" alt="merch-logo">
                    <a class="px-2" href="#">
                        Comic Shop Locator
                    </a>
                </div>
            </li>
            <li class="nav-item px-3 text-uppercase">
                <div>
                    <img src="/images/buy-dc-power-visa.svg" alt="merch-logo">
                    <a class="px-2" href="#">
                        Dc Power Visa
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>

@endsection

@section('more')

<div class="more-main">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-6 d-flex">
                <div class="pe-4 d-flex flex-column">
                    <h3 class="text-uppercase pt-5 pb-3">Dc comics</h3>
                    <h3 class="text-uppercase pt-2 pb-3">Shop</h3>                   
                </div>
                <div class="pe-4 d-flex flex-column">
                    <h3 class="text-uppercase pt-5 pb-3">Dc</h3>                    
                </div>
                <div class="d-flex flex-column">
                    <h3 class="text-uppercase pt-5 pb-3">Sites</h3>
                </div>
            </div>
            <div class="col-6">
                <img class="bg-logo" src="/images/dc-logo-bg.png" alt="dc logo">
            </div>
        </div>
    </div>
</div>

@endsection