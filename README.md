# PHP CRUD Application with Podman

A simple CRUD web application built using PHP, MySQL, Apache, and Podman containers.

## Features

- Create student data
- Read student data
- Update student data
- Delete student data
- MySQL database integration
- Containerized deployment with Podman

## Technologies

- PHP
- MySQL
- Apache HTTPD
- Podman
- Supervisord

## Architecture

Client Browser
      |
      v
Apache Web Server
      |
      v
PHP Application
      |
      v
MySQL Database

## Installation

### Clone Repository

```bash
git clone https://github.com/username/php-crud-podman.git
cd php-crud-podman
podman build -t php-crud .
podman run -d -p 8080:80 php-crud

http://localhost:8080
