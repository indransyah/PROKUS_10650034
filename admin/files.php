<?php
if (isset($_GET['p'])) {
    $halaman = $_GET['p'];
} else {
    $halaman = 1;
}
$jumlahDataPerHalaman = 5;
$sql = "SELECT * FROM file";
$run = mysql_query($sql);
$jumlahData = mysql_num_rows($run);
$sql = "";
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$dataMulai = ($halaman * $jumlahDataPerHalaman) - $jumlahDataPerHalaman;
$sql = "SELECT * FROM file LIMIT $dataMulai, $jumlahDataPerHalaman";
$result = mysql_query($sql) or die(mysql_error());
?>
<legend>View Files</legend>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($rows = mysql_fetch_array($result)) :
            if ($rows['status'] == 1) {
                $icon = 'icon-ban-circle';
                $status = 'Aktif';
            } else {
                $icon = 'icon-ok-circle';
                $status = 'Non Aktif';
            }
            $rows['status'] = ($rows['status'] == 1) ? 'Aktif' : 'Non Aktif';
            ?>
            <tr>
                <td><?php echo $rows['id_file']; ?></td>
                <td><?php echo $rows['nama_file']; ?></td>
                <td><?php echo $rows['deskripsi_file']; ?></td>
                <td><?php echo $status ?></td>
                <td>
                    <a href="<?php echo 'process/file.php?id=' . $rows['id_file']; ?>"><i class="<?php echo $icon; ?>"></i></a>
                    <a href="<?php echo 'index.php?page=edit-file&id=' . $rows['id_file']; ?>"><i class="icon-pencil"></i></a>
                    <a href="<?php echo 'process/delete-file.php?id=' . $rows['id_file']; ?>"><i class="icon-remove"></i></a>
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
                <a href="<?php echo 'index.php?page=files&p=' . ($halaman - 1); ?>">&larr; Previous</a>
            </li>
            <?php
        endif;
        if ($halaman < $jumlahHalaman) :
            ?>
            <li class="next">
                <a href="<?php echo 'index.php?page=files&p=' . ($halaman + 1); ?>">Next &rarr;</a>
            </li>
            <?php
        endif;
    endif;
    ?>
</ul>