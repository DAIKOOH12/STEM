@extends('layout.admin_master')

@section('content')
<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Thống kê doanh thu theo ngày</h5>
            </div>
            <div class="card-body">
                <div id="revenueByDayChart" style="min-height:350px;"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // Lấy dữ liệu từ controller, nếu không có thì dùng mẫu
    const revenueData = [
        ['date' => '2026-01-20', 'total' => 1200000],
        ['date' => '2026-01-21', 'total' => 1500000],
        ['date' => '2026-01-22', 'total' => 900000],
        ['date' => '2026-01-23', 'total' => 2000000],
    ]
    const categories = revenueData.map(item => item.date);
    const seriesData = revenueData.map(item => item.total);

    document.addEventListener('DOMContentLoaded', function() {
        if (typeof ApexCharts !== 'undefined') {
            var options = {
                chart: {
                    height: 350,
                    type: 'area',
                    toolbar: { show: false },
                    zoom: { enabled: false }
                },
                dataLabels: { enabled: false },
                stroke: { curve: 'smooth', width: 3 },
                series: [{
                    name: 'Doanh thu',
                    data: seriesData
                }],
                xaxis: {
                    categories: categories,
                    title: { text: 'Ngày' },
                    labels: { rotate: -45 }
                },
                yaxis: {
                    labels: {
                        formatter: function (val) {
                            return val.toLocaleString('vi-VN') + ' VNĐ';
                        }
                    },
                    title: { text: 'Doanh thu (VNĐ)' }
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val.toLocaleString('vi-VN') + ' VNĐ';
                        }
                    }
                },
                colors: ['#696cff'],
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.7,
                        opacityTo: 0.2,
                        stops: [0, 90, 100]
                    }
                }
            };
            var chart = new ApexCharts(document.querySelector("#revenueByDayChart"), options);
            chart.render();
        }
    });
</script>
@endsection