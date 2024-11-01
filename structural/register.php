<?php
    abstract class Register
    {
        public static array $services = [];

        final public static function set_service(string $key,Service $service)
        {
            self::$services[$key] = $service;
        }

        final public static function get_service(string $ket):?Service
        {
            return self::$services[$ket] ?? null;
        }
    }

    class Service {

    }

    $service = new Service();

    Register::set_service(1,$service);
    $service = Register::get_service(1);

    var_dump($service);