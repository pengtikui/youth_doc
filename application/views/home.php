<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid" >
	<div class="row">
		<?php $this->load->view('sidebar.php'); ?>
		<div class="col-md-9" id="main-content">
			<ol class="breadcrumb">
  				<li class="active"><a href="<?php echo site_url(); ?>">在线文档</a></li>
			</ol>
			<div id="article">
				<?php
					require_once '/statics/inc/Parsedown.php';
					$mdfile = file_get_contents('data/index.md');
					echo Parsedown::instance()->text($mdfile);
				?>
			</div>
		</div>
	</div>
</div>