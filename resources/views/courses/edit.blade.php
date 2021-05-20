@extends('layouts.app')

@section('content')
    <div class="wrapper ">
        <h1>Edit a Course</h1>
        <form action="{{ route('courses.update', $course) }}" method="post">
            @csrf
            @method('put')
            <label for="name">Course name:</label>
            <input type="text" name="name" id="name" value="{{$course->name}} " required>
            <label for="description">Short description:</label>
            <textarea name="description" id="description" cols="15" rows="10">{{$course->description}}</textarea>
            <input type="submit" value="Update course" class="btn bgRosa fontFam textWhite">
        </form>
        <a href="{{ route('home') }}" class="btn bgRosa fontFam textWhite">Back</a>
    </div>
@endsection