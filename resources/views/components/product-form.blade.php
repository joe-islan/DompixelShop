<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" id="name" class="form-control" name="name" value="{{ $name ?? '' }}" required>
</div>
<div class="form-group">
    <label for="description">Description:</label>
    <textarea id="description" class="form-control" name="description">{{ $description ?? '' }}</textarea>
</div>
<div class="form-group">
    <label for="price">Price:</label>
    <input type="number" id="price" class="form-control" step="0.01" name="price" value="{{ $price ?? '' }}" required>
</div>
<div class="form-group">
    <label for="stock_quantity">Stock Quantity:</label>
    <input type="number" id="stock_quantity" class="form-control" name="stock_quantity" value="{{ $quantity ?? '' }}" required>
</div>
{{ $slot }}
