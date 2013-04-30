<?php
if (isset($_GET['hal'])) {
    $halaman = $_GET['hal'];
} else {
    $halaman = 1;
}
$jumlahDataPerHalaman = 5;
$sql = "SELECT * FROM admin";
$run = mysql_query($sql);
$jumlahData = mysql_num_rows($run);
$sql = "";
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$dataMulai = ($halaman * $jumlahDataPerHalaman) - $jumlahDataPerHalaman;
$sql = "SELECT * FROM admin LIMIT $dataMulai, $jumlahDataPerHalaman";
$result = mysql_query($sql) or die(mysql_error());
?>
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
        <?php
        while ($rows = mysql_fetch_array($result)) :
            ?>
            <tr>
                <td>1</td>
                <td><?php echo $rows['username']; ?></td>
                <td><?php echo $rows['nama']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><a href="<?php echo $base_url . 'admin/process/edit-user.php?id=' . $rows['id_admin']; ?>"><i class="icon-pencil"></i></a> <a href="<?php echo $base_url . 'admin/process/delete-user.php?id=' . $rows['id_admin']; ?>"><i class="icon-remove"></i></a></td>
            </tr>
            <?php
        endwhile;
        ?>
    </tbody>
</table>

<ul class="pager">
    <li class="previous">
        <a href="#">&larr; Previous</a>
    </li>
    <li class="next">
        <a href="#">Next &rarr;</a>
    </li>
</ul>

<!--<div class="pagination">
    <ul>
        <li class="disabled"><a href="#">«</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">»</a></li>
    </ul>
</div>-->