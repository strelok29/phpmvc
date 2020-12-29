<?php

class About extends Controller {
    public function index(){
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }

    public function page(){
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }

}