<?php

$data = new UserController();
    $user = $data->getAllUser();

?>

<h2 class="m-3">Users List:</h2>
<table class="table table-dark table-striped mt-5" >
    <div class="d-flex justify-content-end p-2">
        <a href="product/add" class="btn btn-dark mt-5" >Add New User</a>


    </div>
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $data = new UserController();
    $user = $data->getAllUser();
    foreach($user as $user): ?>
        <tr>
            <td><?php echo $user['user_id']?></td>
            <td><?php echo $user['first_name']?></td>
            <td><?php echo $user['last_name']?></td>
            <td><?php echo $user['email'] ?></td>
            <td> <a href="delete?id=<?php echo $user['user_id'] ?>" class="btn btn-danger" >delete</a>
                <a href="product/edit?id=<?php echo $user['user_id'] ?>" class="btn btn-warning" >update</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
