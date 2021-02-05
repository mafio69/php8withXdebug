# php/Dockerfile

FROM php:fpm-alpine
RUN apk --update --no-cache add git
RUN docker-php-ext-install pdo_mysql

COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-3.0.2 \
    && docker-php-ext-enable xdebug

RUN apk add --no-cache \
		acl \
		fcgi \
		file \
		gettext \
		git \
		jq \
	;

WORKDIR /app

EXPOSE 9000