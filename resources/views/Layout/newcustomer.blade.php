@extends('layout.app')

@section('content')
<div>
        <h1>Enter Customer Details</h1>
        <div>
            <form>
                <label for="customerName">Customer Name</label>
                <input type="text" id="customerName" class="@error('customerName') is invalid @enderror">

                @error('customerName')
                    <div class="alert-danger"> {{ $message }} </div>
                @enderror
                <br>
                <label for="customerNumber">Telephone</label>
                <input type="tel" id="customerNumber" class="@error('customerNumber') is invalid @enderror">

                @error('customerNumber')
                    <div class="alert-danger"> {{ $message }} </div>
                @enderror
                <br>
                <label for="roomNumber">Room Number</label>
                <input type="text" id="roomNumber" class="@error('roomNumber') is invalid @enderror">

                @error('roomNumber')
                    <div class="alert-danger"> {{ $message }} </div>
                @enderror
                <br>
                <input type="submit" value=" Create Customer">
            </form>
        </div>
    </div>
@endsection