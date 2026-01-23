{{-- filepath: resources/views/admin/analytics/revenue_by_day.blade.php --}}
@extends('layout.admin_master')

@section('content')
<div class="card" style="padding:24px; max-width:700px; margin:32px auto; box-shadow:0 2px 16px rgba(0,0,0,0.08); border-radius:16px;">
    <h4 style="font-weight:700; margin-bottom:24px; color:#333;">Thống kê loại hoa bán được theo ngày</h4>
    <div style="margin-bottom:20px;">
        <label for="datePicker" style="font-weight:600;">Chọn ngày:</label>
        <input type="date" id="datePicker" value="2026-01-23" style="padding:6px 12px; border-radius:6px; border:1px solid #ccc;">
    </div>
    <div id="flowerByDayChart" style="height: 350px;"></div>
</div>
@endsection

@section('script')
<script src="https://unpkg.com/apexcharts@3.44.0/dist/apexcharts.min.js"></script>
<script>
    // Dữ liệu mẫu, bạn thay bằng dữ liệu thực tế từ backend
    const flowerDataByDate = {
        "2026-01-23": [{
                name: "Hoa Hồng",
                quantity: 20
            },
            {
                name: "Hoa Ly",
                quantity: 15
            },
            {
                name: "Hoa Cúc",
                quantity: 10
            },
            {
                name: "Hoa Lan",
                quantity: 8
            }
        ],
        "2026-01-22": [{
                name: "Hoa Hồng",
                quantity: 12
            },
            {
                name: "Hoa Ly",
                quantity: 18
            },
            {
                name: "Hoa Cúc",
                quantity: 7
            },
            {
                name: "Hoa Lan",
                quantity: 5
            }
        ],
        // Thêm các ngày khác nếu muốn
    };

    function getChartData(date) {
        const data = flowerDataByDate[date] || [];
        return {
            categories: data.map(item => item.name),
            series: [{
                name: "Số lượng bán",
                data: data.map(item => item.quantity)
            }]
        };
    }

    let chart;

    function renderChart(data) {
        // Nếu data là object có key 'revenue', lấy mảng revenue
        if (data && data.revenue) data = data.revenue;

        // Nếu data không phải mảng, chuyển thành mảng rỗng
        if (!Array.isArray(data)) data = [];

        // Chuyển đổi dữ liệu từ backend sang dạng ApexCharts cần
        const categories = data.map(item => item.sTenSanPham);
        const seriesData = data.map(item => item.iSoLuong);

        const options = {
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: "Số lượng bán",
                data: seriesData
            }],
            xaxis: {
                categories: categories,
                title: {
                    text: 'Loại hoa',
                    style: {
                        fontWeight: 600
                    }
                },
                labels: {
                    style: {
                        fontSize: '14px',
                        colors: '#888'
                    }
                }
            },
            yaxis: {
                title: {
                    text: 'Số lượng bán',
                    style: {
                        fontWeight: 600
                    }
                },
                labels: {
                    style: {
                        fontSize: '14px',
                        colors: '#888'
                    }
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontWeight: 700
                }
            },
            colors: ['#00b894'],
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + ' bó';
                    }
                }
            },
            grid: {
                borderColor: "#eee",
                row: {
                    colors: ["#fafafa", "transparent"],
                    opacity: 0.5
                }
            }
        };

        if (chart) {
            chart.updateOptions(options);
        } else {
            chart = new ApexCharts(document.querySelector("#flowerByDayChart"), options);
            chart.render();
        }
    }
    async function fetchAndRender(date) {
        try {
            const res = await fetch(`/admin/analytics/flowers-by-date?date=${date}`);
            const data = await res.json();
            console.log(data);

            renderChart(data);
        } catch (e) {
            renderChart([]); // Hiện biểu đồ rỗng nếu lỗi
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const datePicker = document.getElementById('datePicker');
        renderChart(datePicker.value);

        datePicker.addEventListener('change', function() {
            fetchAndRender(this.value);
        });
    });
</script>
@endsection