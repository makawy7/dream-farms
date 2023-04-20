<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Models\ProductVariation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductVariationRequest;

class ProductVariationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $variations = ProductVariation::all();
        return view(
            'admin.products.variations.index',
            [
                'variations' => $variations
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.variations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductVariationRequest $request)
    {
        ProductVariation::create($request->all());
        return redirect()->route('admin.products.variations.index')->with('success', 'Product variation created successfully!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductVariation $variation)
    {
        $variation->delete();
        return redirect()->route('admin.products.variations.index')->with('success', 'Product variation deleted successfully!');
    }
}
