<x-admin.layout>
    <div class="row">
        <div id="form" class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.products.categories.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name_en" class="form-label">Category Name (English)</label>
                            <input id="name_en" value="{{ old('name_en') }}"
                                class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" name="name_en"
                                type="text">
                            @error('name_en')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name_ar" class="form-label">Category Name (Arabic)</label>
                            <input id="name_ar" value="{{ old('name_ar') }}"
                                class="form-control {{ $errors->has('name_ar') ? 'is-invalid' : '' }}" name="name_ar"
                                type="text">
                            @error('name_ar')
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
