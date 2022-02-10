@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <h4 class="px-4">Confirm Customer</h4>
    </div>
    @foreach($customers as $customer)
    <div class="container">
        <div class="col-sm-8 disp-customer">

            <form action="confirm-order" method="get">
                @csrf
                <div class="card m-2">
                    <div class="card-header">
                        {{ $customer->name }}
                        <input type="hidden" name="meal" value="{{ $food }}">
                        <input type="hidden" name="customer" value="{{ $customer->name }}">
                        <input type="hidden" name="status" value="pending">
                        <div class="cust-confirm-btn">
                            <input type="submit" value="Confirm Order" class="btn bg-success text-white">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection