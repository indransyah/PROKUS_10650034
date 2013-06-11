<?php
if (isset($_GET['id-album'])) :
    $id_album = (int) $_GET['id-album'];
    $sql = "SELECT * FROM album WHERE id_album=$id_album";
    $result = mysql_query($sql) or die(mysql_error());
    while ($rows = mysql_fetch_array($result)) :
        ?>
        <legend>Upload Foto to <?php echo $rows['nama_album']; ?></legend>
        <form action="process/upload-foto.php?id-album=<?php echo $id_album; ?>" method="post" enctype="multipart/form-data">
            <label for="file">File:</label>
            <input type="file" name="file" id="file">
            <button type="submit" class="btn">Save</button>
        </form>
        <?php
    endwhile;
    ?>
    <hr />
    <?php
    if (isset($_GET['p'])) {
        $halaman = $_GET['p'];
    } else {
        $halaman = 1;
    }
    $jumlahDataPerHalaman = 5;
    $sql = "SELECT * FROM foto WHERE id_album=$id_album";
    $run = mysql_query($sql);
    $jumlahData = mysql_num_rows($run);
    $sql = "";
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $dataMulai = ($halaman * $jumlahDataPerHalaman) - $jumlahDataPerHalaman;
    $sql = "SELECT * FROM foto WHERE id_album=$id_album LIMIT $dataMulai, $jumlahDataPerHalaman";
    $result = mysql_query($sql) or die(mysql_error());
    ?>
    <legend>View Foto</legend>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($rows = mysql_fetch_array($result)) :
                ?>
                <tr>
                    <td><?php echo $rows['id_foto']; ?></td>
                    <td><?php echo $rows['nama_foto']; ?></td>
                    <td>
                        <?php //echo $rows['url']; ?>
                        <img data-src="holder.js/140x140" class="img-polaroid" alt="140x140" style="width: 140px; height: 140px;" src="<?php echo $rows['url']; ?>">
                    </td>
                    <td>
                        <a href="<?php echo 'process/delete-foto.php?id-album='.$id_album.'&id=' . $rows['id_foto']; ?>"><i class="icon-remove"></i></a>
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
    <?php
endif;
?>