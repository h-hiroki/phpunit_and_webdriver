FROM ubuntu:16.04
MAINTAINER otegalu

RUN apt update

# 途中で[Y/n]の選択肢が出てくるので-yオプションをつけること！
RUN apt install -y php
RUN apt install -y phpunit
RUN apt install -y php-xdebug
RUN apt install -y vim

