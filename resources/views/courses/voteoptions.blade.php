@extends('layouts.app')

@section('content')
<h1 class="card-header">Courses batch</h1>
<form class="wrapper card">
    @foreach($courses as $course)
    <div class="card-body">
        <label for="">{{ $course->name }}</label>
        <p>{{ $course->description }}</p>
        <input type="radio" id="election" name="election" value="{{ $course->name }}">
        <label for="election">Vote</label>
    </div>
    @endforeach
    <input type="submit" value="Votar">
</form>

@endsection