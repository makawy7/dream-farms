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
        $requestData = $request->all();
        if ($request->hasFile('logo_url')) {
            $requestData['logo_url'] = $request->file('logo_url')->store('images/settings');
        }
        Setting::first()->update($requestData);
        return redirect()->back()->with('success', 'Settings updated successfully');
    }
}
