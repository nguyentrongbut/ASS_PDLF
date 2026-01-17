@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <!-- Header Card -->
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="mb-1">
                            <i class="bi bi-box-seam"></i> Product Management
                        </h2>
                        <p class="text-muted mb-0">Manage your products</p>
                    </div>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Add Product
                    </a>
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class="card shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0">
                    <i class="bi bi-list-ul"></i> Product List
                    <span class="badge bg-primary ms-2">{{ $products->count() }}</span>
                </h5>
            </div>

            <div class="card-body p-0">
                @if($products->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                            <tr>
                                <th class="px-4">#</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th class="text-center" width="220">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $index => $product)
                                <tr>
                                    <td class="px-4 text-muted">{{ $index + 1 }}</td>
                                    <td>
                                        <strong>{{ $product->name }}</strong>
                                    </td>
                                    <td>
                                    <span class="badge bg-success">
                                        ${{ number_format($product->price, 2) }}
                                    </span>
                                    </td>
                                    <td>
                                    <span class="badge bg-secondary">
                                        {{ $product->category->name ?? 'N/A' }}
                                    </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('products.edit', $product) }}"
                                           class="btn btn-sm btn-outline-primary"
                                           data-bs-toggle="tooltip"
                                           title="Edit Product">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>

                                        <form action="{{ route('products.destroy', $product) }}"
                                              method="POST"
                                              class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this product?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="btn btn-sm btn-outline-danger"
                                                    data-bs-toggle="tooltip"
                                                    title="Delete Product">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <!-- Empty State -->
                    <div class="text-center py-5">
                        <i class="bi bi-inbox" style="font-size: 4rem; color: #dee2e6;"></i>
                        <h5 class="mt-3 text-muted">No Products Found</h5>
                        <p class="text-muted">Start by adding your first product</p>
                        <a href="{{ route('products.create') }}" class="btn btn-primary mt-2">
                            <i class="bi bi-plus-circle"></i> Create Product
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
    @endpush
@endsection
