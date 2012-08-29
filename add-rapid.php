<h3>Add a rapid</h3>
<form name="add-rapid" method="post" action="scripts/add-rapid-exec.php">
	<p><label name="rapid_name">Name<br /></label>
	<input type="text" name="rapid_name"></p>
	
	<p><label name="class">Class</label><br />
	<div class="class-slider"></div><span class="class-slider-value">I</span></p>
	<input type="hidden" name="class" id="class-value" value="I">

	<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/rivers-options.php"); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/pickermap.php"); ?>
	
	<p><label name="description">Description</label><br />
	<textarea name="description"></textarea></p>
	
	<p><input type="submit" name="submit"></p>
</form>