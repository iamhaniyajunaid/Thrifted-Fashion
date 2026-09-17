@extends('layouts.admin-layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Management</p>
                        <h1 class="h3 mb-1">Users</h1>
                        <p class="text-muted mb-0">Review accounts, roles, account status, and team ownership.</p>
                    </div>
                </div>
            </div>

            <section class="row g-3 mt-1" aria-label="User summary">
                <div class="col-12 col-sm-6 col-xl-3">
                    <article class="metric-card metric-primary">
                        <div class="metric-top">
                            <span class="metric-label">Total Users</span>
                            <span class="metric-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                        </div>
                        <div class="metric-value">8,742</div>
                        <div class="metric-meta">
                            <span class="text-success">+5.1%</span>
                            <span>this month</span>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <article class="metric-card metric-success">
                        <div class="metric-top">
                            <span class="metric-label">Active</span>
                            <span class="metric-icon"><i class="bi bi-check2-circle" aria-hidden="true"></i></span>
                        </div>
                        <div class="metric-value">7,980</div>
                        <div class="metric-meta">
                            <span class="text-success">91%</span>
                            <span>healthy accounts</span>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <article class="metric-card metric-warning">
                        <div class="metric-top">
                            <span class="metric-label">Pending</span>
                            <span class="metric-icon"><i class="bi bi-hourglass-split" aria-hidden="true"></i></span>
                        </div>
                        <div class="metric-value">184</div>
                        <div class="metric-meta">
                            <span class="text-warning">12</span>
                            <span>need approval</span>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <article class="metric-card metric-danger">
                        <div class="metric-top">
                            <span class="metric-label">Suspended</span>
                            <span class="metric-icon"><i class="bi bi-slash-circle" aria-hidden="true"></i></span>
                        </div>
                        <div class="metric-value">38</div>
                        <div class="metric-meta">
                            <span class="text-danger">4</span>
                            <span>flagged today</span>
                        </div>
                    </article>
                </div>
            </section>

            <section class="panel mt-3">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>User
                                List</span></h2>
                        <p class="text-muted mb-0">Search, review, and manage team member accounts.</p>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <input class="form-control form-control-sm table-search" type="search" placeholder="Search users"
                            data-table-search="usersTable" aria-label="Search users">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <form action="{{ route('editUser') }}" method="POST" style="display:inline;">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <input type="hidden" name="action" value="edit">
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                        <form action="{{ route('deleteUser') }}" method="POST" style="display:inline;">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
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
