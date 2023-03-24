<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.header')
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h2>ĐĂNG NHẬP</h2>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                @include('components.alert')
                <p class="login-box-msg">

                </p>
                <form action="/admin/users/login/store" method="post">
                    <!-- Email -->
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Remember/Sign in -->
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">
                                    Nhớ mật khẩu 
                                </label>
                            </div>
                        </div>

                        <div class="col-4">

                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                    <a href="register" class="btn btn-danger btn-block">Đăng kí</a>
                    @csrf
                </form>
            </div>
        </div>
    </div>
    @include('components.footer')
</body>

</html>