<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\ProductOption;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductOptionRequest;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options = ProductOption::all();
        return view(
            'admin.products.options.index',
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
        return view('admin.products.options.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductOptionRequest $request)
    {
        ProductOption::create($request->all());
        return redirect()->route('admin.products.options.index')->with('success', 'Option created successfully!');
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
    public function edit(ProductOption $option)
    {
        return view('admin.products.options.edit', ['option' => $option]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductOptionRequest $request, ProductOption $option)
    {
        $option->update($request->all());
        return redirect()->route('admin.products.options.index')->with('success', 'Option updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductOption $option)
    {
        $option->delete();
        return redirect()->route('admin.products.options.index')->with('success', 'Option deleted successfully!');
    }
}
