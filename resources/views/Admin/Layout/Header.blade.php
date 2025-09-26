<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ route('index') }}">
            <i class="fa-solid fa-utensils text-primary"></i> Quản lý nhà hàng
        </a>

        <div class="d-flex align-items-center">
            <span class="me-3">
                <i class="fa-solid fa-user-shield text-primary"></i> 
                {{ Auth::user()->name ?? 'Admin' }}
            </span>
            <a href="{{ route('logout') }}" class="btn btn-sm btn-primary">
                <i class="fa-solid fa-right-from-bracket"></i> Đăng xuất
            </a>
        </div>
    </div>
</nav>
