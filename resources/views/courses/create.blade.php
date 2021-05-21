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
    <div class="wrapper">
        <h1>Create a Course</h1>
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <label for="name">Course name:</label>
            <input type="text" name="name" id="name" value="{{old('name')}}">

            <label for="description">Short description:</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>


            <input type="submit" value="Add course" class="btn bgRosa fontFam textWhite">
        </form>
        <a href="{{ route('home') }}" class="btn bgRosa fontFam textWhite">Back</a>
    </div>
@endsection

