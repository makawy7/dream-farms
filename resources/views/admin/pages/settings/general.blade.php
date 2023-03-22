<x-admin.layout>

    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">General Settings</h1>
                    @if ($errors->any())
                        {{ $errors }}
                    @endif
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
                <div class="row">

                    <div class="col-xl-12">
                        <div x-data="{ submitForm: () => $el.submit() }" method="POST" action="{{ route('admin.settings.general.update') }}"
                            class="card">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="website_name_en">Website Name
                                                (English):</label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('website_name_en') ? 'is-invalid' : '' }}"
                                                name="website_name_en" id="website_name_en"
                                                value="{{ old('website_name_en') ?? $setting->website_name_en }}"
                                                placeholder="Website Name In Arabic">
                                            @error('website_name_en')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="website_name_ar">Website Name
                                                (Arabic):</label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('website_name_ar') ? 'is-invalid' : '' }}"
                                                name="website_name_ar" id="website_name_ar"
                                                value="{{ old('website_name_ar') ?? $setting->website_name_ar }}"
                                                placeholder="Website Name In English">
                                            @error('website_name_ar')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label  " for="email">Website Email:</label>
                                    <input type="email" value="{{ old('email') ?? $setting->email }}"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        id="email" name="email" placeholder="Email address">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Default Locale:</label>
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <select name="default_locale"
                                                class="form-control select2 form-select  {{ $errors->has('default_locale') ? 'is-invalid' : '' }}">
                                                <option {{ $setting->default_locale === 'en' ? 'selected' : '' }}
                                                    value="en">English</option>
                                                <option {{ $setting->default_locale === 'ar' ? 'selected' : '' }}
                                                    value="ar">Arabic</option>
                                            </select>
                                            @error('default_locale')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Default Currency:</label>
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <select name="currency"
                                                class="form-control select2 form-select  {{ $errors->has('currency') ? 'is-invalid' : '' }}">
                                                <option {{ $setting->currency === 'EGP' ? 'selected' : '' }}
                                                    value="EGP">EGP</option>
                                                <option {{ $setting->currency === 'USD' ? 'selected' : '' }}
                                                    value="USD">USD</option>
                                            </select>
                                            @error('currency')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Website Motto (English):</label>
                                    <textarea class="form-control  {{ $errors->has('motto_en') ? 'is-invalid' : '' }}" name="motto_en" rows="4">{{ old('motto_en') ?? $setting->motto_en }}</textarea>
                                    @error('motto_en')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Website Motto (Arabic):</label>
                                    <textarea class="form-control  {{ $errors->has('motto_ar') ? 'is-invalid' : '' }}" name="motto_ar" rows="4">{{ old('motto_ar') ?? $setting->motto_ar }}</textarea>
                                    @error('motto_ar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Website Information (English):</label>
                                    <textarea class="form-control  {{ $errors->has('info_en') ? 'is-invalid' : '' }}" name="info_en" rows="4">{{ old('info_en') ?? $setting->info_en }}</textarea>
                                    @error('info_en')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Website Information (Arabic):</label>
                                    <textarea class="form-control  {{ $errors->has('info_ar') ? 'is-invalid' : '' }}" name="info_ar" rows="4">{{ old('info_ar') ?? $setting->info_ar }}</textarea>
                                    @error('info_ar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="card-footer text-end">
                                <a @click="submitForm" type="submit"
                                    class="btn btn-success my-1">Update</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- ROW-1 CLOSED -->

            </div>
            <!--CONTAINER CLOSED -->

        </div>
    </div>
</x-admin.layout>
