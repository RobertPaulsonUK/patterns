<?php
    class ControllerConfiguration
    {
        private string $name;
        private string $action;

        /**
         * @param  string  $name
         * @param  string  $action
         */
        public function __construct(string $name, string $action)
        {
            $this->name   = $name;
            $this->action = $action;
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

        /**
         * @return string
         */
        public function get_action(): string
        {
            return $this->action;
        }

        /**
         * @param  string  $action
         */
        public function set_action(string $action): void
        {
            $this->action = $action;
        }
    }

    class Controller
    {
        private ControllerConfiguration $controller_configuration;

        /**
         * @param  ControllerConfiguration  $controller_configuration
         */
        public function __construct(ControllerConfiguration $controller_configuration)
        {
            $this->controller_configuration = $controller_configuration;
        }

        public function get_configuration():string
        {
            return $this->controller_configuration->get_name() . '@' . $this->controller_configuration->get_action();
        }

    }

    $configuration = new ControllerConfiguration('PostController','index');
    $controller = new Controller($configuration);

    var_dump($controller->get_configuration());