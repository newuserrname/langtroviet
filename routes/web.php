<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\District;
use App\Categories;
use App\Motelroom;
use App\comment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	$district = District::all();
    $categories = Categories::all();
    $hot_motelroom = Motelroom::where('approve',1)->orderBy('count_view','desc')->paginate(5);
    $map_motelroom = Motelroom::where('approve',1)->get();
	$listmotelroom = Motelroom::where('approve',1)->paginate(4);
    return view('home.index',[
    	'district'=>$district,
        'categories'=>$categories,
        'hot_motelroom'=>$hot_motelroom,
    	'map_motelroom'=>$map_motelroom,
        'listmotelroom'=>$listmotelroom
    ]);
});

Route::get('/moinhat', function () {
    $district = District::all();
    $categories = Categories::all();
    $new_motelroom = Motelroom::where('approve',1)->orderBy('created_at','desc')->paginate(5);
    $map_motelroom = Motelroom::where('approve',1)->get();
    $listmotelroom = Motelroom::where('approve',1)->paginate(4);
    return view('home.newpostsroom',[
        'district'=>$district,
        'categories'=>$categories,
        'new_motelroom'=>$new_motelroom,
        'map_motelroom'=>$map_motelroom,
        'listmotelroom'=>$listmotelroom
    ]);
});

Route::get('category/{id}','MotelController@getMotelByCategoryId');
/* Admin */
Route::get('admin/login','AdminController@getLogin');
Route::post('admin/login','AdminController@postLogin')->name('admin.login');
Route::group(['prefix'=>'admin','middleware'=>'adminmiddleware'], function () {
    Route::get('logout','AdminController@logout');
    Route::get('','AdminController@getIndex');
    Route::get('thongke','AdminController@getThongke');
    Route::get('report','AdminController@getReport');
    Route::group(['prefix'=>'users'],function() {
        
        Route::get('list','AdminController@getListUser');
        Route::get('edit/{id}','AdminController@getUpdateUser');
        Route::post('edit/{id}','AdminController@postUpdateUser')->name('admin.user.edit');
        Route::get('del/{id}','AdminController@DeleteUser');
    });
    Route::group(['prefix'=>'motelrooms'],function(){
        Route::get('list','AdminController@getListMotel');
        Route::get('approve/{id}','AdminController@ApproveMotelroom');
        Route::get('unapprove/{id}','AdminController@UnApproveMotelroom');
        Route::get('del/{id}','AdminController@DelMotelroom');
    });

    Route::resource('/categories', 'CategoriesController');
    Route::resource('/hoadon', 'HoaDonController');
    Route::resource('/request', 'RequestFromCustomerController');
    Route::resource('/hopdong', 'HopDongThueNhaController');   
    Route::resource('/phongtro', 'PhongTroController');
    Route::resource('/phongchothue', 'PhongChoThueController');
    Route::resource('/khachthue', 'KhachThueController');
    Route::resource('/dientro', 'DienController');
    Route::resource('/nuoctro', 'NuocController');

    Route::group(['prefix'=>'khachthue'],function(){
       Route:: get('huyhoatdong/{id}','KhachThueController@huyhoatdong');
       Route::get('mohoatdong/{id}', 'KhachThueController@mohoatdong');
    });

    Route::group(['prefix'=>'phongtro'],function(){
        Route::get('chothue/{id}', 'PhongTroController@chothue');
        Route::get('conphong/{id}', 'PhongTroController@conphong');

    Route::group(['prefix'=>'khachthuetro'],function(){
        Route::get('hethopdong/{id}', 'PhongTroController@hethopdong');
        Route::get('conhopdong/{id}', 'PhongTroController@conhopdong');
        Route::get('dathanhtoan/{id}', 'PhongTroController@dathanhtoan');
        Route::get('chuathanhtoan/{id}', 'PhongTroController@chuathanhtoan');
    });
    });

});
Route::get('/print-bill/{checkout_code}', 'BilldiennuocController@print_bill');
Route::get('/dientro/nhapsodien/{id}', 'DienController@store')->name('admin.dientro.nhapsodien');
Route::get('/nuoctro/nhapsonuoc/{id}', 'NuocController@store')->name('admin.nuoctro.nhapsonuoc');

/* End Admin */

Route::get('/phongtro/{slug}',function($slug){
    $room = Motelroom::findBySlug($slug);
    $room->count_view = $room->count_view +1;
    $room->save();
    $categories = Categories::all();
    $comment = DB::table('comment')->orderBy('id','asc')->where('room_id',$room->id)->paginate(3);
    foreach($comment as $commentt) {
            $user_detail = DB::table('users')->where('id', $commentt->user_id)->first();
            $commentt->name=$user_detail->name;
            $commentt->avatar=$user_detail->avatar;
    }
    return view('home.detail',['motelroom'=>$room, 'categories'=>$categories, 'comment'=>$comment]);
});

Route::get('/report/{id}','MotelController@userReport')->name('user.report');
Route::get('/motelroom/del/{id}','MotelController@user_del_motel');
Route::get('/yeucau/{id},{user_motel}', 'RequestFromCustomerController@store')->name('user.yeucau');
/* User */
Route::group(['prefix'=>'user'], function () {
    Route::get('register','UserController@get_register');
    Route::post('register','UserController@post_register')->name('user.register');

    Route::get('login','UserController@get_login');
    Route::post('login','UserController@post_login')->name('user.login');
    Route::get('logout','UserController@logout');

    Route::get('dangtin','UserController@get_dangtin')->middleware('dangtinmiddleware');
    Route::post('dangtin','UserController@post_dangtin')->name('user.dangtin')->middleware('dangtinmiddleware');


    Route::get('profile','UserController@getprofile')->middleware('dangtinmiddleware');
    Route::get('profile/edit','UserController@getEditprofile')->middleware('dangtinmiddleware');
    Route::post('profile/edit','UserController@postEditprofile')->name('user.edit')->middleware('dangtinmiddleware');

    Route::get('diennuoc', 'UserController@get_adddiennuoc')->middleware('dangtinmiddleware');

});

/* ----*/

Route::post('searchmotel','MotelController@SearchMotelAjax');
Route::post('searchpoly','MotelController@SearchpolyAjax');
Route::get('/guibinhluan', 'UserController@guibinhluan');

