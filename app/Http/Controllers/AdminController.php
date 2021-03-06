<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Motelroom;
use App\Reports;
use App\RequestFromCustomerModel;
use App\HopDongThueNhaModel;
use App\KhachThueModel;
use App\PhongTroModel;

class AdminController extends Controller
{
    public function getIndex() {
      $total_users_active = User::where('tinhtrang',1)->get()->count();
      $total_users_deactive = User::where('tinhtrang',0)->get()->count();
      $total_rooms_approve = Motelroom::where('approve',1)->get()->count();
      $total_rooms_unapprove = Motelroom::where('approve',0)->get()->count();
      $so_tin_da_dang = Motelroom::where('user_id', Auth::user()->id)->get()->count();
      $tongso_luot_xem_tin = Motelroom::where('user_id', Auth::user()->id)->get()->sum('count_view');
      $yeu_cau = RequestFromCustomerModel::where('id_usermotelroom', Auth::user()->id)->get()->count();
      $hop_dong = HopDongThueNhaModel::where('chutro_id', Auth::user()->id)->get()->count();
      $nguoi_thue_tro = KhachThueModel::where('chutro_id', Auth::user()->id)->get()->count();
      $phong_tro = PhongTroModel::where('chutro_id', Auth::user()->id)->get()->count();
      $reports = Reports::all();
      return view ('admin.index', [
        'total_users_active'=>$total_users_active,  
        'total_users_deactive'=>$total_users_deactive,
        'total_rooms_approve'=>$total_rooms_approve,
        'total_rooms_unapprove'=>$total_rooms_unapprove,
        'tin_da_dang'=>$so_tin_da_dang,
        'tong_luot_xem'=>$tongso_luot_xem_tin,
        'yeu_cau'=>$yeu_cau,
        'hop_dong'=>$hop_dong,
        'khach_thue'=>$nguoi_thue_tro,
        'phong_tro'=>$phong_tro,
        'total_report'=>$reports->count(),
      ]);
    }

    public function getThongke(){
      $total_users_active = User::where('tinhtrang',1)->get()->count();
      $total_users_deactive = User::where('tinhtrang',0)->get()->count();
      $total_rooms_approve = Motelroom::where('approve',1)->get()->count();
      $total_rooms_unapprove = Motelroom::where('approve',0)->get()->count();
      $reports = Reports::all();
      return view ('admin.thongke',[
        'total_users_active'=>$total_users_active,
        'total_users_deactive'=>$total_users_deactive,
        'total_rooms_approve'=>$total_rooms_approve,
        'total_rooms_unapprove'=>$total_rooms_unapprove,
        'total_report'=>$reports->count(),
      ]);
    }

    public function getReport(){
      $reports = Reports::all()->count();
      $motels = Motelroom::all();
      return view ('admin.report',[
        'motels'=>$motels,
        'reports' => $reports
      ]);
    }

    public function logout(){
        Auth::logout();
      return redirect('admin');
    }

    public function getLogin(){
    	return view('admin.login');
    }

    public function postLogin(Request $req){
    	$req->validate([
   			'username' => 'required',
   			'password' => 'required',
   			
   		],[
   			'username.required' => 'Vui lòng nhập tài khoản',
   			'password.required' => 'Vui lòng nhập mật khẩu'
   			
   		]);
   		if(Auth::attempt(['username'=>$req->username,'password'=>$req->password])){
    		return redirect('admin');

    	}
    	else 
    		return redirect('admin/login')->with('thongbao','Đăng nhập không thành công');
    }

    public function getListUser() {
      $users = User::all();
      return view('admin.users.list',['users'=>$users]);
    }

    /* Motel room */
    public function getListMotel() {

      $myroom = Motelroom::where('user_id', Auth::user()->id)->paginate(6);
        return view('admin.motelroom.list', ['motelrooms'=>$myroom]);

    }

    public function ApproveMotelroom($id) {
      $room = Motelroom::find($id);
      $room->approve = 1;
      $room->save();
      return redirect('admin/motelrooms/list')->with('thongbao','Đã kiểm duyệt bài đăng: '.$room->title);
    }

    public function UnApproveMotelroom($id){
      $room = Motelroom::find($id);
      $room->approve = 0;
      $room->save();
      return redirect('admin/motelrooms/list')->with('thongbao','Đã bỏ kiểm duyệt bài đăng: '.$room->title);
    }

    public function DelMotelroom($id){
      $room = Motelroom::find($id);
      $room->delete();
      return redirect('admin/motelrooms/list')->with('thongbao','Đã xóa bài đăng');
    }

    /* user */
    public function getUpdateUser($id){
      $user = User::find($id);
      return view('admin.users.edit',['user'=>$user]);
    }
    
    public function postUpdateUser(Request $request,$id){
      $this->validate($request,[
          'HoTen' => 'required'
        ],[
          'HoTen.required' => 'Vui lòng nhập đầy đủ Họ Tên'
        ]);
      $user = User::find($id);
      $user->name = $request->HoTen;
      $user->right = $request->Quyen;
      $user->tinhtrang = $request->TinhTrang;

      if($request->password != ''){
        $this->validate($request,[
          'password' => 'min:3|max:32',
          'repassword' => 'same:password',
        ],[
          'password.min' => 'password phải lớn hơn 3 và nhỏ hơn 32 kí tự',
          'password.max' => 'password phải lớn hơn 3 và nhỏ hơn 32 kí tự',
          'repassword.same' => 'Nhập lại mật khẩu không đúng',
          'repassword.required' => 'Vui lòng nhập lại mật khẩu',
        ]);
        $user->password = bcrypt($request->password);
      }

      
      $user->save();
      return redirect('admin/users/edit/'.$id)->with('thongbao','Hoàn tất thay đổi: '.$request->username.' .');
    }
    public function DeleteUser($id){
      $user = User::find($id);
      $user->delete();
      return redirect('admin/users/list')->with('thongbao','Đã xóa người dùng khỏi danh sách. Những bài đăng của người dùng này cũng bị xóa');
    }
}
