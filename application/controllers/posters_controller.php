<?php
    class Posters_Controller extends Controller { 
        function action_index() { 
            $this->view->generate('template_view.php', 'posters_view.php', 'main.css', 'Театр не театра'); 
        } 
    }
?>