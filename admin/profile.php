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