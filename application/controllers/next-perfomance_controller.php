<?php
    class NextPerfomance_Controller extends Controller { 
        function action_index() { 
            $this->view->generate('template_view.php', 'next-perfomance_view.php', 'next-perfomance.css', 'next-perfomance.js', 'Спектакль "Горе от ума"'); 
        } 
    }
?>