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
                <li class="breadcrumb-item">
                    <a href="{{ route('products.index') }}" class="text-decoration-none">
                        <i class="bi bi-box-seam"></i> Products
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    <i class="bi bi-pencil-square"></i> Edit Product
                </li>
            </ol>
        </nav>

        <!-- Form Section -->
        <div class="bg-white p-5 rounded-bottom shadow-sm border">
            <form method="POST" action="{{ route('products.update', $product) }}">
                @csrf
                @method('PUT')

                <!-- Product Name -->
                <div class="mb-4">
                    <label class="form-label fw-bold fs-5">
                        <i class="bi bi-box text-primary"></i> Product Name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $product->name) }}"
                           required>
                    @error('name')
                    <div class="invalid-feedback">
                        <i class="bi bi-exclamation-circle"></i> {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- Price -->
                <div class="mb-4">
                    <label class="form-label fw-bold fs-5">
                        <i class="bi bi-currency-dollar text-success"></i> Price
                        <span class="text-danger">*</span>
                    </label>
                    <input type="number"
                           name="price"
                           class="form-control @error('price') is-invalid @enderror"
                           value="{{ old('price', $product->price) }}"
                           required>
                    @error('price')
                    <div class="invalid-feedback">
                        <i class="bi bi-exclamation-circle"></i> {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- Category -->
                <div class="mb-4">
                    <label class="form-label fw-bold fs-5">
                        <i class="bi bi-tags-fill text-warning"></i> Category
                        <span class="text-danger">*</span>
                    </label>
                    <select name="category_id"
                            class="form-select @error('category_id') is-invalid @enderror"
                            required>
                        <option value="">-- Select Category --</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}"
                                {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="invalid-feedback">
                        <i class="bi bi-exclamation-circle"></i> {{ $message }}
                    </div>
                    @enderror
                </div>

                <hr class="my-4">

                <!-- Actions -->
                <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-primary shadow">
                        <i class="bi bi-save-fill"></i> Update Product
                    </button>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-x-circle"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
