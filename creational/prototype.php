<?php
//abstract class WorkerPrototype
//{
//    protected string $name;
//    protected string $position;
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
//    /**
//     * @return string
//     */
//    public function get_position(): string
//    {
//        return $this->position;
//    }
//
//    /**
//     * @param  string  $position
//     */
//    public function set_position(string $position): void
//    {
//        $this->position = $position;
//    }
//
//}
//class Developer extends WorkerPrototype
//{
//    protected string $position = 'developer';
//}
//$developer = new Developer();
//$developer2 = clone $developer;
//$developer2->set_name('Boris');
//
//printf($developer2->get_name());