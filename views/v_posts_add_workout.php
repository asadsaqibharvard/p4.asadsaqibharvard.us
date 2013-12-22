	<link rel="stylesheet" href="/css/main.css" type="text/css">
	<h1>Workout Schedule</h1>
	
	<div id='controls'>
	
		<!-- Upper Body Workouts -->
		<div class ='workouts' id='upperbodyworkouts'>
			<form id="upperbodyform">
    			<h2>Upper Body Workouts</h2>
    			<!--pull ups-->
    			<label><input type="checkbox" name="checkboxname" id="pullupcheckboxid" class="workoutcheckbox"/><span id='pulluplabelid'>Pull Ups</span></label>
    			<input type="number" min="0" id="pullupsetsid" class="workoutsets" name="pullupsetsname" placeholder="# of Sets" disabled/>
    			<input type="number" min="0" id="pulluprepsid" class="workoutreps" name="pulluprepsname" placeholder="# of Reps" disabled/>
    		</form>
		</div>

		<!-- Core Workouts -->
		<div class ='workouts' id='coreworkouts'>
			<form id="coreform">
    			<h2>Core Workouts</h2>
    			<label><input type="checkbox" name="situpcheckboxname" id="situpcheckboxid" class="workoutcheckbox"/><span id='situplabelid'>Sit Ups</span></label>
    			<input type="number" min="0" id="situpsetsid" class="workoutsets" name="situpsetsname" placeholder="# of Sets" disabled/>
    			<input type="number" min="0" id="situprepsid" class="workoutreps" name="situprepsname" placeholder="# of Reps" disabled/>
    		</form>
		</div>


		<!-- Lower Body Workouts -->
		<div class ='workouts' id='lowerbodyworkouts'>
			<form id="lowerbodyform">
    			<h2>Lower Body Workouts</h2>
    			<label><input type="checkbox" name="legextensioncheckboxname" id="legextensioncheckboxid" class="workoutcheckbox"/><span id='legextensionlabelid'>Leg Extensions</span></label>
    			<input type="number" min="0" id="legextensionsetsid" class="workoutsets" name="legextensionsetsname" placeholder="# of Sets" disabled />
    			<input type="number" min="0" id="legextensionrepsid" class="workoutreps" name="legextensionrepsname" placeholder="# of Reps" disabled/>
    		</form>
		</div>
	
	</div>
	
	<!-- Select a body part -->
	<div id='bodyparts'>
	
		<!-- Body region picker -->
			<h2>Select A Region and Workouts Will Be Displayed Below</h2>
			<div class='bodypart' id='upperbody'></div>
			<div class='bodypart' id='core'></div>
			<div class='bodypart' id='lowerbody'></div>
			<a href="http://www.lifeofanarchitect.com/social-media-superhero/">*Image Reference</a>
			
	</div>
	
	<!-- Live preview of workout schedule-->
	<div id='workoutschedule'>
			<div id='schedule'>
				<h2 id='workouttitle'> Workout Schedule</h2>
				
				<div id='workoutlabels'>Workout</div>
				<div id='setstitle'>Sets</div>
				<div id='repstitle'>Reps</div>
				
				<div id='pullupdiv' class='workoutdiv'>
					<div id='pulluptitle' class='title'></div>
					<div id='pullupset' class='set'></div>
					<div id='pulluprep' class='rep'></div>
				</div>
				
				
				<div id='situpdiv' class='workoutdiv'>
					<div id='situptitle' class='title'></div>
					<div id='situpset' class='set'></div>
					<div id='situprep' class='rep'></div>
				</div>
				
				
				<div id='legextensiondiv' class='workoutdiv'>
					<div id='legextensiontitle' class='title'></div>
					<div id='legextensionset' class='set'></div>
					<div id='legextensionrep' class='rep'></div>
				</div>
				
				
			</div>
		<!-- Buttons -->
		<br><br>
		<input type='button' id='refresh-btn' value='Refresh'>
	</div>
	
	<form id="frm" method='POST' action='/posts/p_add'>
	    <textarea name='content' id='content' style="display:none;"></textarea>
	    <input type='submit' value='Submit' id="postworkout">
	</form> 

	<script src="/js/p3.js"></script>
	