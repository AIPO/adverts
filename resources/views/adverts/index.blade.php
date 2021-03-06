@extends('layouts.app')
@section('content')
    @foreach($adverts as $advert)
        @if ($advert->type =='sell')
            <div class="card sell">
                @else
                    <div class="card buy">
                        @endif
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
                        <a class="btn btn-info" href="{{ route('advert/',$advert->id) }}">Show</a>
                        @if (Auth::id() === $advert->user_id)
                            <a class="btn btn-primary" href="{{ route('adverts.edit',$advert->id) }}">Edit</a>
                        @endif
                    </div>
                    <br/>
            @endforeach

            {{$adverts->links()}}
@endsection