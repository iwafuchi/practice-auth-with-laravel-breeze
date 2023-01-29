# lemp-based
プロジェクトを作成  
```
composer create-project --prefer-dist "laravel/laravel=9.*" .  
```

権限の付与  
```
chmod -R 777 storage
```

.envの作成  

APP_KEYの設定
```
php artisan key:generate
```

debugerのインストール  
```
composer require --dev barryvdh/laravel-debugbar
```

Laravel Breezeのインストール  
```
composer require laravel/breeze --dev
php artisan breeze:install
```

同じrouteパスで異なるbladeを返却する
```php
//controller
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('routing.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('routing.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createConfirm() {
        return view('routing.create-confirm');
    }
}

//route
Route::controller(RoutingController::class)->prefix('routing')->group(function () {
    Route::get('/', 'index')->name('routing.index');
    Route::get('index', 'index')->name('routing.index');
    Route::get('create', 'create')->name('routing.create');
    Route::post('create', 'createConfirm')->name('routing.createConfirm');
});
```