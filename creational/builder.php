<?php
//class Operator
//{
//    public function make(Builder $builder):string
//    {
//        $builder->make_header();
//        $builder->make_body();
//        $builder->make_footer();
//        $builder->make_custom();
//        return $builder->get_text();
//    }
//}
//interface Builder
//{
//    public function make_header():void;
//    public function make_body():void;
//    public function make_footer():void;
//    public function make_custom():void;
//
//    public function get_text();
//}
//
//class Text implements Builder{
//    private Message $message;
//
//    /**
//     * @param  Message  $message
//     */
//    public function __construct()
//    {
//        $this->message = new Message();
//    }
//
//    public function make_header(): void
//    {
//        $this->message->set_part(new Header('header text'));
//    }
//
//    public function make_body(): void
//    {
//        $this->message->set_part(new Body('Body text'));
//    }
//
//    public function make_footer(): void
//    {
//        $this->message->set_part(new Footer('Footer text'));
//    }
//
//    public function make_custom(): void
//    {
//        $this->message->set_part(new Custom('Custom text'));
//    }
//    public function get_text():string
//    {
//        return $this->message->get_part();
//    }
//}
//
//class Section {
//    private string $text;
//
//    /**
//     * @param  string  $text
//     */
//    public function __construct(string $text)
//    {
//        $this->text = $text;
//    }
//
//    public function __toString(): string
//    {
//        return $this->text;
//    }
//}
//
//class Header extends Section
//{
//
//}
//class Footer extends Section
//{
//
//}
//class Body extends Section
//{
//
//}
//class Custom extends Section
//{
//
//}
//class Message
//{
//    private string $text = '';
//
//    public function set_part( string $part):void
//    {
//        $this->text .= $part . PHP_EOL;
//    }
//
//    public function get_part():string
//    {
//        return $this->text;
//    }
//}
//
//
//$operator = new Operator();
//$builder = new Text();
//$message = $operator->make($builder);
//
//var_dump($message);