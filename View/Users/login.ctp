<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">User Crud Application</a>
</nav> -->
<div class="container">
    <?php #echo $this->Form->create($user["User"]); ?>
    <?php echo $this->Form->create(); ?>
    <h2>User Login</h2>
    <fieldset>
        <div class="form-group">
            <?php echo $this->Form->input('username', ['class' => 'form-control', 'Placeholder' => '', 'label' => 'Username']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('password', ['type' => 'password', 'class' => 'form-control', 'Placeholder' => '', 'label' => 'Password']); ?>
        </div>
        <?php echo $this->Html->link('Clear', ['type' => 'reset'], ['class' => 'btn btn-secondary']); ?>
        <?php echo $this->Form->button(__('Log In'), ['class' => 'btn btn-primary']); ?>
        <br><br>
        <p>
            Want to signup first? <?php echo $this->Html->link('Create Account', ['action' => 'add']); ?>
        </p>

        <?php echo $this->Flash->render('message'); ?>
    </fieldset>
    <?php $this->Form->end(); ?>
    <?php #$this->Form->end('Login'); ?>
</div>