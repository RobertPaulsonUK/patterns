<?php
//
//interface WorkerMan {
//    public function get_money():void;
//}
//class Developer implements WorkerMan
//{
//
//    /**
//     * @return void
//     */
//    #[\Override] public function get_money(): void
//    {
//        printf('I earned 1000$');
//    }
//}
//class Designer implements WorkerMan
//{
//    public function get_money(): void
//    {
//        printf('I earned 800$');
//    }
//}
//
//class WorkerFactory
//{
//    public static function make(string $worker_title):?WorkerMan
//    {
//        $Classname = strtoupper($worker_title);
//        if(class_exists($Classname)){
//            return new $Classname();
//        }
//        return null;
//    }
//}
//
//$developer = WorkerFactory::make('developer');
//$designer = WorkerFactory::make('designer');
//
//
//$designer->get_money();
//$developer->get_money();