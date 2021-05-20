@extends('layouts.app')

@section('content')
<h1 class="card-header">Courses batch</h1>
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
    <input type="submit" value="Votar" class="btn bgRosa fontFam textWhite">
</form>

@endsection
