<?php

class Home extends Controller {
    public function index(){
        $data['judul'] = 'Home';
        #$data['nama'] = $this->model('User_model')->getUser();
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

}