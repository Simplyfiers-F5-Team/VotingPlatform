@extends('layouts.app')

@section('content')
<div class="wrapper card bgMorado m-3 borderColorRosa">
    <h1 class="card-header borderColorRosa">Voting Results</h1>
    @foreach($votes as $vote)
    <div class="card-body">
        <h4>{{ $vote->election }}</h4>
        <h5>{{ $vote->total }}</h5>
        <p>-</p>
    </div>
    @endforeach

</div>

<a href="/" class="btn bgRosa fontFam textWhite">Finalizar</a>
    @auth
    <form action="{{ route('votes.destroy') }}" method="POST">
        @csrf {{--Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user. --}}
        @method('DELETE')
        <input type="submit" value="Reset Voting">
    </form>
    @endauth
@endsection