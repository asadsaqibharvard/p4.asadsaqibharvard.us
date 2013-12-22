$("#postworkout").click(function(){
	
	var pulluptitle = $("#pulluptitle").text();
	var pullupset = $("#pullupset").text();
	var pulluprep = $("#pulluprep").text();
	
	var situptitle = $("#situptitle").text();
	var situpset = $("#situpset").text();
	var situprep = $("#situprep").text();
	
	var legextensiontitle = $("#legextensiontitle").text();
	var legextensionset = $("#legextensionset").text();
	var legextensionrep = $("#legextensionrep").text();
	
	var post = "My Workout for Today:";
	
	if(pulluptitle.length > 0){
		
		post = post + " Pullups - Sets: " + pullupset + ", Reps: " + pulluprep + ".";
	}
	
	if(situptitle.length > 0){
		
		post = post + " Situps - Sets: " + situpset + ", Reps: " + situprep + ".";
	}
	
	if(legextensiontitle.length > 0){
		
		post = post + " Leg Extensions - Sets: " + legextensionset + ", Reps: " + legextensionrep + ".";
	}
	
	$("#content").val(post);
	$("#frm").submit();	
});

/*-------------------------------------------------------------------------------------------------
Name
-------------------------------------------------------------------------------------------------*/
$('#name').keyup(function() {

	// Figure out what the user typed in
	var name = $(this).val();
	
	// Inject the name into the output div on the workout schedule
	$('#name-output').html(name);

	// How long was the recipient?
	var length = name.length;
	
	// If it was 20 characters, that's the max, so inject an error message
	if(length == 20) {
		$('#name-error').html("Max characters: 20");
	}
	// Otherwise, we're all good, clear the error message
	else {
		$('#name-error').html("");
	}
	
	// Note: The "maxlength" attribute on the HTML element will prevent the user from entering more than 20 characters

	
});



/*-------------------------------------------------------------------------------------------------
Workout Selections displayed on Workout Schedule
-------------------------------------------------------------------------------------------------*/
$(function(){
	$('#pullupsetsid,#pulluprepsid').change(function(){
		showWorkOut('pullup');
	});
	
	
	$('#situpsetsid,#situprepsid').change(function(){
		showWorkOut('situp');
	});
	
	
	$('#legextensionsetsid,#legextensionrepsid').change(function(){
		showWorkOut('legextension');
	});
	

});


/*Display Sets & Reps dynamically as they are updated */
function showWorkOut(item){
	var workout =  $('#' + item + 'labelid').text();
	var sets = $('#' + item + 'setsid').val();
	var reps = $('#' + item + 'repsid').val();

	$('#' + item + 'title').text(workout);
	$('#' + item + 'set').text(sets);
	$('#' + item + 'rep').text(reps);
}

function clearWorkOut(item){
	$('#' + item + 'div').hide();
	$('#' + item + 'checkboxid').attr("checked", false);
	$('#' + item + 'title').text('');
	$('#' + item + 'set').text('');
	$('#' + item + 'rep').text('');
}

/*-------------------------------------------------------------------------------------------------
Refresh Schedule
-------------------------------------------------------------------------------------------------*/


$(function(){
	
	$('#refresh-btn').click(function(){
		clearWorkOut('pullup');
		
		clearWorkOut('situp');
		
		clearWorkOut('legextension');
		
	});
});

/*-------------------------------------------------------------------------------------------------
Display workout selections below regions when click on images 
-------------------------------------------------------------------------------------------------*/

$("#upperbody").on('click', function() {
   $("#upperbodyworkouts").fadeIn();
   $("#coreworkouts").fadeOut();
   $("#lowerbodyworkouts").fadeOut();
});

$("#core").on('click', function() {
   $("#upperbodyworkouts").fadeOut();
   $("#coreworkouts").fadeIn();
   $("#lowerbodyworkouts").fadeOut();  
});

$("#lowerbody").on('click', function() {
   $("#upperbodyworkouts").fadeOut();
   $("#coreworkouts").fadeOut();
   $("#lowerbodyworkouts").fadeIn();  
});



/*-------------------------------------------------------------------------------------------------
Workout Checkboxes & Associated input boxes show/hide on schedule 
-------------------------------------------------------------------------------------------------*/

$("#pullupcheckboxid").on('click', function() {
	 var pullup1 = $('#pullupcheckboxid').is(':checked');
	 $('#pulluprepsid, #pullupsetsid').prop('disabled', !pullup1);
	 
	 if(pullup1){
	 	$('#pullupdiv').show();
		showWorkOut('pullup');
 	 } else {
		$('#pullupdiv').hide();
 	 }
});



$("#situpcheckboxid").on('click', function() {
	 var situp1 = $('#situpcheckboxid').is(':checked');
	 $('#situpsetsid, #situprepsid').prop('disabled', !situp1);
	 
	 if(situp1){
	 	$('#situpdiv').show();
		showWorkOut('situp');
 	 } else {
		$('#situpdiv').hide();
 	 }
});



$("#legextensioncheckboxid").on('click', function() {
	 var legextension1 = $('#legextensioncheckboxid').is(':checked');
	 $('#legextensionsetsid, #legextensionrepsid').prop('disabled', !legextension1);
	 
	 if(legextension1){
	 	$('#legextensiondiv').show();
		showWorkOut('legextension');
 	 } else {
		$('#legextensiondiv').hide();
 	 }
});




    