<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>'1',
            'name' =>'Thành Phước',
            'email' =>'thanhphuocnguyen@gmail.com',
            'password' =>bcrypt('123456'),
            'role'=>'1',
            'capbac' =>'Cử nhân',
            'chucdanh' =>'Giám đốc',
            'ngaysinh' =>'1996-01-01',
            'gioitinh' =>'Nam',
            'dienthoai' =>'0985650547',
            'quoctich' =>'Việt Nam',
            'honnhan' =>'Độc Thân',
            'quocgia' =>'Việt Nam',
            'thanhpho' =>'TPHCM',
            'quan' =>'Củ Chi',
            'diachi' =>'356/12 Võ Văn Ngân',
            'avatar' =>'',
            'kynang' =>'Hát,nhảy, múa',
            'thongtinchung' =>'Học giỏi, siêng, tài, hotboy',
        ]);
    }
}
