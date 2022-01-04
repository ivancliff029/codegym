@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-8">
                    <form action="{{ route('order') }}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="text" class="form-control rounded-0" name="q" placeholder="Search customers" required>
                        </div>
                    </form>
                    <div class="wrapper order">
                        <h3 class="p-2">Menu</h3>
                        <div class="card m-2">
                            <div class="card-header">
                                Chicken
                            </div>
                            <div class="card-body">
                                7000 Ugx <span class="text-success"> <a href="
                                #">Order</a> </span>
                            </div>
                        </div>
                        <div class="card m-2">
                            <div class="card-header">
                                Beef
                            </div>
                            <div class="card-body">
                                6000 Ugx <span class="text-success"> <a href="
                                #">Order</a> </span>
                            </div>
                        </div>
                        <div class="card m-2">
                            <div class="card-header">
                                Beans
                            </div>
                            <div class="card-body">
                                5000 Ugx <span class="text-success"> <a href="
                                #">Order</a> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="card">
                        <div class="card-header">
                            {{ __('Active Orders')}}
                        </div>
                        <div class="card-body">
                            <p>Ian <span class="text-muted"> Meat </span><span class="font-weight-bold"> Not Paid </span></p>
                            <p>Ivan <span class="text-muted"> Chicken</span><span class="font-weight-bold"> Paid </span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection