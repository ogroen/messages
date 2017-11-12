<?php


namespace dac\common\models {

    class User extends Contact
    {
        /**
         * @var int
         */
        protected $id;

        /**
         * @return int
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param int $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

    }

}
