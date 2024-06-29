<div>
    <h5 class="text-2xl font-semibold mb-3 text-green-800">{{ $products->name }}</h5>
    <img src="{{ $products->imageURL }}" alt="{{ $products->name }}" class="img-fluid">
    <div class="italic text-gray-700">
        {{$products->description}}
    </div>
    <div class="flex justify-between mb-4">
        <div class="text-green-600 text-lg font-bold">${{$products->price}}</div>
        <div class="text-gray-600">Quantity: {{$products->quantity}}</div>
    </div>
</div>
