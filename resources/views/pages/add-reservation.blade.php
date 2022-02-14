@extends('main')
@section('content')
    <div class="container">
        <h2>Add new Apartment</h2>
        @include('_partials/errors')
        @include('_partials/success')
        <form action="/storeReservation" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="first_name" placeholder="Firstname" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="last_name" placeholder="Lastname">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="example@example.com">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Suggestion use + sign">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Your message"></textarea>
            </div>
            <div class="form-group">
                <input type="datetime-local" class="form-controt" name="reserved_at">
            </div>
            <div style="padding: 2em 0 0 0;">
                <button type="submit" class="btn btn-success" >Save</button>
            </div>
        </form>

    </div>
@endsection
