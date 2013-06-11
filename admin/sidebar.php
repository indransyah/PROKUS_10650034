<div class="span3">
    <div class="accordion" id="sidebar">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#dashboard">
                    <i class="icon-home"></i> Dashboard
                </a>
            </div>
            <div id="dashboard" class="accordion-body collapse <?php if ($_GET['page']=='welcome') echo 'in' ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($_GET['page']=='welcome') echo 'class="active"' ?>><a href="index.php?page=welcome">Welcome</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#blog">
                    <i class="icon-pencil"></i> Blog
                </a>
            </div>
            <div id="blog" class="accordion-body collapse <?php if ($_GET['page']=='add-article' OR $_GET['page']=='articles' OR $_GET['page']=='edit-article') echo 'in' ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($_GET['page']=='add-article') echo 'class="active"' ?>><a href="index.php?page=add-article">Tambah Artikel</a></li>
                        <li <?php if ($_GET['page']=='articles') echo 'class="active"' ?>><a href="index.php?page=articles">Kelola Artikel<!--<span class="label label-info pull-right">+1</span>--></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#agenda">
                    <i class="icon-list-alt"></i> Agenda
                </a>
            </div>
            <div id="agenda" class="accordion-body collapse <?php if ($_GET['page']=='add-agenda' OR $_GET['page']=='agendas' OR $_GET['page']=='edit-agenda') echo 'in' ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($_GET['page']=='add-agenda') echo 'class="active"' ?>><a href="index.php?page=add-agenda">Tambah Agenda</a></li>
                        <li <?php if ($_GET['page']=='agendas') echo 'class="active"' ?>><a href="index.php?page=agendas">Kelola Agenda</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#galeri">
                    <i class="icon-camera"></i> Galeri
                </a>
            </div>
            <div id="galeri" class="accordion-body collapse <?php if ($_GET['page']=='add-gallery' OR $_GET['page']=='galleries') echo 'in' ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($_GET['page']=='add-gallery') echo 'class="active"' ?>><a href="index.php?page=add-gallery">Tambah Galeri</a></li>
                        <li <?php if ($_GET['page']=='galleries') echo 'class="active"' ?>><a href="index.php?page=galleries">Kelora Galeri</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#file">
                    <i class="icon-folder-open"></i> File
                </a>
            </div>
            <div id="file" class="accordion-body collapse <?php if ($_GET['page']=='upload-file' OR $_GET['page']=='files') echo 'in' ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($_GET['page']=='upload-file') echo 'class="active"' ?>><a href="index.php?page=upload-file">Upload File</a></li>
                        <li <?php if ($_GET['page']=='files') echo 'class="active"' ?>><a href="index.php?page=files">Kelola File</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#polling">
                    <i class="icon-thumbs-up"></i> Polling
                </a>
            </div>
            <div id="polling" class="accordion-body collapse <?php if ($_GET['page']=='add-polling' OR $_GET['page']=='polling') echo 'in' ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($_GET['page']=='add-polling') echo 'class="active"' ?>><a href="index.php?page=add-polling">Tambah Polling</a></li>
                        <li <?php if ($_GET['page']=='polling') echo 'class="active"' ?>><a href="index.php?page=polling">Kelola Pertanyaan</a></li>
                    </ul>
                </div>
            </div>
        </div>-->
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#user">
                    <i class="icon-user"></i> User
                </a>
            </div>
            <div id="user" class="accordion-body collapse <?php if ($_GET['page']=='add-user' OR $_GET['page']=='users' OR $_GET['page']=='profile' OR $_GET['page']=='edit-user') echo 'in' ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($_GET['page']=='add-user') echo 'class="active"' ?>><a href="index.php?page=add-user">Tambah User</a></li>
                        <li <?php if ($_GET['page']=='users') echo 'class="active"' ?>><a href="index.php?page=users">Lihat User</a></li>
                        <li <?php if ($_GET['page']=='profile') echo 'class="active"' ?>><a href="index.php?page=profile">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>