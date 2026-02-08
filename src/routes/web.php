<?php
use App\Http\Controllers\ContactController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/

// トップページ（入力画面）
Route::get('/', [ContactController::class, 'index'])->name('index');

// 確認画面
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('confirm');

// 送信処理（データ保存してthanksページへリダイレクト）
Route::post('/contact/thanks', [ContactController::class, 'store'])->name('store');

// 完了画面（GETで表示）
Route::get('/contact/thanks', [ContactController::class, 'thanks'])->name('thanks');

//Route::get('/login', [ContactController::class, 'login'])->name('login');

