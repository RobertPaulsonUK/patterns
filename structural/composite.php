<?php
    interface Pricable
    {
        public function get_price():int;
    }
    class Order implements Pricable
    {
        private array $parts = [];

        public function get_price(): int
        {
            $price = 0;

            foreach ($this->parts as $part){
                $price += $part->get_price();
            }

            return  $price;
        }

        public function add_part(Pricable $part):void
        {
            $this->parts[] = $part;
        }
    }

    class Detail implements Pricable
    {
        private int $price;
        private string $name;

        /**
         * @param  int  $price
         */
        public function __construct(string $name, int $price)
        {
            $this->name = $name;
            $this->price = $price;
        }

        /**
         * @return int
         */
        public function get_price(): int
        {
            return $this->price;
        }

        /**
         * @return string
         */
        public function get_name(): string
        {
            return $this->name;
        }
    }

    class Box implements Pricable
    {
        private array $details_group = [];

        /**
         * @return array
         */
        public function get_details_group(): array
        {
            return $this->details_group;
        }

        public function add_detail(Detail $detail):void
        {
            $this->details_group[] = $detail;
        }

        public function get_price(): int
        {
            $price = 0;

            foreach ($this->details_group as $detail){
                $price += $detail->get_price();
            }
            return  $price;
        }
    }

    $order = new Order();
    $box = new Box();
    $box->add_detail(new Detail('TeaCup','400'));
    $box->add_detail(new Detail('TeaSpoon','40'));
    $box->add_detail(new Detail('TeaSpoon','100'));
    $order->add_part($box);
    $order->add_part(new Detail('Picture','1000'));
    $order->add_part(new Detail('Laptop','10000'));

    $order_price = $order->get_price();

    var_dump($order_price);



