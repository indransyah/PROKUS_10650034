<!--<legend>View Users</legend>
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
</div>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    $(function() {
        var chart;
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'stats',
                    type: 'areaspline',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Website Stats',
                    x: -20
                },
                xAxis: {
                    categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31']
                },
                yAxis: {
                    title: {
                        text: 'Visitors'
                    },
                    plotLines: [{
                            value: 0,
                            width: 1,
                            color: '#808080'
                        }]
                },
                tooltip: {
                    formatter: function() {
                        return '<b>' + this.series.name + '</b><br/>' +
                                this.x + ': ' + this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },
                series: [{
                        name: 'Page Views',
                        data: [20, 30, 50, 60, 80, 100, 20, 30, 50, 60, 80, 100, 20, 30, 50, 60, 80, 100, 20, 30, 50, 60, 80, 100, 20, 30, 50, 60, 80, 100]
                    },
                    {
                        name: 'Visitors',
                        data: [5, 10, 5, 25, 40, 60, 5, 10, 15, 25, 40, 60, 5, 10, 15, 25, 40, 60, 5, 10, 15, 25, 40, 60, 5, 10, 15, 25, 40, 60]
                    },
                    {
                        name: 'Unique Visitors',
                        data: [100, 60, 40, 30, 20, 5, 100, 60, 40, 30, 20, 5, 100, 60, 40, 30, 20, 5, 100, 60, 40, 30, 20, 5, 100, 60, 40, 30, 20, 5, 0]
                    }
                ]
            });
        });
    });
</script>
<div id="stats" style="width:100%; height:400px;"></div>