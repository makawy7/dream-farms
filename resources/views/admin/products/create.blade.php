<x-admin.layout>
    <div class="row">
        <div id="form" class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name_en" class="form-label">Product Name (English)</label>
                            <input id="name_en" value=""
                                class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" name="name_en"
                                type="text">
                            @error('name_en')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name_ar" class="form-label">Product Name (Arabic)</label>
                            <input id="name_ar" value=""
                                class="form-control {{ $errors->has('name_ar') ? 'is-invalid' : '' }}" name="name_ar"
                                type="text">
                            @error('name_ar')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description_en" class="form-label">Description (English)</label>
                            <textarea id="description_en" class="form-control {{ $errors->has('description_en') ? 'is-invalid' : '' }}"
                                name="description_en" rows="3" type="text">{{ old('description_en') }}</textarea>
                            @error('description_en')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description_ar" class="form-label">Description (Arabic)</label>
                            <textarea id="description_ar" class="form-control {{ $errors->has('description_ar') ? 'is-invalid' : '' }}"
                                name="description_ar" rows="3" type="text">{{ old('description_ar') }}</textarea>
                            @error('description_ar')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input id="price" value=""
                                class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price"
                                type="number">
                            @error('price')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input id="stock" value=""
                                class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}" name="stock"
                                type="text">
                            @error('stock')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select {{ $errors->has('category') ? 'is-invalid' : '' }}"
                                name="category_id" id="category">
                                <option value="">
                                </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name_en }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>

                        <input class="btn btn-primary" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-admin.layout>
