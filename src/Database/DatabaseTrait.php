<?php
namespace App\Database;
trait DatabaseTrait {
    public function connectioninfo() : void {
        if (in_array('pdo_mysql', get_loaded_extensions())) {
            echo 'pdo_mysql extension is loaded.' . PHP_EOL;
        } else {
            echo 'pdo_mysql extension is not loaded.' . PHP_EOL;
        }
    }
}