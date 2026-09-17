@extends('layouts.admin-layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Management</p>
                        <h1 class="h3 mb-1">Add Order</h1>
                        <p class="text-muted mb-0">Create a new Order account with role and team assignments.</p>
                    </div>
                </div>
                <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="admin-orders"><i
                            class="bi bi-arrow-left" aria-hidden="true"></i> Back to Orders</a></div>
            </div>

            <section>
                <div class="container">
                    <form action="{{ route('editOrder') }}" method="post" class="panel needs-validation" novalidate>
                        @csrf
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus"
                                        aria-hidden="true"></i><span>Order Information</span></h2>
                                <p class="text-muted mb-0">Create a Order account with validated fields.</p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <input type="hidden" name="id" value="{{ $order->id }}">
                            <input type="hidden" name="action" value="update">
                            <div class="col-md-4">
                                <label class="form-label" for="orderName">Order Name</label>
                                <input value="{{ $order->name }}" name="name" class="form-control" type="text"
                                    required id="orderName">
                                <div class="invalid-feedback">First name is required.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="orderEmail">Order Email</label>
                                <input value="{{ $order->email }}" name="email" class="form-control" type="email"
                                    required id="orderEmail">
                                <div class="invalid-feedback">First name is required.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="orderPhone">Order Phone</label>
                                <input value="{{ $order->phone }}" name="phone" class="form-control" type="number"
                                    required id="orderPhone">
                                <div class="invalid-feedback">First name is required.</div>
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <textarea name="address" class="form-control">{{ $order->address }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>Payment Method</label>
                                <input type="text" name="payment_method" class="form-control"
                                    value="{{ $order->payment_method }}">
                            </div>
                            <div class="mb-3">
                                <label>Total</label>
                                <input type="number" name="total" step="0.01" class="form-control"
                                    value="{{ $order->total }}">
                            </div>
                            <div class="mb-3">
                                <label>Order Status</label>
                                <select name="order_status" class="form-control">
                                    <option value="pending" {{ $order->order_status == 'pending' ? 'selected' : '' }}>
                                        Pending</option>
                                    <option value="processing" {{ $order->order_status == 'processing' ? 'selected' : '' }}>
                                        Processing</option>
                                    <option value="completed" {{ $order->order_status == 'completed' ? 'selected' : '' }}>
                                        Completed</option>
                                    <option value="cancelled" {{ $order->order_status == 'cancelled' ? 'selected' : '' }}>
                                        Cancelled</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-end gap-2 mt-4">
                            <a class="btn btn-outline-secondary" href="admin-orders">Cancel</a>
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-person-check" aria-hidden="true"></i>
                                Create Order</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
