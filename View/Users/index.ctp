<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">User Crud Application</a>
</nav> -->
<div class="container">
    
    <?php #print_r($_SESSION["username"]);
    ?>
    <?php #print_r($this->Session->read('loginUser'))
    ?>
    <h2>
        Welcome, <?php echo $this->Session->read('loginUser')["fname"] . " " . $this->Session->read('loginUser')["lname"];; ?>
    </h2>
    <table class="table table-hover" id="user_data">
        <thead>
            <tr class="table-info">
                <th scope="col">Username</th>
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
                        <td><?php echo $user["User"]["username"]; ?></td>
                        <td><?php echo $user["User"]["fname"]; ?></td>
                        <td><?php echo $user["User"]["lname"]; ?></td>
                        <td><?php echo $user["User"]["details"]; ?></td>
                        <td>
                            <?php echo $this->Html->link('Edit', ['action' => 'edit', $user["User"]["id"]], ['class' => 'btn btn-info']); ?>

                            <?php echo $this->Form->postLink('Delete', ['action' =>     'delete',   $user["User"]["id"]], ['class' => 'btn btn-danger'],   ['confirm' => 'Are you sure?']); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <td>No Records Found!</td>
            <?php endif; ?>
        </tbody>
    </table>
    <?php #echo $this->Html->link('Add User', ['action' => 'add'], ['class' => 'btn btn-dark']); 
    ?>
    <?php echo $this->Html->link('Logout', ['action' => 'logout'], ['class' => 'btn btn-primary']); 
    ?>
    <?php echo $this->Flash->render('message'); ?>
</div>
<script>
    $(document).ready(function() {
        $('#user_data').DataTable();
    });
</script>