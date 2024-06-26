<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 p-6">
    @foreach ($products->get() as $prod)
    <div class="p-6 rounded-lg shadow-lg bg-green-200 hover:bg-green-300 transition duration-300 ease-in-out">
        <h3 class="text-2xl font-semibold mb-3 text-green-800">{{$prod->name}}</h3>
        <img src="{{$prod->imageURL}}" alt="{{$prod->name}}" class="h-48 w-full object-cover rounded-lg mb-4">
        <div class="italic text-gray-700">
            {{$prod->description}}
        </div>
        <div class="flex justify-between mb-4">
            <div class="text-green-600 text-lg font-bold">${{$prod->price}}</div>
            <div class="text-gray-600">Quantity: {{$prod->quantity}}</div>
        </div>
    </div>
    @endforeach
</div>

<div id="addProductMessage" hx-swap-oob="true">
    <div class="bg-green-200 text-green-800 p-4 rounded shadow-lg" role="alert">
        <strong>Success!</strong> The product has been added successfully!
    </div>
</div>
<div id="name_error" hx-swap-oob="true" >
</div> 

<div id="img_error" hx-swap-oob="true" >
</div>
 
<div id="price_error" hx-swap-oob="true" >
</div>
 
<div id="description_error" hx-swap-oob="true" >
    
</div>

 
<div id="quantity_error" hx-swap-oob="true" >
    
</div>