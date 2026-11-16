<?php

echo 'PHP Version: ' . PHP_VERSION . '<br>';
echo 'Loaded INI: ' . php_ini_loaded_file() . '<br>';
echo 'PDO MySQL: ' . (extension_loaded('pdo_mysql') ? 'Enabled' : 'Disabled');