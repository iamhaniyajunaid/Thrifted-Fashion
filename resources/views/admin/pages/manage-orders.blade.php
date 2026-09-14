@extends('admin.includes.layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">ORDERS</p>
                        <h1 class="h3 mb-1">Table</h1>
                        <p class="text-muted mb-0">Review and manage all customer orders</p>
                    </div>
                </div>

            </div>

            <section class="panel">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>All orders</span></h2>
                        <p class="text-muted mb-0">Track and manage all customer orders with ease</p>
                    </div><input class="form-control form-control-sm table-search" type="search"
                        placeholder="Search orders" data-table-search="ordersTable" aria-label="Search orders">
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="ordersTable" data-searchable-table>
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Product Image</th>
                                <th>Customer</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                      <tbody></tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
@endsection
