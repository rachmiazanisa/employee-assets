<a href="<?php echo site_url('ControllerAdmin/admin') ?>">Home</a>
<a href="<?php echo site_url('ControllerAdmin/register')?>">Register</a>
<a href="<?php echo site_url('welcome/logout')?>">LogOut</a>

<h3>Data Diri : </h3><br>
<?php echo $_SESSION['user']; ?> <br>
<?php echo $_SESSION['nama']; ?> <br>
<?php echo $_SESSION['divisi']; ?> <br>