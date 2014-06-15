<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <i class="fa fa-user"></i>
        <?php echo __('Usuarios'); ?>
        <small>todo acerca de los usuarios</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Users</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th><?= __("") ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?= h($user['User']['id']) ?></td>
                <td>
                    <a href="<?= $this->Html->url(array('action'=>'view', $user['User']['id'])) ?>"><?= __($user['User']['username']) ?></a>
                </td>
                <td><?= h($user['User']['password']) ?></td>
                <td><?= $this->Form->postLink('<i class="fa fa-minus-square"></i> '.__('Delete'), array('action'=>'delete', $user['User']['id']), array(
                    'escape'=>false,
                    'class'=>'btn btn-default btn-sm pull-right'), __("Estas seguro de querere eliminar el usuario?")) ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section><!-- /.content -->

<section class="content-footer">
    <div class="row">
        <div class="col-md-12">
            <div class="btn-group">
                <a href="<?= $this->Html->url(array('action'=>'add')) ?>" class="btn btn-default"><i class="fa fa-plus"></i> New User</a>
            </div>
        </div>
    </div>
</section>
