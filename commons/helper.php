<?php
    //khai bao cac ham dung global
    if(!function_exists('require_file')){
        function require_file($pathFolder){
            // echo "Ahihi".$pathFolder;
            $files = scandir($pathFolder);
            $files = array_values(array_diff($files,['.','..']));
            foreach($files as $file){
                // debug($pathFolder.'/'.$file);
                require_once $pathFolder.'/'.$file;
            }
        }
    }
    if(!function_exists('debug')){
        function debug($data){
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
    }
?>