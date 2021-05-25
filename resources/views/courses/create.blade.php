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
    <div class="card bgMorado borderColorRosa">
        <div class="pt-3 card-header borderColorRosa">
            <h2 class="h1 m-0">Create a Course</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('courses.store') }}" method="POST">
                @csrf
                <div>
                    <label for="name" class="h4">Course name:</label>
                    <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
                </div>

                <div class="my-4">
                    <label for="description" class="h4">Short description:</label>
                    <textarea name="description" id="description" cols="20" rows="5" class="form-control">{{old('description')}}</textarea>
                </div>
                <input type="submit" value="Add course" class=" mb-4 btn bgRosa fontFam textWhite">
            </form>
        <a href="{{ route('home') }}" class=" btn bgRosa fontFam textWhite">Back</a>
    </div>
@endsection

