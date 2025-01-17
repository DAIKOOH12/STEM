<?php

namespace App\Http\Composers;
use App\Models\HomeModels;

use Illuminate\View\View;

class HeaderComposer
{
    public function compose(View $view)
    {
        // Dữ liệu bạn muốn truyền vào header
        $user = auth()->user(); // Lấy thông tin người dùng đã đăng nhập


        // Truyền dữ liệu vào view header
        $view->with('user', $user);
    }
}