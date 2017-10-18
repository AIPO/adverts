@extends('layouts.app')
@section('content')
    <div class="card">
    <h2 class="card-header ">
        <p class="left">{{$advert->id}}. {{$advert->name}}</p>
        <p class="right">{{$advert->price}} <i class="fa fa-eur"></i></p>
    </h2>
    <div class="card-body">
        <strong>Category:</strong> {{$advert->category}}
        <p class="card-text">{{$advert->description}}</p>
    </div>
    <hr>
    <div class="card-footer text-muted">
        Created: <strong>{{$advert->created_at->diffForHumans()}}</strong>
        by {{$advert->user->name}}
    </div>
        <a class="btn btn-info" href="{{ route('advert.show',$advert->id) }}">Show Advert</a>
    </div>
    <br/>
@endsection