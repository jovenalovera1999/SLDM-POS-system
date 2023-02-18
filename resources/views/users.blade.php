@include('include/header')
    <title>St. Louise de Marillac POS System | Users</title>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="bi bi-list" style="font-size: 20px;"></i>
                </button>
            </div>
            <div class="p-4">
                <img src="{{asset('img/sldm-logo.png')}}" class="custom-logo-size mx-auto d-block">
                <h1>St. Louise de Marillac POS System</h1>
                <span class="text-white mt-4" style="font-size: 17px;">User Logged In:<br>Dev Jov</span>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="#"><i class="bi bi-house-fill custom-icon-size"></i> Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-cash-coin custom-icon-size"></i> Payment Transaction</a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-clock-history custom-icon-size"></i> Transaction History</a>
                    </li>
                    <li>
                        <a href="/register"><i class="bi bi-person-fill-add custom-icon-size"></i> Register</a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="bi bi-people-fill custom-icon-size"></i> Users</a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-person-fill custom-icon-size"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-box-arrow-left"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <table class="table" id="custom-table">
                <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->FirstName}}</td>
                            <td>{{$user->MiddleName}}</td>
                            <td>{{$user->LastName}}</td>
                            <td>{{$user->ContactNumber}}</td>
                            <td>{{$user->Email}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@include('include/footer')