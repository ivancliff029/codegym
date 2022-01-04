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
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="contents bg-primary rounded">
                                        <div class="card-header">
                                            {{ __('Plates Served')}}
                                        </div>
                                        <div class="card-body">
                                            {{ __('10')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="contents bg-danger rounded">
                                        <div class="card-header">
                                            {{ __('Earnings')}}
                                        </div>
                                        <div class="card-body">
                                            {{ __('52000')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection