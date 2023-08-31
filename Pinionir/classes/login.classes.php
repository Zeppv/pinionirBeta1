<?php

class Login extends Dbh {

    protected  function setUser($uid, $pwd){
        $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;');
    
        if(!$stmt->execute(array($uid, $pwd))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0)
        {
            $stmt = null;
            header(location: ../inex.php?error=usernotfound);
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);

        if($checkPwd == false)
        {
            $stmt = null;
            header(location: ../inex.php?error=wrongpassword);
            exit();
        }
        elseif($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * users WHERE users_uid = ? OR users_email = ? AND users_pwd = ?;');

            if(!$stmt->execute(array($uid, $uid, $pwd))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            
            if($stmt->rowCount() == 0)
            {
            $stmt = null;
            header(location: ../inex.php?error=usernotfound);
            exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruid"] = $user[0]["users_uid"];

            $stmt = null;
        }

        $stmt = null;
    }
    
    
}