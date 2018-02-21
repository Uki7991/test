<div class="container">
    <div class="row justify-content-end my-5">
        <div class="col-auto">
            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Create</button>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-2">
            <h2 class="font-weight-bold"><?php if (isset($users)) echo 'Users'; ?></h2>
        </div>
        <div class="col-10">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">First</th>
                    <th class="text-center" scope="col">Last</th>
                    <th class="text-center" scope="col">Login</th>
                    <th class="text-center" scope="col">E-mail</th>
                    <th class="text-center" scope="col">Date of birth</th>
                    <th class="text-center" scope="col">Sex</th>
                    <th class="text-center" scope="col">Admin</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <th class="text-center" scope="row"><?php echo $i ?></th>
                        <td class="text-center"><?php echo $user['fname'] ?></td>
                        <td class="text-center"><?php echo $user['lname'] ?></td>
                        <td class="text-center"><?php echo $user['login'] ?></td>
                        <td class="text-center"><?php echo $user['mail'] ?></td>
                        <td class="text-center"><?php echo $user['date_birth'] ?></td>
                        <td class="text-center"><?php echo $user['gender_name'] ?></td>
                        <td class="text-center"><?php echo $user['admin'] ?></td>
                        <td class="text-center">
                            <button id="<?php echo $user['id'] ?>" type="button" class="edit btn btn-warning"><i class="fas fa-cog"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-times"></i></button>
                        </td>
                    </tr>
                    <?php $i = $i + 1; ?>
                <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>
</div>

<?php require_once "app\\views\\modals\\create.php"; ?>
