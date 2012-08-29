<h3>Add a photo</h3>
<form name="add-photo" method="post" action="scripts/add-photo-exec.php" enctype="multipart/form-data">
	<p><label name="photo_name">Name<br /></label>
	<input type="text" name="photo_name"></p>
	
	<p><label name="description">Description</label><br />
	<textarea name="description"></textarea><br />
	<small>Describe the photo. If of a rapid, try to explain what direction the camera was facing in respect to the rapid.</small></p>

	<p><label name="associated_title">Associated map element<br /></label>
	<span class="associated_title">Click on something on the map to select it.</span>
	<input type="hidden" name="associated_id" id="associated_id" required></p>
	<input type="hidden" name="associated_type" id="associated_type"></p>
	
	<p><label name="photo_flow">Flow<br /></label>
	<input type="text" name="photo_flow">
	<select name="flow_units">
		<option value="cfs">cfs</option>
		<option value="ft">ft</option>
	</select>
	</p>
	
	<p><input type="file" name="file" id="file" /><br />
	<small>Submit a .jpg file</small></p>
	
	<p><input type="submit" name="submit"></p>
</form>