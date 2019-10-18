@if(auth()->user()->role=='admin')

    <ul class="navbar-nav">
        {{--<li class="nav-item  class=" active" ">--}}
        {{--<a class=" nav-link active " href="{{ route('home') }}"> <i class="ni ni-tv-2 text-primary"></i> Dashboard--}}
        {{--</a>--}}
        {{--</li>--}}

        <li class="nav-item">
            <a class="nav-link " href="{{route('view_admins')}}">
                <i class="ni ni-planet text-blue"></i> Admin
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('view_employees') }}">
                <i class="ni ni-pin-3 text-orange"></i>Employees
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('view_managers') }}">
                <i class="ni ni-user-run text-yellow"></i>Manager
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('view_distance') }}">
                <i class="ni ni-diamond text-black-50"></i>Distance
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('view_branches') }}">
                <i class="ni ni-bullet-list-67 text-red"></i>Branches
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('view_fuel_prices') }}">
                <i class="ni ni-money-coins text-green"></i>Fuel Prices
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('view_average_lunch') }}">
                <i class="ni ni-notification-70 text-cyan"></i>Meals Per Day
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{ route('view_agencies') }}">
                <i class="ni ni-key-25 text-info"></i>Travel Agency
            </a>
        </li>

    </ul>

@elseif(auth()->user()->role=='manager')

    <ul class="navbar-nav">
        <li class="nav-item  class=" active>
        <a class=" nav-link active " href="{{ route('manager_dashboard') }}"> <i class="ni ni-tv-2 text-primary"></i>
            Dashboard
        </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{route('branch_employees')}}">
                <i class="ni ni-pin-3 text-orange"></i> Employees
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{ route('view_bracnch_applications') }}">
                <i class="ni ni-key-25 text-info"></i> Travel Applications
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('view_rejected_applications') }}">
                <i class="ni ni-notification-70 text-black-50"></i> Rejected Applications
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('view_approved_applications') }}">
                <i class="ni ni-app text-pink"></i> Approved Applications
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link " href="{{ route('view_emps_to_hotel') }}">
                <i class="ni ni-bullet-list-67 text-red"></i> Travellers to Branch
            </a>
        </li>

    </ul>

@else
    <ul class="navbar-nav">


         <li class="nav-item  class=" active>
            <a class="nav-link " href="{{route('my_manager')}}">
                <i class="ni ni-pin-3 text-orange"></i> My Manager
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{ route('travel_application') }}">
                <i class="ni ni-key-25 text-info"></i> Travel Application
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('view_applications') }}">
                <i class="ni ni-bullet-list-67 text-red"></i> My Applications
            </a>
        </li>

    </ul>

@endif
