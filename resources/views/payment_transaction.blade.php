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
                    <a href="#"><i class="bi bi-person-fill-add custom-icon-size"></i> Register</a>
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
        <div class="row">
            <div class="col">
                <form method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{old('first_name')}}">
                        <span class="text-danger">@error('first_name') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="middle_name" class="form-label">Middle Name:</label>
                        <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{old('middle_name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}">
                        <span class="text-danger">@error('last_name') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number:</label>
                        <input type="number" class="form-control" id="contact_number" name="contact_number" value="{{old('contact_number')}}">
                        <span class="text-danger">@error('contact_number') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="payment_method" class="form-label">Payment Method:</label>
                        <select id="payment_method" name="payment_method" class="form-control" role="button" value="{{old('payment_method')}}">
                            <option value="" selected>Select Payment Method</option>
                            <option value="Cash">Cash</option>
                            <option value="GCash">GCash</option>
                        </select>
                        <span class="text-danger">@error('payment_method') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="medical_fee" class="form-label">Medical Fee:</label>
                        <input type="text" class="form-control" id="medical_fee" name="medical_fee" value="{{old('medical_fee')}}">
                        <span class="text-danger">@error('medical_fee') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="discount" class="form-label">Discount:</label>
                        <select id="discount" name="discount" class="form-control" role="button" value="{{old('discount')}}">
                            <option selected>Select Discount</option>
                            <option value="PWD">PWD</option>
                            <option value="Senior Citizen">Senior Citizen</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount:</label>
                        <input type="number" class="form-control" id="amount" name="amount" value="{{old('amount')}}">
                        <span class="text-danger">@error('amount') {{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="total_amount_paid" class="form-label">Total Amount Paid:</label>
                        @if(empty($totalAmountPaid))
                        <input type="number" class="form-control" id="total_amount_paid" name="total_amount_paid" disabled>
                        @else
                        <input type="number" class="form-control" id="total_amount_paid" name="total_amount_paid" value="{{$totalAmountPaid}}" disabled>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="change" class="form-label">Change:</label>
                        @if(empty($change))
                        <input type="number" class="form-control" id="change" name="change" disabled>
                        @else
                        <input type="number" class="form-control" id="change" name="change" value="{{$change}}" disabled>
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
                </form>
            </div>
            <div class="col">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{asset('img/sldm-logo.png')}}" style="width: 100px; margin-left: 55px;">
                            </div>
                            <div class="col">
                                <p class="card-text text-center" style="font-size: 20px; margin-bottom: 0px;">ST. LOUISE DE MARILLAC</p>
                                <p class="card-text text-center" style="font-size: 13px;">Roxas Boulevard, Roxas City, Capiz, Philippines 5800</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <p class="card-text">Patient Name:</p>
                                <p class="card-text">Payment Method:</p>
                                <p class="card-text">Medical Fee:</p>
                                <p class="card-text">Discount:</p>
                                <p class="card-text">Amount:</p>
                                <p class="card-text">Total Amount Paid:</p>
                                <p class="card-text">Change:</p>
                            </div>
                            <div class="col">
                                <p class="card-text text-right">Juan Dela Cruz</p>
                                <p class="card-text text-right">Cash</p>
                                <p class="card-text text-right">P0.00</p>
                                <p class="card-text text-right">P0.00</p>
                                <p class="card-text text-right">P0.00</p>
                                <p class="card-text text-right">P0.00</p>
                                <p class="card-text text-right">P0.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('include/footer')