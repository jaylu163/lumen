worker_processes  4;

events {
    worker_connections  1024;
}

http {
    include       mime.types;
    default_type  application/octet-stream;

    log_format  main  '$remote_addr - $remote_user [$time_local] "$request" '
                      '$status $body_bytes_sent "$http_referer" '
                      '"$http_user_agent" "$http_x_forwarded_for"';

    access_log  /usr/local/var/log/nginx/access.log  main;

    sendfile        on;
    keepalive_timeout  65;


    server {
        listen       8080;
        server_name  localhost;

        charset utf-8;

        access_log  /usr/local/var/log/nginx/localhost.access.log  main;

        root /Users/jaylu/Myproject/demo; #你的网站根目录
        location / {
            index  index.html index.htm index.php;
            try_files $uri /$uri index.php?$args;
        }


        error_page  404              /404.html;
        error_page   500 502 503 504  /50x.html;
        location = /50x.html {
            root   html;
        }

        location ~ \.php$ {
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            fastcgi_param  SCRIPT_FILENAME  /Users/jaylu/Myproject/demo$fastcgi_script_name;
            include        fastcgi_params;
        }

        location ~ /\.ht {
            deny  all;
        }
    }

    include sites-enabled/*.conf;
}