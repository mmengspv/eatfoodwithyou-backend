FROM nginx:1.17-alpine
COPY ./tools/default.conf /etc/nginx/conf.d/default.conf
COPY . /var/www
