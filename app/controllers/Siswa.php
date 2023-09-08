<?php
class Blog extends Controller {
public function index () {
$data['judul'] = "Blog";
$data['blog'] = $this->model("Siswa_model")->getAllBlog();
$this->view('templates/header', $data);
$this->view('siswa/index', $data);
$this->view('templates/footer');
}
}
?>