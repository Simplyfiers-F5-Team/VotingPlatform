@extends('layouts.app')

@section('content')
<div class="wrapper card bgMorado m-3 borderColorRosa">
  <h1 class="card-header borderColorRosa">Courses batch</h1>
  @foreach($courses as $course)
    <div class="card-body">
      <h4>{{ $course->name }}</h4>
      <p>{{ $course->description }}</p>
      <form action="{{ route('courses.edit', $course) }}">
        @csrf {{--Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user. --}}
        <input type="submit" value="Edit">
    </form>
      <form action="{{ route('courses.destroy', $course) }}" method="POST">
        @csrf {{--Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user. --}}
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
    </div>
  @endforeach

</div>

<a href="{{ route('home') }}" class="btn bgRosa fontFam textWhite">Admin dashboard</a>
@endsection
