<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HomeModels extends Model
{
    use HasFactory;

    public function getAllProducts()
    {
        $products = DB::table('product as p')
            ->select('p.*', 'c.ID_category_parent', 'i.*')
            ->join('category as c', 'p.ID_category', 'c.ID_category')
            ->join('image as i', 'p.ID_image', 'i.ID_image')
            ->join('category_parent as cp', 'c.ID_category_parent', 'cp.ID_category_parent')
            ->where(function ($query) {
                $query->where('cp.ID_category_parent', 'stem-tieu-hoc')
                    ->orWhere('cp.ID_category_parent', 'stem-trung-hoc-co-so')
                    ->orWhere('cp.ID_category_parent', 'stem-trung-hoc-pho-thong');
            })
            ->where('iSoLuong','>',0)
            ->get();
        return $products;
    }
    public function getProductFromSearch($keyword, $min_price, $max_price, $views, $order_by)
    {
        $products = DB::table('product as p')
            ->select('p.*', 'c.ID_category_parent', 'i.*')
            ->join('category as c', 'p.ID_category', 'c.ID_category')
            ->join('image as i', 'p.ID_image', 'i.ID_image')
            ->join('category_parent as cp', 'c.ID_category_parent', 'cp.ID_category_parent');
        if ($keyword !== null) {
            $products->where('p.sTenSanPham', 'like', '%' . $keyword . '%');
        }
        if ($min_price !== null) {
            $products->where('p.fGiaBan', '>=', $min_price);
        }
        if ($max_price !== null) {
            $products->where('p.fGiaBan', '<=', $max_price);
        }
        if ($order_by !== null) {
            $products->orderBy('p.fGiaBan', $order_by);
        }
        if ($views !== null) {
            $products->orderBy('p.iLuotXem', 'desc');
        }
        $result = $products->paginate(8)->withQueryString();
        return $result;
    }
    public function getCategoryWithID($category_parent, $category)
    {
        $products = DB::table('product as p')
            ->select('p.*', 'c.ID_category_parent', 'i.*')
            ->join('category as c', 'p.ID_category', 'c.ID_category')
            ->join('image as i', 'p.ID_image', 'i.ID_image')
            ->join('category_parent as cp', 'c.ID_category_parent', 'cp.ID_category_parent');
        if ($category != null) {
            $products->where('c.ID_category', '=', $category);
        }
        $result = $products->paginate(8)->withQueryString();
        return $result;
    }
    public function getCategoryWithFilter($category_parent, $category, $min_price, $max_price, $order = null)
    {
        $products = DB::table('product as p')
            ->select('p.*', 'c.ID_category_parent', 'i.*')
            ->join('category as c', 'p.ID_category', 'c.ID_category')
            ->join('image as i', 'p.ID_image', 'i.ID_image')
            ->join('category_parent as cp', 'c.ID_category_parent', 'cp.ID_category_parent');
        if ($category_parent !== null) {
            $products->where('cp.ID_category_parent', "=", $category_parent);
        }
        if ($category !== null) {
            $products->where('c.ID_category', '=', $category);
        }
        if ($min_price !== null) {
            $products->where('p.fGiaBan', '>=', $min_price);
        }
        if ($max_price !== null) {
            $products->where('p.fGiaBan', '<=', $max_price);
        }
        if ($order !== null) {
            $products->orderBy('p.fGiaBan', $order);
        }
        $result = $products->paginate(8)->withQueryString();
        return $result;
    }

    public function getItemWithID($id)
    {
        $product = DB::table('product as p')
            ->select('p.*', 'i.*')
            ->join('image as i', 'p.ID_image', 'i.ID_image')
            ->where('ID_product', '=', $id)->first();
        return $product;
    }

    public function getHotDeals()
    {
        $product = DB::table('product as p')
            ->select('p.*', 'i.*')
            ->join('image as i', 'p.ID_image', 'i.ID_image')->orderBy('p.iLuotMua', 'desc')
            ->limit(4)->get();
        return $product;
    }
    public function getProductsWithCategory($id_category)
    {
        $product = DB::table('product as p')
            ->join('image as i', 'p.ID_image', 'i.ID_image')
            ->join('category as c', 'p.ID_category', 'c.ID_category')
            ->where('p.ID_category', '=', $id_category)->get();
        return $product;
    }
    public function singIn($account, $password)
    {
        $user = DB::table('member as m')
            ->join('customer as c', 'm.ID_member', 'c.ID_member')
            ->where('sTaiKhoan', '=', $account)
            ->where('sMatKhau', '=', sha1($password))->first();
        return $user;
    }
    public function checkAccount($email, $account)
    {
        $user = DB::table('member as m')
            ->join('customer as c', 'm.ID_member', 'c.ID_member')
            ->where('m.sEmail', '=', $email)
            ->orWhere('sTaiKhoan', '=', $account)
            ->first();
        return $user;
    }
    public function getAllMem()
    {
        $user = DB::table('member');
        return $user->count();
    }
    public function getAllCus()
    {
        $cus = DB::table('customer');
        return $cus->count();
    }
    public function getCusInfo($id)
    {
        $cus = DB::table('customer as c')
            ->join('member as m', 'c.ID_member', 'm.ID_member')
            ->where('c.ID_customer', '=', $id)
            ->first();
        return $cus;
    }
    public function singUp($account, $password, $quyen, $hoten, $sdt, $email, $diachi)
    {
        DB::table('member')->insert([
            [
                'ID_member' => 'id_mem_' . $this->getAllMem() + 1,
                'sXacMinhEmail' => 'verified',
                'ID_quyen' => $quyen,
                'sTaiKhoan' => $account,
                'sEmail'=> $email,
                'sMatKhau' => sha1($password),
                'isLogin' => 0
            ]
        ]);
        DB::table('customer')->insert([
            [
                'ID_customer' => 'id_cus_' . $this->getAllCus() + 1,
                'sHoTen' => $hoten,
                'sSoDienThoai' => $sdt,
                'sDiaChi' => $diachi,
                'sEmail' => $email,
                'bIsMember' => 1,
                'ID_member' => 'id_mem_' . $this->getAllMem()
            ]
        ]);
        session(['mem_id' => 'id_mem_' . $this->getAllMem() + 1, 'mem_name' => $hoten, 'cus_id' => 'id_cus_' . $this->getAllCus() + 1]);
        session()->save();
    }
    public function countCart($idCustomer)
    {
        $tongSo = DB::table('_order as o')
            ->join('customer as c', 'o.ID_customer', '=', 'c.ID_customer')
            ->join('member as m', 'c.ID_member', '=', 'm.ID_member')
            ->join('order_detail as od', 'o.ID_order_detail', '=', 'od.ID_order_detail')
            ->join('product as p', 'od.ID_product', '=', 'p.ID_Product')
            ->where('od.ID_order_detail', '=', 'id_detail_' . $idCustomer)
            ->selectRaw('COUNT(od.ID_product) as tongso')
            ->first();
        return $tongSo;
    }
    public function getCart($idCustomer)
    {
        $query = DB::table('_order as o')
            ->select(
                'od.*',
                'o.dNgayDat',
                'o.dNgayGiaoHang',
                'p.sTenSanPham',
                'p.fGiaBan',
                'p.sTenSanPham',
                'p.iLuotXem',
                'p.ID_Product',
                'i.sDuongDan1'
            )
            ->join('customer as c', 'o.ID_customer', '=', 'c.ID_customer')
            ->join('member as m', 'c.ID_member', '=', 'm.ID_member')
            ->join('order_detail as od', 'o.ID_order_detail', '=', 'od.ID_order_detail')
            ->join('product as p', 'od.ID_product', '=', 'p.ID_Product')
            ->join('image as i', 'p.ID_image', '=', 'i.ID_image')
            ->where('od.ID_order_detail', '=', 'id_detail_' . $idCustomer)
            ->get();
        return $query;
    }
    public function checkProducts($id_order_detail, $id_product)
    {
        $order = DB::table('order_detail')
            ->where('ID_order_detail', '=', $id_order_detail)
            ->where('ID_product', '=', $id_product)->first();
        return $order;
    }
    public function addToCart($id_order_detail, $id_product, $id_order, $id_cus, $ngaydat, $quantity)
    {
        DB::table('order_detail')->insertOrIgnore([
            [
                'ID_order_detail' => $id_order_detail,
                'ID_Product' => $id_product,
                'iSoLuong' => $quantity
            ]
        ]);
        DB::table('_order')->insertOrIgnore([
            [
                'ID_order' =>  $id_order,
                'ID_order_detail' => $id_order_detail,
                'ID_customer' => $id_cus,
                'dNgayDat' => $ngaydat,
                'sTrangThai' => 'cho_duyet'
            ]
        ]);

        $so_luong = DB::table('product')->where('ID_Product', $id_product)->value('iSoLuong');
        $views=DB::table('product')->where('ID_Product', $id_product)->value('iLuotXem');
        // dd($so_luong);
        DB::table('product')
            ->where('ID_Product', $id_product)
            ->update([
                'iSoLuong' => $so_luong - $quantity,
                'iLuotXem'=>$views+1
            ]);
    }
    public function updateCart($id_order_detail, $id_product, $quantity)
    {
        $cart = $this->checkProducts($id_order_detail, $id_product);
        $products = $this->getItemWithID($id_product);

        $new_cart_quantity = $cart->iSoLuong + $quantity;
        $new_product_quantity = $products->iSoLuong - $quantity;
        // dd($new_cart_quantity);
        DB::table('order_detail')
            ->where('ID_order_detail', $id_order_detail)
            ->where('ID_Product', $id_product)
            ->update(['iSoLuong' => $new_cart_quantity]);
        $so_luong = DB::table('product')->where('ID_Product', $id_product)->value('iSoLuong');
        DB::table('product')
            ->where('ID_Product', $id_product)
            ->update([
                'iSoLuong' => $new_product_quantity
            ]);
    }
    public function updateCartWithButton($id_order_detail, $id_product, $quantity)
    {
        $cart = $this->checkProducts($id_order_detail, $id_product);
        $products = $this->getItemWithID($id_product);

        $new_cart_quantity = $quantity;
        if ($new_cart_quantity > $cart->iSoLuong) {
            $new_product_quantity = $products->iSoLuong - 1;
        } else {
            $new_product_quantity = $products->iSoLuong + 1;
        }
        DB::table('order_detail')
            ->where('ID_order_detail', $id_order_detail)
            ->where('ID_Product', $id_product)
            ->update(['iSoLuong' => $new_cart_quantity]);
        DB::table('product')
            ->where('ID_Product', $id_product)
            ->update([
                'iSoLuong' => $new_product_quantity
            ]);
    }
    public function removeFromCart($id_order_detail, $id_product)
    {
        $cart = $this->checkProducts($id_order_detail, $id_product);
        $products = $this->getItemWithID($id_product);

        $so_luong_back = $cart->iSoLuong;
        $so_luong_product = $products->iSoLuong + $so_luong_back;
        DB::table('order_detail')
            ->where('ID_order_detail', $id_order_detail)
            ->where('ID_Product', $id_product)
            ->delete();
        DB::table('product')
            ->where('ID_Product', $id_product)
            ->update([
                'iSoLuong' => $so_luong_product
            ]);
    }

    public function addBillPayment($arr, $cus)
    {
        // dd($arr);
        $data['vnp_Txnref'] = $arr['vnp_TxnRef'];
        $data['vnp_Amount'] = $arr['vnp_Amount']/100;
        $data['vnp_BankCode'] = $arr['vnp_BankCode'];
        $data['vnp_CardType'] = $arr['vnp_CardType'];
        $data['vnp_OrderInfo'] = $arr['vnp_OrderInfo'];
        $data['vnp_PayDate'] = $arr['vnp_PayDate'];
        $data['vnp_ResponseCode'] = $arr['vnp_ResponseCode'];
        $data['vnp_TmnCode'] = $arr['vnp_TmnCode'];
        $data['vnp_TransactionNo'] = $arr['vnp_TransactionNo'];
        $data['vnp_TransactionStatus'] = $arr['vnp_TransactionStatus'];
        $data['vnp_SecureHash'] = $arr['vnp_SecureHash'];
        $data['ID_order'] = "id_order_" . $cus;
        DB::table('payments')->insert($data);

        DB::table('order_detail')
            ->where('ID_order_detail', 'id_detail_' . $cus)
            ->delete();
    }

    public function getListBlogHome()
    {
        $query = DB::table('blog as b')
            ->join('employee as e', 'b.ID_employee', '=', 'e.ID_employee')
            ->where('b.sTrangThai', '=', 'duyet')
            ->get();
        // dd($query->toSql());
        return $query;
    }
    public function getListBlog()
    {
        $query = DB::table('blog as b')
            ->join('employee as e', 'b.ID_employee', '=', 'e.ID_employee')
            ->where('b.sTrangThai', '=', 'duyet')
            ->paginate(2);
        // dd($query->toSql());
        return $query;
    }
    public function getBlogWithId($id)
    {
        $query = DB::table('blog as b')
            ->join('employee as e', 'b.ID_employee', '=', 'e.ID_employee')
            ->where('b.ID_blog', '=', $id)
            ->get();
        return $query;
    }
}
