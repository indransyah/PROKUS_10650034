<?php
if (isset($_GET['p'])) {
    $halaman = $_GET['p'];
} else {
    $halaman = 1;
}
$jumlahDataPerHalaman = 5;
$sql = "SELECT * FROM album";
$run = mysql_query($sql);
$jumlahData = mysql_num_rows($run);
$sql = "";
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$dataMulai = ($halaman * $jumlahDataPerHalaman) - $jumlahDataPerHalaman;
$sql = "SELECT * FROM album LIMIT $dataMulai, $jumlahDataPerHalaman";
$result = mysql_query($sql) or die(mysql_error());
?>
<legend>View Album</legend>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($rows = mysql_fetch_array($result)) :
            ?>
            <tr>
                <td><?php echo $rows['id_album']; ?></td>
                <td><?php echo $rows['nama_album']; ?></td>
                <td><?php echo $rows['deskripsi_album']; ?></td>
                <td>
                    <a href="<?php echo 'index.php?page=upload-foto&id-album=' . $rows['id_album']; ?>"><i class="icon-plus"></i></a> 
                    <a href="<?php echo 'index.php?page=edit-gallery&id=' . $rows['id_album']; ?>"><i class="icon-pencil"></i></a> 
                    <a href="<?php echo $base_url . 'admin/process/delete-user.php?id=' . $rows['id_admin']; ?>"><i class="icon-remove"></i></a>
                </td>
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
                <a href="<?php echo 'index.php?page=articles&p=' . ($halaman - 1); ?>">&larr; Previous</a>
            </li>
            <?php
        endif;
        if ($halaman < $jumlahHalaman) :
            ?>
            <li class="next">
                <a href="<?php echo 'index.php?page=articles&p=' . ($halaman + 1); ?>">Next &rarr;</a>
            </li>
            <?php
        endif;
    endif;
    ?>
</ul>