<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeModels;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->mHome = new HomeModels();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }
    public function index()
    {
        if (session('cus_id') != null) {
            $countcart = $this->mHome->countCart(session('cus_id'));
            session(['count' => $countcart->tongso]);
        }
        // session()->forget('success');
        $products = $this->mHome->getAllProducts();
        $blogs = $this->mHome->getListBlogHome();
        return view('clients.home', compact('products', 'blogs'));
    }

    public function searchProduct()
    {
        $key_word = request()->input('keyword');
        $min_price = request()->input('min_price');
        $max_price = request()->input('max_price');
        $color_filter = request()->input('color');
        // dd($color_filter);
        $views = request()->input('views');
        $order_by = request()->input('order_by');
        if ($min_price == null) {
            $min_price = 0;
        }
        if ($max_price == null) {
            $max_price = 9999999;
        }
        $products = $this->mHome->getProductFromSearch($key_word, $min_price, $max_price, $views, $order_by, $color_filter);
        // dd($products);
        return view('clients.search_product', compact('products', 'min_price', 'max_price'));
    }

    public function categoryWithParent($category_parent = null, $category = null, Request $request)
    {
        $products = $this->mHome->getCategoryWithParentID($category_parent, $category);
        $min_price = 0;
        $max_price = 9999999;
        $color_filter = request()->input('color');
        if (!empty($request->query('min_price')) || !empty($request->query('max_price')) || !empty($request->query('order'))) {
            $min_price = $request->query('min_price');
            $max_price = $request->query('max_price');
            $order = $request->query('order_by');
            $products = $this->mHome->getCategoryWithFilter($category_parent, $category, $min_price, $max_price, $order, $color_filter);
            // dd($order);
            return view('clients.category', compact('products', 'min_price', 'max_price'));
        }
        // dd($products);
        // var_dump($products->count());
        return view('clients.category', compact('products', 'min_price', 'max_price'));
    }

    public function category($category_parent = null, Request $request)
    {
        $products = $this->mHome->getCategoryWithID($category_parent);
        $min_price = 0;
        $max_price = 9999999;
        $color_filter = request()->input('color');
        if (!empty($request->query('min_price')) || !empty($request->query('max_price')) || !empty($request->query('order'))) {
            $min_price = $request->query('min_price');
            $max_price = $request->query('max_price');
            $order = $request->query('order_by');
            $products = $this->mHome->getCategoryWithFilter($category_parent, $category = null, $min_price, $max_price, $order, $color_filter);
            return view('clients.category', compact('products', 'min_price', 'max_price'));
        }
        // dd($products);
        var_dump($products->count());
        return view('clients.category', compact('products', 'min_price', 'max_price'));
    }

    public function itemDetail($id)
    {
        $product = $this->mHome->getItemWithID($id);
        $hotDeal = $this->mHome->getHotDeals();
        $productCate = $this->mHome->getProductsWithCategory($product->ID_category);
        return view('clients.item_detail', compact('product', 'hotDeal', 'productCate'));
    }
    public function cart()
    {
        $cus = session('cus_id');
        if ($cus == null) {
            return redirect()->route('accountpage');
        }
        $cart = $this->mHome->getCart($cus);
        $cusInfo = $this->mHome->getCusInfo($cus);
        $discount = 0;
        if (now()->format('H') > 17) {
            $discount = 0.3;
        }
        $hoursLeft = 0;
        $i = 0;
        foreach ($cart as $item) {
            $cart[$i]->sale_off = 0;
            if ($item->ID_date == 1) {
                $created = Carbon::parse($item->created_at);
                $expired = $created->copy()->addDay();
                $hoursLeft = Carbon::now()->diffInHours($expired, false);
                if ($hoursLeft <= 10  && $hoursLeft > 0) {
                    $cart[$i]->sale_off = 0.15;
                }
                $i++;
            }
            if ($item->ID_date == 2) {
                $created = Carbon::parse($item->created_at);
                $expired = $created->copy()->addDay(3);
                $hoursLeft = Carbon::now()->diffInHours($expired, false);
                if ($hoursLeft <= 10  && $hoursLeft > 0) {
                    $cart[$i]->sale_off = 0.15;
                }
                $i++;
            }
            if ($item->ID_date == 3) {
                $created = Carbon::parse($item->created_at);
                $expired = $created->copy()->addDay(7);
                $hoursLeft = Carbon::now()->diffInHours($expired, false);
                if ($hoursLeft <= 10  && $hoursLeft > 0) {
                    $cart[$i]->sale_off = 0.15;
                }
                $i++;
            }
            if ($item->ID_date == 4) {
                $created = Carbon::parse($item->created_at);
                $expired = $created->copy()->addDay(180);
                $hoursLeft = Carbon::now()->diffInHours($expired, false);
                if ($hoursLeft <= 10  && $hoursLeft > 0) {
                    $cart[$i]->sale_off = 0.15;
                }
                $i++;
            }
            if ($item->ID_date == 5) {
                $created = Carbon::parse($item->created_at);
                $expired = $created->copy()->addDay(365);
                $hoursLeft = Carbon::now()->diffInHours($expired, false);
                if ($hoursLeft <= 10  && $hoursLeft > 0) {
                    $cart[$i]->sale_off = 0.15;
                }
                $i++;
            }
        }
        $rank = $this->getRanking()['rank'];
        // dd($this->getRanking());
        return view('clients.cart', compact('cart', 'cusInfo', 'discount', 'rank'));
    }
    public function addToCart($id)
    {
        $new_quantity = request('quantity') ?? 1;
        $id_product = $id;
        $cus = session('cus_id');
        $order = $this->mHome->checkProducts('id_detail_' . $cus, $id_product);
        // dd($cus);
        if ($order == null) {
            $this->mHome->addToCart('id_detail_' . $cus, $id_product, 'id_order_' . $cus, $cus, date('Y-m-d'), $new_quantity);
        } else {
            $this->mHome->updateCart('id_detail_' . $cus, $id_product, $new_quantity);
        }
        $countcart = $this->mHome->countCart(session('cus_id'));
        session(['count' => $countcart->tongso]);
        return redirect()->route('cartpage');
    }
    public function updateCart($id, $quantity)
    {
        // $quantity = 1;
        $cus = session('cus_id');
        $count = $this->mHome->checkQuantity($id);
        if ($count == 0) {
            session(['error' => 'Số lượng sản phẩm đã hết']);
            return redirect()->route('cartpage');
        }
        $this->mHome->updateCartWithButton('id_detail_' . $cus, $id, $quantity);
        return redirect()->route('cartpage');
    }
    public function removeFromCart($id)
    {
        $id_product = $id;
        $cus = session('cus_id');
        $this->mHome->removeFromCart('id_detail_' . $cus, $id_product);
        // dd($id_product);
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

    public function paidBill()
    {
        // dd(request()->all());
        $cus = session('cus_id');

        $this->mHome->addBillPayment(request()->all(), $cus);
        session(['success' => 'Thanh toán thành công! Cảm ơn bạn đã mua hàng.']);
        // dd(session()->all());
        return redirect()->route('homepage');
    }
    public function customeOrder(Request $request)
    {
        $current_user = $this->mHome->getCusInfo(session('cus_id'));
        $this->mHome->addCustomOrder($request->all(), $current_user);
        session(['success' => 'Gửi yêu cầu thành công! Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.']);
        return redirect()->route('contactpage');
    }

    public function getRanking()
    {
        $id_order = 'id_order_' . session('cus_id');
        $rankings = $this->mHome->getRanking($id_order);
        $total = 0;
        foreach ($rankings as $ranking) {
            $total += $ranking->vnp_Amount;
        }
        $rank = "hat";
        if ($total >= 500000) {
            $rank = 'mam';
        }
        if ($total >= 1200000) {
            $rank = 'choi';
        }
        if ($total >= 2000000) {
            $rank = 'la';
        }
        if ($total >= 5000000) {
            $rank = 'hoa';
        }

        return [
            'rank' => $rank,
            'total' => $total
        ];;
    }
}
