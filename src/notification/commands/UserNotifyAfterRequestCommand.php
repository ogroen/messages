<?php


namespace notification\commands {

    use dac\common\models\Contact;
    use dac\common\models\Franchise;

    class UserNotifyAfterRequestCommand
    {
        /**
         * @var Contact
         */
        protected $user;

        /**
         * @var Franchise
         */
        protected $franchise;

        /**
         * @var Franchise[]
         */
        protected $similar;

        /**
         * @return Contact
         */
        public function getUser()
        {
            return $this->user;
        }

        /**
         * @return Franchise
         */
        public function getFranchise()
        {
            return $this->franchise;
        }

        /**
         * @return Franchise[]
         */
        public function getSimilar()
        {
            return $this->similar;
        }

        /**
         * @param Contact $user
         */
        public function setUser($user)
        {
            $this->user = $user;
        }

        /**
         * @param Franchise $franchise
         */
        public function setFranchise($franchise)
        {
            $this->franchise = $franchise;
        }

        /**
         * @param Franchise[] $similar
         */
        public function setSimilar($similar)
        {
            $this->similar = $similar;
        }


    }

}
