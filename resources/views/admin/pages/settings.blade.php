<x-admin.layout>

    <div class="db-info-wrap">
        <div class="row">
            <div class="col-lg-12">
                <div class="dashboard-box">
                    <h4>Website Settings</h4>
                    <form class="form-horizontal" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="website_name_en">Website name (English)</label>
                                    <input id="website_name_en" name="website_name_en"
                                        value="{{ old('website_name_en') ?? $setting->website_name_en }}"
                                        class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="website_name_ar">Website name (Arabic)</label>
                                    <input id="website_name_ar" name="website_name_ar"
                                        value="{{ old('website_name_ar') ?? $setting->website_name_ar }}"
                                        class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Default Locale</label>
                                    <select>
                                        <option
                                            {{ old('default_locale') === 'en' || (!old('default_locale') && $setting->default_locale === 'en') ? 'selected' : '' }}>
                                            English</option>
                                        <option
                                            {{ old('default_locale') === 'ar' || (!old('default_locale') && $setting->default_locale === 'ar') ? 'selected' : '' }}>
                                            Arabic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input name="city" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input name="country" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>password</label>
                                    <input name="password" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input name="password" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Confirm Email</label>
                                    <input name="email" class="form-control" type="email">
                                </div>
                            </div>
                        </div>
                        <br>
                        <input type="submit" name="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
