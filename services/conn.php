<?php
    class MySQLDatabase{
        var $link;

        function connect($user, $password, $database){
            $this->link = mysqli_connect('52.63.14.193:3306', $user, $password);
            if(!$this->link){
                die('Not connected : '.mysqli_error());
            }
            $db = mysqli_select_db($this->link, $database);
            mysqli_query("set character set 'UTF-8'");
            if(!$db){
                die('Cannot use : '.mysqli_error());
            }
            return $this->link;
        }

        function disconnect(){
            mysqli_close($this->link);
        }
    }

    $mydata = new MySQLDatabase();
    $mydata->connect("root","WISteam2017!","cooking_world");

?>