@extends('admin_page.layout.admin_page')

@section('title', 'Create Service')

@section('konten')

    <body>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Create Service
                        <a href="{{ url('service') }}" class="btn btn-danger float-end">Back</a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('service') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="seller_id">Seller ID</label>
                            <input type="text" name="seller_id" class="form-control" style="width: 100%" required />
                        </div>

                        <div class="mb-3">
                            <label for="service_name">Service Name</label>
                            <input type="text" name="service_name" class="form-control" style="width: 100%" required />
                        </div>

                        <div class="mb-3">
                            <label for="sku">SKU (will be generated automatically)</label>
                            <input type="text" name="sku" class="form-control" style="width: 100%" readonly />
                        </div>

                        <div class="mb-3">
                            <label for="service_time">Service Time (in minutes)</label>
                            <input type="number" name="service_time" class="form-control" style="width: 100%" />
                        </div>

                        <div class="mb-3">
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control" style="width: 100%" required />
                        </div>

                        <div class="mb-3">
                            <label for="detail_service">Service Details</label>
                            <textarea name="detail_service" class="form-control" style="width: 100%" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="category_service">Category</label>
                            <input type="text" name="category_service" class="form-control" style="width: 100%" />
                        </div>

                        <div class="mb-3">
                            <label for="brand">Brand</label>
                            <input type="text" name="brand" class="form-control" style="width: 100%" />
                        </div>

                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" style="width: 100%" required>
                                <option value="">Select Status</option>
                                <option value="pending">Pending</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="images">Service Images (max 6 pics)</label>
                            <div id="drop-area" class="border border-dashed p-3 text-center">
                                <p>Drag and drop your images here or click to select files</p>
                                <input type="file" name="images[]" id="fileElem" class="d-none" multiple
                                    accept="image/*" />
                                <label for="fileElem" class="btn btn-secondary">Select Files</label>
                            </div>
                            <div id="gallery" class="mt-3"></div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Save</button>
                        </div>
                    </form>
                </div>
            </div>

            @if ($errors->any())
                <ul class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const serviceNameInput = document.querySelector('input[name="service_name"]');
                const skuInput = document.querySelector('input[name="sku"]');
                const dropArea = document.getElementById('drop-area');
                const fileInput = document.getElementById('fileElem');
                const gallery = document.getElementById('gallery');

                serviceNameInput.addEventListener('input', function() {
                    const serviceName = serviceNameInput.value;
                    const slug = serviceName.replace(/\s+/g, '-').toLowerCase();
                    const randomPart1 = Math.random().toString(36).substring(2, 7);
                    const randomPart2 = Math.random().toString(36).substring(2, 7);
                    skuInput.value = `${slug}-${randomPart1}-${randomPart2}`;
                });

                dropArea.addEventListener('dragover', (event) => {
                    event.preventDefault();
                    dropArea.classList.add('bg-light');
                });

                dropArea.addEventListener('dragleave', () => {
                    dropArea.classList.remove('bg-light');
                });

                dropArea.addEventListener('drop', (event) => {
                    event.preventDefault();
                    dropArea.classList.remove('bg-light');
                    const files = event.dataTransfer.files;
                    handleFiles(files);
                });

                dropArea.addEventListener('click', () => {
                    fileInput.click();
                });

                fileInput.addEventListener('change', (event) => {
                    const files = event.target.files;
                    handleFiles(files);
                });

                function handleFiles(files) {
                    if (files.length > 6) {
                        alert('You can upload a maximum of 6 images.');
                        return;
                    }
                    gallery.innerHTML = '';
                    Array.from(files).forEach(file => {
                        const img = document.createElement('img');
                        img.src = URL.createObjectURL(file);
                        img.classList.add('img-thumbnail', 'm-1');
                        img.style.width = '100px';
                        img.style.height = '100px';
                        gallery.appendChild(img);
                    });
                }
            });
        </script>
    </body>

@endsection
