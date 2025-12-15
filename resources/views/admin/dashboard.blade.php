@extends('layouts.admin')

@section('content')
<h4 class="mb-4">Dashboard Admin</h4>

<div class="row">
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Iklan Aktif</h6>
                <h3>{{ $activeAds }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Lokasi</h6>
                <h3>{{ $locations }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Pendapatan</h6>
                <h3>Rp {{ number_format($revenue) }}</h3>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h6>Grafik Pendapatan</h6>
        <canvas id="revenueChart"></canvas>
    </div>
</div>
@endsection

@section('scripts')
<script>
new Chart(document.getElementById('revenueChart'), {
    type: 'line',
    data: {
        labels: {!! json_encode($months) !!},
        datasets: [{
            label: 'Pendapatan',
            data: {!! json_encode($monthlyRevenue) !!},
            borderWidth: 2
        }]
    }
});
</script>
@endsection
