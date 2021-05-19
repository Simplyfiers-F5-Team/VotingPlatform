@extends('layouts.app')

@section('content')
<div class="wrapper card bgMorado m-3 borderColorRosa">
    <h1 class="card-header borderColorRosa">Voting Results</h1>
    @foreach($votes as $vote)
    <div class="card-body">
        <h4>{{ $vote->election }}</h4>
        <p>-</p>
    </div>
    @endforeach

</div>

<a href="/" class="btn bgRosa fontFam textWhite">Finalizar</a>
@endsection