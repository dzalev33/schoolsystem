<?php

class Boards extends  Controller {

    public function __construct()
    {

    }

    public function index()
    {
        $this->view('boards/index');

    }


}