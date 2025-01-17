<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeModels;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->mHome = new HomeModels();
    }
    public function index()
    {
        if(session('cus_id')!=null){
            $countcart=$this->mHome->countCart(session('cus_id'));
            session(['count' => $countcart->tongso]);
        }
        $products = $this->mHome->getAllProducts();
        // dd($products);
        return view('clients.home', compact('products'));
    }
    public function category($category_parent = null, $category = null, Request $request)
    {
        $products = $this->mHome->getCategoryWithID($category_parent, $category);
        $min_price=0;
        $max_price=9999999;
        if (!empty($request->query('min_price')) || !empty($request->query('max_price'))||!empty($request->query('order'))) {
            $min_price = $request->query('min_price');
            $max_price = $request->query('max_price');
            $order=$request->query('order');
            $products = $this->mHome->getCategoryWithFilter($category_parent, $category, $min_price, $max_price,$order);
            // dd($products);
            return view('clients.category', compact('products','min_price','max_price'));
        }
        // dd($products);
        // var_dump($products->count());
        return view('clients.category', compact('products','min_price','max_price'));
    }
    public function itemDetail($id)
    {
        $product = $this->mHome->getItemWithID($id);
        $hotDeal=$this->mHome->getHotDeals();
        // dd($hot_deal);
        return view('clients.item_detail',compact('product','hotDeal'));
    }
    public function cart()
    {
        $cus=session('cus_id');
        $cart=$this->mHome->getCart($cus);
        // dd($cart);
        return view('clients.cart',compact('cart'));
    }
    public function addToCart($id){
        $id_product=$id;
        $cus=session('cus_id');
        $order=$this->mHome->checkProducts('id_detail_'.$cus,$id_product);
        // dd($order);
        if($order==null){
            $this->mHome->addToCart('id_detail_'.$cus,$id_product);
        }
        else{
            $quantity=$order->iSoLuong;
            $this->mHome->updateCart('id_detail_'.$cus,$id_product,$quantity+1);
        }
        return redirect()->route('cartpage');
    }
    public function removeFromCart($id){
        $id_product=$id;
        $cus=session('cus_id');
        $this->mHome->removeFromCart('id_detail_'.$cus,$id_product);
        return redirect()->route('cartpage');
    }
    public function blog()
    {
        return view('clients.blog');
    }
    public function blogDetail()
    {
        return view('clients.blog_detail');
    }
    public function contact()
    {
        return view('clients.contact');
    }
}
