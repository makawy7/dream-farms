<x-admin.layout>
    <div class="row">
        <div id="form" class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Product Name (English)</label>
                            <input id="email" value=""
                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                                type="text">
                            @error('email')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Product Name (Arabic)</label>
                            <input id="email" value=""
                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                                type="text">
                            @error('email')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address_en" class="form-label">Description (English)</label>
                            <textarea id="address_en" class="form-control {{ $errors->has('address_en') ? 'is-invalid' : '' }}" name="address_en"
                                rows="3" type="text">{{ old('address_en') }}</textarea>
                            @error('address_en')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address_ar" class="form-label">Description (Arabic)</label>
                            <textarea id="address_ar" class="form-control {{ $errors->has('address_ar') ? 'is-invalid' : '' }}" name="address_ar"
                                rows="3" type="text">{{ old('address_ar') }}</textarea>
                            @error('address_ar')
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
