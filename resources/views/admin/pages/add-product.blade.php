@extends('admin.includes.layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">PRODUCTS</p>
                        <h1 class="h3 mb-1">Add New Products</h1>
                        <p class="text-muted mb-0">Create a new item in your store catalog.</p>
                    </div>
                </div>

            </div>

            <section>
                <div>
                    <form class="panel needs-validation" novalidate>
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-ui-checks-grid"
                                        aria-hidden="true"></i><span>Validation Form</span></h2>
                                <p class="text-muted mb-0">Bootstrap-ready fields with custom validation feedback.</p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6"><label class="form-label" for="product name">Product Name:</label><input
                                    class="form-control" required>
                                <div class="invalid-feedback">Full name is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="product code">Product Code:</label><input
                                    class="form-control" type="text" required>
                                <div class="invalid-feedback">Valid Product code is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="price">Price:</label><input
                                    class="form-control" type="number" min="1" required>
                                <div class="invalid-feedback">Enter a valid Price.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="image">Product Image:</label><input
                                    class="form-control" type="file" min="1" accept="image/*" required>
                                <div class="invalid-feedback">Please Choose an image</div>
                            </div>
                            <div class="col-12"><label class="form-label" for="formMessage">Product Description:</label>
                                <textarea class="form-control" rows="5" required></textarea>
                                <div class="invalid-feedback">Product Description is required.</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4"><button class="btn btn-primary" type="submit"><i
                                    class="bi bi-upload" aria-hidden="true"></i>Upload Item</button></div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
