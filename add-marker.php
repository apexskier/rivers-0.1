<h3>Add a marker</h3>
<form name="add-marker" method="post" action="scripts/add-marker-exec.php">
	<p><label name="marker_name">Name<br /></label>
	<input type="text" name="marker_name"></p>
	
	<p><label name="marker_type">Type<br /></label>
	<select name="marker_type">
		<option value="River Access">River Access (Put In/Take Out)</option>
		<option value="Fork">River Fork</option>
	</select>

	<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/rivers-options.php"); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/pickermap.php"); ?>
	
	<p><label name="description">Description</label><br />
	<textarea name="description"></textarea></p>
	
	<p><input type="submit" name="submit"></p>
</form>