<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Models\ProductOption;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\OptionAttributeRequest;
use App\Models\OptionAttribute;

class OptionAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options = ProductOption::all()->load('attributes');
        return view(
            'admin.products.options.attributes.index',
            [
                'options' => $options
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $options = ProductOption::all();
        return view(
            'admin.products.options.attributes.create',
            [
                'options' => $options
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionAttributeRequest $request)
    {
        OptionAttribute::create($request->all());
        return redirect()->route('admin.products.options.attributes.index')->with('success', 'Option Attribute created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OptionAttribute $attribute)
    {
        $options = ProductOption::all();
        return view(
            'admin.products.options.attributes.edit',
            [
                'attribute' => $attribute,
                'options' => $options
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionAttributeRequest $request, OptionAttribute $attribute)
    {
        $attribute->update($request->all());
        return redirect()->route('admin.products.options.attributes.index')->with('success', 'Option Attribute updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OptionAttribute $attribute)
    {
        $attribute->delete();
        return redirect()->route('admin.products.options.attributes.index')->with('success', 'Option Attribute deleted successfully');
    }
}
