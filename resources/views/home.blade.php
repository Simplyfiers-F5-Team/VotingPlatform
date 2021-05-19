@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bgMorado borderColorRosa">
                <div class="card-header borderColorRosa">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome admin') }}

                    <a href="{{ route('courses.create') }}" class="btn bgRosa fontFam textWhite">Create course</a>
                    <a href="{{ route('courses.index') }}" class="btn bgRosa fontFam textWhite">Courses batch</a>
                    <p>{{ session('mssg') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
