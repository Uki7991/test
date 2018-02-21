<div class="container">
    <div class="row mb-5 where-back text-center text-light justify-content-center">
        <div class="back about-me w-100"></div>
        <div class="col-12 my-5">
            <h2 class="font-weight-bold">Register</h2>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <form method="post" action="/user/create" class="col-12 col-lg-4">
            <div class="form-group">
                <label for="name">First name</label>
                <input name="fname" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter first name" value="<?php if (!empty($_SESSION['oldvars']['fname'])) echo $_SESSION['oldvars']['fname'] ?>" required>
                <small id="emailHelp" class="form-text text-danger"><?php if (!empty($_SESSION['errors']['fname'])) echo $_SESSION['errors']['fname']; ?></small>
            </div>
            <div class="form-group">
                <label for="Login">Last name</label>
                <input name="lname" type="text" class="form-control" id="Login" aria-describedby="Login" placeholder="Enter your last name" value="<?php if (!empty($_SESSION['oldvars']['lname'])) echo $_SESSION['oldvars']['lname'] ?>" required>
                <small id="emailHelp" class="form-text text-danger"><?php if (!empty($_SESSION['errors']['lname'])) echo $_SESSION['errors']['lname']; ?></small>
            </div>
            <div class="form-group">
                <label for="Login">Login</label>
                <input name="login" type="text" class="form-control" id="Login" aria-describedby="Login" placeholder="Enter login" value="<?php if (!empty($_SESSION['oldvars']['login'])) echo $_SESSION['oldvars']['login'] ?>" required>
                <small id="emailHelp" class="form-text text-danger"><?php if (!empty($_SESSION['errors']['login'])) echo $_SESSION['errors']['login']; ?></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="Login">Date of birth</label>
                <input name="date_birth" type="date" class="form-control" id="Login" aria-describedby="Login" value="<?php if (!empty($_SESSION['oldvars']['date_birth'])) echo $_SESSION['oldvars']['date_birth'] ?>" required>
                <small id="emailHelp" class="form-text text-danger"><?php if (!empty($_SESSION['errors']['date_birth'])) echo $_SESSION['errors']['date_birth']; ?></small>
            </div>
            <div class="form-group">
                <label for="Login">Sex</label>
                <select name="gender_id" class="form-control" id="exampleFormControlSelect1" required>
                    <?php foreach ($genders as $item): ?>
                    <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                <small id="emailHelp" class="form-text text-danger"><?php if (!empty($_SESSION['errors']['pass'])) echo $_SESSION['errors']['pass']; ?></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Repeat password</label>
                <input name="repeat_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="row mt-5 justify-content-center">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>

</div>