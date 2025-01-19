<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModels extends Model
{
    use HasFactory;
    public function getListProducts(){
        $query=DB::table('product as p')
        ->join('category as c', 'p.ID_category', 'c.ID_category')
        ->join('image as i', 'p.ID_image', 'i.ID_image')
        ->join('age as a','p.ID_age','a.ID_age')
        ->join('gender as g','p.ID_gender','g.ID_gender')
        ->get();
        return $query;
    }
    public function getCategories(){
        $query=DB::table('category')->get();
        return $query;
    }
    public function getAge(){
        $query=DB::table('age')->get();
        return $query;
    }
    public function getGender(){
        $query=DB::table('gender')->get();
        return $query;
    }
    public function addProduct($name,$old_price,$sale_price,$category,$age,$gender,$quantity,$description){
        DB::table('product')
        ->insert([
            'ID_Product'=>'ab'.count(DB::table('product')->get()),
            'sTenSanPham'=>$name,
            'ID_category'=>$category,
            'ID_image'=>'combo-thi-nghiem',
            'fGiaNiemYet'=>$old_price,
            'fGiaBan'=>$sale_price,
            'iSoLuong'=>$quantity,
            'sMoTa'=>$description,
            'ID_age'=>$age,
            'ID_gender'=>$gender
        ]);
    }
    public function updateProduct($id,$name,$old_price,$sale_price,$category,$age,$gender,$quantity,$description){
        DB::table('product')
        ->where('ID_Product','=',$id)
        ->update([
            'sTenSanPham'=>$name,
            'ID_category'=>$category,
            'ID_image'=>'combo-thi-nghiem',
            'fGiaNiemYet'=>$old_price,
            'fGiaBan'=>$sale_price,
            'iSoLuong'=>$quantity,
            'sMoTa'=>$description,
            'ID_age'=>$age,
            'ID_gender'=>$gender
        ]);
    }
    public function delProduct($id){
        DB::table('product')
        ->where('ID_Product','=',$id)
        ->delete();
    }
}