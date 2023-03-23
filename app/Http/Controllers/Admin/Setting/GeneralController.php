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
        $settings = Setting::first();
        return view(
            'admin.pages.settings.general',
            [
                'settings' => $settings
            ]
        );
    }

    public function update(GeneralRequest $request)
    {
        Setting::first()->update($request->all());
        return redirect()->back()->with('success', 'Settings updated successfully');
    }
}
