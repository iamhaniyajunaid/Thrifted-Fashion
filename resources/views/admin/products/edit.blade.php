@extends('layouts.admin-layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">PRODUCTS</p>
                        <h1 class="h3 mb-1">Edit Products</h1>
                        <p class="text-muted mb-0">Edit item in your store catalog.</p>
                    </div>
                </div>

            </div>

            <section>
                <div>
                    <form action="{{ route('editProduct') }}" method="post" enctype="multipart/form-data"
                        class="panel needs-validation" novalidate>
                        @csrf
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title">
                                    <i class="bi bi-ui-checks-grid" aria-hidden="true"></i><span>Validation Form</span>\
                                </h2>
                                <p class="text-muted mb-0">Bootstrap-ready fields with custom validation feedback.</p>
                            </div>
                        </div>
                        <div class="row g-4">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="action" value="update">
                            <div class="col-md-4">
                                <label class="form-label" for="productName">Product Name</label>
                                <input value="{{ $product->name }}" name="name" class="form-control" type="text"
                                    required id="productName">
                                <div class="invalid-feedback">Product name is required.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="productCategory">Product Category</label>
                                <input value="{{ $product->category }}" name="category" class="form-control" type="text"
                                    required id="productCategory">
                                <div class="invalid-feedback">Product Category is required.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="productBrand">Product Brand</label>
                                <input value="{{ $product->brand }}" name="brand" class="form-control" type="text"
                                    min="1" required id="productBrand">
                                <div class="invalid-feedback">Product Brand is required.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="productDescription">Product Description</label>
                                <input value="{{ $product->description }}" name="description" class="form-control"
                                    type="text" required id="productDescription">
                                <div class="invalid-feedback">Product Description is required.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="productImage">Product Image</label>
                                <img src="{{ asset('uploads/products/' . $product->image) }}" width="80">
                                <input value="{{ $product->image }}" name="image" class="form-control" type="file"
                                    id="productImage">

                                <div class="invalid-feedback">Product Image is required.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="productPrice">Product Price</label>
                                <input value="{{ $product->price }}" name="price" class="form-control" type="number"
                                    step="0.01" min="0" required id="productPrice">
                                <div class="invalid-feedback">Product price is required.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="productDiscount">Product Discount</label>
                                <input value="{{ $product->discount }}" name="discount" class="form-control" type="number"
                                    step="0.01" min="0" max="100" required id="productDiscount">
                                <div class="invalid-feedback">Product Discount is required.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="productStock">Product Stock</label>
                                <input value="{{ $product->stock }}" name="stock" class="form-control" type="number"
                                    min="0" required id="productStock">
                                <div class="invalid-feedback">Product Stock is required.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="productLaunchDate">Product Launch Date</label>
                                <input value="{{ $product->launch_date }}" name="launch_date" class="form-control"
                                    type="date" required id="productLaunchDate">
                                <div class="invalid-feedback">Product Launch Date is required.</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-upload" aria-hidden="true"></i>
                                Upload Item
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
