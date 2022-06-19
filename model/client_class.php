<?php
    class Client{
        private $name;  
        private $address;
        private $p_number;

        public function getName()
        {
                return $this->name;
        }
 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        public function getAddress()
        {
                return $this->address;
        }

        public function setAddress($address)
        {
                $this->address = $address;

                return $this;
        }

        public function getP_number()
        {
                return $this->p_number;
        }

        public function setP_number($p_number)
        {
                $this->p_number = $p_number;

                return $this;
        }
    }

?>