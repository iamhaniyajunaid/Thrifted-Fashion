@extends('layouts.admin-layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Management</p>
                        <h1 class="h3 mb-1">Add feedback</h1>
                        <p class="text-muted mb-0">Create a new feedback account with role and team assignments.</p>
                    </div>
                </div>
                <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="admin-feedback"><i
                            class="bi bi-arrow-left" aria-hidden="true"></i> Back to feedbacks</a></div>
            </div>

            <section>
                <div class="container">
                    <form action="{{ route('editFeedback') }}" method="post" class="panel needs-validation" novalidate>
                        @csrf
                        <input type="hidden" name="id" value="{{ $feedback->id }}">
                        <input type="hidden" name="action" value="update">
                        <div class="mb-3">
                            <label class="form-label">Rating</label>
                            <select name="rating" class="form-control">
                                <option value="1" {{ $feedback->rating == 1 ? 'selected' : '' }}>1</option>
                                <option value="2" {{ $feedback->rating == 2 ? 'selected' : '' }}>2</option>
                                <option value="3" {{ $feedback->rating == 3 ? 'selected' : '' }}>3</option>
                                <option value="4" {{ $feedback->rating == 4 ? 'selected' : '' }}>4</option>
                                <option value="5" {{ $feedback->rating == 5 ? 'selected' : '' }}>5</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-control" rows="5">{{ $feedback->message }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Update Feedback</button>
                        <a href="{{ route('admin-feedback') }}" class="btn btn-secondary">Cancel</a>
                </div>
                </form>
        </div>
        </section>
        </div>
    </main>
@endsection
