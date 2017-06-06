<?php
/**
 * Helper class for Views to load additional views and easily print headers and
 * footers if your heart desires
 *
 * @author mseeger
 */
class View {
    
    public function __construct(){
        
    }
    
    public function render($viewName, $context = NULL){
        if($context != NULL && is_array($context))
        foreach($context as $k=>$v){
            $$k = $v;
        }
        require 'views/' . $viewName . '.php';
    }
    
    public function renderHeader(){
        if(file_exists('views/header.php')){
            require 'views/header.php';
        }
    }
    
    public function renderFooter(){
        if(file_exists('views/header.php')){
            require 'views/footer.php';
        }
    }

}

?>