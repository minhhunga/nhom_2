@extends('Admin.Layout.App')

@section('content')
<div class="container-fluid">

    <!-- Tiêu đề -->
    <div class="mb-4">
        <h4 class="fw-bold">Quản lý món ăn</h4>
        <p class="text-muted">Quản lý thực đơn nhà hàng</p>
    </div>

    <!-- Nút thêm -->
    <div class="mb-3 text-end">
        <button class="btn btn-primary">Thêm món ăn</button>
    </div>

    <!-- Bảng sản phẩm -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Hình ảnh</th>
                        <th>Tên món</th>
                        <th>Giá</th>
                        <th>Danh mục</th>
                        <th>Trạng thái</th>
                        <th>Đặc biệt</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="https://via.placeholder.com/80" 
                                 alt="Hình món ăn" 
                                 class="rounded" 
                                 width="80" height="60">
                        </td>
                        <td>Hủ tiếu gõ heo và các món tráng miệng</td>
                        <td class="text-success fw-bold">120,000₫</td>
                        <td>
                            <span class="badge bg-primary-subtle text-primary">Món tráng miệng</span>
                        </td>
                        <td>
                            <span class="badge bg-success-subtle text-success">Có sẵn</span>
                        </td>
                        <td>Có</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary">Sửa</button>
                            <button class="btn btn-sm btn-danger">Xóa</button>
                        </td>
                    </tr>

                    <!-- Dòng mẫu -->
                    <tr>
                        <td>
                            <img src="https://via.placeholder.com/80" 
                                 alt="Hình món ăn" 
                                 class="rounded" 
                                 width="80" height="60">
                        </td>
                        <td>Phở bò tái chín</td>
                        <td class="text-success fw-bold">85,000₫</td>
                        <td>
                            <span class="badge bg-info-subtle text-info">Món chính</span>
                        </td>
                        <td>
                            <span class="badge bg-danger-subtle text-danger">Hết hàng</span>
                        </td>
                        <td>Không</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary">Sửa</button>
                            <button class="btn btn-sm btn-danger">Xóa</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Phân trang -->
    <div class="mt-3 d-flex justify-content-center">
        <nav>
            <ul class="pagination">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
    </div>

</div>
@endsection
