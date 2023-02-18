@include('include/header')
    <title>St. Louise de Marillac POS System | Register</title>

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
                    <li class="active">
                        <a href="/register"><i class="bi bi-person-fill-add custom-icon-size"></i> Register</a>
                    </li>
                    <li>
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
            <div aria-live="polite" aria-atomic="true" class="position-relative">
                <!-- Position it: -->
                <!-- - `.toast-container` for spacing between toasts -->
                <!-- - `.position-fixed`, `top-0` & `end-0` to position the toasts in the upper right corner -->
                <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
                <div class="toast-container position-fixed top-0 end-0 p-3">
                    <!-- Then put toasts within -->
                    @if(Session::has('message-success'))
                        <div class="toast text-white bg-success" role="alert" aria-live="assertive" aria-atomic="true" data-bs-animation="true" data-bs-delay="3000" data-bs-autohide="true">
                            <div class="toast-body">
                                <svg width="1.25em" height="1.25em" class="bi bi-shield-fill-check" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm2.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.793 6.354 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                </svg>
                                <strong class="me-auto">Success!</strong><br>
                                {{Session::get('message-success')}}
                            </div>
                        </div>
                    @endif
                    @if(Session::has('message-fail'))
                        <div class="toast text-white bg-danger" role="alert" aria-live="assertive" aria-atomic="true" data-bs-animation="true" data-bs-delay="3000" data-bs-autohide="true">
                            <div class="toast-body">
                                <svg width="1.25em" height="1.25em" class="bi bi-exclamation-circle-fill" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                                <strong class="me-auto">Fail!</strong><br>
                                {{Session::get('message-fail')}}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6 offset-md-3 mt-5">
                <h1>Register an Account</h1>
                <hr>
            </div>
            <form action="/user" method="post">
                @csrf
                <div class="col-md-3 offset-md-3">
                    <div class="mb-3">
                        <label for="profile_picture" class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" id="profile_picture" name="profile_picture" value="{{old('profile_picture')}}">
                        <span class="text-danger">@error('profile_picture') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{old('first_name')}}">
                        <span class="text-danger">@error('first_name') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{old('middle_name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}">
                        <span class="text-danger">@error('last_name') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" value="{{old('age')}}">
                        <span class="text-danger">@error('age') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select id="gender" name="gender" class="form-control" role="button">
                            @if(empty(old('gender')))
                                <option value="" selected>Select Gender</option>
                            @else
                                <option value="{{old('gender')}}" hidden selected>{{old('gender')}}</option>
                            @endif
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                        <span class="text-danger">@error('gender') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}">
                        <span class="text-danger">@error('address') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="contact_number" name="contact_number" value="{{old('contact_number')}}">
                        <span class="text-danger">@error('contact_number') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{old('username')}}">
                        <span class="text-danger">@error('username') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
                        <span class="text-danger">@error('password') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="{{old('confirm_password')}}">
                        <span class="text-danger">@error('confirm_password') {{$message}}@enderror</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
@include('include/footer')