<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">User Crud Application</a>
</nav> -->
<div class="container">
    <?php #print_r($user)
    ?>
    <?php #echo $this->Form->create($user["User"]); 
    ?>
    <?php echo $this->Form->create(); ?>
    <h2>Add New User</h2>
    <div><?php echo $this->Flash->render('message'); ?></div>
    <fieldset>
        <div class="form-group">
            <?php echo $this->Form->input('username', ['class' => 'form-control', 'Placeholder' => '', 'label' => 'Username']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('password', ['type' => 'password', 'class' => 'form-control', 'Placeholder' => '', 'label' => 'Password']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('fname', ['class' => 'form-control', 'Placeholder' => '', 'label' => 'First Name']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('lname', ['class' => 'form-control', 'label' => 'Last Name']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('details', ['class' => 'form-control', 'label' => 'Details']); ?>
        </div>
        <?php echo $this->Html->link('Back', ['action' => 'login'], ['class' => 'btn btn-dark']); ?>
        <!-- <button type="button" class="btn btn-secondary", type="reset">Clear</button> -->
        <?php echo $this->Form->button(__('Add User'), ['class' => 'btn btn-primary']); ?>
    </fieldset>
    <?php $this->Form->end(); ?>
</div>