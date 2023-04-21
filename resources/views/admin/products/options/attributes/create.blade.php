<x-admin.layout>
    <div class="row">
        <div id="form" class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.products.options.attributes.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name_en" class="form-label">Attribute Name (English)</label>
                            <input id="name_en" value="{{ old('name_en') }}"
                                class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" name="name_en"
                                type="text">
                            @error('name_en')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name_ar" class="form-label">Attribute Name (Arabic)</label>
                            <input id="name_ar" value="{{ old('name_ar') }}"
                                class="form-control {{ $errors->has('name_ar') ? 'is-invalid' : '' }}" name="name_ar"
                                type="text">
                            @error('name_ar')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="option" class="form-label">Option</label>
                            <select class="form-select {{ $errors->has('option_id') ? 'is-invalid' : '' }}"
                                name="option_id" id="option">
                                <option value="">
                                </option>
                                @foreach ($options as $option)
                                    <option {{ old('option_id') === $option->id ? 'selected' : '' }}
                                        value="{{ $option->id }}">
                                        {{ $option->name_en }}</option>
                                @endforeach
                            </select>
                            @error('option_id')
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
