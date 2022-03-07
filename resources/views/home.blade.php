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
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header">
                                        Calender
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <p>Name : Clinton Kojo</p>
                                    <p>Department: Waiter</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 py-3">
                                <div class="card">
                                    <div class="card-header">
                                        {{ __('Active Orders')}}
                                    </div>
                                    <div class="card-body">
                                        <p>Ian <span class="muted"> 6000 Ugx</span>
                                        <p>Moses <span class="muted"> 7000 Ugx</span>
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