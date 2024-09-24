<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(): Response
    {
        $products = Product::all();

        return response(view('product.product', ['product' => $products]));
    }


    public function create(): Response
    {
        $brands = Brand::orderBy('name', 'asc')->get()->pluck('name', 'id');
        $categories = Category::orderBy('name', 'asc')->get()->pluck('name', 'id');

        return response(view('product.create', ['brands' => $brands, 'categories' => $categories]));
        // return view('product.create');
    }

    public function store(StoreProductRequest $request): RedirectResponse
    {
        $params = $request->validated();
        if ($product = Product::create($params)) {
            $product->categories()->sync($params['category_ids']);

            return redirect(route('product.product'))->with('success', 'Added!');
        }
    }

    public function show(string $id)
    {
        // Mengambil data produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Mengirim data produk ke view 'product.show'
        return view('product.show', compact('product'));
    }

    public function edit(string $id): Response
    {
        $product = Product::findOrFail($id);
        $brands = Brand::orderBy('name', 'asc')->get()->pluck('name', 'id');
        $categories = Category::orderBy('name', 'asc')->get()->pluck('name', 'id');


        return response(view('product.edit', ['product' => $product, 'brands' => $brands, 'categories' => $categories]));
    }

    public function update(UpdateProductRequest $request, string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $params = $request->validated();

        if ($product->update($params)) {
            $product->categories()->sync($params['category_ids']);

            return redirect(route('product.product'))->with('success', 'Updated!'); 
        }
    }

    public function destroy(string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $product->categories()->detach();

        if ($product->delete()) {
            return redirect(route('product.product'))->with('success', 'Deleted!');
        }

        return redirect(route('product.product'))->with('error', 'Sorry, unable to delete this!');
    }
}