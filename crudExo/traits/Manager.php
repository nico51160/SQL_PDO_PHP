<?php

Trait Manager {
    private $cnx;
    public function __construct($cnx) {
        $this->setCnx($cnx);
    }
    private function setCnx($_cnx) {
        $this->cnx = $_cnx;
    }
}