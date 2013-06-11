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
    if (@$_GET['error']==1) :
        ?>
        <div class = "alert alert-error">
            Periksa kembali data yang Anda masukkan!
        </div>
        <?php
    endif;
    ?>
    <form method="post" action="process/add-article.php">
        <input name="judul" class="input-xxlarge" type="text" placeholder="Judul">
        <textarea name="isi" id="redactor_content" name="content">
        </textarea>
        <br />
        <select name="status" class="pull-right">
            <option value="1">Publish</option>
            <option value="0">Draft</option>
        </select>
        <button type="submit" class="btn">Save</button>
        <button type="reset" class="btn">Cancel</button>
    </form>
</div>