# 参画前の準備
## 要件
<ul>
<li>DockerにPHP,LARAVEL,React,Mysqlの環境を作る</li>
<li>構築した環境を直接VSCodeで操作できるようにする</li>
<li>簡単なアプリケーションを作成。</li>
<ul>
　* 郵便番号を入力すると住所が表示される
　* 郵便番号と住所を登録できる
　* 登録した郵便番号と住所を削除できる
</ul>
<li>そのソースをGITで管理する</li>
<li>アプリケーションの単体テストをPHPUNITで作成しテストを行う</li>
<li>UIをReactで作成</li>
</ul>

## 環境構築
    $ git clone git@github.com:F-yamaoka/docker-laravel.git
    $ cd docker-laravel
    $ docker compose exec app bash
    chmod -R 777 storage bootstrap/cache
    composer install
    cp .env.example .env
    php artisan key:generate
    $ docker compose up -d