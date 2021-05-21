@extends('layouts.app')

@section('content')
<div class="card bgMorado m-3 borderColorRosa">
    <h1 class="card-header borderColorRosa">Voting Results</h1>
    <div class="d-flex flex-row flex-wrap">
        @foreach($votes as $vote)
        <div class="card-body borderColorRosa m-3">
            <h4>{{ $vote->election }}</h4>
            <h5>{{ $vote->total }}</h5>
        </div>
        @endforeach
    </div>

</div>
<div class="d-flex justify-content-center">
    
    <a href="/" class="btn bgRosa fontFam textWhite mx-3">Finalizar</a>
        @auth
        <form action="{{ route('votes.destroy') }}" method="POST">
            @csrf {{--Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user. --}}
            @method('DELETE')
            <input type="submit" value="Reset Voting" class="btn bgRosa fontFam textWhite mx-3">
        </form>
        <a href="{{ route('home')}}" class="btn bgRosa fontFam textWhite mx-3">Home</a>
        @endauth
</div>
@endsection