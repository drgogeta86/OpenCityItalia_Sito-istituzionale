FROM opencontentcoop/ezpublish:0.0.2

COPY composer.json composer.lock /var/www/

# the following variable exists only during build-time
# pass the correct value during build:
#     $ docker build --build-arg github_token=abcdef123456 # [...]
#
ARG GITHUB_TOKEN=abcdef123456
# Avoid the following line, because leave the environment variable
# in the final image
# ENV GITHUB_TOKEN=$github_token
# The secure way to do it is to prepend the command with the variable definition:
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN echo "Running composer"  \
	&& composer global require hirak/prestissimo \
	&& composer global config github-oauth.github.com "$GITHUB_TOKEN" \
	&& composer install --prefer-dist --no-scripts --no-dev \ 
	&& rm -rf /root/.composer 
	

# Add some custom config... only if strictly needed for a single instance
# otherwise change it in the base-image
# COPY conf.d/php.ini ${PHP_INI_DIR}/conf.d/php.ini

# Add custom settings of prototipo
COPY conf.d/ez /var/www/html/settings

COPY security.txt /var/www/html/.well-known/security.txt

WORKDIR /var/www/html

RUN php bin/php/ezcache.php --clear-id=global_ini --allow-root-user \
    && php bin/php/ezpgenerateautoloads.php -e 

WORKDIR /var/www

# The following directives are already present in the base-image
# don't change them here unless for debugging or improvement of the
# base-image itself.
#VOLUME [ "/var/www/html" ]
#ENTRYPOINT ["/scripts/docker-entrypoint.sh"]
#CMD php-fpm
#EXPOSE 9000
