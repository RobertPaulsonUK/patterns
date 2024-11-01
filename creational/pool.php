<?php
//    class WorkerPool
//    {
//        private array $freeWorkers = [];
//        private array $buseWorkers = [];
//
//        public function getWorker()
//        {
//            if(count($this->freeWorkers) === 0) {
//                $worker = new WorkerMan();
//            }
//            else {
//                $worker = array_pop($this->freeWorkers);
//            }
//            $this->buseWorkers[$worker->get_id()] = $worker;
//            return $worker;
//        }
//
//        public function release(WorkerMan $worker_man)
//        {
//            if(isset($this->buseWorkers[$worker_man->get_id()])) {
//                unset($this->buseWorkers[$worker_man->get_id()]);
//                $this->freeWorkers[$worker_man->get_id()] = $worker_man;
//            }
//        }
//
//        /**
//         * @return array
//         */
//        public function get_free_workers(): array
//        {
//            return $this->freeWorkers;
//        }
//
//        /**
//         * @param  array  $freeWorkers
//         */
//        public function set_free_workers(array $freeWorkers): void
//        {
//            $this->freeWorkers = $freeWorkers;
//        }
//
//        /**
//         * @return array
//         */
//        public function get_buse_workers(): array
//        {
//            return $this->buseWorkers;
//        }
//
//        /**
//         * @param  array  $buseWorkers
//         */
//        public function set_buse_workers(array $buseWorkers): void
//        {
//            $this->buseWorkers = $buseWorkers;
//        }
//
//    }
//
//    class WorkerMan {
//        private string $id;
//
//        public function __construct()
//        {
//            $this->id = spl_object_hash($this);
//        }
//
//
//        public function work()
//        {
//            printf('I am working');
//        }
//
//        public function get_id(): string
//        {
//            return $this->id;
//        }
//    }
//    $pool = new WorkerPool();
//    $worker = $pool->getWorker();
//    var_dump($pool->get_buse_workers());