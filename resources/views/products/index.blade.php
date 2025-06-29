<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6366f1;
            --secondary-color: #8b5cf6;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --warning-color: #f59e0b;
            --info-color: #3b82f6;
            --dark-color: #1f2937;
            --light-color: #f8fafc;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .btn-modern {
            border-radius: 12px;
            font-weight: 600;
            padding: 12px 24px;
            border: none;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.875rem;
        }

        .btn-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .btn-add {
            background: linear-gradient(45deg, var(--success-color), #059669);
            color: white;
        }

        .btn-show {
            background: linear-gradient(45deg, var(--dark-color), #374151);
            color: white;
        }

        .btn-edit {
            background: linear-gradient(45deg, var(--info-color), #2563eb);
            color: white;
        }

        .btn-delete {
            background: linear-gradient(45deg, var(--danger-color), #dc2626);
            color: white;
        }

        .table {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .table thead th {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.875rem;
            padding: 20px 15px;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: rgba(99, 102, 241, 0.05);
            transform: scale(1.01);
        }

        .table tbody td {
            padding: 20px 15px;
            vertical-align: middle;
            border-color: #e5e7eb;
        }

        .product-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .product-image:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .stats-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stats-label {
            font-size: 0.875rem;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #6b7280;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 20px;
            opacity: 0.5;
        }

        .pagination, .custom-pagination {
            justify-content: center;
            margin-top: 30px;
            margin-bottom: 0;
        }
        .custom-pagination .page-item {
            margin: 0 3px;
        }
        .custom-pagination .page-link {
            border-radius: 10px;
            border: none;
            color: var(--primary-color);
            font-weight: 600;
            background: white;
            transition: all 0.2s;
            box-shadow: 0 2px 8px rgba(99,102,241,0.07);
        }
        .custom-pagination .page-link:hover {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: #fff;
        }
        .custom-pagination .page-item.active .page-link {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: #fff;
            border: none;
        }
        .custom-pagination .page-item.disabled .page-link {
            background: #e5e7eb;
            color: #a1a1aa;
        }
        /* Hide Laravel default pagination info */
        .pagination-info, .dataTables_info {
            display: none !important;
        }

        .header-section {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .header-title {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .header-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        .loading-spinner {
            display: none;
        }

        .btn-loading .loading-spinner {
            display: inline-block;
        }
    </style>
</head>
<body>

    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">
                
                <!-- Header Section -->
                <div class="header-section fade-in-up">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h1 class="header-title">
                                <i class="fas fa-boxes me-3"></i>
                                Product Management
                            </h1>
                            <p class="header-subtitle">
                                Manage your product inventory with ease and efficiency
                            </p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="{{ route('products.create') }}" class="btn btn-modern btn-add">
                                <i class="fas fa-plus me-2"></i>
                                Add New Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4 fade-in-up" style="animation-delay: 0.2s;">
                    <div class="col-md-3">
                        <div class="stats-card">
                            <div class="stats-number">{{ $products->total() }}</div>
                            <div class="stats-label">Total Products</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stats-card">
                            <div class="stats-number">{{ $products->where('stock', '>', 0)->count() }}</div>
                            <div class="stats-label">In Stock</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stats-card">
                            <div class="stats-number">{{ $products->where('stock', 0)->count() }}</div>
                            <div class="stats-label">Out of Stock</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stats-card">
                            <div class="stats-number">{{ $products->count() }}</div>
                            <div class="stats-label">This Page</div>
                        </div>
                    </div>
                </div>

                <!-- Main Content Card -->
                <div class="card fade-in-up" style="animation-delay: 0.4s;">
                    <div class="card-body p-0">
                        @if($products->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">
                                                <i class="fas fa-image me-2"></i>Image
                                            </th>
                                            <th scope="col">
                                                <i class="fas fa-tag me-2"></i>Title
                                            </th>
                                            <th scope="col">
                                                <i class="fas fa-dollar-sign me-2"></i>Price
                                            </th>
                                            <th scope="col">
                                                <i class="fas fa-boxes me-2"></i>Stock
                                            </th>
                                            <th scope="col" class="text-center">
                                                <i class="fas fa-cogs me-2"></i>Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td class="text-center">
                                                    <img src="{{ asset('/storage/products/'.$product->image) }}" 
                                                         class="product-image" 
                                                         alt="{{ $product->title }}">
                                                </td>
                                                <td>
                                                    <div class="fw-bold">{{ $product->title }}</div>
                                                    <small class="text-muted">ID: {{ $product->id }}</small>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success fs-6">
                                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                                    </span>
                                                </td>
                                                <td>
                                                    @if($product->stock > 0)
                                                        <span class="badge bg-info fs-6">
                                                            <i class="fas fa-check me-1"></i>
                                                            {{ $product->stock }} units
                                                        </span>
                                                    @else
                                                        <span class="badge bg-danger fs-6">
                                                            <i class="fas fa-times me-1"></i>
                                                            Out of Stock
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('products.show', $product->id) }}" 
                                                           class="btn btn-modern btn-show btn-sm me-2">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('products.edit', $product->id) }}" 
                                                           class="btn btn-modern btn-edit btn-sm me-2">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form onsubmit="return confirmDelete(event)" 
                                                              action="{{ route('products.destroy', $product->id) }}" 
                                                              method="POST" 
                                                              class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-modern btn-delete btn-sm">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="empty-state">
                                <i class="fas fa-box-open"></i>
                                <h4 class="mb-3">No Products Found</h4>
                                <p class="mb-4">Start by adding your first product to the inventory.</p>
                                <a href="{{ route('products.create') }}" class="btn btn-modern btn-add">
                                    <i class="fas fa-plus me-2"></i>
                                    Add Your First Product
                                </a>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Pagination -->
                @if($products->hasPages())
                    <nav aria-label="Product pagination" class="fade-in-up" style="animation-delay: 0.6s;">
                        <ul class="pagination custom-pagination">
                            {{-- Previous Page Link --}}
                            @if ($products->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $products->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                @if ($page == $products->currentPage())
                                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($products->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{ $products->nextPageUrl() }}" rel="next">&raquo;</a></li>
                            @else
                                <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                            @endif
                        </ul>
                    </nav>
                @endif

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Enhanced SweetAlert messages
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "Success!",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                toast: true,
                position: 'top-end',
                background: '#10b981',
                color: '#fff'
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "Error!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                toast: true,
                position: 'top-end',
                background: '#ef4444',
                color: '#fff'
            });
        @endif

        // Enhanced delete confirmation
        function confirmDelete(event) {
            event.preventDefault();
            const form = event.target;
            
            Swal.fire({
                title: 'Are you sure?',
                text: "This action cannot be undone!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
            
            return false;
        }

        // Add loading states to buttons
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn-modern');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    if (!this.classList.contains('btn-delete')) {
                        this.classList.add('btn-loading');
                        this.innerHTML = '<span class="loading-spinner spinner-border spinner-border-sm me-2"></span>Loading...';
                    }
                });
            });
        });
    </script>

</body>
</html>