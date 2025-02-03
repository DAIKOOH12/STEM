<?php

namespace App\Imports;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsImport implements ToCollection, WithHeadingRow
{
    protected $category;
    public function __construct($category)
    {
        $this->category = $category;
    }
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            if ($row['stt'] === 'TỔNG CỘNG:') {
                break;
            }
            // dd($data);
            if ($row['do_tuoi'] < 7) {
                $row['do_tuoi'] = 1;
            }
            if ($row['do_tuoi'] < 13) {
                $row['do_tuoi'] = 2;
            }
            if ($row['do_tuoi'] < 20) {
                $row['do_tuoi'] = 3;
            }
            if ($row['gioi_tinh'] === 'Nam') {
                $row['gioi_tinh'] = 1;
            }
            if ($row['gioi_tinh'] === 'Nữ') {
                $row['gioi_tinh'] = 2;
            }
            if ($row['gioi_tinh'] === 'Cả hai') {
                $row['gioi_tinh'] = 3;
            }
            DB::table('product')->upsert([
                'ID_Product' => $row['ma_san_pham'],
                'sTenSanPham' => $row['ten_san_pham'],
                'ID_category' => $this->category,
                'ID_image' =>   "combo-thi-nghiem",
                'fGiaNiemYet' => $row['gia_niem_yet'],
                'fGiaBan' => $row['gia_ban'],
                'iSoLuong' => $row['so_luong'],
                'sMoTa' => $row['mo_ta'],
                'iLuotXem' => 0,
                'iLuotMua' => 0,
                'bIsActive' => 1,
                'ID_age' => $row['do_tuoi'],
                'ID_gender' => $row['gioi_tinh']
            ], ['ID_product'], ['sTenSanPham', 'ID_category', 'ID_image', 'fGiaNiemYet', 'fGiaBan', 'iSoLuong', 'sMoTa', 'iLuotXem', 'iLuotMua', 'bIsActive', 'ID_age', 'ID_gender']);
            // echo $row . '<br>';
        }
        // print_r($data);
    }
    public function headingRow(): int
    {
        return 13;
    }
    public function batchSize(): int
    {
        return 1000;
    }
    public function uniqueBy(): string
    {
        return 'ma_san_pham';
    }
}
