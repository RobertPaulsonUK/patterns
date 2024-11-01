<?php
    interface ProductInterface
    {
        public function get_price():int;
        public function get_description():string;
    }

    class InternalProduct implements ProductInterface
    {
        private int $price;

        private string $description;

        /**
         * @param  int  $price
         * @param  string  $description
         */
        public function __construct(int $price, string $description)
        {
            $this->price       = $price;
            $this->description = $description;
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
        public function get_description(): string
        {
            return $this->description;
        }
    }

    class ExternalProduct
    {
        private float $price;

        private string $description;

        /**
         * @param  float  $price
         * @param  string  $description
         */
        public function __construct(float $price, string $description)
        {
            $this->price       = $price;
            $this->description = $description;
        }


        public function fetch_cost():float
        {
            return $this->price;
        }

        public function fetch_details()
        {
            return array(
                'description' => $this->description
            );
        }
    }

    class ExternalProductAdapter implements ProductInterface
    {
        private ExternalProduct $product;

        /**
         * @param  ExternalProduct  $product
         */
        public function __construct(ExternalProduct $product)
        {
            $this->product = $product;
        }


        #[\Override] public function get_price():int
        {
            return $this->product->fetch_cost() * 100;
        }

        #[\Override] public function get_description():string
        {
            $description_array = $this->product->fetch_details();
            return $description_array['description'];
        }
    }