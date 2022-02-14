<?php
use App\Models\Apartment;
?>
@extends('main')
@section('content')
    <div class="container-fluid">


        <h1 class="mt-4">Available Apartments</h1>

        <table class="table table-bordered table-responsive">
            <tr>
                <th>Location</th>
                <th>Floors</th>
                <th>Bedrooms</th>
                <th>Bathrooms</th>
                <th>Living Spaces</th>
                <th>Car Spaces</th>
                <th>Area</th>
                <th>Price</th>
                <th>Status</th>
                <th>Reservation</th>
            </tr>
            @foreach($apartments as $apartment)
                <tr>
                    <th><div style="text-transform: capitalize">{{$apartment->location}}</div></th>
                    <th>{{$apartment->floor}}</div></th>
                    <th>{{$apartment->bedrooms}}</th>
                    <th>{{$apartment->bathrooms}}</th>
                    <th>{{$apartment->living_spaces}}</th>
                    <th>{{$apartment->car_spaces}}</th>
                    <th>{{$apartment->area}}</th>
                    <th>{{$apartment->price}}</th>
                    <th>
                        <div class="btn btn-success">Available</div>
                    </th>
                    <th>
                        <div><a href="/add-reservation" class="btn btn-success">Reserve</a></div>
                    </th>
    </tr>
    @endforeach
    </table>
    </div>
    {{$apartments->links()}}

@endsection
