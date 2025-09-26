<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - RestaurantOS</title>
    <link rel="stylesheet" href="{{ asset('Admin/css/auth.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="auth-container">
    <!-- Bên trái: Hình ảnh -->
    <div class="auth-image"></div>

    <!-- Bên phải: Form -->
    <div class="auth-form">
        <div class="form-box">
            <div class="title">
                <i class="fa-solid fa-utensils"></i> Hệ Thống Quản Lý Nhà Hàng
            </div>

            <h2 class="subtitle">Đăng Nhập</h2>
            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                    {{session('success')}}
                </div>
             @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Tài khoản -->
                <div class="form-group">
                    <label for="email">Tài khoản</label>
                    <input type="email" id="email" name="email" placeholder="Nhập tài khoản">
                </div>

                <!-- Mật khẩu -->
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                </div>

                <!-- Nhớ mật khẩu & Quên mật khẩu -->
                <div class="form-options">
                    <label><input type="checkbox" name="remember"> Nhớ mật khẩu</label>
                    <a href="#">Quên mật khẩu?</a>
                </div>

                <!-- Nút đăng nhập -->
                <button type="submit" class="btn-submit">Đăng nhập</button>
            </form>

            <!-- Link sang đăng ký -->
            <div class="auth-link">
                Chưa có tài khoản?
                <a href="{{ route('register') }}">Đăng ký</a>
            </div>

            <p class="footer">© 2025 RestaurantOS. All rights reserved.</p>
        </div>
    </div>
</div>
</body>
</html>
