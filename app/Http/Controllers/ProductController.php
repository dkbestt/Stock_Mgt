<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function viewProduct()
    {
        $product = Product::get();
        // both line will be worked for show data in table(view file)
        // return view('worker.view_worker', compact('worker'));
        return view('product.view_product')->with('product', $product);
    }


    public function addProduct()
    {
        $merchant = Merchant::get();
        return view('product.add_product')->with('merchant', $merchant);
    }


    public function createProduct(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'm_id' => 'required',
            'product_name' => 'required',
            'price' => 'required',
            'qty' => 'required',
        ]);
        if ($validator->fails()) {
            return $validator->errors()->first();
        }
        $check = Product::create($data);
        // dd($check);
        if ($check) {
            return redirect("/product")->withSuccess('Great! You have Successfully add product');
        } else {
            return redirect("/product")->withSuccess('Something Gone Wrong...!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
