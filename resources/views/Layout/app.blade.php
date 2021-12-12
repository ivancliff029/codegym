<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <header>
        
        <nav>
            <ul class="navbar-ul">
                <h1>Franc's Kitchen</h1>
                <li class="navbar-li"><a class="navbar-a" href="#">Payment Status</a></li>
                <li class="navbar-li"><a class="navbar-a" href="{{ route('newcustomer') }}">Customer</a></li>
                <li class="navbar-li"><a class="navbar-a" href="{{ route('makeorder') }}">Make Order</a></li>
            </ul>
        </nav>
    </header>
    <div class="grid-container">
        <div class="grid-item aside">
            <div>
                <h1 class="stat-head">Statistics</h1>
                <div class="stat-container">
                    <div class="stat-item">
                        <h5>Plates Served</h5>
                        <h1 class="stat-fig">5</h1>
                    </div>
                    <div class="stat-item">
                        <h5>Amount Unpaid</h5>
                        <h1 class="stat-fig">24000</h1><span>Ugx</span>
                    </div>
                    <div class="stat-item">
                        <h5>Amount Paid</h5>
                        <h1 class="stat-fig">59000</h1><span>Ugx</span>
                    </div>
                </div>
            </div>
        </div>
        <div  class="grid-item">
            @yield('content')
        </div>
    </div>
</body>
</html>