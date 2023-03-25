<x-admin.layout>

    <div class="row">
        <div id="form" class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.settings.general.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col">
                                <label for="name_en" class="form-label">Website Name (English)</label>
                                <input id="name_en" value="{{ old('website_name_en') ?? $settings->website_name_en }}"
                                    class="form-control {{ $errors->has('website_name_en') ? 'is-invalid' : '' }}"
                                    name="website_name_en" type="text">
                                @error('website_name_en')
                                    <label class="error invalid-feedback">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="name_ar" class="form-label">Website Name (Arabic)</label>
                                <input id="name_ar" value="{{ old('website_name_ar') ?? $settings->website_name_ar }}"
                                    class="form-control {{ $errors->has('website_name_ar') ? 'is-invalid' : '' }}"
                                    name="website_name_ar" type="text">
                                @error('website_name_ar')
                                    <label class="error invalid-feedback">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" value="{{ old('email') ?? $settings->email }}"
                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                                type="text">
                            @error('email')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="default_locale" class="form-label">Default Locale</label>
                            <select class="form-select {{ $errors->has('default_locale') ? 'is-invalid' : '' }}"
                                name="default_locale" id="default_locale">
                                <option {{ $settings->default_locale === 'en' ? 'selected' : '' }} value="en">
                                    English</option>
                                <option {{ $settings->default_locale === 'ar' ? 'selected' : '' }} value="ar">
                                    Arabic</option>
                            </select>
                            @error('default_locale')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="currency" class="form-label">Currency</label>
                            <select class="form-select {{ $errors->has('currency') ? 'is-invalid' : '' }}"
                                name="currency" id="currency">
                                <option {{ $settings->currency === 'EGP' ? 'selected' : '' }} value="EGP">EGP
                                </option>
                                <option {{ $settings->currency === 'USD' ? 'selected' : '' }} value="USD">USD
                                </option>
                            </select>
                            @error('currency')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Website Logo</h6>
                                    <input name="logo_url"
                                        data-default-file="{{ asset('storage/' . $settings->logo_url) }}"
                                        data-allowed-file-extensions="jpg jpeg svg png" type="file" id="myDropify" />
                                    @error('logo_url')
                                        <label class="error invalid-feedback">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="motto_en" class="form-label">Motto (English)</label>
                            <textarea id="motto_en" class="form-control {{ $errors->has('motto_en') ? 'is-invalid' : '' }}" name="motto_en"
                                rows="4" placeholder="Website motto en .....">{{ old('motto_en') ?? $settings->motto_en }}</textarea>

                            @error('motto_en')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="motto_ar" class="form-label">Motto (Arabic)</label>
                            <textarea id="motto_ar" class="form-control {{ $errors->has('motto_ar') ? 'is-invalid' : '' }}" name="motto_ar"
                                rows="4" placeholder="Website motto ar .....">{{ old('motto_ar') ?? $settings->motto_ar }}</textarea>

                            @error('motto_ar')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="info_en" class="form-label">Information (English)</label>
                            <textarea id="info_en" class="form-control {{ $errors->has('info_en') ? 'is-invalid' : '' }}" name="info_en"
                                rows="4" placeholder="Website Info en .....">{{ old('info_en') ?? $settings->info_en }}</textarea>

                            @error('info_en')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="info_ar" class="form-label">Information (Arabic)</label>
                            <textarea id="info_ar" class="form-control {{ $errors->has('info_ar') ? 'is-invalid' : '' }}" name="info_ar"
                                rows="4" placeholder="Website Info ar .....">{{ old('info_ar') ?? $settings->info_ar }}</textarea>

                            @error('info_ar')
                                <label class="error invalid-feedback">{{ $message }}</label>
                            @enderror
                        </div>


                        <input class="btn btn-primary" type="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>

    </div>


</x-admin.layout>
