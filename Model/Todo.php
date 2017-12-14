<?php

namespace TestProject\Model;

class Todo
{
    protected $oDb;

    public function __construct()
    {
        $this->oDb = new \TestProject\Engine\Db;
    }

    public function get($iOffset, $iLimit)
    {
        $oStmt = $this->oDb->prepare('SELECT * FROM todo ORDER BY createdDate DESC LIMIT :offset, :limit');
        $oStmt->bindParam(':offset', $iOffset, \PDO::PARAM_INT);
        $oStmt->bindParam(':limit', $iLimit, \PDO::PARAM_INT);
        $oStmt->execute();
        return $oStmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getAll()
    {
        $iId=0;
        $oStmt = $this->oDb->prepare('SELECT * FROM todo WHERE status = :status ORDER BY createdDate DESC');
        $oStmt->bindParam(':status', $iId, \PDO::PARAM_INT);
        $oStmt->execute();
        return $oStmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function add(array $aData)
    {
        $oStmt = $this->oDb->prepare('INSERT INTO todo (accountId, title, body, createdDate) VALUES(:accountid,:title, :body, :created_date)');
        return $oStmt->execute($aData);
    }

    public function getById($iId)
    {
        $oStmt = $this->oDb->prepare('SELECT * FROM todo WHERE id = :tId LIMIT 1');
        $oStmt->bindParam(':tId', $iId, \PDO::PARAM_INT);
        $oStmt->execute();
        return $oStmt->fetch(\PDO::FETCH_OBJ);
    }

    public function update(array $aData)
    {
        $oStmt = $this->oDb->prepare('UPDATE todo SET title = :title, body = :body, updatedDate = :updated_date WHERE id = :tId LIMIT 1');
        $oStmt->bindValue(':tId', $aData['id'], \PDO::PARAM_INT);
        $oStmt->bindValue(':title', $aData['title']);
        $oStmt->bindValue(':body', $aData['body']);
        $oStmt->bindValue(':updated_date', $aData['updated_at']);
        return $oStmt->execute();
    }

    public function delete(array $aData)
    {
        $oStmt = $this->oDb->prepare('UPDATE todo SET updatedDate= :updated_date,status= :status WHERE id = :did');
        $oStmt->bindValue(':did', $aData['did'], \PDO::PARAM_INT);
        $oStmt->bindValue(':updated_date', $aData['updated_date']);
        $oStmt->bindValue(':status', 1);
        return $oStmt->execute();
    }
}
