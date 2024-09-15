<?php

$users_role_table = "CREATE TABLE ".DB_TABLE_PREFIX."roles(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (255) NULL,
    permission_modules TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL
);";
//run_query($users_role_table);

$users_table = "CREATE TABLE ".DB_TABLE_PREFIX."users(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (255) NULL,
    email VARCHAR (255) NULL,
    password VARCHAR (255) NULL,
    password_reset_token VARCHAR (255) NULL,
    role_id INT(11) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL,
    INDEX users_role_index (role_id),
    CONSTRAINT users_role_id_foreign_key FOREIGN KEY (role_id) REFERENCES ".DB_TABLE_PREFIX."roles(id) ON DELETE CASCADE ON UPDATE CASCADE  
);";
//run_query($users_table);

$users_table_insert = "INSERT INTO ".DB_TABLE_PREFIX."users (name, email, password)
VALUES ('Super Admin', 'super_admin@cyberline.com', '".md5('123456')."')";
//run_query($users_table_insert);