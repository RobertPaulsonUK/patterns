<?php
    interface AccountInterface
    {
        public function getPrice():int;

        public function getDescription():string;
    }

    class Account implements AccountInterface
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

        public function getPrice(): int
        {
            return $this->price;
        }

        public function getDescription(): string
        {
            return  $this->description;
        }

    }

    abstract class Decorator implements AccountInterface
    {
        protected AccountInterface $account;

        /**
         * @param  AccountInterface  $account
         */
        public function __construct(AccountInterface $account)
        {
            $this->account = $account;
        }
    }

    class PremiumDecorator extends Decorator
    {

        #[\Override] public function getPrice(): int
        {
            return $this->account->getPrice() + 20;
        }

        #[\Override] public function getDescription(): string
        {
            return $this->account->getDescription() . ', c доступом к эксклюзивному контенту и функциям';
        }
    }
    class SecurityDecorator extends Decorator
    {

        #[\Override] public function getPrice(): int
        {
            return $this->account->getPrice() + 30;
        }

        #[\Override] public function getDescription(): string
        {
            return $this->account->getDescription() . ', с уведомлениями при подозрительной активности';
        }
    }

    class NewsDecorator extends Decorator
    {

        #[\Override] public function getPrice(): int
        {
            return $this->account->getPrice() + 50;
        }

        #[\Override] public function getDescription(): string
        {
            return $this->account->getDescription() . ', с подпиской на новости';
        }
    }

    $account = new Account(200,'Аккаунт пользователя');
    $premium_account = new PremiumDecorator($account);
    $news_premium_account = new NewsDecorator($premium_account);
    $secure_account = new SecurityDecorator($account);

    var_dump($news_premium_account->getPrice());
    var_dump($news_premium_account->getDescription());
