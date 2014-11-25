<div id="pw-dashboard" class="page">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $this->titre; ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <?php
            $this->form->noButtons();
            echo $this->form->table();
            ?>
            <button class="btn btn-default" onclick="submitForm($(this).parent().find('form:first'))">Valider</button>
        </div>
    </div>
</div>