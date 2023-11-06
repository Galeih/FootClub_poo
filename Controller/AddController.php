<?php 

namespace Controller;

class AddController{

    public function Add(){
        require '../src/Views/ajout.html.php';
        return 'Add';
    }
}