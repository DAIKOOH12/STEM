<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminModels;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->mAdmin = new AdminModels();
    }
    public function index()
    {
        return view('admin.index');
    }
    public function getListProducts()
    {
        $products = $this->mAdmin->getListProducts();
        $category = $this->mAdmin->getCategories();
        $age = $this->mAdmin->getAge();
        $gender = $this->mAdmin->getGender();
        // dd($products);
        return view('admin.products.list', compact('products', 'category', 'age', 'gender'));
    }
    public function getAddView(Request $request)
    {
        $category = $this->mAdmin->getCategories();
        $age = $this->mAdmin->getAge();
        $gender = $this->mAdmin->getGender();
        return view('admin.products.add', compact('category', 'age', 'gender'));
    }
    public function addProduct(Request $request)
    {
        $productName = $request->input('product-name');
        $productCategory = $request->input('product-category');
        $productOldPrice = $request->input('product-old-price');
        $productSalePrice = $request->input('product-sale-price');
        $productQuantity = $request->input('product-quantity');
        $productDescription = $request->input('product-description');
        $productAge = $request->input('product-age');
        $productGender = $request->input('product-gender');

        $this->mAdmin->addProduct($productName, $productOldPrice, $productSalePrice, $productCategory, $productAge, $productGender, $productQuantity, $productDescription);
        session()->flash('message', 'Thêm thành công');
        // dd($request->all());
        return redirect()->route('addproduct');
    }
    public function editProduct(Request $request)
    {
        $productID = $request->input('product-id');
        $productName = $request->input('product-name');
        $productCategory = $request->input('product-category');
        $productOldPrice = $request->input('product-old-price');
        $productSalePrice = $request->input('product-sale-price');
        $productQuantity = $request->input('product-quantity');
        $productDescription = $request->input('product-description');
        $productAge = $request->input('product-age');
        $productGender = $request->input('product-gender');

        $this->mAdmin->updateProduct($productID, $productName, $productOldPrice, $productSalePrice, $productCategory, $productAge, $productGender, $productQuantity, $productDescription);

        return response()->json(['message' => 'Thành công']);
    }
    public function delProduct(Request $request){
        $productID = $request->input('product-id');
        $this->mAdmin->delProduct($productID);
        return response()->json(['message' => 'Thành công']);
    }
}
