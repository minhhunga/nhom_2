@extends('Admin.Layout.App')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col">
            <h5 class="fw-bold">Quản lý bàn</h5>
            <p class="text-muted">Quản lý bàn và sắp xếp chỗ ngồi</p>
        </div>
        
    </div>

    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h6 class="mb-0">Quản lý bàn</h6>
            <a href="#" class="btn btn-primary btn-sm">Thêm bàn</a>
        </div>
        <div class="card-body p-0">
            <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Số bàn</th>
                        <th>Tên bàn</th>
                        <th>Vị trí</th>
                        <th>Sức chứa</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bàn 1</td>
                        <td>Tầng 1</td>
                        <td>5 người</td>
                        <td><span class="badge bg-success">Trống</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bàn 2</td>
                        <td>Tầng 2</td>
                        <td>5 người</td>
                        <td><span class="badge bg-success">Trống</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bàn 3</td>
                        <td>Tầng 3</td>
                        <td>3 người</td>
                        <td><span class="badge bg-success">Trống</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card-footer text-center">
            <nav>
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
