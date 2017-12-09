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
//        $this->oUtil->oPosts = $this->oModel->get(0, self::MAX_POSTS); // Get only the latest X posts

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

//        $this->oUtil->oPosts = $this->oModel->getAll();

        $this->oUtil->getView('index');
    }


    public function add()
    {
        if (!$this->isLogged()) exit;

        if (!empty($_POST['add_submit']))
        {
            if (isset($_POST['title'], $_POST['body']) && mb_strlen($_POST['title']) <= 50) // Allow a maximum of 50 characters
            {
                $aData = array('title' => $_POST['title'], 'body' => $_POST['body'], 'created_date' => date('Y-m-d H:i:s'));

                if ($this->oModel->add($aData))
                    $_SESSION['sErrMsg'] = 'Hurray!! The post has been added.';
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

        if (!empty($_POST['edit_submit']))
        {
            if (isset($_POST['title'], $_POST['body']))
            {
                $aData = array('post_id' => $this->_iId, 'title' => $_POST['title'], 'body' => $_POST['body']);

                if ($this->oModel->update($aData))
                    $this->oUtil->sSuccMsg = 'Hurray! The post has been updated.';
                else
                    $this->oUtil->sErrMsg = 'Whoops! An error has occurred! Please try again later';
            }
            else
            {
                $this->oUtil->sErrMsg = 'All fields are required.';
            }
        }

        /* Get the data of the post */
        $this->oUtil->oPost = $this->oModel->getById($this->_iId);

        $this->oUtil->getView('edit_post');
    }

    public function delete()
    {
        if (!$this->isLogged()) exit;

        if (!empty($_POST['delete']) && $this->oModel->delete($this->_iId))
            header('Location: ' . ROOT_URL);
        else
            exit('Whoops! Post cannot be deleted.');
    }

    protected function isLogged()
    {
        return !empty($_SESSION['is_logged']);
    }
}
