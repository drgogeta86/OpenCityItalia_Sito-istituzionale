ARG php_image
FROM ${php_image} as php

FROM registry.gitlab.com/opencontent/ezpublish/nginx:1.2.3-v2
COPY --from=php /var/www/html /var/www/html


