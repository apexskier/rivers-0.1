<h3>Add a video</h3>
<form name="add-video" method="post" action="scripts/add-video-exec.php">
	<p><label name="video_url">Video URL<br /></label>
	<input type="text" name="video_url" required></p>
	
	<p><label name="associated_title">Associated map element<br /></label>
	<span class="associated_title">Click on something on the map to select it.</span>
	<input type="hidden" name="associated_id" id="associated_id"></p>
	<input type="hidden" name="associated_type" id="associated_type"></p>
	
	<p><label name="video_flow">Flow<br /></label>
	<input type="text" name="video_flow">
	<select name="flow_units">
		<option value="cfs">cfs</option>
		<option value="ft">ft</option>
	</select>
	</p>
	
	<p><input type="submit" name="submit"></p>
</form>