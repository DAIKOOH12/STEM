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
            })->get();
        return $products;
    }
    public function getCategoryWithID($category_parent, $category)
    {
        $products = DB::table('product as p')
            ->select('p.*', 'c.ID_category_parent', 'i.*')
            ->join('category as c', 'p.ID_category', 'c.ID_category')
            ->join('image as i', 'p.ID_image', 'i.ID_image')
            ->join('category_parent as cp', 'c.ID_category_parent', 'cp.ID_category_parent');
        if($category_parent!==null){
            $products->where('cp.ID_category_parent',"=", $category_parent);
        }
        if($category!==null){
            $products->where('c.ID_category','=', $category);
        }
        $result=$products->get();
        return $result;
    }
    public function getCategoryWithFilter($category_parent, $category,$min_price, $max_price)
    {
        $products = DB::table('product as p')
            ->select('p.*', 'c.ID_category_parent', 'i.*')
            ->join('category as c', 'p.ID_category', 'c.ID_category')
            ->join('image as i', 'p.ID_image', 'i.ID_image')
            ->join('category_parent as cp', 'c.ID_category_parent', 'cp.ID_category_parent');
        if($category_parent!==null){
            $products->where('cp.ID_category_parent',"=", $category_parent);
        }
        if($category!==null){
            $products->where('c.ID_category','=', $category);
        }
        if($min_price!==null){
            $products->where('p.fGiaBan','>=', $min_price);
        }
        if($max_price!==null){
            $products->where('p.fGiaBan','<=', $max_price);
        }
        $result=$products->get();
        return $result;
    }

    public function getItemWithID($id){
        $product=DB::table('product as p')
        ->select('p.*','i.*')
        ->join('image as i','p.ID_image','i.ID_image')
        ->where('ID_product','=',$id)->first();
        return $product;
    }
}
