@extends('layouts.app')

<div class="sidebar">
    <div class="logo">
        <img src="{{asset('Logo-nova.png')}}" alt="">
    </div>
    <ul>
        <li><a href="{{ url('admin/dashboard') }}" class="active">Dashboard</a></li>
        <li><a href="{{ route('movies.index') }}"></i> Movies</a></li>
        <li><a href="{{ route('comics.index') }}"></i> Comics</a></li>
        <li><a href="{{ route('novels.index') }}"></i> Novels</a></li>
        <li><a href="#">Cartoons</a></li>
        <li><a href="#">Reports</a></li>
    </ul>
</div>


@section('content')
<div class="main-content">
    <header>
        <div class="title">Dashboard</div>
        <div class="user-info">
            <span>Hello, {{ Auth::user()->name }}</span>
        </div>
    </header>

    <section class="overview">
        <div class="overview-item">
            <h3>Movies</h3>
            <div class="circle" ></div>
            <p>Active Reviews</p>
        </div>
        <div class="overview-item">
            <h3>Comics</h3>
            <div class="circle" ></div>
            <p>Active Reviews</p>
        </div>
        <div class="overview-item">
            <h3>Novels</h3>
            <div class="circle" ></div>
            <p>Active Reviews</p>
        </div>
        <div class="overview-item">
            <h3>Cartoons</h3>
            <div class="circle" ></div>
            <p>Active Reviews</p>
        </div>
    </section>

    <section class="charts">
        <div class="chart">
            <h3>Review Progress</h3>
            <canvas id="reviewChart"></canvas>
        </div>
        <div class="chart">
            <h3>Ratings Overview</h3>
            <canvas id="ratingChart"></canvas>
        </div>
    </section>

    <section class="metrics">
        <div class="metric-item">
            <h4>Total Reviews</h4>
            <p></p>
        </div>
        <div class="metric-item">
            <h4>Total Users</h4>
            <p></p>
        </div>
        <div class="metric-item">
            <h4>Average Rating</h4>
            <p></p>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const reviewChart = document.getElementById('reviewChart').getContext('2d');
const ratingChart = document.getElementById('ratingChart').getContext('2d');

new Chart(reviewChart, {
    type: 'line',
    data: {
        labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        datasets: [{
            label: 'Reviews Progress',
            data: [50, 60, 70, 80, 90, 100, 110],
            backgroundColor: 'rgba(52, 152, 219, 0.2)',
            borderColor: '#3498db',
            borderWidth: 2
        }]
    },
});

new Chart(ratingChart, {
    type: 'bar',
    data: {
        labels: ['Movies', 'Comics', 'Novels', 'Cartoons'],
        datasets: [{
            label: 'Average Ratings',
            data: [4.2, 3.8, 4.5, 4.0],
            backgroundColor: '#1abc9c',
            borderColor: '#16a085',
            borderWidth: 2
        }]
    },
});

</script>
@endpush
