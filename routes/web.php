<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
| ここで、アプリケーションの Web ルートを登録できます。
| これらのルートは RouteServiceProvider によって読み込まれ、
| すべて「web」ミドルウェア グループに割り当てられます。
| 素晴らしいものを作ろう！
|
*/

Auth::routes();
/*
このメソッドは以下の場所で定義されている。
TestApp\vendor\laravel\framework\src\Illuminate\Support\Facades\Auth.php 90行目あたり

*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//https://qiita.com/minato-naka/items/9241d9c7a7433985056d#:~:text=%E8%BF%BD%E5%8A%A0%E3%81%97%E3%81%BE%E3%81%99%E3%80%82-,routes/web.php,-%2D%20Route%3A%3Aget(%27/%27%2C%20function
Route::get('/{any?}', function () {
    return view('layouts.base');
})->where('any', '.*')->name('TestApp');
/*
このLaravelのルート定義では、anyはベースURLの後の任意の値にマッチするルートパラメータです。
anyパラメータは中括弧{}の中で指定され、任意の文字列値のプレースホルダとなります。

たとえば、URL https://example.com/foo/bar にアクセスすると、any パラメーターに foo/bar という値が割り当てられます。
このパラメータをコールバック関数内で使用することで、リクエストされたURLに基づいてロジックを実行したり、データを取得したりすることができます。

whereメソッドと.*正規表現を併用することで、anyパラメータがスラッシュを含むあらゆる文字にマッチするようになるため、
動的なルートやURLが頻繁に変更されるシングルページのアプリケーションを扱う際に、考えられるURLごとに個別のルートを定義する必要がなく便利です。

--ChatGPTの回答から翻訳--
*/
