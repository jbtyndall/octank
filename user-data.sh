#!/bin/bash
yum update -y
amazon-linux-extras install -y php7.2
amazon-linux-extras install epel -y
yum install stress -y
yum install -y httpd
systemctl start httpd
systemctl enable httpd
usermod -a -G apache ec2-user
chown -R ec2-user:apache /var/www
chmod 2775 /var/www
find /var/www -type d -exec chmod 2775 {} \;
find /var/www -type f -exec chmod 0664 {} \;
cd /var/www
mkdir inc
cd inc
wget https://raw.githubusercontent.com/jbtyndall/octank/main/dbinfo.inc
cd /var/www/html
wget https://raw.githubusercontent.com/jbtyndall/octank/main/index.php
wget https://raw.githubusercontent.com/jbtyndall/octank/main/waf.php
echo "<html><head><title>Health - Octank University</title></head><body><h1>Health</h2><p>$(hostname -f) is healthy!</p></body></html>" > health.html
echo loaderio-395915d89c7b7b2a8e8e492e590e1a43 > /var/www/html/loaderio-395915d89c7b7b2a8e8e492e590e1a43.txt
