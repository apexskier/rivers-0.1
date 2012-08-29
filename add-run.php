<h3>Add a run</h3>
<form name="add-run" action="scripts/add-run-exec.php" method="post" enctype="multipart/form-data">
	<p><label name="run_name">Name<br /></label>
	<input type="text" name="run_name"></p>
	
	<p><label name="gauge_id">Gauge<br /></label>
	<span class="guage_title">Click on a gauge on the map to select it.</span>
	<input type="hidden" name="gauge_id" id="gauge_id"></p>
	<p><label name="gauge_min">Gauge Min<br /></label>
	<input type="number" name="gauge_min"></p>
	<p><label name="gauge_max">Gauge Max<br /></label>
	<input type="number" name="gauge_max"></p>
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/rivers-options.php"); ?>
	
	<p><label>Class</label><br />
	<div class="run-class-slider"></div><span class="run-class-slider-value-low">III</span><span class="run-class-slider-value-high">/IV</span></p>
	<input type="hidden" name="class" id="class-value" value="III/IV">
	
	<p><label name="description">Description</label><br />
	<textarea name="description"></textarea></p>
	
	<p><input type="file" name="file" id="file" /><br />
	<small>Submit a .gpx file</small></p>
	
	<p><input type="submit" name="submit"></p>
</form>