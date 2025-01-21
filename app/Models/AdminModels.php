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

    public function showBlogs(){
        $query=DB::table('blog as b')
        ->join('employee as e','b.ID_employee','=','e.ID_employee')
        ->join('category as c','b.ID_category','=','c.ID_category')
        ->orderBy('b.ID_blog','desc')
        ->get();
        return $query;
    }
    public function addBlog($name,$category,$image,$content){
        $id_blog='id_blog_'.count(DB::table('blog')->get())+1;
        DB::table('blog')
        ->insert([
            'ID_blog'=>$id_blog,
            'sTieuDe'=>$name,
            'ID_category'=>$category,
            'sDuongDan1'=>$image,
            'dCreateAt'=>date('Y-m-d H:i:s'),
            'sNoiDung'=>$content,
            'ID_employee'=>'id_emp_1',
            'sTrangThai'=>'cho_duyet'
        ]);
    }
    public function getBlogWithId($id){
        $query=DB::table('blog as b')
        ->join('employee as e','b.ID_employee','=','e.ID_employee')
        ->where('b.ID_blog','=',$id)
        ->get();
        return $query;
    }
    public function updateBlog($id,$title,$image,$content,$status){
        $data['dUpdateAt']=date('Y-m-d H:i:s');
        if($title!=null){
            $data['sTieuDe']=$title;
        }
        if($image!=null){
            $data['sDuongDan1']=$image;
        }
        if($content!=null){
            $data['sNoiDung']=$content;
        }
        if($status!=null){
            $data['sTrangThai']=$status;
        }
        // dd($data);
        DB::table('blog')
        ->where('ID_blog','=',$id)
        ->update($data);
    }
    public function updateBlogCategory($category,$id){
        DB::table('blog')
        ->where('ID_blog','=',$id)
        ->update([
            'ID_category'=>$category
        ]);
    }
}