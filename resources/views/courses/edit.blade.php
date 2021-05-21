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
    <div class="container card bgMorado borderColorRosa">
        <div class="mt-3">
            <h2 class="h1 m-0">Edit a Course</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('courses.update', $course) }}" method="post">
                @csrf
                @method('put')
                <div>
                    <label for="name">Course name:</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name', $course->name)}} ">
                </div>
                <div class="my-4">
                    <label for="description">Short description:</label>
                    <textarea name="description" class="form-control" id="description" cols="15" rows="10">{{old('description', $course->description)}}</textarea>
                </div>
                    <input type="submit" value="Update course" class="btn bgRosa fontFam textWhite mb-4">
            </form>
            <a href="{{ route('home') }}" class="btn bgRosa fontFam textWhite">Back</a>
    </div>
@endsection
