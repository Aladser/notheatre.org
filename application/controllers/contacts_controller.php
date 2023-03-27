<?php
    class Contacts_Controller extends Controller { 
        function action_index() { 
            $this->view->generate('template_view.php', 'contacts_view.php', 'main.css', 'Театр не театра'); 
        } 
    }
?>