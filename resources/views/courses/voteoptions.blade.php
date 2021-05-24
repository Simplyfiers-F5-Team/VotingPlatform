@extends('layouts.app')

@section('content')
@error("election")
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    *{{$message}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@enderror

<h1 class="card-header">Options</h1>
<form action="{{ route('votes.store') }}" class="wrapper card borderColorRosa" method="POST">
    @csrf
    @foreach($courses as $course)
    <div class="card-body bgMorado">
        <label for="course">{{ $course->name }}</label>
        <p>{{ $course->description }}</p>
        <input type="radio" id="election" name="election" value="{{ $course->name }}">
        <label for="election">Vote</label>
    </div>
    @endforeach
    <input type="submit" value="Send" class="btn bgRosa fontFam textWhite">
</form>

@endsection