<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products with pagination and search.
     * @author madhu
     */
    public function index(Request $request)
    {
        // Search by name or description (added by madhu)
        $query = Product::query();
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                  ->orWhere('description', 'like', "%$search%") ;
            });
        }
        // Paginate results (10 per page, added by madhu)
        $products = $query->orderBy('created_at', 'desc')->paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     * @author madhu
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created product in storage.
     * @author madhu
     */
    public function store(Request $request)
    {
        // Validate input (added by madhu)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
        ]);
        // Create product (added by madhu)
        Product::create($validated);
        return redirect()->route('products.index')->with('success', 'Product created successfully by madhu!');
    }

    /**
     * Display the specified product.
     * @author madhu
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified product.
     * @author madhu
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified product in storage.
     * @author madhu
     */
    public function update(Request $request, Product $product)
    {
        // Validate input (added by madhu)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
        ]);
        // Update product (added by madhu)
        $product->update($validated);
        return redirect()->route('products.index')->with('success', 'Product updated successfully by madhu!');
    }

    /**
     * Remove the specified product from storage.
     * @author madhu
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully by madhu!');
    }
}
