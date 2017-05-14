<?php
    class MySQLDatabase{
        // use static
        static $link;
        static function connect(){
            if(!isset($link)){
                $config = parse_ini_file('../cooking_world_dbConfig.ini');
                $link = mysqli_connect('52.63.14.193:3306', $config['username'],$config['password']);
                if(!$link){
                    die('Not connected : '.mysqli_error($link));
                }
                $db = mysqli_select_db($link, $config['dbname']);
                if(!$db){
                    die('Cannot use : '.mysqli_error($link));
                }
                mysqli_query( $link,"set character set 'UTF-8'");
            }
            return $link;
        }
    }
?>