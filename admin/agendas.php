<?php
if (isset($_GET['p'])) {
    $halaman = $_GET['p'];
} else {
    $halaman = 1;
}
$jumlahDataPerHalaman = 5;
$sql = "SELECT * FROM agenda";
$run = mysql_query($sql);
$jumlahData = mysql_num_rows($run);
$sql = "";
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$dataMulai = ($halaman * $jumlahDataPerHalaman) - $jumlahDataPerHalaman;
$sql = "SELECT * FROM agenda LIMIT $dataMulai, $jumlahDataPerHalaman";
$result = mysql_query($sql) or die(mysql_error());
?>
<legend>View Agendas</legend>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Agenda</th>
            <th>Tempat</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($rows = mysql_fetch_array($result)) :
            $rows['status'] = ($rows['status']==1) ? 'Aktif' : 'Non Aktif';
            ?>
            <tr>
                <td><?php echo $rows['id_agenda']; ?></td>
                <td><?php echo $rows['nama_agenda']; ?></td>
                <td><?php echo $rows['tempat']; ?></td>
                <td><?php echo $rows['tanggal']; ?></td>
                <td><?php echo $rows['status']; ?></td>
                <td><a href="<?php echo 'index.php?page=edit-agenda&id=' . $rows['id_agenda']; ?>"><i class="icon-pencil"></i></a> <a href="<?php echo 'process/delete-agenda.php?id=' . $rows['id_agenda']; ?>"><i class="icon-remove"></i></a></td>
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
                <a href="<?php echo 'index.php?page=agendas&p=' . ($halaman - 1); ?>">&larr; Previous</a>
            </li>
            <?php
        endif;
        if ($halaman < $jumlahHalaman) :
            ?>
            <li class="next">
                <a href="<?php echo 'index.php?page=agendas&p=' . ($halaman + 1); ?>">Next &rarr;</a>
            </li>
            <?php
        endif;
    endif;
    ?>
</ul>