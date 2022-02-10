@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-8">
        <h3 class="bg-dark text-light">Order Details</h3>
        <h5 class="cust-details">Customer Name: {{ $customer }} </h5>
        <h5 class="cust-details">Status: {{ $status }} </h5>
        <h5 class="cust-details">Food: {{ $meal }}</h5>
        <h3 class="bg-dark text-light"> Total <span style="float: right;" class="bg-dark text-light">{{ $amount }}</span></h3>
    </div>
</div>
@endsection