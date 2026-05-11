@php $galleryImages = json_decode($product->galleryImages, true); @endphp
<div class="d-flex gap-5">
    <div>
        <label class="form-label">Main Image</label>
        <div class="main-product-image">
            <img src="{{ asset($product->image) }}" class="rounded-3" width="100" height="100">
        </div>
    </div>
    @if(!empty($galleryImages))
    <div>
        <label class="form-label">Gallery Images</label>
        <div class="main-product-image d-flex gap-2">
            @foreach($galleryImages as $img)            
                <img src="{{ asset($img) }}" class="rounded-3" width="100" height="100">
            @endforeach                
        </div>
    </div>
    @endif
</div>
<form class="edit-form mt-4" action="{{ url('admin/update-product') }}" method="POST" enctype="multipart/form-data" return_url="{{ url('admin/products') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id }}">
    <div class="row">
        <div class="mb-3 col-md-4">
             <label class="form-label">Product Category *</label>
                <select class="form-control" name="categoryId" id="category">
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $category)
                    <option value="{{ $category['id'] }}" @selected($product->categoryId == $category['id'])>
                        {{ $category['category'] }}
                    </option>
                    @endforeach
                </select>
            <div class="categoryId error"></div>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Product Subcategory</label>
            <select class="form-control" name="subcategoryId" id="subcategory">
                <option value=""> -- Select -- </option>
                @foreach($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}" @selected($product->subcategoryId == $subcategory->id)>
                        {{ $subcategory->category }}
                    </option>
                @endforeach
            </select>
            <div class="subcategoryId error"></div>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Product Name *</label>
            <input type="text" class="form-control" name="productName" placeholder="Enter product name" value="{{ $product->productName }}">
            <div class="product error"></div>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">HSN Code</label>
            <input type="text" class="form-control" name="hsnCode" placeholder="Enter HSN Code" value="{{ $product->hsnCode }}">
            <div class="hsnCode error"></div>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">SKU</label>
            <input type="text" class="form-control" name="sku" placeholder="Enter SKU" value="{{ $product->sku }}">
            <div class="sku error"></div>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">MRP *</label>
            <input type="number" class="form-control" name="mrp" placeholder="Enter MRP" value="{{ $product->mrp }}">
            <div class="mrp error"></div>
        </div>
        <div class="mb-3 col-md-12">
            <h4>Prices for Different User Types</h4>
            <div class="row mt-2 pt-1">
                @foreach($userTypes as $type)
                    <div class="col-md-3 mb-3">
                        <label class="form-label">{{ $type->userType }} User Price</label>
                        <input type="number" name="prices[{{ $type->id }}]" class="form-control" placeholder="Enter price" value="{{ $productPrices[$type->id] ?? '' }}">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mb-3 col-md-12">
            <label class="form-label">Description *</label>
            <textarea class="ckeditor" name="description" placeholder="Product Description">{{ $product->description }}</textarea>
            <div class="description error"></div>
        </div>
        <div class="mb-3 col-md-12">
            <label class="form-label">Product Features</label>
            <textarea class="ckeditor" name="features" placeholder="Product features">{{ $product->features }}</textarea>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Product Image </label>
            <input type="file" class="form-control image-file" name="image">
            <div class="image error"></div>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Gallery Images (Maximum 5)</label>
            <input type="file" class="form-control image-file" name="galleryImages[]" multiple>
            <div class="galleryImages error"></div>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Status *</label>
            <select class="form-control" name="status">
                <option value="1" @selected($product->status == 1)>Active</option>
                <option value="0" @selected($product->status == 0)>Non Active</option>
            </select>
        </div>                                          
        <div class="mb-3 row">
            <div class="col-12 text-center">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Update</button>
                <div class="message error"></div>
            </div>
        </div>
    </div>
</form>

<script src="{{ asset('assets/admin/libs/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>