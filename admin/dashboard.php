<legend>View Users</legend>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><i class="icon-pencil"></i> <i class="icon-remove"></i></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td><i class="icon-pencil"></i> <i class="icon-remove"></i></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td><i class="icon-pencil"></i> <i class="icon-remove"></i></td>
        </tr>
    </tbody>
</table>

<div class="pagination">
    <ul>
        <li class="disabled"><a href="#">«</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">»</a></li>
    </ul>
</div>

<hr />

<legend>Add User</legend>
<form class="form-horizontal">
    <div class="control-group">
        <label class="control-label" for="name">Name</label>
        <div class="controls">
            <input type="text" id="name">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="email">Email</label>
        <div class="controls">
            <input type="text" id="email">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="username">Username</label>
        <div class="controls">
            <input type="text" id="username">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="password">Password</label>
        <div class="controls">
            <input type="password" id="password">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="confirm-password">Confirm Password</label>
        <div class="controls">
            <input type="password" id="confirm-password">
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn">Add</button>
        </div>
    </div>
</form>

<hr />

<legend>Profile</legend>
<ul id="user" class="nav nav-tabs">
    <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
    <li class=""><a href="#pass" data-toggle="tab">Password</a></li>
</ul>
<div id="userContent" class="tab-content">
    <div class="tab-pane fade active in" id="profile">
        <form class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="name">Name</label>
                <div class="controls">
                    <input type="text" id="name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="email">Email</label>
                <div class="controls">
                    <input type="text" id="email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="username">Username</label>
                <div class="controls">
                    <input type="text" id="username">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn">Save</button>
                </div>
            </div>
        </form>
    </div>
    <div class="tab-pane fade" id="pass">
        <form class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" id="password">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="confirm-password">Confirm Password</label>
                <div class="controls">
                    <input type="password" id="confirm-password">
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