<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.

| このファイルは、すべての Closure ベースのコンソール コマンドを定義できる場所です。 
| 各 Closure はコマンド インスタンスにバインドされているため、
| 各コマンドの IO メソッドと対話するための簡単なアプローチが可能です。
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
