<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeComtroller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PagesController;
use App\Models\cart;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data['categories'] = PagesController::homePage();
    $data['items'] = User::getItems();
    $data['cart'] = cart::getCartDetail();
    $data['side_nav'] = Category::sideNav();
     return view('public.pages.home')->with($data);
})->name('landingPage');

Route::get('/login', [AuthController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('user/registration', [AuthController::class, 'registration'])->name('user.register');
Route::post('admin_logout', [AuthController::class, 'adminLogout'])->name('admin.logout');
Route::get('logout', [AuthController::class, 'userLogout'])->name('logout');

route::get('about-us', [PagesController::class, 'aboutUs'])->name('aboutus.page');
route::get('purchase-procedure', [PagesController::class, 'purchaseProcedure'])->name('purchase.page');
route::get('shipping', [PagesController::class, 'shipping'])->name('shipping.page');
route::get('health', [PagesController::class, 'health'])->name('health.page');
route::get('contact-us', [PagesController::class, 'contactUs'])->name('contact.page');
route::post('add/card', [HomeComtroller::class, 'addToCard'])->name('card.add');
route::post('subscribe', [HomeComtroller::class, 'subscribe'])->name('subscribe');
route::get('modal', [PagesController::class, 'getModal'])->name('modal.generate');
route::post('mail', [MailController::class, 'SendMail'])->name('send.email');

Route::group(['middleware' => ['web']], function(){
    route::get('checkout', [PagesController::class, 'checkoutPage'])->name('checkout');
});

// route::get('admission', [WelcomeController::class, 'bcbsAdmission'])->name('bcbs.admission');
// route::get('elearning', [WelcomeController::class, 'bcbsElearning'])->name('bcbs.elearning');
// route::get('staffs', [WelcomeController::class, 'bcbsStaffs'])->name('bcbs.staffs');
