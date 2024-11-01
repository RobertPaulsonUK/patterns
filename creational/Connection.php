<?php
    final class Connection
    {
        private static ?self $instance = null;
        private string $name;


        /**
         * @return self
         */
        public static function getInstance(): self
        {
            if (self::$instance === null) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        /**
         * @return string
         */
        public function get_name(): string
        {
            return $this->name;
        }

        /**
         * @param  string  $name
         */
        public function set_name(string $name): void
        {
            $this->name = $name;
        }



    }

    $connection = Connection::getInstance();
    $connection->set_name('dbname');

    var_dump($connection->get_name());
