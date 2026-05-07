<?php

require_once "core/Controller.php";
require_once "models/Wisata.php";

class HomeController extends Controller {

    public function index() {

        $wisata = new Wisata();

        $data['tempat'] = $wisata->getWisata();

        $this->view("index", $data);
    }
}

?>