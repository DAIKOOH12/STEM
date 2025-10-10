<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminModels;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UserImport;
use App\Imports\ProductsImport;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->mAdmin = new AdminModels();
    }
    public function index()
    {
        $isUser = session('isUser');
        if ($isUser == null || $isUser == '') {
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
        // session()->forget('isUser');
        session()->flush();
        session()->save();
        return redirect()->route('loginpage');
    }

    public function getListProducts()
    {
        $products = $this->mAdmin->getListProducts();
        $category = $this->mAdmin->getCategories();
        $colors = $this->mAdmin->getColors();
        $date = $this->mAdmin->getDate();
        // dd($products);
        return view('admin.products.list', compact('products', 'category','colors','date'));
    }
    public function getAddView(Request $request)
    {
        $category = $this->mAdmin->getCategories();
        $colors = $this->mAdmin->getColors();
        $date = $this->mAdmin->getDate();
        // dd($date);
        return view('admin.products.add', compact('category', 'colors', 'date'));
    }
    public function addProduct(Request $request)
    {
        $productName = $request->input('product-name');
        $productCategory = $request->input('product-category');
        $productOldPrice = $request->input('product-old-price');
        $productSalePrice = $request->input('product-sale-price');
        $productQuantity = $request->input('product-quantity');
        $productDescription = $request->input('product-description');
        $productColor = $request->input('product-color');
        $productDate = $request->input('product-date');

        // dd($request->all());

        $this->mAdmin->addProduct($productName, $productOldPrice, $productSalePrice, $productCategory, $productQuantity, $productColor, $productDate, $productDescription);
        session()->flash('message', 'Thêm thành công');
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
        $productColor = $request->input('product-color');
        $productDate = $request->input('product-date');

        $this->mAdmin->updateProduct($productID, $productName, $productOldPrice, $productSalePrice, $productCategory, $productColor, $productDate, $productQuantity, $productDescription);

        return response()->json(['message' => 'Thành công']);
    }
    public function delProduct(Request $request)
    {
        $productID = $request->input('product-id');
        $this->mAdmin->delProduct($productID);
        return response()->json(['message' => 'Thành công']);
    }

    public function getImportProduct()
    {
        $category = $this->mAdmin->getCategories();
        return view('admin.products.import', compact('category'));
    }
    public function importProducts(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('file')) {
            Excel::import(new ProductsImport($request->input('category')), $request->file('file'));
        }
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

    public function getListEmployee()
    {
        $emp = $this->mAdmin->getListEmployee();
        $quyen = $this->mAdmin->getQuyen();
        // dd($quyen);
        return view('admin.roles.list_nv', compact('emp', 'quyen'));
    }
    public function getAddEmployee()
    {
        $quyen = $this->mAdmin->getQuyen();
        return view('admin.roles.add_nv', compact('quyen'));
    }
    public function addEmployee(Request $request)
    {
        $arr = $request->all();
        // $data['ID_employee']=$arr[];
        $data['sHoTen'] = $arr["employee-name"];
        $data['sDiaChi'] = $arr["employee-address"];
        $data['sEmail'] = $arr["employee-email"];
        $data['sSdt'] = $arr["employee-phone"];
        $data['bIsActive'] = 1;
        $data['ID_quyen'] = $arr["employee-role"];
        $data['bIsLogin'] = 1;
        $data['sTaiKhoan'] = $arr["employee-account"];
        $data['sMatKhau'] = sha1($arr["employee-password"]);
        // dd($data);
        $this->mAdmin->addEmployee($data);
        return redirect()->route('listemployee');
    }
    public function updateEmployee(Request $request)
    {
        $data = $request->all();
        $this->mAdmin->updateEmployee($data);

        return response()->json(['message' => request()->all()]);
    }
    public function delEmployee(Request $request)
    {
        $data = $request->all();
        $this->mAdmin->delEmployee($data);
        // dd($data);
        return response()->json(['message' => 'Thành công']);
    }

    public function analysisProduct()
    {
        $luot_ban = $this->mAdmin->getTotalSale();
        $tong_tien = $this->mAdmin->getTotalValue();
        $top_sale = $this->mAdmin->getSoldProductsAmount();
        $total_order = $this->mAdmin->totalOrders();
        // dd($top_sale);
        return view('admin.analytics.products', compact('luot_ban', 'tong_tien', 'top_sale', 'total_order'));
    }
    public function listCustomOrder()
    {
        $orders = $this->mAdmin->getCustomOrders();
        // dd($orders);
        return view('admin.products.order', compact('orders'));
    }

    public function confirmOrder(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $this->mAdmin->confirmOrder($data['id']);
        return response()->json(['message' => 'Thành công','data'=>$data]);
    }
    public function listPayments(){
        $payments = $this->mAdmin->getPayments();
        // dd($payments);
        return view('admin.analytics.list_payment',compact('payments'));
    }
}
