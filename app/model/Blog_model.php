<?php
class Blog_model {
private $blog = [
[
"penulis" => "Karindra Linux",
"judul" => "Belajar PHP MVC",
"tulisan" => ""
],
[
"penulis" => "Karindra Linux",
"judul" => "Belajar OOP PHP",
"tulisan" => "Tutorial PHP OOP"
] ,
[
"penulis" => "Karindra Linux",
"judul" => "Belajar PHP Dasar",
"tulisan" => "Tutorial PHP Dasar"
]
];
public function getAllBlog() {
return $this->blog;
}
}