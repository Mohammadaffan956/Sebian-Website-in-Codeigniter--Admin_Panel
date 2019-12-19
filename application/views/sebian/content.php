<?php include('include/header2.php') ?>
<div class="text" style="text-align: center;">
	<?php foreach($contentinfo as $showinfo){ ?>
<h1><?= $showinfo->page_title ?></h1>
<p>Lorem ipsum sit amet dolore consectetuer</p>
<?php } ?>
</div>
<?php include('include/footer.php') ?>