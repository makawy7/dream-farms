<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Models\FarmPhone;
use App\Models\FarmAddress;
use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\AddressRequest;

class AddressController extends Controller
{
    public function index()
    {   
        $addresses = FarmAddress::all()->load('phone');
        return view('admin.pages.settings.address.index', compact('addresses'));
    }

    public function create()
    {
        return view('admin.pages.settings.address.create');
    }
    public function store(AddressRequest $request)
    {
        $address = FarmAddress::create($request->except('phone'));
        if ($request->filled('phone')) {
            FarmPhone::create([
                'number' => $request->phone,
                'address_id' => $address->id
            ]);
        }
        return redirect()->route('admin.settings.address.index')->with('success', 'Address created successfully');
    }
}
