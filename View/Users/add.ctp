<div class="container">
    <?php print_r($user)?>
    <?php echo $this->Form->create($user["User"]); ?>
    <h1>Add New User</h1>
    <fieldset>
        <div class="form-group">
            <?php echo $this->Form->input('fname', ['class' => 'form-control','Placeholder' => '', 'label'=>'First Name']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('lname', ['class' => 'form-control', 'label' => 'Last Name']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('details', ['class' => 'form-control', 'label'=>'Details']); ?>
        </div>
        <?php echo $this->Html->link('Back', ['action' => 'index'], ['class' => 'btn btn-secondary btn-lg']); ?>
        <?php echo $this->Form->button(__('Add User'), ['class' => 'btn btn-lg btn-primary']); ?>
    </fieldset>
    <?php $this->Form->end(); ?>
</div>