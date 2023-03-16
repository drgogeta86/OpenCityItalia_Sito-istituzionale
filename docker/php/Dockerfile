FROM registry.gitlab.com/opencontent/ezpublish/php:1.2.3-v2

WORKDIR /var/www

COPY composer.json composer.lock /var/www/

# the following variable exists only during build-time
# pass the correct value during build:
#     $ docker build --build-arg github_token=abcdef123456 # [...]
#
#ARG GITHUB_TOKEN=123456
# Avoid the following line, because leave the environment variable
# in the final image
# ENV GITHUB_TOKEN=$github_token
# The secure way to do it is to prepend the command with the variable definition:
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN echo "Running composer"  \
	#&& composer global config github-oauth.github.com "$GITHUB_TOKEN" \
	&& composer install --prefer-dist --no-scripts --no-dev \ 
	&& rm -rf /root/.composer 
	

# Add some custom config... only if strictly needed for a single instance
# otherwise change it in the base-image
# COPY conf.d/php.ini ${PHP_INI_DIR}/conf.d/php.ini

# Add default settings
COPY conf.d/ez/override /var/www/html/settings/override
COPY conf.d/ez/siteaccess /var/www/html/settings/siteaccess
COPY conf.d/ez/config.cluster.php /var/www/html/config.cluster.php

# Add installer
COPY conf.d/installer /var/www/installer

COPY security.txt /var/www/html/.well-known/security.txt

# Copy install script to default entrypoint script dir to extend base entrypoint without modifying it
# @see https://github.com/OpencontentCoop/docker-ezpublish/blob/master/scripts/docker-entrypoint.sh#L84
COPY ./docker/php/scripts/install.sh /docker-entrypoint-initdb.d/

WORKDIR /var/www/html

RUN php bin/php/ezpgenerateautoloads.php -e

# Add version file
ARG CI_COMMIT_REF_NAME=no-branch
ARG CI_COMMIT_SHORT_SHA=1234567
ARG CI_COMMIT_TAG

COPY ./docker/scripts/get-version.sh /bin/
RUN /bin/get-version.sh > /var/www/html/VERSION

WORKDIR /var/www/html

# The following directives are already present in the base-image
# don't change them here unless for debugging or improvement of the
# base-image itself.
#VOLUME [ "/var/www/html" ]
#ENTRYPOINT ["/scripts/docker-entrypoint.sh"]
#CMD php-fpm
#EXPOSE 9000
