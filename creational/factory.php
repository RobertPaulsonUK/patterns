<?php
//
//class Worker
//{
//    private string $name;
//
//    /**
//     * @param  string  $name
//     */
//    public function __construct(string $name)
//    {
//        $this->name = $name;
//    }
//
//
//    /**
//     * @return string
//     */
//    public function get_name(): string
//    {
//        return $this->name;
//    }
//
//    /**
//     * @param  string  $name
//     */
//    public function set_name(string $name): void
//    {
//        $this->name = $name;
//    }
//
//}
//
//class WorkerFactory
//{
//    public static function make(string $name):Worker
//    {
//        return new Worker($name);
//    }
//}
//
//$new_worker = WorkerFactory::make('Igor');
//var_dump($new_worker->get_name());