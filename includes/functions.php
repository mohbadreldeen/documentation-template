<?php 
function dt_current_url_dir(){
    $query = $_SERVER['PHP_SELF'];
    $path = pathinfo( $query );
    return $path['dirname'];
}