<?php
// Model dasar: model lain dapat menggunakan koneksi database melalui method db().

abstract class Model
{
    protected function db(): PDO
    {
        return Database::connect();
    }
}
