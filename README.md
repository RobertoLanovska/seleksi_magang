git clone https://github.com/RobertoLanovska/seleksi_magang.git
cd seleksi_magang
composer install 
cp .env.example .env
php artisan key:generate
php artisan serve
