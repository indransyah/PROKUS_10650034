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
    <legend>Add Agenda</legend>
    <form method="post" action="process/add-agenda.php">
        <input name="nama" class="input-xxlarge" type="text" placeholder="Nama Agenda">
        <input name="tempat" class="input-xxlarge" type="text" placeholder="Tempat">
        <input name="tanggal" class="input-xxlarge" type="text" placeholder="Tanggal">
        <textarea name="keterangan" id="redactor_content" name="content">
        </textarea>
        <br />
        <select name="status" class="pull-right">
            <option value="1">Aktif</option>
            <option value="0">Non Aktif</option>
        </select>
        <button type="submit" class="btn">Save</button>
    </form>
</div>