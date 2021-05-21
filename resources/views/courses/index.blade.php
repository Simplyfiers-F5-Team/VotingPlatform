@extends('layouts.app')

@section('content')
<div class="wrapper card bgMorado m-3 borderColorRosa">
  <h1 class="card-header borderColorRosa">Courses batch</h1>
  <div class="d-flex flex-row flex-wrap">

    @foreach($courses as $course)
      <div class="card-body borderColorRosa m-3">
        <h4>{{ $course->name }}</h4>
        <p>{{ $course->description }}</p>
        <form action="{{ route('courses.edit', $course) }}">
          @csrf 
          <input class="btn bgRosa text-white" type="submit" value="Edit">
      </form>
  
        <form action="{{ route('courses.destroy', $course) }}" method="POST">
          @csrf 
          @method('DELETE')
          <input class="btn bgRosa text-white" type="submit" value="Delete">
      </form>
      </div>
    @endforeach
  </div>

</div>

<a href="{{ route('home') }}" class="btn bgRosa fontFam textWhite">Admin dashboard</a>
@endsection
