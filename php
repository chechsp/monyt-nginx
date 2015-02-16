upstream php {
  server unix:/var/run/php5-fpm.sock;
}
server {
  listen   80;
  root /var/www/php;
#  index monyt.php index.html index.htm;
  server_name php.your-domain.com;

  proxy_intercept_errors on;
  fastcgi_intercept_errors on;

  access_log /var/www/php/access.log;
  error_log  /var/www/php/error.log;


  location / {
    try_files $uri $uri/ =404;
  }
  location ~ .php$ {
    # fastcgi_pass unix:/var/run/php5-fpm.sock;
    fastcgi_pass 127.0.0.1:9000;
#    fastcgi_index monyt.php;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    include fastcgi_params;
  }
}
