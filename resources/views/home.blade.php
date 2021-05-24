@extends('layouts.app')

@section('content')
    @if (session('mssg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('mssg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bgMorado borderColorRosa">
                    <div class="card-header borderColorRosa">{{ __('Admin Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="my-3">
                             <a href="{{ route('courses.create') }}" class="btn bgRosa fontFam textWhite">Create course</a>
                        </div>
                        <div class="my-3">
                            <a href="{{ route('courses.index') }}" class="btn bgRosa fontFam textWhite">Courses batch</a>
                        </div>
                        <div class="my-3">
                            <a href="{{ route('votes.index') }}" class="btn bgRosa fontFam textWhite">Live voting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
