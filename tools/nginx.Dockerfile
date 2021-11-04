FROM nginx:1.17-alpine
COPY ../public /var/www
COPY default.conf /etc/nginx/conf.d/default.conf
