<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class HeaderComposer
{
    public function compose(View $view)
    {
        // Dữ liệu bạn muốn truyền vào header
        $user = auth()->user(); // Lấy thông tin người dùng đã đăng nhập
        $notifications = ['Notification 1', 'Notification 2']; // Ví dụ về dữ liệu

        // Truyền dữ liệu vào view header
        $view->with('user', $user);
        $view->with('notifications', $notifications);
    }
}