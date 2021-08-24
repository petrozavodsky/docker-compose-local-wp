#!/usr/bin/env bash

echo "# docker-compose down --volumes"
docker-compose down --volumes

echo "# docker-compose up -d"
docker-compose up -d