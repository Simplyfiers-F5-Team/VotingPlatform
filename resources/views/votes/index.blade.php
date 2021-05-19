@extends('layouts.app')

@section('content')
<div class="wrapper card">
    <h1 class="card-header">Voting Results</h1>
    @foreach($votes as $vote)
    <div class="card-body">
        <h4>{{ $vote->election }}</h4>
        <p>-</p>
    </div>
    @endforeach

</div>

<a href="/" class="btn bgRosa fontFam textWhite">Finalizar</a>
@endsection