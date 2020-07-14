<div class="container">
    <?php echo $this->Form->create($user); ?>
    <h1>Add New User</h1>
    <fieldset>
        <div class="form-group">
            <?php echo $this->Form->input('fname', ['class' => 'form-control'], ['Placeholder' => '']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('lname', ['class' => 'form-control'], ['Placeholder' => '']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('details', ['class' => 'form-control'], ['Placeholder' => '']); ?>
        </div>
        <?php echo $this->Html->link('Back', ['action' => 'index'], ['class' => 'btn btn-secondary btn-lg']); ?>
        <?php echo $this->Form->button(__('Add User'), ['class' => 'btn btn-lg btn-primary']); ?>
    </fieldset>
    <?php $this->Form->end(); ?>
</div>