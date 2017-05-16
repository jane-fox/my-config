
https://certbot.eff.org/#ubuntutrusty-nginx


sudo add-apt-repository ppa:certbot/certbot
sudo apt-get update
sudo apt-get install certbot 

certbot certonly --webroot -w /var/www/wordpress -d example.com
