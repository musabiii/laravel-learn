@extends('layout')
@section('title') review @endsection

@section('main_content')

<form method="post" action="/review/check">
<h1>submit review</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@csrf

    <input type="email" name="email" id="email" placeholder="email" class="form-control">
    <input type="text" name="text" id="text" placeholder="введите отзыв" class="form-control">
    <textarea name="message" id="message" placeholder="type message" class="form-control"></textarea>
    <button type="submit" class="btn btn-success">Send</button>
</form>

@endsection
