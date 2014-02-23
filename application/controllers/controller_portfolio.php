<?php

class Controller_Portfolio extends Controller {

    function action_index() {
        $data = array('title' => 'Портфолио');
        $this->view->generate('portfolio_view.php', 'template_view.php', $data);
    }

}