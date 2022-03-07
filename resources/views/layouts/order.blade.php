@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-8">
                    <div class="wrapper order">
                        <h3 class="p-2">Menu</h3>
                        <form action=" {{ route('display') }} " method="get">
                            @csrf
                            <div class="card m-2">
                                <div class="card-header">
                                    Chicken
                                </div>
                                <div class="card-body">
                                    7000 Ugx
                                    <input type="hidden" value="chicken" name="meal">
                                    <input type="submit" value="Order" class="btn bg-success text-white">
                                </div>
                            </div>
                        </form>
                        <form action=" {{ route('display') }} " method="get">
                            @csrf
                            <div class="card m-2">
                                <div class="card-header">
                                    Beef
                                </div>
                                <div class="card-body">
                                    6000 Ugx
                                    <input type="hidden" value="beef" name="meal">
                                    <input type="submit" value="Order" class="btn bg-success text-white">
                                </div>
                            </div>
                        </form>
                        <form action=" {{ route('display') }} " method="get">
                            @csrf
                            <div class="card m-2">
                                <div class="card-header">
                                    Beans
                                </div>
                                <div class="card-body">
                                    5000 Ugx
                                    <input type="hidden" value="beans" name="meal">
                                    <input type="submit" value="Order" class="btn bg-success text-white">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">

                </div>
            </div>
        </div>
    </div>
</div>

@endsection