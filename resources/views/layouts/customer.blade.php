@extends('layouts.app')

@section('content')
<div class="row container">
    <div class="col-sm-8">
        <div class="search">
            <form action="{{ route('display') }}" class="form-group sch" method="get">
                <input type="search" name="q" class="form-control" id="search" placeholder="Search Here...">
            </form>
            <div class="action-tool-bar p-1">
                <button type="button" class="btn btn-secondary">Update</button>
                <button type="button" class="btn btn-secondary">Delete</button>
            </div>
            <div class="cust_disp">
                <table class="table table-striped">
                    <tr>
                        <td class="bg-dark text-light">Name</td>
                        <td class="bg-secondary text-light">Email</td>
                        <td class="bg-secondary text-light">Room Number</td>
                        <td class="bg-secondary text-light">Number</td>
                    </tr>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->room_number }}</td>
                        <td>{{ $customer->number }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-4 bg-white p-4 cust_form">
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