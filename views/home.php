<?php

$data = new UserController();
    $user = $data->getAllUser();


if(isset($_POST['submit'])){
    $adduser = new UserController();
    $adduser-> addUser();
}
?>
<form  method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">First Name</label>
                        <input type="text" name="fname" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Role</label>
                        <select id="role" name="role">
                            <option value="1">Student</option>
                            <option value="2">Formateur</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<h2 class="m-3">Users List:</h2>
<table class="table table-dark table-striped mt-5" >
    <button type="button" class="btn btn-dark mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add New Article
    </button>
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
    foreach($user as $users): ?>
        <tr>
            <td><?php echo $users['user_id']?></td>
            <td><?php echo $users['first_name']?></td>
            <td><?php echo $users['last_name']?></td>
            <td><?php echo $users['email'] ?></td>

            <td>   <a href="delete?id=<?=$users['user_id'] ?>" class="btn btn-danger" >delete</a>
                <a href="edit?id=<?=$users['user_id'] ?>" class="btn btn-warning" >update</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
