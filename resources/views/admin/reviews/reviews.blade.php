@extends('layouts.admin-layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                    <div>
                        <h1 class="h3 mb-1">Reviews</h1>
                        <p class="text-muted mb-0">People reviews about Thrift Fashion</p>
                    </div>
                </div>
            </div>
            <section class="panel mt-3">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Reviews
                                List</span></h2>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
                        <thead>
                            <tr>
                                <th scope="col">User Name</th>
                                <th scope="col">Comment</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $review)
                                <tr>
                                    <td scope="col">{{ $review->user_name }}</td>
                                    <td scope="col">{{ $review->comment }}</td>
                                    <td scope="col">{{ $review->rating }}</td>
                                    <td scope="col">
                                        @if ($review->is_approved)
                                            <span class="badge bg-success">Approved</span>
                                        @else
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @endif
                                    </td>
                                    <td class="d-flex g-2">
                                        @if (!$review->is_approved)
                                            <form action="{{ route('admin.reviews.approve', $review->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-success me-1">Approve</button>
                                            </form>
                                        @endif
                                        <form action="{{ route('admin.reviews.delete', $review->id) }}" method="POST" class="delete-form">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center p-3">
                    {{ $reviews->links('pagination::bootstrap-5') }}</div>

            </section>
        </div>
    </main>
@endsection
