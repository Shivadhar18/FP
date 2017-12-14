
<?php require 'inc/header.php' ?>
<style>
button.accordion {
    background-color: #fff;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 16px;
    transition: 0.4s;
}

button.accordion.active{
    border-bottom: 1px solid #ddd;

}
button.accordion .fa-trash{
    float: right;
}

div.panel {
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
div.panel.panelactive{
    border-bottom:1px solid #edf1f2;
    padding: 15px 18px;
}
.text-delete{
    text-decoration: line-through;
}
</style>
<div class="row">
    <div class="col-md-12">
      <div class="grid simple">
        <div class="grid-title no-border">
            <div class="page-title"><i class="fa fa-tasks"></i>
                    <h3>My <span class="semi-bold">Todo List</span></h3>
            </div>
            <div class="col-md-12 text-center">
                <?php require 'inc/msg.php' ?>
            </div>
<?php
$completed=0;
$pending=0;
 foreach ($this->oTodos as $oTodo): ?>
    
            <button class="accordion">
                <span class="<?php if ($oTodo->status==1): echo 'text-delete'; $completed++; else: echo 'semi-bold'; $pending++; endif; ?> ">
                        <?=$oTodo->title?>
                </span> 
                    <?php if ($oTodo->status!=1):?>
                        <span class="fa fa-pencil edit-row" data-id="<?=$oTodo->id?>"></span> 
                    <?php endif;?>
                <span class="fa fa-trash delete-row" data-id="<?=$oTodo->id?>"></span>
            </button>
            
            <div class="panel">
                <p><?=$oTodo->body?></p>
            </div>
 <?php endforeach ?>
            <div align="right">
             <?=$pending;?> - Todo List
            </div>
        </div>
      </div>
    </div>
  </div>
<?php require 'inc/footer.php' ?>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
      panel.classList.toggle('panelactive');
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
$(".delete-row").click(function(){
    var did=$(this).attr('data-id');
    var confim=confirm('Do You Want To Delete This Row?');
    if(confim==true){
        window.location.href="?p=todo&a=delete&did="+did;
    }

    return false;
});
$(".edit-row").click(function(){
    var eid=$(this).attr('data-id');
    window.location.href="?p=todo&a=todo&a=edit&eid="+eid;
    return false;
})
</script>

