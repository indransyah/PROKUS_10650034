<legend>Add User</legend>
<form class="form-horizontal" method="post" action="process/add-user.php">
    <div class="control-group">
        <label class="control-label" for="name">Name</label>
        <div class="controls">
            <input type="text" id="name" name="nama">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="email">Email</label>
        <div class="controls">
            <input type="text" id="email" name="email">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="username">Username</label>
        <div class="controls">
            <input type="text" id="username" name="username">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="password">Password</label>
        <div class="controls">
            <input type="password" id="password" name="password">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="confirm-password">Confirm Password</label>
        <div class="controls">
            <input type="password" id="confirm-password" name="confirm-password">
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn">Add</button>
        </div>
    </div>
</form>