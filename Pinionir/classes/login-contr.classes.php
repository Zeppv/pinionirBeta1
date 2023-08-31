<?php

// Include or require the Login class file here
require_once 'classes/login.inc.php'; // Replace 'Login.php' with the actual filename and path if needed

class loginContr extends Login {

    private $uid;
    private $pwd;

    public function __construct($uid, $pwd) {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser() {
        if($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
        }

        $this->getUser($this->uid, $this->pwd);
    }

    private function emptyInput() {
        $result;
        if(empty($this->uid) || empty($this->pwd)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}

?>
