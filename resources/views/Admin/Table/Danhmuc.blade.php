@extends('Admin.Layout.App')

@section('content')
<div class="container-fluid">

    <!-- Tiêu đề -->
    <div class="mb-4">
        <h4 class="fw-bold">Quản lý danh mục</h4>
        <p class="text-muted">Quản lý danh mục món ăn</p>
    </div>

    <!-- Nút thêm -->
    <div class="mb-3 text-end">
        <button class="btn btn-primary">Thêm danh mục</button>
    </div>

    <!-- Bảng danh mục -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Tên danh mục</th>
                        <th class="text-center">Trạng thái</th>
                        <th class="text-center">Nổi bật</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Món tráng miệng</td>
                        <td class="text-center">
                            <div class="form-check form-switch d-inline-block">
                                <input type="checkbox" class="form-check-input" checked>
                            </div>
                            <span class="ms-1 text-success">Hoạt động</span>
                        </td>
                        <td class="text-center">
                            <div class="form-check form-switch d-inline-block">
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary">Sửa</button>
                            <button class="btn btn-sm btn-danger">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Món khai vị</td>
                        <td class="text-center">
                            <div class="form-check form-switch d-inline-block">
                                <input type="checkbox" class="form-check-input">
                            </div>
                            <span class="ms-1 text-danger">Ẩn</span>
                        </td>
                        <td class="text-center">
                            <div class="form-check form-switch d-inline-block">
                                <input type="checkbox" class="form-check-input" checked>
                            </div>
                        </td>
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
