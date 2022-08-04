<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewMerchant()
    {
        $merchant = Merchant::get();
        // both line will be worked for show data in table(view file)
        // return view('merchant.view_mer', compact('merchant'));
        return view('merchant.view_mer')->with('merchant', $merchant);
    }

    public function addMerchant()
    {
        return view('merchant.add_mer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMerchant(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile_no' => 'required|min:10',
        ]);
        if ($validator->fails()) {
            return $validator->errors()->first();
        }
        $check = Merchant::create($data);
        // dd($check);
        if ($check) {
            return redirect("/merchant")->withSuccess('Great! You have Successfully loggedin');
        } else {
            return redirect("/merchant")->withSuccess('Something Gone Wrong...!!!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function show(Merchant $merchant, $id)
    {
        $single_mer = Merchant::where('id', $id)->first();
        return view('merchant.show_mer')->with('single_mer', $single_mer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function edit(Merchant $merchant, $id)
    {
        $edit_mer = Merchant::where('id', $id)->first();
        return view("merchant.edit_mer")->with('edit_mer', $edit_mer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile_no' => 'required',
        ]);
        $update = Merchant::where('id', $id)->update([
            "name" => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
        ]);

        if ($update) {
            return redirect('/merchant')
                ->with('success', 'merchant updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merchant $merchant, $id)
    {
        $delete_mer = Merchant::where('id', $id)->delete();
        // $merchant->delete();
        if ($delete_mer) {
            return redirect('/merchant')
                ->with('success', 'merchant deleted successfully');
            # code...
        }
    }
}
