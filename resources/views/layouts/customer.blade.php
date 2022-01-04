@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container col-sm-6 bg-white p-3 rounded">
        <h2>New Customer</h2>
        <form action=" {{ route('customer') }} " method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter customer name" name="name">
            </div>
            <div class="form-group">
                <label for="name">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter customer email" name="email">
            </div>
            <div class="form-group">
                <label for="room_number">Room Number:</label>
                <input type="text" class="form-control" id="room_number" placeholder="Enter room number" name="r_num">
            </div>
            <div class="form-group">
                <label for="number">Telephone:</label>
                <input type="tel" class="form-control" id="telephone" placeholder="Enter your telephone number" name="number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection