@include('include/header')
<title>St. Louise de Marillac POS System | Register</title>

<div class="wrapper d-flex align-items-stretch">
	<nav id="sidebar">
		<div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="bi bi-list" style="font-size: 20px;"></i>
                <span class="sr-only">Toggle Menu</span>
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
            <div class="col-md-6 offset-md-3 mt-5">
                <h1>Register an Account</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <form action="" method="post">
                <div class="col-md-3 offset-md-3">
                    <div class="mb-3">
                        <label for="profile_picture" class="form-label">Profile Picture</label>
                        <input type="file" accept="image/*" class="form-control" id="profile_picture" name="profile_picture">
                    </div>
                    <div class="mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select id="gender" class="form-control" role="button">
                            <option selected>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Pthers">Others</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="contact_number" name="contact_number">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('include/footer')