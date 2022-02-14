@extends('main')
@section('content')
    <h2>Update Status</h2>
    @include('_partials/errors')

    <form action="/update/{{$apartment->id}}" method="post">
        @csrf
        <div class="form-group">
            <select type="text" class="form-control" name="status" >
                <option value="available" selected>Available</option>
                <option value="reserved">Reserved</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" >Update</button>
    </form>
@endsection
