@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="menu px-5">
                <div class="form-group">
                    <input type="search" class="form-control" id="usr" placeholder="search item here">
                </div>
                <div class="drinks">
                    <h3>DRINKS</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-success text-white">
                                    Fruit Smoothie
                                </div>
                                <div class="card-body">
                                    <img src="/img/smoothie.jpeg" alt="fruit smoothie" class="img-thumbnail">
                                    <p>Quantity : 500ml</p>
                                    <p>Cost : 3000 Ugx</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-success text-white">
                                    Passion Juice
                                </div>
                                <div class="card-body">
                                    <img src="/img/passion.jpeg" alt="passion juice" style="height:200px" class="img-thumbnail">
                                    <p>Quantity : 500ml</p>
                                    <p>Cost : 3000 Ugx</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-success text-white">
                                    Milk
                                </div>
                                <div class="card-body">
                                    <img src="/img/milk.jpeg" style="height:200px; width:250px" alt="milk" class="img-thumbnail">
                                    <p>Quantity : 1 Ltr</p>
                                    <p>Cost : 2000 Ugx</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="drinks pt-3">
                    <h3>FOODS</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-danger text-white">
                                    Chicken
                                </div>
                                <div class="card-body">
                                    <img src="/img/chicken.jpeg" alt="fruit smoothie" class="img-thumbnail">
                                    <p>Cost : 7000 Ugx</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-danger text-white">
                                    Beef
                                </div>
                                <div class="card-body">
                                    <img src="/img/beef.jpeg" alt="passion juice" class="img-thumbnail">
                                    <p>Cost : 6000 Ugx</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-danger text-white">
                                    Fish
                                </div>
                                <div class="card-body">
                                    <img src="/img/fish.jpeg" alt="milk" class="img-thumbnail">
                                    <p>Cost : 6000 Ugx</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-8">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="{{ route('drinks') }}" target="iframe_a">DRINKS</a>
                        </li>
                        <li>
                            <a href="{{ route('foods') }}" target="iframe_a">FOODS</a>
                        </li>
                    </ul>
                    <div name="iframe_a"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection