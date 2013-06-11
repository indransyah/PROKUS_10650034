<legend>Upload File</legend>
<form action="process/upload-file.php" method="post" enctype="multipart/form-data">
    <label for="file">File:</label>
    <input type="file" name="file" id="file"><br />
    <label for="file">Deskripsi:</label>
    <textarea name="deskripsi"></textarea><br />
    <button type="submit" class="btn">Save</button>
</form>