For conf.d file

server {
    listen 80;
    server_name  success.scom www.success.scom;

    root /var/www/html/project;
    index index.php;

    access_log /var/log/nginx/success.log custom;
    error_log  /var/log/nginx/error;

    location ~ \.php$ {
            include snippets/fastcgi-php.conf;
            fastcgi_pass unix:/run/php/php7.4-fpm.sock;
    }
}
~                          


Environment:-

sudo apt update && sudo apt upgrade -y
sudo apt install curl unzip software-properties-common -y
sudo add-apt-repository ppa:ondrej/php -y
sudo apt update
sudo apt install php7.4 php7.4-fpm php7.4-mysql php7.4-curl php7.4-gd php7.4-mbstring php7.4-xml php7.4-xmlrpc php7.4-zip -y
sudo systemctl start php7.4-fpm
sudo systemctl enable php7.4-fpm
sudo apt install nginx -y
sudo systemctl enable nginx
sudo systemctl start nginx
sudo apt install certbot python3-certbot-nginx -y
sudo apt install zip -y
