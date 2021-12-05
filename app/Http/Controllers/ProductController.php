<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *API KOD BLOGU
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    public function getById($id)
    {
        $result = Product::find($id);
        return view('urun',['urun' => $result]);
    }

    public function getByIdUpdate($id)
    {
        $result = Product::find($id);
        return view('urunDuzenle',['urun' => $result]);
    }

    public function yeniUrunView(){
        return view('urunEkleme');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required'
        ]);
        $add = Product::create($request->all());
        return redirect()->route('getById', ['id' => $add->id]);
    
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        if ($product) {
            $response_ = array(
                "message" => "Güncelleme İşlemi Başarılı"
            );
            return $response_;
        }
        return $product;
    }

    public function destroy($id)
    {
        $destroy = Product::destroy($id);
        
        if ($destroy) {
            $response_ = array(
                "message" => "Silme İşlemi Başarılı"
            );
            return $response_;
        }
        $response_ = array(
            "message" => "Silme İşlemi Başarısız"
        );
        return $response_;
    }

    public function search($name)
    {
        return Product::where('name', 'like', '%'.$name.'%')->orWhere('slug', 'like', '%'.$name.'%')->get();
    }


    public function urunlerView()
    {
        $products = ProductController::index();
        return view('urunler',['products' => $products]);
    }

    public function searchView($name){
       $search = ProductController::search($name);
        return view('search',['search' => $search,'name' => $name]);
    }

    public function destroy2($id)
    {
        $destroy = Product::destroy($id);
        
       return redirect()->route('urunler');
    }

    public function updateView(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);
        $productId = $request->input('id');
        $product = Product::find($productId);
        $product->update($request->all());

        if ($product) {

            return redirect()->route('getById', ['id' => $productId]);
        }
        return redirect()->back();
    }





    //API CONTROLLER
    public function getByIdProduct($id)
    {
        $result = Product::find($id);
        return $result;
    }
}