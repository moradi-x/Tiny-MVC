<?php 

namespace application\controllers ;

class Panel extends Controllers{
    public function index(){
        return $this->View('panel.index');
    }
}