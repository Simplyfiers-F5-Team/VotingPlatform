@extends('layouts.app')

@section('content')
    <div class="wrapper ">
        <h1>Create a Course</h1>
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <label for="name">Course name:</label>
            <input type="text" name="name" id="name" value="{{old('name')}}">
            @error("name")
            <small>*{{$message}}</small>
            @enderror
            <label for="description">Short description:</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
            @error("description")
            <small>*{{$message}}</small>
        @enderror

            <input type="submit" value="Add course" class="btn bgRosa fontFam textWhite">
        </form>
        <a href="{{ route('home') }}" class="btn bgRosa fontFam textWhite">Back</a>
    </div>
@endsection

