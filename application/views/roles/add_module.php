<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-user-circle-o" aria-hidden="true"></i> Agregar Módulo
            <small>Add / Edit Módulos</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="box box-red">
                    <div class="box-header">
                        <h3 class="box-title">Enter Menú Details</h3>
                    </div>
                    <!-- /.box-header -->

                    <!-- form start -->
                    <?php if ($this->session->flashdata('success')): ?>
                        <p class="alert alert-success"><?= $this->session->flashdata('success'); ?></p>
                    <?php elseif ($this->session->flashdata('error')): ?>
                        <p class="alert alert-danger"><?= $this->session->flashdata('error'); ?></p>
                    <?php endif; ?>

                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addRole" action="<?php echo base_url() ?>roles/addModule" method="post">
                        <div class="box-body">
                                <div class="form-group">
                                    <label for="roleId">ID del Rol:</label>
                                    <select name="roleId" id="roleId" class="form-control required" required>
                                        <option value="">Seleccione un Rol</option>
                                        <?php foreach ($roles as $role): ?>
                                            <option value="<?= $role['roleId']; ?>"><?= $role['role']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="moduleName">Nombre del Módulo:</label>
                                    <select name="moduleName" id="moduleName" class="form-control required" required>
                                        <option value="">Seleccione un Módulo</option>
                                        <?php foreach ($menuModules as $module): ?>
                                            <option value="<?= $module['id']; ?>"><?= $module['title']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Permisos:</label>
                                    <div>
                                        <label>Total Access: </label>
                                        <input type="number" name="permissions[total_access]" class="form-control required" required>
                                    </div>
                                    <div>
                                        <label>List: </label>
                                        <input type="number" name="permissions[list]" class="form-control required" required>
                                    </div>
                                    <div>
                                        <label>Create Records: </label>
                                        <input type="number" name="permissions[create_records]" class="form-control required" required>
                                    </div>
                                    <div>
                                        <label>Edit Records: </label>
                                        <input type="number" name="permissions[edit_records]" class="form-control required" required>
                                    </div>
                                    <div>
                                        <label>Delete Records: </label>
                                        <input type="number" name="permissions[delete_records]" class="form-control required" required>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                        </div>
                        <!-- /.box-body -->

                       
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <?php
                $this->load->helper('form');
                $error = $this->session->flashdata('error');
                if ($error) {
                    ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php } ?>

                <?php
                $success = $this->session->flashdata('success');
                if ($success) {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php } ?>

                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?php echo base_url(); ?>assets/js/addRole.js" type="text/javascript"></script>
