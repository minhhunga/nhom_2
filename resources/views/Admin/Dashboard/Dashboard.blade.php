@extends('Admin.Layout.App')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Tổng quan</h3>

    <div class="row">
        <!-- Card Doanh thu -->
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h6>Doanh thu tháng này</h6>
                <h3 class="text-success">480,000 VND</h3>
                <small class="text-success">+380.5% so với tuần trước</small>
            </div>
        </div>

        <!-- Card Đơn hàng -->
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h6>Đơn hàng mới</h6>
                <h3 class="text-primary">15</h3>
                <small class="text-success">+300.3% so với tuần trước</small>
            </div>
        </div>

        <!-- Card Khách hàng -->
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h6>Khách hàng mới</h6>
                <h3 class="text-purple">8</h3>
                <small class="text-success">+300.5% so với tuần trước</small>
            </div>
        </div>
    </div>

    <!-- Biểu đồ -->
    <div class="row mt-4">
        <!-- Doanh thu trong tuần -->
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm p-3">
                <h6>Doanh thu trong tuần</h6>
                <div class="bar-chart">
                    <div class="bar" style="height:60%">60%</div>
                    <div class="bar" style="height:80%">80%</div>
                    <div class="bar" style="height:50%">50%</div>
                    <div class="bar" style="height:90%">90%</div>
                    <div class="bar" style="height:70%">70%</div>
                </div>
            </div>
        </div>

        <!-- Món ăn phổ biến -->
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm p-3 text-center">
                <h6>Món ăn phổ biến</h6>
                <div class="donut-chart"></div>
                <p class="text-muted small mt-2">Tỷ lệ đặt hàng các món trong tuần này</p>
                <div class="legend">
                    <span><span class="color purple"></span>Phở</span>
                    <span><span class="color blue"></span>Bún chả</span>
                    <span><span class="color yellow"></span>Gà rán</span>
                    <span><span class="color red"></span>Lẩu</span>
                </div>
            </div>
        </div>
    </div>


    <!-- Thống kê + Đơn hàng gần đây -->
    <div class="row mt-4">
        <!-- Line Chart -->
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Thống kê đặt bàn theo giờ</h6>
                    <a href="#" class="small text-primary">Xem tất cả thời gian</a>
                </div>
                <div class="line-chart-container">
                    <svg class="line-chart" viewBox="0 0 500 200" preserveAspectRatio="none">
                        <g class="grid">
                            <line x1="0" y1="200" x2="500" y2="200"></line>
                            <line x1="0" y1="150" x2="500" y2="150"></line>
                            <line x1="0" y1="100" x2="500" y2="100"></line>
                            <line x1="0" y1="50" x2="500" y2="50"></line>
                            <line x1="0" y1="0" x2="500" y2="0"></line>
                        </g>
                        <polyline 
                            fill="none" 
                            stroke="#007bff" 
                            stroke-width="3"
                            points="0,200 80,180 160,100 240,50 320,120 400,20 480,80"
                        />
                        <circle cx="0" cy="200" r="4" fill="#007bff"></circle>
                        <circle cx="80" cy="180" r="4" fill="#007bff"></circle>
                        <circle cx="160" cy="100" r="4" fill="#007bff"></circle>
                        <circle cx="240" cy="50" r="4" fill="#007bff"></circle>
                        <circle cx="320" cy="120" r="4" fill="#007bff"></circle>
                        <circle cx="400" cy="20" r="4" fill="#007bff"></circle>
                        <circle cx="480" cy="80" r="4" fill="#007bff"></circle>
                    </svg>
                    <div class="labels">
                        <span>06:00</span>
                        <span>09:00</span>
                        <span>12:00</span>
                        <span>15:00</span>
                        <span>18:00</span>
                        <span>21:00</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bảng đơn hàng -->
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm p-3">
                <h6>Đơn hàng gần đây</h6>
                <table class="table table-sm align-middle mt-2">
                    <thead>
                        <tr>
                            <th>Khách hàng</th>
                            <th>Số món</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                            <th>Thời gian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lê Văn Tuấn</td>
                            <td>3</td>
                            <td>320,000₫</td>
                            <td><span class="badge bg-success bg-opacity-25 text-success">Đã giao</span></td>
                            <td>12:30</td>
                        </tr>
                        <tr>
                            <td>Nguyễn Thị Mai</td>
                            <td>2</td>
                            <td>180,000₫</td>
                            <td><span class="badge bg-warning bg-opacity-25 text-warning">Đang giao</span></td>
                            <td>12:15</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
/* Bar Chart */
.bar-chart {
    display: flex;
    justify-content: space-around;
    align-items: flex-end;
    height: 200px;
    border-left: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
}
.bar {
    width: 40px;
    background: #28a745;
    border-radius: 5px;
    position: relative;
}
.bar span {
    position: absolute;
    bottom: -20px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 12px;
}

/* Donut Chart */
.donut-chart {
    width: 150px;
    height: 150px;
    margin: 0 auto;
    border-radius: 50%;
    background: conic-gradient(#6f42c1 0% 70%, #e0e0e0 70% 100%);
    mask: radial-gradient(circle, transparent 60%, white 61%);
    -webkit-mask: radial-gradient(circle, transparent 60%, white 61%);
}

/* Line Chart */
.line-chart-container {
    position: relative;
    width: 100%;
    height: 220px;
    padding: 10px;
}
.line-chart {
    width: 100%;
    height: 180px;
}
.line-chart .grid line {
    stroke: #ddd;
    stroke-width: 1;
}
.labels {
    display: flex;
    justify-content: space-between;
    font-size: 12px;
    margin-top: 5px;
    padding: 0 5px;
}
.bar-chart {
    display: flex;
    align-items: flex-end;
    gap: 10px;
    height: 180px;
    padding: 10px;
    background: #f1f3f5;
    border-radius: 8px;
}
.bar {
    flex: 1;
    background: #28a745;
    border-radius: 4px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    color: #fff;
    font-size: 11px;
    font-weight: bold;
}

/* Biểu đồ tròn */
.donut-chart {
    width: 160px;
    height: 160px;
    border-radius: 50%;
    background: conic-gradient(
        #6f42c1 0% 40%,   /* tím */
        #007bff 40% 65%, /* xanh */
        #ffc107 65% 85%, /* vàng */
        #dc3545 85% 100% /* đỏ */
    );
    margin: 0 auto;
    position: relative;
}
.donut-chart::after {
    content: "";
    position: absolute;
    top: 25%;
    left: 25%;
    width: 50%;
    height: 50%;
    background: #fff;
    border-radius: 50%;
}

/* Legend cho biểu đồ tròn */
.legend {
    margin-top: 10px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
    font-size: 13px;
}
.legend .color {
    display: inline-block;
    width: 12px;
    height: 12px;
    margin-right: 5px;
    border-radius: 2px;
}
.legend .purple { background: #6f42c1; }
.legend .blue   { background: #007bff; }
.legend .yellow { background: #ffc107; }
.legend .red    { background: #dc3545; }
</style>
@endsection
