@extends('layouts.admin-layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Feedback</p>
                        <h1 class="h3 mb-1">Table</h1>
                        <p class="text-muted mb-0">Review and manage all customer Feedback</p>
                    </div>
                </div>

            </div>

            <section class="panel">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>All
                                Feedback</span></h2>
                        <p class="text-muted mb-0">Track and manage all customer Feedback with ease</p>
                    </div><input class="form-control form-control-sm table-search" type="search"
                        placeholder="Search Feedback" data-table-search="FeedbackTable" aria-label="Search Feedback">
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="FeedbackTable" data-searchable-table>
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Order ID</th>
                                <th>Rating</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedback as $item)
                                <tr>
                                    <td>{{ $item->user_id }}</td>
                                    <td>{{ $item->order_id }}</td>
                                    <td>{{ $item->rating }}</td>
                                    <td>{{ $item->message }}</td>
                                    <td>
                                        <form action="{{ route('editFeedback') }}" method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <input type="hidden" name="action" value="edit">
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                        <form action="{{ route('deleteFeedback') }}" method="POST" class="d-inline delete-form">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
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
