@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <h4 class="px-4">Confirm Customer</h4>
    </div>
    <div class="container">
        <div class="col-sm-8 disp-customer">
            <form action="{{ route('display') }}" class="form-group" method="get">
                <input type="search" name="q" class="form-control" id="search" placeholder="Search Here..."><span><input type="submit" value="Search"></span>
            </form>
            <div class="results">
                <table class="table table-striped">
                    <tr>
                        <td class="bg-dark text-light">Name</td>
                        <td class="bg-secondary text-light">Room Number</td>
                    </tr>
                    @if($data[0]!="")
                    @foreach($customers as $customer)
                    <tr>
                        <form action="confirm-order" method="get">
                            @csrf
                            <input type="hidden" name="meal" value="{{ $data[1] }}">
                            <input type="hidden" name="customer" value="{{ $customer->name }}">
                            {{ $data[1] }}
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->room_number }}<span> <input class="px-5 order-btn" type="submit" value="ORDER"></span></td>
                        </form>
                    </tr>
                    @endforeach
                    @endif
                </table>
            </div>
            <!-- {{ $customers->links() }} -->
        </div>
    </div>
</div>
@endsection