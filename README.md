Process for running the project

I have use Laravel 8 and mysqli database for this project

1.Import the demo.sql file to your database
2.Rename .env.example to .env
3.Update composer for vendor install
4.php artisan migrate
5.composer dump-autoload
6.php artisan tinker
7.Product::factory()->count(10)->create()