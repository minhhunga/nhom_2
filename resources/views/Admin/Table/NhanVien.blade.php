@extends('Admin.Layout.App')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Quản lý nhân viên</h4>
        <div>
            <button class="btn btn-outline-secondary me-2">
                <i class="bi bi-arrow-clockwise"></i> Làm mới
            </button>
            <button class="btn btn-primary">
                <i class="bi bi-plus"></i> Thêm nhân viên
            </button>
        </div>
    </div>
    <p class="text-muted">Quản lý thông tin nhân viên nhà hàng</p>

    <!-- Search -->
    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Tìm kiếm nhân viên theo tên, email, chức vụ...">
    </div>

    <!-- Info -->
    <div class="mb-3 text-muted">
        Tổng số: 5 nhân viên • Đang làm việc: 4 • Nghỉ việc: 1
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table align-middle table-hover">
            <thead class="table-light">
                <tr>
                    <th>Nhân viên</th>
                    <th>Liên hệ</th>
                    <th>Chức vụ</th>
                    <th>Phòng ban</th>
                    <th>Lương</th>
                    <th>Ngày vào làm</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center" style="width:40px; height:40px;">NA</div>
                            <div class="ms-2">
                                <strong>Nguyễn Văn An</strong><br>
                                <small class="text-muted">8h/ngày</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div><i class="bi bi-envelope"></i> nguyenvanan@restaurant.com</div>
                        <div><i class="bi bi-phone"></i> 0901234567</div>
                    </td>
                    <td><span class="badge bg-purple">Quản lý</span></td>
                    <td>Quản lý</td>
                    <td class="text-success fw-bold">15,000,000 VND</td>
                    <td>15/01/2024</td>
                    <td><span class="badge bg-success">Đang làm việc</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-info text-white d-flex justify-content-center align-items-center" style="width:40px; height:40px;">TB</div>
                            <div class="ms-2">
                                <strong>Trần Thị Bình</strong><br>
                                <small class="text-muted">8h/ngày</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div><i class="bi bi-envelope"></i> tranthibinh@restaurant.com</div>
                        <div><i class="bi bi-phone"></i> 0912345678</div>
                    </td>
                    <td><span class="badge bg-warning text-dark">Bếp trưởng</span></td>
                    <td>Nhà bếp</td>
                    <td class="text-success fw-bold">12,000,000 VND</td>
                    <td>10/02/2024</td>
                    <td><span class="badge bg-success">Đang làm việc</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>

                <!-- Thêm các dòng khác tương tự -->
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center" style="width:40px; height:40px;">HE</div>
                            <div class="ms-2">
                                <strong>Hoàng Văn Em</strong><br>
                                <small class="text-muted">12h/ngày</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div><i class="bi bi-envelope"></i> hoangvanem@restaurant.com</div>
                        <div><i class="bi bi-phone"></i> 0945678901</div>
                    </td>
                    <td><span class="badge bg-secondary">Bảo vệ</span></td>
                    <td>An ninh</td>
                    <td class="text-success fw-bold">7,000,000 VND</td>
                    <td>01/04/2024</td>
                    <td><span class="badge bg-danger">Nghỉ việc</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-between align-items-center mt-3">
        <span>Hiển thị 5 trên tổng số 5 nhân viên</span>
        <nav>
            <ul class="pagination mb-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection
