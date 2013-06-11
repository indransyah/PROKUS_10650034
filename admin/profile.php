<?php
$id_admin = $_SESSION['id_admin'];
$sql = "SELECT * FROM admin WHERE id_admin='$id_admin'";
$result = mysql_query($sql) or die(mysql_error());
?>
<legend>Profile</legend>
<ul id="user" class="nav nav-tabs">
    <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
    <li class=""><a href="#pass" data-toggle="tab">Password</a></li>
</ul>
<div id="userContent" class="tab-content">
    <div class="tab-pane fade active in" id="profile">
        <form class="form-horizontal" method="post" action="process/edit-user.php">
            <?php
            while ($rows = mysql_fetch_array($result)) :
                ?>
                <input name="id_admin" type="hidden" value="<?php echo $rows['id_admin']; ?>">
                <div class="control-group">
                    <label class="control-label" for="name">Name</label>
                    <div class="controls">
                        <input name="nama" type="text" id="name" value="<?php echo $rows['nama']; ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="email">Email</label>
                    <div class="controls">
                        <input name="email" type="text" id="email" value="<?php echo $rows['email']; ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="username">Username</label>
                    <div class="controls">
                        <input name="username" type="text" id="username" value="<?php echo $rows['username']; ?>">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn">Save</button>
                    </div>
                </div>
                <?php
            endwhile;
            ?>
        </form>
    </div>
    <div class="tab-pane fade" id="pass">
        <form class="form-horizontal" method="post" action="process/edit-password.php">
            <input name="id_admin" type="hidden" value="<?php echo $id_admin; ?>">
            <div class="control-group">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input name="password" type="password" id="password">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="confirm-password">Confirm Password</label>
                <div class="controls">
                    <input name="confirm-password" type="password" id="confirm-password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>