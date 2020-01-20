sudo amazon-linux-extras install php7.2 -y
sudo yum install php-common php-mbstring php-xml php-zip php-curl -y
sudo yum install -y https://dev.mysql.com/get/mysql57-community-release-el7-11.noarch.rpm
sudo yum install -y mysql-community-client
./install-composer.sh
php composer.phar install
cp .env.example .env
php artisan key:generate
php artisan config:clear
php artisan cache:clear
