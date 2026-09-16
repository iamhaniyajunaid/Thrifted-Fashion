@extends('layouts.admin-layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Management</p>
                        <h1 class="h3 mb-1">Add User</h1>
                        <p class="text-muted mb-0">Create a new user account with role and team assignments.</p>
                    </div>
                </div>
                <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="admin-users"><i
                            class="bi bi-arrow-left" aria-hidden="true"></i> Back to Users</a></div>
            </div>

            <section>
                <div class="container">
                    <form action="{{ route('editUser') }}" method="post" 
                        class="panel needs-validation" novalidate>
                        @csrf
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus"
                                        aria-hidden="true"></i><span>User Information</span></h2>
                                <p class="text-muted mb-0">Create a user account with validated fields.</p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <input type="hidden" name="action" value="update">
                            <div class="col-md-4">
                                <label class="form-label" for="userName">User Name</label>
                                <input value="{{ $user->name }}" name="name" class="form-control" type="text"
                                    required id="userName">
                                <div class="invalid-feedback">First name is required.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="userEmail">User Email</label>
                                <input value="{{ $user->email }}" name="email" class="form-control" type="email"
                                    required id="userEmail">
                                <div class="invalid-feedback">First name is required.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="userName">User Phone</label>
                                <input value="{{ $user->phone }}" name="phone" class="form-control" type="number"
                                    required id="userName">
                                <div class="invalid-feedback">First name is required.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="userRole">User Role</label>
                                <input value="{{ $user->role }}" name="role" class="form-control" type="text"
                                    required id="userRole">
                                <div class="invalid-feedback">First name is required.</div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-end gap-2 mt-4">
                            <a class="btn btn-outline-secondary" href="admin-users">Cancel</a>
                            <button class="btn btn-primary" type="submit"><i class="bi bi-person-check"
                                    aria-hidden="true"></i>
                                Create User</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
