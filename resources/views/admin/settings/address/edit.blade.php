<x-admin.layout>
    <div class="row">
        <div id="form" class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.settings.address.update', $address->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="address_en" class="form-label">Address (English)</label>
                            <textarea id="address_en" class="form-control {{ $errors->has('address_en') ? 'is-invalid' : '' }}" name="address_en"
                                rows="3" type="text">{{ old('address_en') ?? $address->address_en }}</textarea>
                            @error('address_en')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address_ar" class="form-label">Address (Arabic)</label>
                            <textarea id="address_ar" class="form-control {{ $errors->has('address_ar') ? 'is-invalid' : '' }}" name="address_ar"
                                rows="3" type="text">{{ old('address_ar') ?? $address->address_ar }}</textarea>
                            @error('address_ar')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number (Optional)</label>
                            <input id="phone" value="{{ old('phone') ?? $address->phone?->number }}"
                                class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone"
                                type="text">
                            @error('phone')
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
