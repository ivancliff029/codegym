@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-8">
        <form action=" {{ route('drinks') }} " method="post">
            @csrf
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter the product name" name="product">
            </div>
            <div class="form-group">
                <label for="Quantity">Quantity:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Quantity" name="quantity">
            </div>
            <div class="form-group">
                <label for="cost">Cost( Ugx ):</label>
                <input type="text" class="form-control" id="room_number" placeholder="Enter Cost" name="cost">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection