<?php

namespace TestProject\Model;

class Admin extends Todo
{
    public function login($sEmail)
    {
        $oStmt = $this->oDb->prepare('SELECT username, password,id FROM accounts WHERE username = :username LIMIT 1');
        $oStmt->bindValue(':username', $sEmail, \PDO::PARAM_STR);
        $oStmt->execute();
        $oRow = $oStmt->fetch(\PDO::FETCH_OBJ);
        $data['password']=@$oRow->password;
        $data['id']=@$oRow->id;
        return $data; // Use the PHP 5.5 password function
    }
    public function checkusername($sUsername)
    {
        $oStmt = $this->oDb->prepare('SELECT username FROM accounts WHERE username = :username LIMIT 1');
        $oStmt->bindValue(':username', $sUsername, \PDO::PARAM_STR);
        $oStmt->execute();
        $oRow = $oStmt->fetch(\PDO::FETCH_OBJ);

        return @$oRow->username; // Use the PHP 5.5 password function
    }
    public function checkemail($sEmail)
    {
        $oStmt = $this->oDb->prepare('SELECT email FROM accounts WHERE email = :email LIMIT 1');
        $oStmt->bindValue(':email', $sEmail, \PDO::PARAM_STR);
        $oStmt->execute();
        $oRow = $oStmt->fetch(\PDO::FETCH_OBJ);

        return @$oRow->email; // Use the PHP 5.5 password function
    }
    public function add(array $aData)
    {
        $oStmt = $this->oDb->prepare('INSERT INTO accounts (firstname, lastname,username,email,password) VALUES(:firstname, :lastname, :username, :email, :password)');
        return $oStmt->execute($aData);
    }

}

