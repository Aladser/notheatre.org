<?php
    class Postes_Controller extends Controller { 
        function action_index() { 
            $this->view->generate('template_view.php', 'main_view.php', 'main.css', 'Театр не театра'); 
        } 
    }
?>