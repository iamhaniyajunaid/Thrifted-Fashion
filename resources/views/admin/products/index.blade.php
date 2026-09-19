@extends('layouts.admin-layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Management</p>
                        <h1 class="h3 mb-1">Product</h1>
                        <p class="text-muted mb-0">Review products, categories, brands, pricing.</p>
                    </div>
                </div>
                <div class="heading-actions"><a class="btn btn-primary btn-sm" href="{{ route('product-create') }}"><i
                            class="bi bi-person-plus" aria-hidden="true"></i> Add Product</a></div>
            </div>
            <section class="row g-3 mt-1" aria-label="Product summary">
                <div class="col-12 col-sm-6 col-xl-3">
                    <article class="metric-card metric-primary">
                        <div class="metric-top">
                            <span class="metric-label">Total Products</span>
                            <span class="metric-icon">
                                <i class="bi bi-box-seam"></i>
                            </span>
                        </div>
                        <div class="metric-value">{{ number_format($productPageTotal) }}</div>
                        <div class="metric-meta">
                            <span>Products in inventory</span>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <article class="metric-card metric-success">
                        <div class="metric-top">
                            <span class="metric-label">In Stock</span>
                            <span class="metric-icon">
                                <i class="bi bi-check-circle"></i>
                            </span>
                        </div>
                        <div class="metric-value">{{ number_format($productPageInStock) }}</div>
                        <div class="metric-meta">
                            <span>Available for purchase</span>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <article class="metric-card metric-warning">
                        <div class="metric-top">
                            <span class="metric-label">Low Stock</span>
                            <span class="metric-icon">
                                <i class="bi bi-exclamation-triangle"></i>
                            </span>
                        </div>
                        <div class="metric-value">{{ number_format($productPageLowStock) }}</div>
                        <div class="metric-meta">
                            <span>Needs restocking</span>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <article class="metric-card metric-danger">
                        <div class="metric-top">
                            <span class="metric-label">Out of Stock</span>
                            <span class="metric-icon">
                                <i class="bi bi-x-circle"></i>
                            </span>
                        </div>
                        <div class="metric-value">{{ number_format($productPageOutOfStock) }}</div>
                        <div class="metric-meta">
                            <span>Currently unavailable</span>
                        </div>
                    </article>
                </div>
            </section>
            <section class="panel mt-3">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Product
                                List</span></h2>
                        <p class="text-muted mb-0">Search, review, and manage products listed.</p>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <input class="form-control form-control-sm table-search" type="search" placeholder="Search users"
                            data-table-search="usersTable" aria-label="Search users">
                        <a class="btn btn-primary btn-sm" href="{{ route('product-create') }}"><i class="bi bi-person-plus"
                                aria-hidden="true"></i> Add Product</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Launch Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td scope="col">{{ $product->name }}</td>
                                    <td scope="col">{{ $product->category }}</td>
                                    <td scope="col">{{ $product->brand }}</td>
                                    <td scope="col">{{ $product->description }}</td>
                                    <td scope="col"><img src="{{ asset('uploads/products/' . $product->image) }}"
                                            width="80"></td>
                                    <td scope="col">{{ $product->price }}</td>
                                    <td scope="col">{{ $product->discount }}</td>
                                    <td scope="col">{{ $product->stock }}</td>
                                    <td scope="col">{{ $product->launch_date }}</td>
                                    <td>
                                        <form action="{{ route('editProduct') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="action" value="edit">
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                        <form action="{{ route('deleteProduct') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </section>
        </div>
    </main>
@endsection
