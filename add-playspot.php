<h3>Add a playspot</h3>
<form name="add-playspot" method="post" action="scripts/add-playspot-exec.php">
	<p><label name="playspot_name">Name<br /></label>
	<input type="text" name="playspot_name"></p>
	
	<p><label name="gauge_id">Gauge<br /></label>
	<span class="guage_title">Click on a gauge on the map to select it.</span>
	<input type="hidden" name="gauge_id" id="gauge_id"></p>
	<p><label name="gauge_min">Gauge Min<br /></label>
	<input type="number" name="gauge_min"></p>
	<p><label name="gauge_max">Gauge Max<br /></label>
	<input type="number" name="gauge_max"></p>

	<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/rivers-options.php"); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/pickermap.php"); ?>
	
	<p><label name="description">Description</label><br />
	<textarea name="description"></textarea></p>
	
	<p><input type="submit" name="submit"></p>
</form>