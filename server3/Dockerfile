FROM php:7.2-apache
COPY src/ /var/www/html/

RUN apt update && apt install  openssh-server sudo curl net-tools -y

RUN useradd -rm -d /home/ubuntu -s /bin/bash -g root -G sudo -u 1000 user 

RUN  echo 'user:user' | chpasswd

RUN service ssh start

EXPOSE 22

COPY start.sh /start.sh

RUN chmod +x /start.sh

ENTRYPOINT ["/start.sh"]
