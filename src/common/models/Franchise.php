<?php


namespace dac\common\models {

    class Franchise
    {
        /**
         * @var int
         */
        protected $id;

        /**
         * @var string
         */
        protected $name;

        /**
         * @var string
         */
        protected $url;

        /**
         * @var FranchiseCategory[]
         */
        protected $categories;

        /**
         * @var Contact
         */
        protected $contact;

        /**
         * @var Image[]
         */
        protected $images;

        /**
         * @var int
         */
        protected $investmentsFrom;

        /**
         * @var int
         */
        protected $investmentsTo;

        /**
         * @var string
         */
        protected $description;

        /**
         * @var string
         */
        protected $companyDescription;

        /**
         * @return int
         */
        public function getId()
        {
            return $this->id;
        }

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
        public function getUrl()
        {
            return $this->url;
        }

        /**
         * @return FranchiseCategory[]
         */
        public function getCategories()
        {
            return $this->categories;
        }

        /**
         * @return Contact
         */
        public function getContact()
        {
            return $this->contact;
        }

        /**
         * @return Image[]
         */
        public function getImages()
        {
            return $this->images;
        }

        /**
         * @return int
         */
        public function getInvestmentsFrom()
        {
            return $this->investmentsFrom;
        }

        /**
         * @return int
         */
        public function getInvestmentsTo()
        {
            return $this->investmentsTo;
        }

        /**
         * @return string
         */
        public function getDescription()
        {
            return $this->description;
        }

        /**
         * @return string
         */
        public function getCompanyDescription()
        {
            return $this->companyDescription;
        }

        /**
         * @param int $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @param string $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @param string $url
         */
        public function setUrl($url)
        {
            $this->url = $url;
        }

        /**
         * @param FranchiseCategory[] $categories
         */
        public function setCategories($categories)
        {
            $this->categories = $categories;
        }

        /**
         * @param Contact $contact
         */
        public function setContact($contact)
        {
            $this->contact = $contact;
        }

        /**
         * @param Image[] $images
         */
        public function setImages($images)
        {
            $this->images = $images;
        }

        /**
         * @param int $investmentsFrom
         */
        public function setInvestmentsFrom($investmentsFrom)
        {
            $this->investmentsFrom = $investmentsFrom;
        }

        /**
         * @param int $investmentsTo
         */
        public function setInvestmentsTo($investmentsTo)
        {
            $this->investmentsTo = $investmentsTo;
        }

        /**
         * @param string $description
         */
        public function setDescription($description)
        {
            $this->description = $description;
        }

        /**
         * @param string $companyDescription
         */
        public function setCompanyDescription($companyDescription)
        {
            $this->companyDescription = $companyDescription;
        }


    }

}
