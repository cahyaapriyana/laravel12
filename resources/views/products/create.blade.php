<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Product - Product Management System</title>
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

        .btn-primary {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .btn-warning {
            background: linear-gradient(45deg, var(--warning-color), #d97706);
            color: white;
        }

        .btn-secondary {
            background: linear-gradient(45deg, var(--dark-color), #374151);
            color: white;
        }

        .form-control {
            border-radius: 12px;
            border: 2px solid #e5e7eb;
            padding: 12px 16px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
            background: white;
        }

        .form-control.is-invalid {
            border-color: var(--danger-color);
            background: rgba(239, 68, 68, 0.05);
        }

        .form-label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 8px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .alert {
            border-radius: 12px;
            border: none;
            font-weight: 500;
        }

        .alert-danger {
            background: linear-gradient(45deg, rgba(239, 68, 68, 0.1), rgba(220, 38, 38, 0.1));
            color: var(--danger-color);
            border-left: 4px solid var(--danger-color);
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

        .form-section {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .form-section-title {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .form-section-title i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .file-upload-area {
            border: 2px dashed var(--primary-color);
            border-radius: 12px;
            padding: 40px 20px;
            text-align: center;
            background: rgba(99, 102, 241, 0.05);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .file-upload-area:hover {
            background: rgba(99, 102, 241, 0.1);
            border-color: var(--secondary-color);
        }

        .file-upload-area i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .file-upload-text {
            color: var(--dark-color);
            font-weight: 600;
            margin-bottom: 5px;
        }

        .file-upload-hint {
            color: #6b7280;
            font-size: 0.875rem;
        }

        .preview-image {
            max-width: 200px;
            max-height: 200px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            margin-top: 15px;
        }

        .character-counter {
            font-size: 0.75rem;
            color: #6b7280;
            text-align: right;
            margin-top: 5px;
        }

        .character-counter.warning {
            color: var(--warning-color);
        }

        .character-counter.danger {
            color: var(--danger-color);
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

        .breadcrumb-nav {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 15px 25px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .breadcrumb-item a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb-item a:hover {
            color: white;
        }

        .breadcrumb-item.active {
            color: white;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                
                <!-- Breadcrumb Navigation -->
                <nav class="breadcrumb-nav fade-in-up">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('products.index') }}">
                                <i class="fas fa-home me-1"></i>Products
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <i class="fas fa-plus me-1"></i>Add New Product
                        </li>
                    </ol>
                </nav>

                <!-- Header Section -->
                <div class="header-section fade-in-up" style="animation-delay: 0.1s;">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h1 class="header-title">
                                <i class="fas fa-plus-circle me-3"></i>
                                Add New Product
                            </h1>
                            <p class="header-subtitle">
                                Create a new product entry for your inventory
                            </p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="{{ route('products.index') }}" class="btn btn-modern btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i>
                                Back to Products
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Main Form Card -->
                <div class="card fade-in-up" style="animation-delay: 0.2s;">
                    <div class="card-body p-4">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
                            @csrf

                            <!-- Product Image Section -->
                            <div class="form-section">
                                <div class="form-section-title">
                                    <i class="fas fa-image"></i>
                                    Product Image
                                </div>
                                <div class="file-upload-area" onclick="document.getElementById('imageInput').click()">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <div class="file-upload-text">Click to upload product image</div>
                                    <div class="file-upload-hint">PNG, JPG, JPEG up to 2MB</div>
                                    <input type="file" id="imageInput" class="form-control d-none @error('image') is-invalid @enderror" 
                                           name="image" accept="image/*" onchange="previewImage(this)">
                                </div>
                                <div id="imagePreview" class="text-center" style="display: none;">
                                    <img id="previewImg" class="preview-image" alt="Preview">
                                </div>
                                @error('image')
                                    <div class="alert alert-danger mt-3">
                                        <i class="fas fa-exclamation-triangle me-2"></i>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Product Details Section -->
                            <div class="form-section">
                                <div class="form-section-title">
                                    <i class="fas fa-info-circle"></i>
                                    Product Details
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">
                                            <i class="fas fa-tag me-1"></i>Product Title
                                        </label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                               name="title" value="{{ old('title') }}" 
                                               placeholder="Enter product title" maxlength="100">
                                        <div class="character-counter">
                                            <span id="titleCounter">0</span>/100 characters
                                        </div>
                                        @error('title')
                                            <div class="alert alert-danger mt-2">
                                                <i class="fas fa-exclamation-triangle me-2"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">
                                            <i class="fas fa-align-left me-1"></i>Description
                                        </label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                                  name="description" rows="5" 
                                                  placeholder="Enter product description" maxlength="1000">{{ old('description') }}</textarea>
                                        <div class="character-counter">
                                            <span id="descriptionCounter">0</span>/1000 characters
                                        </div>
                                        @error('description')
                                            <div class="alert alert-danger mt-2">
                                                <i class="fas fa-exclamation-triangle me-2"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Category Section -->
                            <div class="form-section">
                                <div class="form-section-title">
                                    <i class="fas fa-list me-1"></i> Kategori Produk
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="category_id">
                                            <i class="fas fa-tags me-1"></i> Pilih Kategori
                                        </label>
                                        <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                            <option value="">-- Pilih Kategori --</option>
                                            @foreach($categories as $cat)
                                                <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="alert alert-danger mt-2">
                                                <i class="fas fa-exclamation-triangle me-2"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Pricing & Stock Section -->
                            <div class="form-section">
                                <div class="form-section-title">
                                    <i class="fas fa-chart-line"></i>
                                    Pricing & Inventory
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            <i class="fas fa-dollar-sign me-1"></i>Price (Rp)
                                        </label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror" 
                                               name="price" value="{{ old('price') }}" 
                                               placeholder="Enter product price" min="0">
                                        @error('price')
                                            <div class="alert alert-danger mt-2">
                                                <i class="fas fa-exclamation-triangle me-2"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            <i class="fas fa-boxes me-1"></i>Stock Quantity
                                        </label>
                                        <input type="number" class="form-control @error('stock') is-invalid @enderror" 
                                               name="stock" value="{{ old('stock') }}" 
                                               placeholder="Enter stock quantity" min="0">
                                        @error('stock')
                                            <div class="alert alert-danger mt-2">
                                                <i class="fas fa-exclamation-triangle me-2"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <button type="reset" class="btn btn-modern btn-warning">
                                    <i class="fas fa-undo me-2"></i>
                                    Reset Form
                                </button>
                                <button type="submit" class="btn btn-modern btn-primary">
                                    <i class="fas fa-save me-2"></i>
                                    Save Product
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        // Initialize CKEditor
        CKEDITOR.replace('description', {
            height: 200,
            removePlugins: 'elementspath,resize',
            toolbar: [
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'insert', items: ['Image', 'Table'] },
                { name: 'styles', items: ['Styles', 'Format'] }
            ]
        });

        // Character counter for title
        document.querySelector('input[name="title"]').addEventListener('input', function() {
            const counter = document.getElementById('titleCounter');
            const length = this.value.length;
            counter.textContent = length;
            
            if (length > 80) {
                counter.parentElement.classList.add('warning');
                counter.parentElement.classList.remove('danger');
            } else if (length > 95) {
                counter.parentElement.classList.add('danger');
                counter.parentElement.classList.remove('warning');
            } else {
                counter.parentElement.classList.remove('warning', 'danger');
            }
        });

        // Character counter for description
        CKEDITOR.instances.description.on('change', function() {
            const content = this.getData();
            const counter = document.getElementById('descriptionCounter');
            const length = content.length;
            counter.textContent = length;
            
            if (length > 800) {
                counter.parentElement.classList.add('warning');
                counter.parentElement.classList.remove('danger');
            } else if (length > 950) {
                counter.parentElement.classList.add('danger');
                counter.parentElement.classList.remove('warning');
            } else {
                counter.parentElement.classList.remove('warning', 'danger');
            }
        });

        // Image preview functionality
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            const previewImg = document.getElementById('previewImg');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.style.display = 'block';
                }
                
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.style.display = 'none';
            }
        }

        // Form submission with loading state
        document.getElementById('productForm').addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.classList.add('btn-loading');
            submitBtn.innerHTML = '<span class="loading-spinner spinner-border spinner-border-sm me-2"></span>Saving...';
        });

        // Initialize character counters on page load
        document.addEventListener('DOMContentLoaded', function() {
            const titleInput = document.querySelector('input[name="title"]');
            const titleCounter = document.getElementById('titleCounter');
            titleCounter.textContent = titleInput.value.length;
            
            const descriptionEditor = CKEDITOR.instances.description;
            if (descriptionEditor) {
                const descriptionCounter = document.getElementById('descriptionCounter');
                descriptionCounter.textContent = descriptionEditor.getData().length;
            }
        });
    </script>

</body>
</html>