#FROM phpdockerio/php71-fpm:latest

# Install selected extensions and other stuff
#RUN apt-get update \
    #&& apt-get -y --no-install-recommends install  php7.1-soap php7.1-mysql php7.1-mbstring git\
    #&& apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*


#WORKDIR "/application"

FROM phpdockerio/php71-fpm:latest

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.1-mysql php7.1-mbstring php7.1-gd git libxtst6 libxrender1 \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

WORKDIR "/application"