<?php
//$_SESSION['sErrMsgcount']="";
//$_SESSION['sSuccMsgcount']="";
 if (!empty($_SESSION['sErrMsg'])): ?>
    <h5 class="label label-danger"><?=$_SESSION['sErrMsg']?></h5>
<?php  if($_SESSION['sErrMsgcount']==2){ $_SESSION['sErrMsgcount']=1;  }else{ $_SESSION['sErrMsgcount']=2; $_SESSION['sErrMsg']=""; } endif ?>

<?php if (!empty($_SESSION['sSuccMsg'])): ?>
    <h5 class="label label-success"><?=$_SESSION['sSuccMsg']?></h5>
<?php if($_SESSION['sSuccMsgcount']==2){ $_SESSION['sSuccMsgcount']=1;  }else{ $_SESSION['sSuccMsgcount']=2; $_SESSION['sSuccMsg']=""; 
} endif ?>
