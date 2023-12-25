<?php
class HomeController {
    public function index($page) {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        include('views/' . $page . '.php');

    }
}
?>
