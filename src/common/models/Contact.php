<?php


namespace dac\common\models {

    class Contact
    {
        /**
         * @var string
         */
        protected $name;

        /**
         * @var string
         */
        protected $email;

        /**
         * @var string
         */
        protected $phone;

        /**
         * @return string
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @return string
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @return string
         */
        public function getPhone()
        {
            return $this->phone;
        }

        /**
         * @param string $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @param string $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * @param string $phone
         */
        public function setPhone($phone)
        {
            $this->phone = $phone;
        }


    }

}
