<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details - Product Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
            transition: all 0.3s ease;
        }
        .product-image {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
            margin: 0 auto;
            display: block;
        }
        .product-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #4f46e5;
            margin-bottom: 10px;
        }
        .badge-price {
            background: linear-gradient(45deg, #10b981, #059669);
            color: #fff;
            font-size: 1.1rem;
            padding: 10px 20px;
            border-radius: 12px;
            font-weight: 600;
            margin-right: 10px;
        }
        .badge-stock {
            background: linear-gradient(45deg, #3b82f6, #2563eb);
            color: #fff;
            font-size: 1.1rem;
            padding: 10px 20px;
            border-radius: 12px;
            font-weight: 600;
        }
        .badge-stock.out {
            background: linear-gradient(45deg, #ef4444, #dc2626);
        }
        .product-description {
            font-size: 1.05rem;
            color: #374151;
            margin-top: 20px;
            margin-bottom: 20px;
            background: rgba(99,102,241,0.05);
            border-radius: 12px;
            padding: 18px 20px;
            min-height: 80px;
        }
        .back-btn {
            display: inline-flex;
            align-items: center;
            border-radius: 10px;
            font-weight: 600;
            padding: 7px 18px;
            border: none;
            background: #fff;
            color: #6366f1;
            box-shadow: 0 2px 8px rgba(99,102,241,0.10);
            transition: all 0.2s;
            margin-bottom: 30px;
            margin-top: 10px;
            margin-left: 10px;
            font-size: 1rem;
            text-decoration: none;
            border: 2px solid #e0e7ff;
        }
        .back-btn:hover, .back-btn:focus {
            background: linear-gradient(45deg, #6366f1, #8b5cf6);
            color: #fff;
            box-shadow: 0 6px 18px rgba(99,102,241,0.18);
            border-color: #6366f1;
            text-decoration: none;
        }
        @media (max-width: 991px) {
            .product-image {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <a href="{{ route('products.index') }}" class="back-btn mb-4">
                    <i class="fas fa-arrow-left me-2"></i>Back to Products
                </a>
                <div class="row g-4 align-items-center">
                    <div class="col-md-5 text-center">
                        <div class="card p-4 mb-3">
                            <img src="{{ asset('/storage/products/'.$product->image) }}" class="product-image" alt="{{ $product->title }}">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card p-4">
                            <div class="product-title mb-2">
                                {{ $product->title }}
                            </div>
                            <div class="mb-3">
                                <span class="badge badge-price">
                                    <i class="fas fa-money-bill-wave me-1"></i>
                                    Rp {{ number_format($product->price,0,',','.') }}
                                </span>
                                @if($product->stock > 0)
                                    <span class="badge badge-stock">
                                        <i class="fas fa-check me-1"></i>
                                        {{ $product->stock }} in stock
                                    </span>
                                @else
                                    <span class="badge badge-stock out">
                                        <i class="fas fa-times me-1"></i>
                                        Out of Stock
                                    </span>
                                @endif
                            </div>
                            <div class="product-description">
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>