@extends('templates.base')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Update Product</h3>
                    <form hx-put="/api/products/{{$product->id}}"
                          hx-trigger="submit"
                          hx-target="body"
                          hx-swap="innerHTML"
                          method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="imageURL" class="form-label">Image URL</label>
                            <textarea class="form-control" id="imageURL" name="imageURL" rows="3">{{ $product->imageURL }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $product->price }}">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                        <div class="d-grid mt-3">
                            <a href="/products" class="btn btn-primary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    document.addEventListener('htmx:configRequest', (event) => {
        event.detail.headers['X-CSRF-TOKEN'] = '{{ csrf_token() }}';
    });
</script>
