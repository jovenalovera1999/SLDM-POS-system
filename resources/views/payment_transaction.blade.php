@include('include/header')
    <title>St. Louise de Marillac POS System | Payment Transaction</title>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="bi bi-list" style="font-size: 20px;"></i>
                </button>
            </div>
            <div class="p-4">
                <img src="{{asset('img/sldm-logo.png')}}" class="custom-logo-size mx-auto d-block">
                <h1><a href="index.html" class="logo">St. Louise de Marillac POS System<span class="text-white mt-4" style="font-size: 17px;">User Logged In:<br>Dev Jov</span></a></h1>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="#"><i class="bi bi-house-fill custom-icon-size"></i> Home</a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="bi bi-cash-coin custom-icon-size"></i> Payment Transaction</a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-clock-history custom-icon-size"></i> Transaction History</a>
                    </li>
                    <li>
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
                <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
                <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
                <div class="toast-container position-absolute top-0 end-0 p-3">
                    <!-- Then put toasts within -->
                    <div class="toast hide text-white bg-success" id="toast_success" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body">
                            <svg width="1.25em" height="1.25em" class="bi bi-shield-fill-check" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm2.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.793 6.354 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            </svg>
                            <strong class="me-auto">Success!</strong><br>
                            Payment Transaction Successfully Saved!
                        </div>
                    </div>
                    <div class="toast hide text-white bg-danger" id="toast_fail" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body">
                            <svg width="1.25em" height="1.25em" class="bi bi-exclamation-circle-fill" fill="currentColor">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                            <strong class="me-auto">Fail!</strong><br>
                            Failed to Save Payment Transaction!
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 offset-md-3 mt-5">
                <h1>Payment Transaction</h1>
                <hr>
            </div>
            <form method="post">
                @csrf
                <div class="col-md-3 offset-md-3">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name:</label>
                        @if(empty($firstName))
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{old('first_name')}}">
                        @else
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{$firstName}}">
                        @endif
                        <span class="text-danger">@error('first_name') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="middle_name" class="form-label">Middle Name:</label>
                        @if(empty($middleName))
                            <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{old('middle_name')}}">
                        @else
                            <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{$middleName}}">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name:</label>
                        @if(empty($lastName))
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}">
                        @else
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{$lastName}}">
                        @endif
                        <span class="text-danger">@error('last_name') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number:</label>
                        @if(empty($contactNumber))
                            <input type="number" class="form-control" id="contact_number" name="contact_number" value="{{old('contact_number')}}">
                        @else
                            <input type="number" class="form-control" id="contact_number" name="contact_number" value="{{$contactNumber}}">
                        @endif
                        <span class="text-danger">@error('contact_number') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="payment_method" class="form-label">Payment Method:</label>
                        <select id="payment_method" name="payment_method" class="form-control" role="button">
                            @if(empty($paymentMethod))
                                <option value="" selected>Select Payment Method</option>
                            @else
                                <option value="{{$paymentMethod}}" hidden selected>{{$paymentMethod}}</option>
                            @endif
                            <option value="Cash">Cash</option>
                            <option value="GCash">GCash</option>
                        </select>
                        <span class="text-danger">@error('payment_method') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="medical_fee" class="form-label">Medical Fee:</label>
                        @if(empty($medicalFee))
                            <input type="text" class="form-control" id="medical_fee" name="medical_fee" value="{{old('medical_fee')}}">
                        @else
                            <input type="text" class="form-control" id="medical_fee" name="medical_fee" value="{{$medicalFee}}">
                        @endif
                        <span class="text-danger">@error('medical_fee') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="discount" class="form-label">Discount:</label>
                        <select id="discount" name="discount" class="form-control" role="button">
                            @if(empty($discount))
                                <option value="" selected>Select Discount</option>
                            @else
                                <option value="{{$discount}}" hidden selected>{{$discount}}</option>
                            @endif
                            <option value="PWD">PWD</option>
                            <option value="Senior Citizen">Senior Citizen</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount:</label>
                        @if(empty($amount))
                            <input type="number" class="form-control" id="amount" name="amount" value="{{old('amount')}}">
                        @else
                            <input type="number" class="form-control" id="amount" name="amount" value="{{$amount}}">
                        @endif
                        <span class="text-danger">@error('amount') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="total_amount_paid" class="form-label">Total Amount Paid:</label>
                        @if(empty($totalAmountPaid))
                            <input type="number" class="form-control" id="total_amount_paid" name="total_amount_paid" readonly>
                        @else
                            <input type="number" class="form-control" id="total_amount_paid" name="total_amount_paid" value="{{$totalAmountPaid}}" readonly>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="change" class="form-label">Change:</label>
                        @if(empty($change))
                            <input type="number" class="form-control" id="change" name="change" readonly>
                        @else
                            <input type="number" class="form-control" id="change" name="change" value="{{$change}}" readonly>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-secondary w-100" id="calculate" name="calculate" formaction="/calculate_payment">Calculate</button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary w-100" id="save" name="save" formaction="#">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@include('include/footer')