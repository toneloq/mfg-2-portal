<?php
/**
 * Default Controller
 *
 * @author mseeger
 */
class Index extends Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function Index(){
        $this->view->renderHeader();
        $this->view->render('index');
        $this->view->renderFooter();
    }
}

?>