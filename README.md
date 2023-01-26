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