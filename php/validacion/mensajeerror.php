<div class="alert alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert">&times;</button>
	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><strong> Error!!</strong> 
	<?php
		foreach ($errors as $error) {
			echo $error;
		}
	?>
</div>