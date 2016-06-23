<?php
require_once("../resources/config.php");
require_once(TEMPLATES . "/header.php");
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="well">
				<?php
					require_once(TEMPLATES . "/NameForm.html");
				?>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="well">
				<div id="NameTable">
				</div>
			</div>
		<div class="col-md-2"></div>
	</div>
</div>

<?php
require_once(TEMPLATES . "/footer.php");
?>
