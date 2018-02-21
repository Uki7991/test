<div class="container">
    <div class="row mb-5 where-back text-center text-light justify-content-center">
        <div class="back about-me w-100"></div>
        <div class="col-12 my-5">
            <h2 class="font-weight-bold">Login</h2>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <form method="post" action="/loginTo" class="col-12 col-lg-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
                <small class="form-text text-danger"><?php if (!empty($_SESSION['errors'])) echo $_SESSION['errors'] ?></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="row mt-5 justify-content-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

</div>