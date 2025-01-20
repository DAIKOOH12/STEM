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
        if (session('cus_id') != null) {
            $countcart = $this->mHome->countCart(session('cus_id'));
            session(['count' => $countcart->tongso]);
        }
        $products = $this->mHome->getAllProducts();
        // dd($products);
        return view('clients.home', compact('products'));
    }
    public function category($category_parent = null, $category = null, Request $request)
    {
        $products = $this->mHome->getCategoryWithID($category_parent, $category);
        $min_price = 0;
        $max_price = 9999999;
        if (!empty($request->query('min_price')) || !empty($request->query('max_price')) || !empty($request->query('order'))) {
            $min_price = $request->query('min_price');
            $max_price = $request->query('max_price');
            $order = $request->query('order');
            $products = $this->mHome->getCategoryWithFilter($category_parent, $category, $min_price, $max_price, $order);
            // dd($products);
            return view('clients.category', compact('products', 'min_price', 'max_price'));
        }
        // dd($products);
        // var_dump($products->count());
        return view('clients.category', compact('products', 'min_price', 'max_price'));
    }
    public function itemDetail($id)
    {
        $product = $this->mHome->getItemWithID($id);
        $hotDeal = $this->mHome->getHotDeals();
        $productCate = $this->mHome->getProductsWithCategory($product->ID_category);
        // dd($productCate);
        return view('clients.item_detail', compact('product', 'hotDeal', 'productCate'));
    }
    public function cart()
    {
        $cus = session('cus_id');
        $cart = $this->mHome->getCart($cus);
        // dd($cus);
        return view('clients.cart', compact('cart'));
    }
    public function addToCart($id)
    {
        $new_quantity = request('quantity') ?? 1;
        $id_product = $id;
        // if(request('quantity')!=null){
        //     $quantity=request('quantity');
        // }
        // else{
        //     $quantity=1;
        // }

        $cus = session('cus_id');
        $order = $this->mHome->checkProducts('id_detail_' . $cus, $id_product);
        // dd($quantity);
        if ($order == null) {
            $this->mHome->addToCart('id_detail_' . $cus, $id_product, 'id_order_' . $cus, $cus, date('Y-m-d'), $new_quantity);
        } else {
            $quantity = $order->iSoLuong;
            $this->mHome->updateCart('id_detail_' . $cus, $id_product, $quantity + $new_quantity);
        }
        $countcart = $this->mHome->countCart(session('cus_id'));
        session(['count' => $countcart->tongso]);
        return redirect()->route('cartpage');
    }
    public function removeFromCart($id)
    {
        $id_product = $id;
        $cus = session('cus_id');
        $this->mHome->removeFromCart('id_detail_' . $cus, $id_product);
        $countcart = $this->mHome->countCart(session('cus_id'));
        session(['count' => $countcart->tongso]);
        return redirect()->route('cartpage');
    }
    public function blog()
    {
        $blogs = $this->mHome->getListBlog();
        // dd($blogs);
        return view('clients.blog', compact('blogs'));
    }
    public function blogDetail($id)
    {
        $blog = $this->mHome->getBlogWithId($id);
        // dd($blog);
        return view('clients.blog_detail', compact('blog'));
    }
    public function contact()
    {
        return view('clients.contact');
    }
}
