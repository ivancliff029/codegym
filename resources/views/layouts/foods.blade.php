@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-8">
        <form action=" {{ route('foods') }} " method="post">
            @csrf
            <div class="form-group">
                <label for="product_name">Food Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter the product name" name="name">
            </div>
            <div class="form-group">
                <label for="cost">Cost( Ugx ):</label>
                <input type="text" class="form-control" id="room_number" placeholder="Enter Cost" name="r_num">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection