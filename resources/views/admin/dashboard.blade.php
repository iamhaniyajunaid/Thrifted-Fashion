@extends('layouts.admin-layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Overview</p>
                        <h1 class="h3 mb-1">Dashboard</h1>
                        <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.
                        </p>
                    </div>
                </div>
            </div>

            <section class="row g-3 mt-1" aria-label="Dashboard metrics">
                <div class="col-12 col-sm-6 col-xl-3">
                    <article class="metric-card metric-primary">
                        <div class="metric-top">
                            <span class="metric-label">Revenue</span>
                            <span class="metric-icon"><i class="bi bi-currency-dollar" aria-hidden="true"></i></span>
                        </div>
                        <div class="metric-value">${{ number_format($revenue, 2) }}</div>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <article class="metric-card metric-success">
                        <div class="metric-top">
                            <span class="metric-label">Orders</span>
                            <span class="metric-icon"><i class="bi bi-bag-check" aria-hidden="true"></i></span>
                        </div>
                        <div class="metric-value">{{ number_format($orders) }}</div>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <article class="metric-card metric-warning">
                        <div class="metric-top">
                            <span class="metric-label">Customers</span>
                            <span class="metric-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                        </div>
                        <div class="metric-value">{{ number_format($customers) }}</div>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <article class="metric-card metric-danger">
                        <div class="metric-top">
                            <span class="metric-label">Feedback</span>
                            <span class="metric-icon"><i class="bi bi-chat-square-text" aria-hidden="true"></i></span>
                        </div>
                        <div class="metric-value">{{ number_format($tickets) }}</div>
                        <div class="metric-meta">
                            <span class="text-danger">{{ $urgentTickets }} low ratings</span>
                            <span>need attention</span>
                        </div>
                    </article>
                </div>
            </section>

            <section class="row g-3 mt-1">
                <div class="col-12 col-xl-8">
                    <div class="panel">
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-graph-up-arrow"
                                        aria-hidden="true"></i><span>Sales Performance</span></h2>
                                <p class="text-muted mb-0">Monthly revenue compared with operational targets.</p>
                            </div>
                            <a class="btn btn-light btn-sm" href="admin-reports">View Details</a>
                        </div>
                        <div class="chart-bars" aria-label="Monthly revenue">
                            @php
                                $maxRevenue = max($monthlyRevenue->max('revenue') ?? 1, 1);
                            @endphp
                            @foreach ($monthlyRevenue as $month)
                                @php
                                    $barHeight = max(8, ($month->revenue / $maxRevenue) * 100);
                                    $monthName = \Carbon\Carbon::create($month->year, $month->month, 1)->format('M');
                                @endphp
                                <div class="chart-column">
                                    <div class="chart-bar-wrapper">
                                        <span class="chart-bar" style="height: {{ $barHeight }}%;"
                                            title="{{ $monthName }}: ${{ number_format($month->revenue, 2) }}">
                                        </span>
                                    </div>
                                    <small>{{ $monthName }}</small>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-4">
                    <div class="panel h-100">
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title">
                                    <i class="bi bi-bag-check" aria-hidden="true"></i>
                                    <span>Recent Orders</span>
                                </h2>
                                <p class="text-muted mb-0">
                                    Latest customer orders.
                                </p>
                            </div>
                        </div>
                        <div class="activity-list">
                            @foreach ($recentOrders as $order)
                                <div class="activity-item">
                                    <span class="activity-dot{{ $order->order_status === 'completed' ? 'bg-success' : ($order->order_status === 'cancelled' ? 'bg-danger' : 'bg-warning') }}"></span>
                                    <div>
                                        <p class="mb-1 fw-semibold">{{ $order->name }}</p>
                                        <p class="text-muted small mb-1">Order #{{ $order->id }} · ${{ number_format($order->total, 2) }}</p>
                                        <span class="small text-muted">{{ ucfirst($order->order_status) }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
