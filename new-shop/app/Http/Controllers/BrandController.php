<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }


    public function saveBrand(Request $request){
        $this->validate($request, [
            'brand_name' => 'required|alpha'
        ]);

    }
}
