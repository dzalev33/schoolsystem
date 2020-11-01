<?php

class Students extends  Controller {

    public function __construct()
    {

    }
    public function index()
    {
        $this->view('students/index');
    }

//create new student
    public function create()
    {
        $this->view('students/create');
    }

    //edit student
    public function update()
    {
        $this->view('students/update');
    }


}