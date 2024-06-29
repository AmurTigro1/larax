@extends('templates.base')

@section('content')
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-4xl">Product Page</h1>
        </div>
        <div class="flex flex-wrap">
            <form hx-get="/api/products"
                  hx-trigger="submit"
                  hx-target="#products_list">
                <input type="text" name="filter" class="p-2 border border-gray-300 rounded" autocomplete="off" placeholder="Search Products">
            </form>
            <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add
            </button>
        </div>
    </div>
   
    <div id="products_list" class="flex flex-wrap gap-20 mt-10 p-5">
        @foreach($products as $product)
        <div class="p-6 rounded-lg shadow-lg transition duration-300 ease-in-out">
            <div class="product-item border p-3 rounded" data-id="{{ $product->id }}" hx-get="/products/{{ $product->id }}" hx-trigger="click" hx-target="#productDetailModal .modal-body" data-bs-toggle="modal" data-bs-target="#productDetailModal">
                <h2 class="text-2xl font-semibold mb-3 text-green-800">{{ $product->name }}</h2>
                <img src="{{$product->imageURL}}" alt="{{$product->name}}" class="h-48 w-full object-cover rounded-lg mb-4">
                <div class="italic text-gray-700">
                    {{$product->description}}
                </div>
                <div class="flex justify-between mb-4">
                    <div class="text-green-600 text-lg font-bold">${{$product->price}}</div>
                    <div class="text-gray-600">Quantity: {{$product->quantity}}</div>
                </div>
               
            </div>
            <div class="flex justify-end gap-2">
                <button class="btn btn-danger mt-3 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" hx-delete="/api/products/{{$product->id}}/delete">Delete</button>
                <button class="btn btn-success mt-3 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" hx-get='/products/{{$product->id}}' hx-target="body" hx-swap="innerHTML">Update</button>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Add Product Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="productForm" hx-post="/store/products"
                      hx-target="#products_list"
                      hx-swap="innerHTML"
                      hx-trigger="submit"
                      hx-on::after-request="this.reset()" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-1">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <div id="name_error"></div>
                        </div>

                        <div class="mb-1">
                            <label for="imageURL" class="form-label">Image Link</label>
                            <textarea class="form-control" id="imageURL" name="imageURL"></textarea>
                            <div id="img_error"></div>
                        </div>

                        <div class="mb-1">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                            <div id="description_error"></div>
                        </div>

                        <div class="mb-1">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price">
                            <div id="price_error"></div>
                        </div>
                        <div class="mb-1">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity">
                            <div id="quantity_error"></div>
                        </div>
                    </div>
                    <div id="addProductMessage"></div>
                    <div class="modal-footer">
                        <button type="button" id="closeModalButton" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" hx-trigger="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true" hx-trigger="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" hx-swap="innerHTML" hx-target="#confirmDeleteModal .modal-body">
                    Are you sure you want to delete?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button id="confirmDeleteButton" type="button" class="btn btn-danger" hx-delete="/api/products/{prod_id}/delete" hx-swap="none" hx-target="this" hx-trigger="click" hx-on="htmx:afterRequest: window.location.reload()">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- View Product Detail Modal -->
    {{-- <div class="modal fade" id="productDetailModal" tabindex="-1" aria-labelledby="productDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="productDetailModalLabel">Product Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Product details will be loaded here via HTMX -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection