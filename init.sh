sudo amazon-linux-extras install php7.2 -y
sudo yum install php-common php-mbstring php-xml php-zip php-curl -y
chmod 777 install-composer.sh
./install-composer.sh
cp .env.example .env
php artisan key:generate
php artisan config:clear
php artisan cache:clear
