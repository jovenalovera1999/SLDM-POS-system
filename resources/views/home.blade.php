@include('include/header')
<title>St. Louise de Marillac POS System | Home</title>

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
	            <li class="active">
	                <a href="#"><i class="bi bi-house-fill custom-icon-size"></i> Home</a>
	            </li>
	            <li>
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
        <div class="row mt-5">
            <div class="col">
                <div class="card custom-card" style="background: #1E90FF;">
                    <div class="card-body">
                        <h5 class="card-title">Total Patients Paid Today</h5>
                        <p class="card-text">0</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card custom-card" style="background: #1E90FF;">
                    <div class="card-body">
                        <h5 class="card-title">Total Amount of Fees Collected Today</h5>
                        <p class="card-text">P0.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('include/footer')