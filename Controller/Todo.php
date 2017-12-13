<?php

namespace TestProject\Controller;

class Todo
{
    const MAX_POSTS = 5;

    protected $oUtil, $oModel;
    private $_iId;

    public function __construct()
    {
        // Enable PHP Session
        if (empty($_SESSION))
            @session_start();

        $this->oUtil = new \TestProject\Engine\Util;

        /** Get the Model class in all the controller class **/
  
        /** Get the Post ID in the constructor in order to avoid the duplication of the same code **/
        $this->_iId = (int) (!empty($_GET['id']) ? $_GET['id'] : 0);
    }


    /***** Front end *****/
    // Homepage
    public function index()
    {
        if (!$this->isLogged()) {
            header('Location: ' . ROOT_URL . '?p=admin&a=login');
            exit;
        }
        // $this->oUtil->oPosts = $this->oModel->getAll(); // Get only the latest X posts
        $this->oUtil->getView('index');
    }

    public function post()
    {
        $this->oUtil->oPost = $this->oModel->getById($this->_iId); // Get the data of the post

        $this->oUtil->getView('post');
    }

    public function notFound()
    {
        $this->oUtil->getView('not_found');
    }


    /***** For Admin (Back end) *****/
    public function all()
    {
        if (!$this->isLogged()) exit;
        $this->oUtil->getModel('Todo');
        $this->oModel = new \TestProject\Model\Todo;

        $this->oUtil->oTodos = $this->oModel->getAll();

        $this->oUtil->getView('index');
    }


    public function add()
    {
        if (!$this->isLogged()) {
            header('Location: ' . ROOT_URL . '?p=admin&a=login');
            exit;
        }

        if (!empty($_POST['add_submit']))
        {
            if (isset($_POST['title'], $_POST['body'])) // Allow a maximum of 50 characters
            {
            $this->oUtil->getModel('Todo');
            $this->oModel = new \TestProject\Model\Todo;

                $aData = array('accountid'=>$_SESSION['account_id'],'title' => $_POST['title'], 'body' => $_POST['body'], 'created_date' => date('Y-m-d H:i:s'));

                if ($this->oModel->add($aData))
                    $_SESSION['sSuccMsg'] = 'Success!! The Todo Detail has been added.';
                else
                    $_SESSION['sErrMsg'] = 'Whoops! An error has occurred! Please try again later.';
                
            }
            else
            {
                $_SESSION['sErrMsg'] = 'All fields are required and the title cannot exceed 50 characters.';
               
            }
            header('Location: ' . ROOT_URL . '?p=todo&a=add');
        }

        $this->oUtil->getView('add_todo');
    }

    public function edit()
    {
        if (!$this->isLogged()) exit;

        $this->oUtil->getModel('Todo');
        $this->oModel = new \TestProject\Model\Todo;

        if (!empty($_POST['edit_submit']))
        {
            if (isset($_POST['title'], $_POST['body']))
            {
                $aData = array('id' => $_POST['edit_id'], 'title' => $_POST['title'], 'body' => $_POST['body'],'updated_at'=>date('Y-m-d H:i:s'));

                if ($this->oModel->update($aData))
                    $_SESSION['sSuccMsg'] = 'Success!! The Todo Detail has been updated successfully.';
                else
                    $_SESSION['sErrMsg'] = 'Whoops! An error has occurred! Please try again later';
            }
            else
            {
                $_SESSION['sErrMsg'] = 'All fields are required.';
            }
        }

        /* Get the data of the post */
        $this->oUtil->oTodos = $this->oModel->getById($_REQUEST['eid']);

        $this->oUtil->getView('edit_todo');
    }

    public function delete()
    {
        if (!$this->isLogged()) exit;

        if (!empty($_REQUEST['did']))
        {
            $this->oUtil->getModel('Todo');
            $this->oModel = new \TestProject\Model\Todo;

                $aData = array('did'=>$_REQUEST['did'], 'updated_date' => date('Y-m-d H:i:s'));

                if ($this->oModel->delete($aData))
                    $_SESSION['sSuccMsg'] = 'Success!! Deleted Successfully';
                else
                    $_SESSION['sErrMsg'] = 'Whoops! An error has occurred! Please try again later.';
                
            }
            else
            {
                $_SESSION['sErrMsg'] = 'All fields are required and the title cannot exceed 50 characters.';
               
            }
            $_SESSION['sAction']='delete';
            header('Location: ' . ROOT_URL . '?p=todo&a=all');
    }

    protected function isLogged()
    {
        return !empty($_SESSION['is_logged']);
    }
}
