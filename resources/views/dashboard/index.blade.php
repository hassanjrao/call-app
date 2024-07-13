@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if(auth()->user()->role->roleName == 'admin')
                <!-- Admin Dashboard Content -->

                @include('dashboard.admin.dashboard')
            @elseif(auth()->user()->role->roleName == 'customer')
                <!-- Customer Dashboard Content -->
                @include('dashboard.customers.dashboard')
            @endif
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctxCallVolumes = document.getElementById('callVolumesChart').getContext('2d');
            var callVolumesChart = new Chart(ctxCallVolumes, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April'],
                    datasets: [{
                        label: 'Monthly Call Volumes',
                        data: [12000, 15000, 13000, 14000],
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                }
            });

            const averageCallDurationsCtx = document.getElementById('averageCallDurationsChart').getContext('2d');
            const averageCallDurationsChart = new Chart(averageCallDurationsCtx, {
                type: 'bar',
                data: {
                    labels: ['0-2 min', '2-5 min', '5-10 min', '> 10 min'],
                    datasets: [{
                        label: 'Average Call Duration',
                        data: [120, 150, 90, 60], // Example data
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });





            const ctx = document.getElementById('customerSegmentationChart').getContext('2d');
            const customerSegmentationChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Low', 'Medium', 'High', 'Premium'],
                    datasets: [{
                        data: [300, 200, 100, 50],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                }
            });
        });
    </script>


@endsection
