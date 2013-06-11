<?php
if (isset($_GET['id'])) :
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM agenda WHERE id_agenda='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    ?>
    <link rel="stylesheet" href="../redactor/redactor/redactor.css" />
    <script src="../redactor/redactor/redactor.min.js"></script>
    <script type="text/javascript">
        $(document).ready(
                function()
                {
                    $('#redactor_content').redactor();
                }
        );
    </script>
    <div id="page">
        <legend>Edit Agenda</legend>
        <form method="post" action="process/edit-agenda.php">
            <?php
            while ($rows = mysql_fetch_array($result)) :
                ?>
                <input type="hidden" name="id-agenda" value="<?php echo $rows['id_agenda']; ?>">
                <input name="nama" class="input-xxlarge" type="text" value="<?php echo $rows['nama_agenda']; ?>">
                <input name="tempat" class="input-xxlarge" type="text" value="<?php echo $rows['tempat']; ?>">
                <input name="tanggal" class="input-xxlarge" type="text" value="<?php echo $rows['tanggal']; ?>">
                <textarea name="keterangan" id="redactor_content" name="content">
                    <?php echo $rows['keterangan']; ?>
                </textarea>
                <br />
                <select name="status" class="pull-right">
                    <option value="1">Aktif</option>
                    <option value="0">Non Aktif</option>
                </select>
                <button type="submit" class="btn">Save</button>
                <?php
            endwhile;
            ?>
        </form>
    </div>
    <?php
endif;
?>