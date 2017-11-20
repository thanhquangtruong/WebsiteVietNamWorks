<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserController extends Controller
{
    function getLogin(){
    	return view('login');
    }
    function postLogin(Request $request){
        $this->validate($request, [
    		'email'=>'required',
    		'password'=>'required|min:3|max:32'
    		],
    		[
    			'email.required'=>'Bạn chưa nhập Email',
    			'password.required'=>'Bạn chưa nhập password',
    			'password.min'=>'Password không được nhỏ hơn 3 kí tự',
    			'password.max'=>'Password không được lớn hơn 32 kí tự',
    		]);
        $credentials = ['email'=>$request->email, 'password'=>($request->password)];
    	if(Auth::attempt($credentials))
    	{
    		return redirect()->intended('home');
    	}
    	else{
    		return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
    	}
    }
    function getDangXuat(){
        Auth::logout();
        return redirect()->intended('home');

    }

     function getDangKy(){
        return view('signup');
    }
    function postDangky(Request $request){
        $this->validate($request,
            [
                'name' => 'required|min:2',
                'email'     => 'required|email|unique:users,email',
                'password'  => 'required|min:6|max:100',
                'password_same' => 'required|same:password'
            ],
            [
                'name.required'=>'Bạn chưa nhập Họ Tên người dùng',
                'name.min'=>'Họ Tên người dùng phải có ít nhất 2 ký tự',
                'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn nhập không đúng định dạng email',
                'email.unique'=>'Email đã tồn tại',
                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu người dùng phải có ít nhất 6 ký tự',
                'password.max'=>'Mật khẩu người dùng không được phép vượt quá 100 ký tự',
                'password_same.required'=>'Bạn chưa nhập lại mật khẩu',
                'password_same.same'=>'Mật khẩu nhập lại không khớp',               
            ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 0;
        $user->save();
        return redirect('dangnhap')->with('thongbao', 'Đăng ký tài khoản thành công');
    }

    function getEditTaiKhoanCuaToi(){
        return view('user.taikhoancuatoi');
    }
    function postEditTaiKhoanCuaToi(Request $request){
        $this->validate($request,
            [
                'name' => 'required|min:2',               
                'gioitinh'  => 'required|min:2|max:3',
                'quocgia' => 'required',
                'diachi'=> 'required',
            ],
            [
                'name.required'=>'Bạn chưa nhập Họ Tên người dùng',
                'name.min'=>'Họ Tên người dùng phải có ít nhất 2 ký tự',
                'gioitinh.required'=>'Bạn chưa nhập giới tính',
                'gioitinh.min'=>'Giới tính của bạn chỉ được là Nữ hoặc Nam',
                'gioitinh.max'=>'Giới tính của bạn chỉ được là Nữ hoặc Nam',
                'quocgia.required'=>'Bạn chưa nhập quốc gia',
                'diachi.required'=>'Bạn chưa nhập địa chỉ',               
            ]);

            $user = Auth::user();
            $user->name = $request->name;
            $user->ngaysinh = $request->ngaysinh;
            $user->gioitinh = $request->gioitinh;
            $user->quocgia = $request->quocgia;
            $user->diachi = $request->diachi;
            $user->save();
            return redirect('thongtintaikhoan')->with('thongbao', 'Cập nhật thông tin tài khoản thành công');
     }


     function getEditMail(){
        return view('user.taikhoancuatoi');
     }
     function postEditMail(Request $request){
        $this->validate($request,
            [
                'email'     => 'required|email|unique:users,email',
                'email_new'  => 'required|same:email',
                'pass' =>'required',
                        
            ],
            [
               
               /* 'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn nhập không đúng định dạng email',
                'email.unique'=>'Email đã tồn tại',
                'email_new.required'=>'Bạn chưa nhập email',
                'email_new.same'=>'Bạn nhập lại email không khớp',
                'password.required'=>'Mật khẩu không được để trống', */                
            ]);

            $user = Auth::user();
            // Kiem tra
            if (Hash::check($request->pass, $user->password))
            {
            	$user->email = $request->email_new;
            	$user->save();
            	return redirect('thongtintaikhoan')->with('thongbao', 'Bạn đã đổi email thành công');
            }
            else{
            	return redirect('thongtintaikhoan')->with('thongbao', 'Password không khớp');
            }
           
     }

     function getChangePassword(){
        return view('user.taikhoancuatoi');
     }
     function postChangePassword(Request $request){
        $this->validate($request,
            [
                'pass'     => '',
                'pass_same'  => 'required|same:pass_new',
                'pass_new' =>'required',
                        
            ],
            [
               
               
                'pass_same.required'=>'Bạn chưa nhập lại mật khẩu',
                'pass_same.same'=>'Bạn nhập lại mật khẩu không khớp',
                'pass_same.required'=>'Mật khẩu không được để trống', 
                ]);
            $user = Auth::user();
           
            // Kiem tra
            if (Hash::check($request->pass, $user->password))
            {
            	$user->password = bcrypt($request->pass_new);
            	$user->save();
            	return redirect('thongtintaikhoan')->with('thongbao', 'Bạn đã đổi mật khẩu thành công');
            }
            else{
            	return redirect('thongtintaikhoan')->with('thongbao', 'Mật khẩu không khớp');
            }
           
     }
}
