@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <h1>Create a Course</h1>
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <label for="name">Course name:</label>
            <input type="text" name="name" id="name" required>
            <label for="description">Short description:</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <input type="submit" value="Add course">
        </form>
        <a href="{{ route('home') }}">Back</a>
    </div>
@endsection

