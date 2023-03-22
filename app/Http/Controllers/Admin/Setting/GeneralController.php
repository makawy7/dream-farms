<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\GeneralRequest;

class GeneralController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view(
            'admin.pages.settings.general',
            [
                'setting' => $setting
            ]
        );
    }

    public function update(GeneralRequest $request)
    {
        return 55;
    }
}
