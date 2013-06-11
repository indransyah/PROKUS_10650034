<?php
if (isset($_GET['id'])) :
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM artikel WHERE id_artikel='$id'";
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
        <legend>Add Article</legend>
        <?php
        if (@$_GET['error'] == 1) :
            ?>
            <div class = "alert alert-error">
                Periksa kembali data yang Anda masukkan!
            </div>
            <?php
        endif;
        ?>
        <form method="post" action="process/edit-article.php">
            <?php
            while ($rows = mysql_fetch_array($result)) :
                ?>
                <input type="hidden" name="id" value="<?php echo $rows['id_artikel']; ?>">
                <input name="judul" class="input-xxlarge" type="text" placeholder="Judul" value="<?php echo $rows['judul_artikel']; ?>">
                <textarea name="isi" id="redactor_content" name="content">
                    <?php echo $rows['isi_artikel']; ?>
                </textarea>
                <br />
                <select name="status" class="pull-right">
                    <option value="1" <?php if ($rows['status'] == 1) echo 'selected'; ?>>Publish</option>
                    <option value="0" <?php if ($rows['status'] == 0) echo 'selected'; ?>>Draft</option>
                </select>
                <button type="submit" class="btn">Save</button>
                <button type="reset" class="btn">Cancel</button>
                <?php
            endwhile;
            ?>
        </form>
    </div>
    <?php
endif;
?>