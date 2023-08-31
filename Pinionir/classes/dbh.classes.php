<?php

class Dbh {

    protected function connect(){
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=lcoalhost;dhname=ooplogin', $username, $password);
        } 
        catch (PDOEException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}