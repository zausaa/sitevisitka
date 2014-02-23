<?php

class Controller_Contacts extends Controller {

    function action_index() {
        $data = array('title' => 'Контакты');
        $this->view->generate('contacts_view.php', 'template_view.php', $data);
    }
}