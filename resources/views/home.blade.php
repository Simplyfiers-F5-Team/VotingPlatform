@extends('layouts.app')

@section('content')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('mssg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
