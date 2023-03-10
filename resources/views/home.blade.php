@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome'. ' ' .$user->name) }}

                    <div class="flex justify-content-around mt-5">
                        <a href="{{'post/create'}}" class="btn btn-secondary">Create Posts</a>
                        <a href="{{'/post'}}" class="btn btn-secondary">View Posts</a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
