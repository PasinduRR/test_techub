<?php 

include('authentication.php');
?>
<?php if (isset($_SESSION['status'])) { ?>
    <p class="status"><?php echo $_SESSION['status']; 
    unset($_SESSION['status']) ?></p>
    <?php }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="login.css">

<h1>Hello</h1>
<hr>
<h5>Username: <?= $_SESSION['auth_user']['username'] ?></h5>
<h5>User ID: <?= $_SESSION['auth_user']['userid'] ?></h5>
<h5>Email: <?= $_SESSION['auth_user']['email'] ?></h5>
<h5>Password: <?= $_SESSION['auth_user']['password'] ?></h5>
<form action="logout.php" method="post">
    <button class="btn btn-primary w-100 py-2 btn-css" name="logout-btn" type="submit">Log Out</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
