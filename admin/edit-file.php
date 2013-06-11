<?php
if (isset($_GET['id'])) :
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM file WHERE id_file='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    ?>
    <legend>Edit File Description</legend>
    <form action="process/edit-file.php" method="post">
        <?php
        while ($rows = mysql_fetch_array($result)) :
            ?>
            <input name="id-file" type="hidden" value="<?php echo $rows['id_file']; ?>">
            <label for="file">File:</label>
            <input class="uneditable-input" type="text" name="file" id="file" value="<?php echo $rows['nama_file']; ?>"><br />
            <label for="file">Deskripsi:</label>
            <textarea name="deskripsi"><?php echo $rows['deskripsi_file']; ?></textarea><br />
            <button type="submit" class="btn">Save</button>
            <?php
        endwhile;
        ?>
    </form>
    <?php
endif;
?>