<?php

final class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $prefix = 'App\\';
            $base_dir = __DIR__ . '/src/';

            if (str_starts_with($class, $prefix)) {
                $relative_class = substr($class, strlen($prefix));
                $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

                if (file_exists($file)) {
                    require $file;
                }
            }
        });
    }
}

Autoloader::register();
