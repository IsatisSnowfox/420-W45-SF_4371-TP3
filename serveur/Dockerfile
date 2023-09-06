FROM httpd:alpine
RUN apk update; \
    apk upgrade;
EXPOSE 80 443
WORKDIR /usr/local/apache2/conf
COPY ./conf/httpd.conf ./