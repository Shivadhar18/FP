<?php

namespace TestProject\Controller;

class Admin extends Todo
{
    public function login()
    {

        if ($this->isLogged())
            header('Location: ' . ROOT_URL . '?p=todo&a=all');

        if (isset($_POST['email'], $_POST['password']))
        {
            $this->oUtil->getModel('Admin');
            $this->oModel = new \TestProject\Model\Admin;

            $sHashPassword =  $this->oModel->login($_POST['email']);
            if (password_verify($_POST['password'], $sHashPassword['password']))
            {
                $_SESSION['is_logged'] = 1; // Admin is logged now
                $_SESSION['account_id'] = $sHashPassword['id']; 
                $_SESSION['username'] =$_POST['email'];
                header('Location: ' . ROOT_URL . '?p=todo&a=all');
                exit;
            }
            else
            {
                $_SESSION['sErrMsg'] = 'Incorrect UserName or Password !';
            }
            header('Location: ' . ROOT_URL . '?p=admin&a=login');
        }

        $this->oUtil->getView('login');
    }
    public function create_account()
    {
        if ($this->isLogged())
            header('Location: ' . ROOT_URL . '?p=todo&a=all');



        if (isset($_POST['firstname'],$_POST['lastname'],$_POST['username'],$_POST['email'],$_POST['password']))
        {
            $this->oUtil->getModel('Admin');
            $this->oModel = new \TestProject\Model\Admin;

            $checkUsername =  $this->oModel->checkusername($_POST['username']);
            if(empty($checkUsername)){
                $checkEmail=$this->oModel->checkemail($_POST['email']); 

                if(empty($checkEmail)){

                    $aData = array('firstname' => $_POST['firstname'], 'lastname' => $_POST['lastname'],'username' => $_POST['username'],'email' => $_POST['email'],'password' => password_hash($_POST['password'] , PASSWORD_BCRYPT, array('cost' => 14)));

                if ($this->oModel->add($aData)){
                    $_SESSION['sSuccMsg'] = 'Congrats!! Your Account Created Successfully! Please Login.';
                }
                else{
                    $_SESSION['sErrMsg'] = 'Whoops! An error has occurred! Please try again later.';
                }


                }else{
                    $_SESSION['sErrMsg'] = 'Email Address Already Exites.';

                }


            }else{

                    $_SESSION['sErrMsg'] = 'Username Address Already Exites.';

            }
            header('Location: ' . ROOT_URL . '?p=admin&a=create_account');
        }

        $this->oUtil->getView('register');
    }

    public function editprofile()
    {
        if (!$this->isLogged()){
            header('Location: ' . ROOT_URL . '?p=admin&a=all');
        }
        $this->oUtil->getModel('Admin');
        $this->oModel = new \TestProject\Model\Admin;

        if (isset($_POST['firstname'],$_POST['lastname'],$_POST['email']))
        {
           
                $checkEmail=$this->oModel->checkemailprofile($_POST['email']);
                if($checkEmail == 0){
                    $newpassword="";
                    if($_POST['password']!="")
                    {
                        $newpassword=password_hash($_POST['password'] , PASSWORD_BCRYPT, array('cost' => 14));
                    }

                    $aData = array('id' => $_SESSION['account_id'],'firstname' => $_POST['firstname'], 'lastname' => $_POST['lastname'],'email' => $_POST['email'],'password' => $newpassword);


                if ($this->oModel->update($aData)){
                    $_SESSION['sSuccMsg'] = 'Profile Updated Sucessfully!';
                }
                else{
                    $_SESSION['sErrMsg'] = 'Whoops! An error has occurred! Please try again later.';
                }

                }else{
                    $_SESSION['sErrMsg'] = 'Email Address Already Exites.';

                }


            header('Location: ' . ROOT_URL . '?p=admin&a=editprofile');
        }
        $this->oUtil->oAdmin = $this->oModel->getById($_SESSION['account_id']);
   
        $this->oUtil->getView('edit_profile');
    }


    public function logout()
    {
        if (!$this->isLogged())
            exit;

        // If there is a session, destroy it to disconnect the admin
        if (!empty($_SESSION))
        {
            $_SESSION = array();
            session_unset();
            session_destroy();
        }

        // Redirect to the homepage
        header('Location: ' . ROOT_URL);
        exit;
    }
    protected function isLogged()
    {
        return !empty($_SESSION['is_logged']);
    }

}
