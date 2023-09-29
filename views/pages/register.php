<?php

use App\Services\Page;

?>
<!doctype html>
<html lang="en">
<?php
Page::getPagePart('head');
?>
<body>
<?php
Page::getPagePart('navbar');
?>
<div class="container">
    <h2 class="mt-4">Sing Up</h2>
    <form class="mt-4">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="userName" class="form-label">User Name</label>
            <input type="text" class="form-control" id="userName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="userAvatar" class="form-label">User Avatar</label>
            <input type="file" class="form-control" id="userAvatar" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="passwordConfirmation" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" id="passwordConfirmation">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>

