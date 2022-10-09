 
sudo php --server localhost:8080  /var/www/siyamak_domain/html   #run php project

php -a   #terminal cli

#apachi web server
sudo systemctl start httpd.service
sudo systemctl enable httpd.service
sudo vim /etc/httpd/conf/httpd.conf   #configurate


#mysql
mysql -u root -p
sudo systemctl start mariadb
sudo systemctl enable mariadb




git init
git add .
git commit -m ""
git add origin http://
git push origin master









