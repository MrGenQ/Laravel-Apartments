@extends('main')
@section('content')
    <div class="container">
        <h2>Add new Apartment</h2>
        @include('_partials/errors')

        <form action="/store" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="location" placeholder="Location">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="floor" placeholder="Floor">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="bedrooms" placeholder="Bedrooms">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="car_spaces" placeholder="Car Spaces">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="living_spaces" placeholder="Living Spaces">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="bathrooms" placeholder="Bathrooms">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="area" placeholder="Area in Square Meters">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="price" placeholder="Price in Euro">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status"  class="form-select" >
                <option value="available" selected>Available</option>
                <option value="reserved">Reserved</option>
                <option value="sold">Sold</option>
                </select>
            </div>
            <div class="form-group">
                <label>Date Sell From</label>
                <input type="datetime-local" class="form-control" name="date_sell_from">
            </div>
            <div class="form-group">
                <label>Date Sell To</label>
                <input type="datetime-local" class="form-control" name="date_sell_to">
            </div>
            <div style="padding: 2em 0 0 0;">
            <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection
