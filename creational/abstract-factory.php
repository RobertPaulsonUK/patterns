<?php
//interface AbstractFactory
//{
//    public static function makeDesignerWorker():DesignerWorker;
//    public static function makeDeveloperWorker():DeveloperWorker;
//}
//
//class OutsourceWorkerFactory implements AbstractFactory
//{
//    public static function makeDesignerWorker(): DesignerWorker
//    {
//        return new OutsourceDesignerWorker();
//    }
//
//    public static function makeDeveloperWorker(): DeveloperWorker
//    {
//        return new OutsourceDeveloperWorker();
//    }
//}
//
//class NativeWorkerFactory implements AbstractFactory
//{
//    public static function makeDesignerWorker(): DesignerWorker
//    {
//        return new NativeDesignerWorker();
//    }
//
//    public static function makeDeveloperWorker(): DeveloperWorker
//    {
//        return new NativeDeveloperWorker();
//    }
//}
//interface WorkerMan
//{
//    public function work():void;
//}
//interface DeveloperWorker extends WorkerMan
//{
//
//}
//interface DesignerWorker extends WorkerMan
//{
//
//}
//
//class NativeDeveloperWorker implements DeveloperWorker
//{
//
//    #[\Override] public function work(): void
//    {
//        printf('I am native developer');
//    }
//}
//class OutsourceDeveloperWorker implements DeveloperWorker
//{
//    public function work(): void
//    {
//        printf('I am outsource developer');
//    }
//}
//class NativeDesignerWorker implements DesignerWorker {
//    public function work(): void
//    {
//        printf('I am native designer');
//    }
//}
//
//class OutsourceDesignerWorker implements DesignerWorker
//{
//    public function work(): void
//    {
//        printf('I am outsource designer');
//    }
//}
//
//$nativeDeveloper = NativeWorkerFactory::makeDeveloperWorker();
//$nativeDesigner = NativeWorkerFactory::makeDesignerWorker();
//
//$outsourceDeveloper = OutsourceWorkerFactory::makeDeveloperWorker();
//$outsourceDesigner = OutsourceWorkerFactory::makeDesignerWorker();
//
//$nativeDeveloper->work();
//$nativeDesigner->work();
//$outsourceDeveloper->work();
//$outsourceDesigner->work();