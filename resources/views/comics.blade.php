@extends('layouts.layout')
@section('title')
    Comics
@endsection
@section('content')
<div class="container ms-comics position-relative">
    <h4 class="py-2 px-4 text-uppercase">Current Series</h4>
    <div class="row pt-5">
        @foreach ($comics as $comic)
            <div class="col-2 mb-5">
                <div class="ms-comic-card">
                    <a href="#">
                        <div class="ms-card-img">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </div>
                        <h5 class="text-uppercase text-white my-2">{{$comic['title']}}</h5>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="ms-load text-center">
        <button class="btn ms-btn text-white text-uppercase py-1 px-5 mb-4">load more</button>
    </div>
</div>
@endsection
