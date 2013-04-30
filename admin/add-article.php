<!--<link rel="stylesheet" type="text/css" href="../wysihtml5/lib/css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" href="../wysihtml5/lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="../wysihtml5/src/bootstrap-wysihtml5.css"></link>

<input type="text" name="title" style="width: 100%;" placeholder="Title" />

<br />

<textarea class="textarea" placeholder="Enter text ..." style="width: 100%; min-height: 200px"></textarea>

<br />
<button class="btn btn-primary">Submit</button>

<script src="../wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="../wysihtml5/lib/js/jquery-1.7.2.min.js"></script>
<script src="../wysihtml5/lib/js/prettify.js"></script>
<script src="../wysihtml5/src/bootstrap-wysihtml5.js"></script>

<script>
        $('.textarea').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
        $(prettyPrint);
</script>-->

<!--<link rel="stylesheet" type="text/css" href="../redactor/css/style.css" />-->
<script type="text/javascript" src="../redactor/lib/jquery-1.9.0.min.js"></script>

<link rel="stylesheet" href="../redactor/redactor/redactor.css" />
<script src="../redactor/redactor/redactor.min.js"></script>

<script type="text/javascript">
    $(document).ready(
            function()
            {
                $('#redactor').redactor();
            }
    );
</script>

<div id="page">
    <textarea id="redactor" name="content">
			<h2>Hello and Welcome</h2>
			<p>Lorem ipsum <a href="http://test.com" title="dolor">dolor</a> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing <b>elit, sed do eiusmod tempor incididunt</b> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </textarea>
</div>