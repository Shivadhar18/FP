<!-- BEGIN CORE JS FRAMEWORK-->
<script src="<?=ROOT_URL?>static/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?=ROOT_URL?>static/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=ROOT_URL?>static/assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="<?=ROOT_URL?>static/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="<?=ROOT_URL?>static/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="<?=ROOT_URL?>static/assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="<?=ROOT_URL?>static/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="<?=ROOT_URL?>static/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?=ROOT_URL?>static/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?=ROOT_URL?>static/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="<?=ROOT_URL?>static/assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="<?=ROOT_URL?>static/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="<?=ROOT_URL?>static/assets/js/core.js" type="text/javascript"></script>

            <footer>
                <?php if (!empty($_SESSION['is_logged'])): ?>
                    You are connected as Admin - <a href="<?=ROOT_URL?>?p=admin&amp;a=logout">Logout</a> &nbsp; &nbsp;
                <?php endif ?>
                </p>
            </footer>
        </div>
    </body>
</html>
