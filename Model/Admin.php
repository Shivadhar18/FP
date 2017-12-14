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
    public function checkemailprofile($sEmail)
    {
        $oStmt = $this->oDb->prepare('SELECT email FROM accounts WHERE email = :email AND id !=:aid');
        $oStmt->bindValue(':email', $sEmail, \PDO::PARAM_STR);
        $oStmt->bindValue(':aid', $_SESSION['account_id'], \PDO::PARAM_STR);
        $oStmt->execute();
        return $oRow = $oStmt->rowCount();
    }
    public function add(array $aData)
    {
        $oStmt = $this->oDb->prepare('INSERT INTO accounts (firstname, lastname,username,email,password) VALUES(:firstname, :lastname, :username, :email, :password)');
        return $oStmt->execute($aData);
    }
    public function getById($iId)
    {
        $oStmt = $this->oDb->prepare('SELECT * FROM accounts WHERE id = :aId LIMIT 1');
        $oStmt->bindParam(':aId', $iId, \PDO::PARAM_INT);
        $oStmt->execute();
        return $oStmt->fetch(\PDO::FETCH_OBJ);
    }
    public function update(array $aData)
    {
$query="";
if($aData['password']!="")
{
    $query=",password = :password";    
}
        $oStmt = $this->oDb->prepare('UPDATE accounts SET firstname = :firstname, lastname = :lastname, email = :email'.$query.' WHERE id = :aId LIMIT 1');
        $oStmt->bindValue(':aId', $aData['id'], \PDO::PARAM_INT);
        $oStmt->bindValue(':firstname', $aData['firstname']);
        $oStmt->bindValue(':lastname', $aData['lastname']);
        if($aData['password']!=""){
        $oStmt->bindValue(':password', $aData['password']);
        }
        $oStmt->bindValue(':email', $aData['email']);
        return $oStmt->execute();
    }

}

