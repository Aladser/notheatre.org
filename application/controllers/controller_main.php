<?php
    class Controller_Main extends Controller { 
        function action_index() { 
            $this->view->generate('template_view.php', 'main_view.php', 'main_view.css', 'main_view.js'); 
        } 
    }
?>