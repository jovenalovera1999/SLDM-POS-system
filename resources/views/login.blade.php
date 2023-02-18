@include('include/header')
    <title>St. Louise de Marillac POS System | Login</title>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h1><img src="{{asset('img/sldm-logo.png')}}" style="width: 80px; height: 80px;"> Login an Account</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <form action="" method="post">
                <div class="col-md-3 offset-md-3 mt-3">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="remember" id="remember_me" name="remember_me" role="button">
                        <label class="form-check-label" for="remember_me">
                            Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>                  
                </div>
            </form>
        </div>
    </div>
@include('include/footer')