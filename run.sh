#!/usr/bin/env bash

echo "Русский корабль - иди нахуй!"

echo "# docker-compose down --volumes"
docker-compose down --volumes

echo "# docker-compose up -d"
docker-compose up -d
