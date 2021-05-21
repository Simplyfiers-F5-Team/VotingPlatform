@extends('layouts.app')

@section('content')
    @error("name")
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        *{{$message}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
    @error("description")
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        *{{$message}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
    <div class="wrapper ">
        <h1>Edit a Course</h1>
        <form action="{{ route('courses.update', $course) }}" method="post">
            @csrf
            @method('put')
            <label for="name">Course name:</label>
            <input type="text" name="name" id="name" value="{{old('name', $course->name)}} ">
            <label for="description">Short description:</label>
            <textarea name="description" id="description" cols="15" rows="10">{{old('description', $course->description)}}</textarea>
            <input type="submit" value="Update course" class="btn bgRosa fontFam textWhite">
        </form>
        <a href="{{ route('home') }}" class="btn bgRosa fontFam textWhite">Back</a>
    </div>
@endsection
