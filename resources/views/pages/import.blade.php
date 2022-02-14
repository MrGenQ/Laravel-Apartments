@extends('main')
@section('content')

    <form enctype='multipart/form-data' action='/' method='post'>
        @csrf
        <label><h4>Upload Product CSV file Here</h4></label>
        <div>
            <input type='file' name='file'>
            <button type="submit" class="btn btn-primary" >Import</button>
            <a href="/" class="btn alert-danger">Cancel</a>
        </div>
    </form>

@endsection
