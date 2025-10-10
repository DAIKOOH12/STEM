<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModels extends Model
{
    use HasFactory;
    public function signIn($account, $password)
    {
        $query = DB::table('employee')
            ->where('sTaiKhoan', '=', $account)
            ->where('sMatKhau', '=', sha1($password))
            ->first();
        return $query;
    }
    public function getListProducts()
    {
        $query = DB::table('product as p')
            ->join('category as c', 'p.ID_category', 'c.ID_category')
            ->join('image as i', 'p.ID_image', 'i.ID_image')
            ->join('color as co', 'p.ID_color', 'co.ID_color')
            ->join('date as d', 'p.ID_date', 'd.ID_date')
            ->get();
        return $query;
    }
    public function getCategories()
    {
        $query = DB::table('category')->get();
        return $query;
    }
    public function getColors()
    {
        $query = DB::table('color')->get();
        return $query;
    }
    public function getDate()
    {
        $query = DB::table('date')->get();
        return $query;
    }
    public function addProduct($name, $old_price, $sale_price, $category, $quantity, $color, $date, $description)
    {
        DB::table('product')
            ->insert([
                'ID_Product' => 'ab' . count(DB::table('product')->get()),
                'sTenSanPham' => $name,
                'ID_category' => $category,
                'ID_image' => 'hoa-1',
                'fGiaNiemYet' => $old_price,
                'fGiaBan' => $sale_price,
                'iSoLuong' => $quantity,
                'ID_color' => $color,
                'ID_date' => $date,
                'sMoTa' => $description,
            ]);
    }
    public function updateProduct($id, $name, $old_price, $sale_price, $category, $color, $date, $quantity, $description)
    {
        DB::table('product')
            ->where('ID_Product', '=', $id)
            ->update([
                'sTenSanPham' => $name,
                'ID_category' => $category,
                'ID_image' => 'hoa-1',
                'fGiaNiemYet' => $old_price,
                'fGiaBan' => $sale_price,
                'iSoLuong' => $quantity,
                'sMoTa' => $description,
                'ID_color' => $color,
                'ID_date' => $date
            ]);
    }
    public function delProduct($id)
    {
        DB::table('product')
            ->where('ID_Product', '=', $id)
            ->delete();
    }

    public function showBlogs()
    {
        $query = DB::table('blog as b')
            ->join('employee as e', 'b.ID_employee', '=', 'e.ID_employee')
            ->join('category as c', 'b.ID_category', '=', 'c.ID_category')
            ->orderBy('b.ID_blog', 'desc')
            ->get();
        return $query;
    }
    public function addBlog($name, $category, $image, $content, $summary)
    {
        $id_blog = 'id_blog_' . count(DB::table('blog')->get()) + 1;
        DB::table('blog')
            ->insert([
                'ID_blog' => $id_blog,
                'sTieuDe' => $name,
                'ID_category' => $category,
                'sDuongDan1' => $image,
                'dCreateAt' => date('Y-m-d H:i:s'),
                'sNoiDung' => $content,
                'ID_employee' => 'id_emp_1',
                'sTrangThai' => 'cho_duyet',
                'sTomTat' => $summary
            ]);
    }
    public function getBlogWithId($id)
    {
        $query = DB::table('blog as b')
            ->join('employee as e', 'b.ID_employee', '=', 'e.ID_employee')
            ->where('b.ID_blog', '=', $id)
            ->get();
        return $query;
    }
    public function updateBlog($id, $title, $image, $content, $status, $summary)
    {
        $data['dUpdateAt'] = date('Y-m-d H:i:s');
        if ($title != null) {
            $data['sTieuDe'] = $title;
        }
        if ($image != null) {
            $data['sDuongDan1'] = $image;
        }
        if ($content != null) {
            $data['sNoiDung'] = $content;
        }
        if ($status != null) {
            $data['sTrangThai'] = $status;
        }
        if ($summary != null) {
            $data['sTomTat'] = $summary;
        }
        // dd($data);
        DB::table('blog')
            ->where('ID_blog', '=', $id)
            ->update($data);
    }
    public function updateBlogCategory($category, $id)
    {
        DB::table('blog')
            ->where('ID_blog', '=', $id)
            ->update([
                'ID_category' => $category
            ]);
    }
    public function getQuyen()
    {
        $query = DB::table('quyen')->get();
        return $query;
    }
    public function getListEmployee()
    {
        $query = DB::table('employee')
            ->join('quyen as  q', 'q.ID_quyen', '=', 'employee.ID_quyen')
            ->get();
        return $query;
    }

    public function addEmployee($data)
    {
        $data['ID_employee'] = "id_emp_" . count($this->getListEmployee()) + 1;
        // dd($data);
        DB::table('employee')->insert($data);
    }
    public function updateEmployee($data)
    {
        if (isset($data['sMatKhau'])) {
            $data['sMatKhau'] = sha1($data['sMatKhau']);
        }
        // dd($data);
        DB::table('employee')
            ->where('ID_employee', '=', $data['ID_employee'])
            ->update($data);
    }

    public function delEmployee($data)
    {
        DB::table('employee')
            ->where('ID_employee', '=', $data['ID_employee'])
            ->delete();
    }
    public function getTotalValue()
    {
        $query = DB::table('payments')->sum('vnp_Amount');
        return $query;
    }
    public function getTotalSale()
    {
        $query = DB::table('product')->sum('iLuotMua');
        return $query;
    }
    public function totalOrders()
    {
        $query = DB::table('order_detail')->sum('iSoLuong');
        return $query;
    }
    public function getSoldProductsAmount()
    {
        $query = DB::table('product as p')
            ->join('category as c', 'p.ID_category', 'c.ID_category')
            ->join('image as i', 'p.ID_image', 'i.ID_image')
            ->orderBy('p.iLuotMua', 'desc')->limit(3)
            ->get();
        return $query;
    }
    public function getCustomOrders()
    {
        $query = DB::table('custom_order')->get();
        return $query;
    }
    public function confirmOrder($id)
    {
        DB::table('custom_order')
            ->where('ID_cus_order', '=', $id)
            ->update(['sTrangThai' => 'done']);
    }
    public function getPayments(){
        $query = DB::table('payments as p')
            ->join('_order as o','o.ID_order','=','p.ID_order')
            ->join('customer as c','c.ID_customer','=','o.ID_customer')
            ->orderBy('p.vnp_PayDate','desc')
            ->get();
        return $query;
    }
}
