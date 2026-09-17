@extends('layouts.admin-layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
                    <div>
                        <h1 class="h3 mb-1">WEBSITE SETTINGS</h1>
                        <p class="text-muted mb-0">Manage your website visual identity</p>
                    </div>
                </div>
            </div>
            <section>
                <div>
                    <form action="" class="panel needs-validation" method="post" novalidate>
                      @csrf
                        <div class="panel-header">
                            <div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <h3 class="h3 mt-4 text-success fw-bold">Website Branding:</h3>
                            <div class="col-md-6"><label class="form-label" for="image">Website Logo Image:</label><input
                                    class="form-control" type="file" min="1" accept="image/*" required>
                                <div class="invalid-feedback">Please Choose an image</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="image">Favicon:</label><input
                                    class="form-control" type="file" min="1" accept="image/*" required>
                                <div class="invalid-feedback">Please Choose an image</div>
                            </div>
                            <h3 class="h3 my-4 text-success fw-bold">Website Content:</h3>
                            <div class="col-md-6"><label class="form-label" for="hero heading">Hero Heading:</label><input
                                    class="form-control" type="text" required>
                                <div class="invalid-feedback">Hero Heading is required.</div>
                            </div>
                             <div class="col-md-6"><label class="form-label" for="image">Hero Background
                                    Image:</label><input class="form-control" type="file" min="1" accept="image/*"
                                    required>
                                <div class="invalid-feedback">Please Choose an image</div>
                            </div>
                            <div class="col-12"><label class="form-label" for="formMessage">Hero Description:</label>
                                <textarea class="form-control" rows="5" required></textarea>
                                <div class="invalid-feedback">Hero Description is required.</div>
                            </div>
                           
                            <h3 class="h3 mt-4 text-success fw-bold">Website Theme:</h3>
                            <label class="form-label" for="image">Select Website Theme:</label>
                            <select class="form-select" name="theme" aria-label="Default select example">
                                <option selected>Default</option>
                                <option value="1">Light</option>
                                <option value="2">Dark</option>
                                <option value="3">Custom</option>
                            </select>
                            <div class="row g-3">
                                <div class="col-6 col-md-4 mb-3"><label class="form-label" for="heading_color">Heading
                                        Color</label><div class="d-flex">
                                          <input id="heading_color" class="form-control form-control-color"
                                        name="heading_color" type="color" required>
                                        <input type="text" class="mx-3 form-control" name="heading_color_hex" value="">
                                        </div>
                                    <div class="invalid-feedback">Heading color is required.</div>
                                </div>
                                <div class="col-6 col-md-4 mb-3"><label class="form-label" for="text_color">Text
                                        Color</label><div class="d-flex">
                                          <input id="text_color" class="form-control form-control-color"
                                        name="text_color" type="color" required>
                                        <input type="text" class="mx-3 form-control" name="text_color_hex" value="">
                                        </div>
                                    <div class="invalid-feedback">text color is required.</div>
                                </div>
                                <div class="col-6 col-md-4 mb-3"><label class="form-label" for="primary_color">Primary
                                        Color</label><div class="d-flex">
                                          <input id="primary_color" class="form-control form-control-color"
                                        name="primary_color" type="color" required>
                                        <input type="text" class="mx-3 form-control" name="primary_color_hex" value="">
                                        </div>
                                    <div class="invalid-feedback">Primary color is required.</div>
                                </div>
                                <div class="col-6 col-md-4 mb-3"><label class="form-label" for="secondary_color">Secondary
                                        Color</label><div class="d-flex">
                                          <input id="secondary_color" class="form-control form-control-color"
                                        name="secondary_color" type="color" required>
                                        <input type="text" class="mx-3 form-control" name="secondary_color_hex" value="">
                                        </div>
                                    <div class="invalid-feedback">Secondary color is required.</div>
                                </div>
                                <div class="col-6 col-md-4 mb-3"><label class="form-label" for="background_color">Background
                                        Color</label><div class="d-flex">
                                          <input id="background_color" class="form-control form-control-color"
                                        name="background_color" type="color" required>
                                        <input type="text" class="mx-3 form-control" name="background_color_hex" value="">
                                        </div>
                                    <div class="invalid-feedback">Background color is required.</div>
                                </div>
                                <div class="col-6 col-md-4 mb-3"><label class="form-label" for="button_color">Button
                                        Color</label><div class="d-flex">
                                          <input id="button_color" class="form-control form-control-color"
                                        name="button_color" type="color" required>
                                        <input type="text" class="mx-3 form-control" name="button_color_hex" value="">
                                        </div>
                                    <div class="invalid-feedback">Button color is required.</div>
                                </div>
                                <div class="col-6 col-md-4 mb-3"><label class="form-label" for="btn_text_color">Button
                                        Text
                                        Color</label><div class="d-flex">
                                          <input id="btn_text_color" class="form-control form-control-color"
                                        name="btn_text_color" type="color" required>
                                        <input type="text" class="mx-3 form-control" name="btn_text_color_hex" value="">
                                        </div>
                                    <div class="invalid-feedback">Button Text color is required.</div>
                                </div>
                                <div class="col-6 col-md-4 mb-3"><label class="form-label" for="navbar_color">Navbar
                                        Color</label><div class="d-flex">
                                          <input id="navbar_color" class="form-control form-control-color"
                                        name="navbar_color" type="color" required>
                                        <input type="text" class="mx-3 form-control" name="navbar_color_hex" value="">
                                        </div>
                                    <div class="invalid-feedback">Navbar color is required.</div>
                                </div>
                                <div class="col-6 col-md-4 mb-3"><label class="form-label" for="footer_color">Footer
                                        Color</label><div class="d-flex">
                                          <input id="footer_color" class="form-control form-control-color"
                                        name="footer_color" type="color" required>
                                        <input type="text" class="mx-3 form-control" name="footer_color_hex" value="">
                                        </div>
                                    <div class="invalid-feedback">Footer color is required.</div>
                                </div>
                                <div class="col-6 col-md-4 mb-3"><label class="form-label" for="link_color">Link
                                        Color</label><div class="d-flex">
                                          <input id="link_color" class="form-control form-control-color"
                                        name="link_color" type="color" required>
                                        <input type="text" class="mx-3 form-control" name="link_color_hex" value="">
                                        </div>
                                    <div class="invalid-feedback">Link color is required.</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4"><button class="btn btn-primary" type="submit">Save
                                Changes</button></div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
