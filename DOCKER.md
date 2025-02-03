## Options to explore

- --volume /dev/usb/:/dev/usb/
- --device=/dev/usb/lp4

# scripts

### running

git pull --rebase origin test && \
docker rm -f <CONTAINER_ID> && \
docker build -t fiddep/unifi-voucher-service . && \
docker run -d -p 127.0.0.1:80:80 --device=/dev/usb/lp4 --privileged fiddep/unifi-voucher-service

#### running on PI

docker buildx build -t fiddep/unifi-voucher-service --progress plain --platform linux/arm/v7 .

docker pull fiddep/unifi-voucher-service:latest && \
docker stop <CONTAINER_ID> && \
docker run -d -p 127.0.0.1:80:80 --device=/dev/usb/lp0 --restart=always --platform linux/arm/v7 --privileged fiddep/unifi-voucher-service:latest

### Debug

docker logs <CONTAINER_ID>

docker exec -it <CONTAINER_ID> /bin/bash

curl -L localhost/unifi-voucher-service/codes/1-day-fastpass.php

brother_ql -p file:///dev/usb/lp0 -m QL-700 print -l 62 test-print.png
