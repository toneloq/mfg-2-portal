<?php
/**
 * Class to Easily force print errors on web pages
 *
 * @author mseeger
 */
class Error extends Exception {
    
    public function render(){
        echo "<div style='display:block; color:red; background-color:pink; border:solid 1px red;'>" . $this->getMessage() . "</div>";
        //echo $this->getMessage();
    }
}
?>