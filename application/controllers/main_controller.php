<?php
    class Main_Controller extends Controller { 
        function action_index() { 
            $this->view->generate('template_view.php', 'main_view.php', 'main_view.css', 'main_view.js', 'Театр не театра'); 
        } 
    }
?>