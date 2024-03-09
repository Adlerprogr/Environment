<?php

$pdo = new PDO("pgsql:host=db; port=5432; dbname=laravel", "root", "root");

$pdo->exec("INSERT INTO users VALUES (3, 'test')");

# $pdo->exec("CREATE TABLE users (id SERIAL PRIMARY KEY, name varchar(255) not null)");

