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
        $isUser = session('isUser');
        if ($isUser == null) {
            return redirect()->route('loginpage');
        }
        return view('admin.index');
    }
    public function signInForm()
    {
        if (session('isUser') != null) {
            return redirect()->route('adminpage');
        }
        return view('admin.roles.login');
    }
    public function signIn(Request $request)
    {
        $account = $request->input('account');
        $password = $request->input('password');

        $isUser = $this->mAdmin->signIn($account, $password);
        // dd($isUser);
        if ($isUser != null) {
            session()->put('isUser', $isUser->sTaiKhoan);
            session()->put('role', $isUser->ID_quyen);
            session()->forget('message');
            session()->save();
            // dd(session('role'));
            return redirect()->route('adminpage');
        } else {
            session()->put('message', 'Tài khoản hoặc mật khẩu không đúng');
            session()->save();
            return redirect()->route('loginpage');
        }
        // dd($request->all());
    }

    public function signOut()
    {
        session()->forget('isUser');
        session()->save();
        return redirect()->route('loginpage');
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
    public function delProduct(Request $request)
    {
        $productID = $request->input('product-id');
        $this->mAdmin->delProduct($productID);
        return response()->json(['message' => 'Thành công']);
    }



    public function showListBlogs()
    {
        $category = $this->mAdmin->getCategories();
        $blogs = $this->mAdmin->showBlogs();
        // dd($blogs);
        return view('admin.blogs.list', compact('category', 'blogs'));
    }
    public function getAddBlog()
    {
        $category = $this->mAdmin->getCategories();
        return view('admin.blogs.add', compact('category'));
    }
    public function addBlog(Request $request)
    {
        $blogTitle = $request->input('blog-title');
        $blogCategory = $request->input('blog-category');
        $blogImage = $request->file('blog-image');
        $blogContent = $request->input('content');
        $blogSummary = $request->input('blog-summary');

        // dd($request->all());
        // dd($blogImage);
        $destinationPath = base_path('public/images/blogs');
        $image_name = time() . '_' . $blogImage->getClientOriginalName();
        $blogImage->move($destinationPath, $image_name);
        $this->mAdmin->addBlog($blogTitle, $blogCategory, $image_name, $blogContent, $blogSummary);
        return redirect()->route('addblog');
    }
    public function getEditBlog()
    {
        if (request('blogID')) {
            $blogID = request('blogID');
            $blogEdit = $this->mAdmin->getBlogWithId($blogID);
            // dd($blogEdit);
            return view('admin.blogs.edit', compact('blogEdit'));
        }
        return redirect()->route('showlistblog');
    }
    public function updateBlog()
    {
        $blogTitle = request()->input('blog-title');
        $blogID = request()->input('blog-id');
        $blogImage = request()->file('blog-image');
        $blogContent = request()->input('content');
        $blogStatus = request()->input('blog-status');
        $blogSummary = request()->input('blog-summary');


        if ($blogImage != null) {
            $destinationPath = base_path('public/images/blogs');
            $image_name = time() . '_' . $blogImage->getClientOriginalName();
            $blogImage->move($destinationPath, $image_name);
            // dd($image_name);
            $this->mAdmin->updateBlog($blogID, $blogTitle, $image_name, $blogContent, $blogStatus, $blogSummary);
        }
        // dd(request()->all());
        $this->mAdmin->updateBlog($blogID, $blogTitle, $image_name = null, $blogContent, $blogStatus, $blogSummary);
        return  redirect()->back();
    }
    public function updateBlogCategory()
    {
        $category = request()->input('category');
        $id = request()->input('id');

        // dd($category);
        $this->mAdmin->updateBlogCategory($category, $id);
        return response()->json(['message' => 'Cập nhật thành công', 'category' => $category]);
    }
}
