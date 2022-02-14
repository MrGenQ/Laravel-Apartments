<?php
use App\Models\Apartment;
?>
@extends('main')
@section('content')
    <div class="container-fluid">

        <form style="display: flex; flex-direction: row; gap: 15px;">
            <div>
                <div style="display: flex; flex-direction: column;" class="form-select-lg"><label>Status</label>
                    <select class="form-select" name="status" style="width: 20em; height: 3em;">

                        <option value="" selected>--None--</option>
                        <option value="available">Available</option>
                        <option value="reserved">Reserved</option>
                        <option value="sold">Sold</option>

                    </select>
                </div>
                <div style="display: flex; flex-direction: column;" class="form-select-lg"><label>Price</label>
                    <select class="form-select" name="price" style="width: 15em; height: 3em;">
                        <option value="" selected>--None--</option>
                        <option value="asc">Ascending</option>
                        <option value="desc">Descending</option>
                    </select>
                </div>
            </div>
            <div>
                <div style="display: flex; flex-direction: column;" class="form-select-lg"><label>Location</label>
                    <select class="form-select" name="Location" style="width: 15em; height: 3em;">
                        <option value="" selected>--None--</option>
                        <option value="asc">Ascending</option>
                        <option value="desc">Descending</option>
                    </select>
                </div>
                <div style="display: flex; flex-direction: column;" class="form-select-lg"><label>Registered Date</label>
                    <select class="form-select" name="registerDate" style="width: 15em; height: 3em;">
                        <option value="" selected>--None--</option>
                        <option value="asc">Ascending</option>
                        <option value="desc">Descending</option>
                    </select>
                </div>
                <div style="padding-top: 1.5%;">
                    <button class="btn btn-success" type="submit" style="width: 10em;">Filter</button>
                </div>
            </div>
        </form>
        <h1 class="mt-4">Apartments</h1>

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
                <th>Remove</th>
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
                        <div>
                            @if($apartment->status === 'reserved')
                                <div class="btn btn-danger">Reserved</div>
                                <div><a href="/update/apartment/{{$apartment->id}}" class="btn btn-primary">Change Reservation</a></div>
                            @endif
                                @if($apartment->status === 'available')
                                <div class="btn btn-success">Available</div>
                                    <div><a href="/update/apartment/{{$apartment->id}}" class="btn btn-primary">Change Reservation</a></div>
                                @endif
                            @if($apartment->status === "sold")
                                    <div class="btn btn-warning">Sold</div>
                                @endif
                        </div>
                    </th>
                    <th>
                            <div><a href="/delete/apartment/{{$apartment->id}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                    </svg>
                                    </a></div>
                    </th>
                </tr>
            @endforeach
        </table>
    {{ $apartments->links() }}
    </div>


@endsection
