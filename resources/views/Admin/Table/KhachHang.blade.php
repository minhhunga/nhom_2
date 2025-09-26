@extends('Admin.Layout.App')

@section('content')
<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Quản lý khách hàng</h4>
        <div>
            <button class="btn btn-outline-secondary me-2">
                <i class="bi bi-arrow-clockwise"></i> Làm mới
            </button>
            <button class="btn btn-primary">
                <i class="bi bi-plus"></i> Thêm khách hàng
            </button>
        </div>
    </div>
    <p class="text-muted">Quản lý thông tin và lịch sử khách hàng</p>

    <!-- Search -->
    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Tìm kiếm khách hàng theo tên, email, số điện thoại...">
    </div>

    <!-- Summary -->
    <div class="row mb-3">
        <div class="col-md-3">
            <div class="card text-center p-3">
                <h6 class="text-muted">Tổng khách hàng</h6>
                <h4>5</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-3">
                <h6 class="text-muted">Khách VIP</h6>
                <h4>2</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-3">
                <h6 class="text-muted">Đơn hàng tháng này</h6>
                <h4>52</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-3">
                <h6 class="text-muted">Doanh thu từ khách</h6>
                <h4 class="text-success">8.880.000đ</h4>
            </div>
        </div>
    </div>

    <div class="mb-3 text-muted">
        Tổng số: 5 khách hàng • VIP: 2 • Thành viên mới: 1
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table align-middle table-hover">
            <thead class="table-light">
                <tr>
                    <th>Khách hàng</th>
                    <th>Liên hệ</th>
                    <th>Địa chỉ</th>
                    <th>Đơn hàng</th>
                    <th>Chi tiêu</th>
                    <th>Điểm tích lũy</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-success text-white d-flex justify-content-center align-items-center" style="width:40px; height:40px;">LT</div>
                            <div class="ms-2">
                                <strong>Lê Văn Tuấn</strong><br>
                                <small class="text-muted">Tham gia: 15/06/2024</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div><i class="bi bi-envelope"></i> levantuan@gmail.com</div>
                        <div><i class="bi bi-phone"></i> 0901234567</div>
                    </td>
                    <td>123 Nguyễn Huệ, Q1, TP.HCM</td>
                    <td>15 đơn hàng</td>
                    <td class="text-success fw-bold">2,850,000 VND<br><small class="text-muted">Lần cuối: 20/12/2024</small></td>
                    <td>285<br><span class="badge bg-secondary">Bạc</span></td>
                    <td><span class="badge bg-warning text-dark">VIP</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-info text-white d-flex justify-content-center align-items-center" style="width:40px; height:40px;">NM</div>
                            <div class="ms-2">
                                <strong>Nguyễn Thị Mai</strong><br>
                                <small class="text-muted">Tham gia: 20/08/2024</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div><i class="bi bi-envelope"></i> nguyenthimai@gmail.com</div>
                        <div><i class="bi bi-phone"></i> 0912345678</div>
                    </td>
                    <td>456 Lê Lợi, Q3, TP.HCM</td>
                    <td>8 đơn hàng</td>
                    <td class="text-success fw-bold">1,200,000 VND<br><small class="text-muted">Lần cuối: 18/12/2024</small></td>
                    <td>120<br><span class="badge bg-danger">Đồng</span></td>
                    <td><span class="badge bg-info">Thường xuyên</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>

                <!-- Thêm các khách hàng khác tương tự -->
            </tbody>
        </table>
    </div>
</div>
@endsection
