@extends('layouts/app')

@section('title','homepage')

@section('content')

    <div class="container my-2">

        <div class="row">

            @foreach ($trips as $trip)

                <div class="col-4">
                    <div class="card my-2" style="width: 18rem;">
                        <div class="card-body" style="height: 375px">

                            <h3 class="card-title">Trip {{$trip->id}}</h3>
                            <ul>
                                <li class="pt-1">Destination: {{$trip->destination}}</li>
                                <li class="pt-1">Transport: {{$trip->transport}}</li> <li class="pt-1">Description: {{$trip->description}}</li>
                                <li class="pt-1">Price: {{$trip->price}}</li>
                            </ul>

                        </div>
                    </div>
                </div>

            @endforeach

        </div>

    </div>

@endsection