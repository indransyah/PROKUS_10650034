<?php
if (isset($_GET['p'])) {
    $halaman = $_GET['p'];
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
            <th>ID</th>
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
                <td><?php echo $rows['id_admin']; ?></td>
                <td><?php echo $rows['username']; ?></td>
                <td><?php echo $rows['nama']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><a href="<?php echo 'index.php?page=edit-user&id=' . $rows['id_admin']; ?>"><i class="icon-pencil"></i></a> <a href="<?php echo 'process/delete-user.php?id=' . $rows['id_admin']; ?>"><i class="icon-remove"></i></a></td>
            </tr>
            <?php
        endwhile;
        ?>
    </tbody>
</table>

<ul class="pager">
    <?php
    if ($jumlahData > $jumlahDataPerHalaman) :
        if ($halaman >= 2) :
            ?>
            <li class="previous">
                <a href="<?php echo 'index.php?page=users&p=' . ($halaman - 1); ?>">&larr; Previous</a>
            </li>
            <?php
        endif;
        if ($halaman < $jumlahHalaman) :
            ?>
            <li class="next">
                <a href="<?php echo 'index.php?page=users&p=' . ($halaman + 1); ?>">Next &rarr;</a>
            </li>
            <?php
        endif;
    endif;
    ?>
</ul>