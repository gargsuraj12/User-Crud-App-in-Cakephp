<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">User Crud Application</a>
</nav> -->
<div class="container">
    <?php echo $this->Form->create($user); ?>
    <?php #print_r($user); 
    ?>
    <h1>Edit User</h1>
    <fieldset>

        <div class="form-group">
            <?php echo $this->Form->input('username', ['class' => 'form-control', 'label' => 'Username', 'value' => $user["username"]]); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('fname', ['class' => 'form-control', 'label' => 'First Name', 'value' => $user["fname"]]); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('lname', ['class' => 'form-control', 'label' => 'Last Name', 'value' => $user["lname"]]); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('details', ['class' => 'form-control', 'label' => 'Details', 'value' => $user["details"]]); ?>
        </div>
        <?php echo $this->Html->link('Back', ['action' => 'index'], ['class' => 'btn btn-secondary']); ?>
        <?php echo $this->Form->button(__('Save'), ['class' => 'btn btn-primary']); ?>
    </fieldset>
    <?php #echo $this->Html->link('Logout', ['action' => 'logout'], ['class' => 'btn btn-dark']); 
    ?>
    <?php $this->Form->end(); ?>
</div>