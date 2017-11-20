<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HosovieclamController extends Controller
{
    function getAvatar(){
    	return view('user.hosovieclam.hosocuatoi');
    }
    function postAvatar(Request $request){
    	 $this->validate($request, [
    		'name'=>'required',
    		'capbac'=>'required',
    		'chucdanh'=>'required',
    		],[]);
            $user = Auth::user();
            $user->name = $request->name;
            $user->capbac = $request->capbac;
            $user->chucdanh = $request->chucdanh;
            $user->save();
            return redirect('hosovieclam')->with('thongbao', 'Cập nhật thông tin tài khoản thành công');
    }
    function getSuaThongTinCaNhan(){
        return view('user.hosovieclam.hosocuatoi');
    }
    function postSuaThongTinCaNhan(Request $request){
         $this->validate($request, [],[]);
            $user = Auth::user();
            $user->ngaysinh = $request->ngaysinh;
            $user->gioitinh = $request->gioitinh;
            $user->quocgia = $request->quocgia;
            $user->thanhpho = $request->thanhpho;
            $user->quan = $request->quan;
            $user->dienthoai = $request->dienthoai;
            $user->quoctich = $request->quoctich;
            $user->honnhan = $request->honnhan;
            $user->diachi = $request->diachi;
            $user->save();
            return redirect('hosovieclam')->with('thongbao', 'Cập nhật thông tin tài khoản thành công');
    }

    function getSuaThongTinChung(){
        return view('user.hosovieclam.hosocuatoi');
    }
    function postSuaThongTinChung(Request $request){
         $this->validate($request, [],[]);
            $user = Auth::user();
            $user->thongtinchung = $request->thongtinchung;
            $user->save();
            return redirect('hosovieclam')->with('thongbao', 'Cập nhật thông tin tài khoản thành công');
    }
}
