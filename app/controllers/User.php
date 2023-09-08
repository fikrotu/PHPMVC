<?php
class User extends Controller {
    public function index() {
        $data['judul'] = "User";
        $this->view('Templates/header',$data);
        $this->view("user/index");
        $this->view('Templates/footer',$data);
    }
    public function profile($nama = "Linux", $pekerjaan = "Devs") {
        $data['nama'] = $nama;
        $data['pekerjaan']= $pekerjaan;
        $this->view('Templates/header',$data);
        $this->view('user/profile', $data);
        $this->view('Templates/footer',$data);
     }
 }