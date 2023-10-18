<?php

namespace App\Http\Controllers;

use App\Models\Cd;
use App\Models\Product;
use App\Models\Tshirt;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $tshirts = Product::with('tshirt', 'category')->where('category_id', '1')->get();
        
        $cds = Product::with('cd', 'category')->where('category_id', '2')->get();

        // $products = Product::with('cd', 'tshirt', 'category')->get();

        // dd($products);

        return view('products', ['cds' => $cds, 'tshirts' => $tshirts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("createProduct");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->category == '1') {
            return view('createTshirt', ['category' => $request->category]);
        }

        if ($request->category == '2') {
            return view('createCd', ['category' => $request->category]);
        }
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
        $product = Product::find($id);

        if ($product->category_id == '1') {
            $product = Product::with('tshirt')->find($id);
        }

        if ($product->category_id == '2') {
            $product = Product::with('cd')->find($id);;
        }

        return view('editProduct', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::where('product_id', $id)->update([
            'product_name' => $request->name,
            'product_desc' => $request->desc,
            'product_price' => $request->price,
            'product_amount' => $request->amount
        ]);

        $product = Product::find($id);

        if ($product->category_id == '1') {
            $product->tshirt->where('product_id', $id)->update([
                'tshirt_color' => $request->color,
                'tshirt_size' => $request->size
            ]);
        }

        if ($product->category_id == '2') {
            $product->cd->where('product_id', $id)->update([
                'cd_title' => $request->title,
            ]);
        }

        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);

        return redirect('product');
    }

    public function createCd(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->name;
        $product->product_desc = $request->desc;
        $product->product_price = $request->price;
        $product->product_amount = $request->amount;
        $product->category_id = $request->category;

        $product->save();

        $cd = new Cd();
        $cd->cd_title = $request->title;

        $product->cd()->save($cd);

        return redirect('product');
    }

    public function createTshirt(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->name;
        $product->product_desc = $request->desc;
        $product->product_price = $request->price;
        $product->product_amount = $request->amount;
        $product->category_id = $request->category;

        $product->save();

        $tshirt = new Tshirt();
        $tshirt->tshirt_color = $request->color;
        $tshirt->tshirt_size = $request->size;

        $product->tshirt()->save($tshirt);

        return redirect('product');
    }
}
