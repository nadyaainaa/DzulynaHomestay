@extends('layout.adminLayout')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<div class="grid grid-cols-12 gap-x-6">
    {{-- Summary Cards --}}
    <div class="col-span-12 xl:col-span-4 md:col-span-6">
        <div class="card">
            <div class="card-body text-center">
                <h4 class="mb-1 text-muted">
                <i class="feather icon-user text-success-500 text-[30px] mr-1.5"></i>
                    Total Customers</h4>
                <h3 class="font-semibold">{{ $totalCustomers }}</h3>
            </div>
        </div>
    </div>
    <div class="col-span-12 xl:col-span-4 md:col-span-6">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="mb-1 text-muted">
                <i class="feather icon-clipboard text-warning-500 text-[30px] mr-1.5"></i>
                   Total Bookings</h5>
                  <h3 class="font-semibold">{{ $totalBookings }}</h3>
            </div>
        </div>
    </div>
    <div class="col-span-12 xl:col-span-4 md:col-span-6">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="mb-1 text-muted">
                <i class="feather icon-dollar-sign text-info-500 text-[30px] mr-1.5"></i>
                Total Sales (RM)</h5>
                <h3 class="font-semibold">RM {{ number_format($totalSales, 2) }}</h3>
            </div>
        </div>
    </div>

    <div class="col-span-12 mt-6">
        <div class="card">
            <div class="card-header text-lg font-semibold">Monthly Sales Trend (RM)</div>
            <div class="card-body">
                <canvas id="salesChart" height="70"></canvas>
            </div>
        </div>
    </div>

    <div class="col-span-12 mt-6">
        <div class="card">
            <div class="card-header text-lg font-semibold">Total Star Ratings ⭐</div>
            <canvas id="starBarChart" height="100"></canvas>
        </div>
    </div>
</div>


<script>
    const ctx = document.getElementById('salesChart').getContext('2d');

    const salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($months),
            datasets: [{
                label: 'Sales (RM)',
                data: @json($salesData),
                borderColor: '#3b82f6',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                fill: true,
                tension: 0.3,
                pointBackgroundColor: '#3b82f6',
                pointRadius: 4
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'RM'
                    }
                }
            },
            responsive: true,
            plugins: {
                legend: {
                    display: true
                },
                tooltip: {
                    mode: 'index',
                    intersect: false
                }
            }
        }
    });
</script>

<script>
    const ctxStar = document.getElementById('starBarChart').getContext('2d');
    new Chart(ctxStar, {
        type: 'bar',
        data: {
            labels: @json($starLabels),
            datasets: [{
                label: 'Total Ratings',
                data: @json($starCounts),
                backgroundColor: [
                    '#f87171', // 1★ red
                    '#fb923c', // 2★ orange
                    '#facc15', // 3★ yellow
                    '#4ade80', // 4★ green
                    '#60a5fa', // 5★ blue
                ],
                borderRadius: 6,
                barThickness: 40,
                borderSkipped: false,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Number of Ratings',
                        font: { size: 14 }
                    }
                }
            },
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: context => `${context.parsed.y} rating(s)`
                    }
                }
            }
        }
    });
</script>
@endsection
