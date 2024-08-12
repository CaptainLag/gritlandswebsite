# syntax=docker/dockerfile:1

# Dockerfile reference guide at:
# https://docs.docker.com/go/dockerfile-reference/

# PHP Apache image as the foundation for running the app.
# Specifying the "8.3-apache" tag it will use the most recent version on build.
FROM php:8.3-apache

# Copy app files from the app directory.
COPY ./ /var/www/html

# Use the default production configuration for PHP runtime arguments, see
# https://github.com/docker-library/docs/tree/master/php#configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# For Security switch to a non-privileged user (defined in the base image) that the app will run under.
# See https://docs.docker.com/go/dockerfile-user-best-practices/
USER www-data
