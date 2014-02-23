<?php

class Controller_Admino_Main extends Controller {

    function action_index() {
        $data = array('title' => 'Главная админки');
        $this->view->generate('admino/main_view.php', 'template_view.php', $data);
    }

}