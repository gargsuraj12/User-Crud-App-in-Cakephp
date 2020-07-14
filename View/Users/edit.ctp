<div class="container">
    <?php echo $this->Form->create($user); ?>
    <h1>Edit User</h1>
    <fieldset>
        <div class="form-group">
            <?php echo $this->Form->input('fname', ['class' => 'form-control'], ['default' => 'First Name']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('lname', ['class' => 'form-control']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('details', ['class' => 'form-control']); ?>
        </div>
        <?php echo $this->Html->link('Back', ['action' => 'index'], ['class' => 'btn btn-secondary btn-lg']); ?>
        <?php echo $this->Form->button(__('Save'), ['class' => 'btn btn-lg btn-primary']); ?>
    </fieldset>
    <?php $this->Form->end(); ?>
</div>