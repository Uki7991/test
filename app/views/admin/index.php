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
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/admin/user/create" class="col-auto">
                    <div class="form-group">
                        <label for="name">First name</label>
                        <input name="fname" type="text" class="form-control" id="fname" aria-describedby="name" placeholder="Enter first name" value="<?php if (!empty($_SESSION['oldvars']['fname'])) echo $_SESSION['oldvars']['fname'] ?>" required>
                        <small id="emailHelp" class="form-text text-danger"><?php if (!empty($_SESSION['errors']['fname'])) echo $_SESSION['errors']['fname']; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="Login">Last name</label>
                        <input name="lname" type="text" class="form-control" id="lname" aria-describedby="Login" placeholder="Enter your last name" value="<?php if (!empty($_SESSION['oldvars']['lname'])) echo $_SESSION['oldvars']['lname'] ?>" required>
                        <small id="emailHelp" class="form-text text-danger"><?php if (!empty($_SESSION['errors']['lname'])) echo $_SESSION['errors']['lname']; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="Login">Login</label>
                        <input name="login" type="text" class="form-control" id="login" aria-describedby="Login" placeholder="Enter login" value="<?php if (!empty($_SESSION['oldvars']['login'])) echo $_SESSION['oldvars']['login'] ?>" required>
                        <small id="emailHelp" class="form-text text-danger"><?php if (!empty($_SESSION['errors']['login'])) echo $_SESSION['errors']['login']; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="mail" type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Enter email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="Login">Date of birth</label>
                        <input name="date_birth" type="date" class="form-control" id="date_birth" aria-describedby="Login" value="<?php if (!empty($_SESSION['oldvars']['date_birth'])) echo $_SESSION['oldvars']['date_birth'] ?>" required>
                        <small id="emailHelp" class="form-text text-danger"><?php if (!empty($_SESSION['errors']['date_birth'])) echo $_SESSION['errors']['date_birth']; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="Login">Sex</label>
                        <select name="gender_id" class="form-control" id="gender_id" required>
                            <?php foreach ($genders as $item): ?>
                                <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                        <small id="emailHelp" class="form-text text-danger"><?php if (!empty($_SESSION['errors']['pass'])) echo $_SESSION['errors']['pass']; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Repeat password</label>
                        <input name="repeat_password" type="password" class="form-control" id="repeat_password" placeholder="Password" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

            </form>
        </div>
    </div>
</div>
