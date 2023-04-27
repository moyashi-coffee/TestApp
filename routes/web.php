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

        static::$app->make('router')->auth($options);
        
        routes\web.php の Auth::routes();で実際に実行されるメソッドが make('router')->auth($options); の部分となる。
        
        $appについて
        以下の場所で定義されている
        TestApp\vendor\laravel\framework\src\Illuminate\Support\Facades\Facade.php 20行目あたり

        make('router')について
        TestApp\vendor\laravel\framework\src\Illuminate\Container\Container.php 700行目あたり
        resolve メソッドを呼び出して abstract に 'router' 文字列を渡している

        以下ChatGPTによる回答
        --------------------
        Laravel Breezeで認証機能を作成した際に、web.phpに生成されるAuth::routes();がどのような処理を行っているか解説してください。
        Laravel Breezeは、Laravelの認証機能を簡単にセットアップするためのパッケージです。Auth::routes();は、Breezeによって生成されたWeb.phpファイルに含まれる関数で、Laravelの認証機能に必要なルーティングを自動的に設定します。

        Auth::routes();は、以下のルーティングを生成します。

        GET /login - ログインページの表示
        POST /login - ログインフォームの送信
        POST /logout - ログアウト処理
        GET /register - 新規登録ページの表示
        POST /register - 新規登録フォームの送信
        GET /forgot-password - パスワードリセットのためのメールアドレス入力ページの表示
        POST /forgot-password - パスワードリセットのためのメール送信
        GET /reset-password/{token} - パスワードリセットフォームの表示
        POST /reset-password - パスワードの更新
        これらのルートは、Breezeがデフォルトで提供するものであり、必要に応じてカスタマイズすることができます。たとえば、カスタムビューを使用したい場合は、ルーティングをオーバーライドすることができます。

        以上がAuth::routes();が行う処理の概要です。これによって、Laravel Breezeによる認証機能を簡単にセットアップすることができます。
        --------------------
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
