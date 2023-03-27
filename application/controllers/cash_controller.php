<?php
    class Cash_Controller extends Controller { 
        function action_index() { 
            $this->view->generate('template_view.php', 'cash_view.php', 'main_view.css', 'main_view.js', 'Театр не театра'); 
        } 
    }
?>