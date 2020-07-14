<div class="container">
    <h1>User List</h1>
    <table class="table table-hover">
        <thead>
            <tr class="table-dark">
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Details</th>
                <th scope="col">Action</th>
                <!-- <th scope="col">Column heading</th> -->
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($users)) : ?>
                <?php foreach ($users as $user) : ?>
                    <tr class="table-active">
                        <td><?php echo $user["User"]["fname"]; ?></td>
                        <td><?php echo $user["User"]["lname"]; ?></td>
                        <td><?php echo $user["User"]["details"]; ?></td>
                        <td>
                            <?php echo $this->Html->link('Edit', ['action' => 'edit', $user["User"]["id"]], ['class' => 'btn btn-info']); ?>
                            
                            <?php echo $this->Form->postLink('Delete', ['action' =>     'delete',   $user["User"]["id"]], ['class' => 'btn btn-danger'],   ['confirm' => 'Are you sure?'] ); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <td>No Records Found!</td>
            <?php endif; ?>
        </tbody>
    </table>
    <?php echo $this->Html->link('Add User', ['action' => 'add'], ['class' => 'btn btn-primary']); ?>
    <?php echo $this->Flash->render('message'); ?>
</div>