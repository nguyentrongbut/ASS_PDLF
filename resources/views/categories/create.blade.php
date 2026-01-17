@extends('layouts.app')

@section('content')
    <div class="container-fluid px-5 py-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb bg-light p-3 rounded shadow-sm">
                <li class="breadcrumb-item">
                    <a href="{{ route('categories.index') }}" class="text-decoration-none">
                        <i class="bi bi-house-door"></i> Categories
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    <i class="bi bi-plus-lg"></i> Add Category
                </li>
            </ol>
        </nav>

        <!-- Form Section -->
        <div class="bg-white p-5 rounded-bottom shadow-sm border">
            <form method="POST" action="{{ route('categories.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="form-label fw-bold fs-5">
                        <i class="bi bi-tag-fill text-primary"></i> Category Name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text"
                           name="name"
                           id="name"
                           class="form-control @error('name') is-invalid @enderror"
                           placeholder="Enter category name..."
                           value="{{ old('name') }}"
                           required
                           autofocus>
                    @error('name')
                    <div class="invalid-feedback">
                        <i class="bi bi-exclamation-circle"></i> {{ $message }}
                    </div>
                    @enderror
                </div>

                <hr class="my-4">

                <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-success shadow">
                        <i class="bi bi-check-circle-fill"></i> Save Category
                    </button>
                    <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-x-circle"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
