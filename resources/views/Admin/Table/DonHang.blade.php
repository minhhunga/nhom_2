@extends('Admin.Layout.App')

@section('content')
<div class="container-fluid">

    <!-- Tiêu đề -->
    <div class="mb-4">
        <h4 class="fw-bold">Quản lý đơn hàng</h4>
        <p class="text-muted">Theo dõi và xử lý đơn hàng</p>
    </div>

    <!-- Thống kê -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card shadow-sm text-center p-3">
                <h5 class="fw-bold">Tổng đơn hàng</h5>
                <p class="fs-4 text-primary">8</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm text-center p-3">
                <h5 class="fw-bold">Chờ xử lý</h5>
                <p class="fs-4 text-warning">0</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm text-center p-3">
                <h5 class="fw-bold">Hoàn thành</h5>
                <p class="fs-4 text-success">0</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm text-center p-3">
                <h5 class="fw-bold">Doanh thu</h5>
                <p class="fs-4 text-dark">0 đ</p>
            </div>
        </div>
    </div>

    <!-- Thanh điều khiển -->
    <div class="d-flex justify-content-between align-items-center bg-primary text-white p-3 rounded mb-3">
        <h6 class="mb-0">Quản lý đơn hàng</h6>
        <button class="btn btn-light btn-sm">
            <i class="bi bi-arrow-repeat"></i> Làm mới
        </button>
    </div>

    <!-- Bộ lọc -->
    <div class="d-flex mb-3">
        <input type="text" class="form-control me-2" placeholder="Tìm theo mã, số điện thoại, email, tên...">
        <select class="form-select me-2">
            <option>Tất cả trạng thái</option>
            <option>Đang chuẩn bị</option>
            <option>Đã phục vụ</option>
        </select>
        <select class="form-select">
            <option>Tất cả</option>
            <option>Thanh toán VNPay</option>
            <option>Thanh toán tiền mặt</option>
        </select>
    </div>

    <!-- Bảng đơn hàng -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Mã đơn</th>
                        <th>Thông tin khách hàng</th>
                        <th>Bàn</th>
                        <th>Tổng tiền</th>
                        <th>Thanh toán</th>
                        <th>Trạng thái</th>
                        <th>Thời gian đặt bàn</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sa877710</td>
                        <td>
                            <strong>Luân Trần</strong><br>
                            <small>0999804328</small><br>
                            <small>luantran13@gmail.com</small>
                        </td>
                        <td><span class="badge bg-primary">Bàn 2 - Tầng 2</span></td>
                        <td class="text-success fw-bold">108,000 đ</td>
                        <td><span class="badge border border-primary text-primary">VNPAY</span></td>
                        <td><span class="badge bg-info text-dark">Đang chuẩn bị</span></td>
                        <td>10/09/2025 15:10</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Đang chuẩn bị</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Sa87647</td>
                        <td>
                            <strong>Luân Trần</strong><br>
                            <small>0999804328</small><br>
                            <small>luantran13@gmail.com</small>
                        </td>
                        <td><span class="badge bg-primary">Bàn 3 - Tầng 3</span></td>
                        <td class="text-success fw-bold">288,000 đ</td>
                        <td><span class="badge border border-primary text-primary">VNPAY</span></td>
                        <td><span class="badge bg-success">Đã phục vụ</span></td>
                        <td>10/09/2025 15:09</td>
                        <td>
                            <button class="btn btn-sm btn-danger">Chi tiết hóa đơn</button>
                        </td>
                    </tr>
                    <tr>
                        <td>890abc</td>
                        <td>
                            <strong>Luân Trần</strong><br>
                            <small>0999804328</small><br>
                            <small>luantran13@gmail.com</small>
                        </td>
                        <td><span class="badge bg-primary">Bàn 1 - Tầng 2</span></td>
                        <td class="text-success fw-bold">120,000 đ</td>
                        <td><span class="badge border border-primary text-primary">VNPAY</span></td>
                        <td><span class="badge bg-success">Đã phục vụ</span></td>
                        <td>10/09/2025 11:53</td>
                        <td>
                            <button class="btn btn-sm btn-danger">Chi tiết hóa đơn</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
