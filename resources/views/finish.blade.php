<!DOCTYPE html>
<html lang="en">
<head>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> -->

    <link rel="stylesheet" href="/js/bootstrap.min.css">
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easing.min.js"></script>


    <title>Finish</title>
</head>

   
</head>
<body>
    <!-- MultiStep Form -->
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <form id="msform" action="{{ route('submitForm') }}" method="POST">
      <!-- progressbar -->
      <ul id="progressbar">
        <!-- <li class="active">Finish</li>
        <li>Event</li>
        <li>Templates</li>
        <li>Edit Template</li>
        <li>Print Confirmation</li> -->

      </ul>
      <!-- fieldsets -->
      <fieldset>
        <h2 class="fs-title">Thank You for Choosing Our Services!</h2>
        <h3 class="fs-subtitle">We sincerely appreciate your trust in us and are thrilled to have had the opportunity to serve you. Your satisfaction is our top priority, and we're glad we could meet your needs.
        <p>We look forward to continuing to serve you and hope to exceed your expectations in the future. If you have any questions or need further assistance, please don't hesitate to reach out.
        </p>
        <p>
        Thank you once again for choosing us!</p>

</h3>
        

       </fieldset>
 
    <!-- link to designify.me code snippets -->
    <div class="dme_link">
      <!-- <p><a href="#" target="_blank">Power By ..</a></p> -->
    </div>
    <!-- /.link to designify.me code snippets -->
  </div>
</div>
<!-- /.MultiStep Form -->
 <style>
/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {
    margin: 0;
    padding: 0;
}

html {
    height: 100%;
    background: #6441A5; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #6441A5, #2a0845); /* Chrome 10-25, Safari 5.1-6 */
}

body {
    font-family: montserrat, arial, verdana;
    background: transparent;
}

/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 30px;
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    padding: 20px 30px;
    box-sizing: border-box;
    width: 80%;
    margin: 0 10%;

    /*stacking fieldsets above each other*/
    position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

/*inputs*/
#msform input, #msform textarea {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
}

#msform input:focus, #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #ee0979;
    outline-width: 0;
    transition: All 0.5s ease-in;
    -webkit-transition: All 0.5s ease-in;
    -moz-transition: All 0.5s ease-in;
    -o-transition: All 0.5s ease-in;
}

/*buttons*/
#msform .action-button {
    width: 100px;
    background: #ee0979;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
}

#msform .action-button-previous {
    width: 100px;
    background: #C5C5F1;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
}

/*headings*/
.fs-title {
    font-size: 18px;
    text-transform: uppercase;
    color: #2C3E50;
    margin-bottom: 10px;
    letter-spacing: 2px;
    font-weight: bold;
}

.fs-subtitle {
    font-weight: normal;
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
}

/*progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    /*CSS counters to number the steps*/
    counter-reset: step;
}

#progressbar li {
    list-style-type: none;
    color: white;
    text-transform: uppercase;
    font-size: 9px;
    width: 33.33%;
    float: left;
    position: relative;
    letter-spacing: 1px;
}

#progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 24px;
    height: 24px;
    line-height: 26px;
    display: block;
    font-size: 12px;
    color: #333;
    background: white;
    border-radius: 25px;
    margin: 0 auto 10px auto;
}

/*progressbar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: white;
    position: absolute;
    left: -50%;
    top: 9px;
    z-index: -1; /*put it behind the numbers*/
}

#progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none;
}

/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before, #progressbar li.active:after {
    background: #ee0979;
    color: white;
}


/* Not relevant to this form */
.dme_link {
    margin-top: 30px;
    text-align: center;
}
.dme_link a {
    background: #FFF;
    font-weight: bold;
    color: #ee0979;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 5px 25px;
    font-size: 12px;
}

.dme_link a:hover, .dme_link a:focus {
    background: #C5C5F1;
    text-decoration: none;
}
.bottle-image {
    width: 300px!important; /* Adjust width as needed */
    cursor: pointer;
    transition: transform 0.3s ease;
}

.bottle-image:hover {
    transform: scale(1.05); /* Slightly enlarge on hover */
}

.image-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(100px, 1fr)); /* Adjust size as needed */
    gap: 10px;
    margin: 20px 0;
}

.event-image {
    width: 100%; /* Adjusts to grid column width */
    cursor: pointer;
    transition: transform 0.3s ease;
    border: 2px solid transparent;
    
}

.event-image:hover {
    transform: scale(1.05);
    border-color: #ee0979; /* Highlights on hover */
    /* width: 23rem; */
}

.event-image.selected {
    border-color: #ee0979;
}

.event-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    max-width: 600px; /* adjust as needed */
    margin: auto;
}

/* .event-image {
    width: 100%;
    height: auto;
} */

.card-title{
    font-family: 'Arial', sans-serif;
    font-size: 1.5em;
    font-weight: 600;
    color: #ee0979;
    text-align: center;
    margin: 20px 0;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    border-bottom: 2px solid #ddd;
    padding-bottom: 10px;
    max-width: 80%;
    margin: 20px auto;
}
.graduation1{
    height: 156px;
}
#msform fieldset {
    
    
    width: 90%;
} 
/* Style the select container */
.button-container {
    margin-left: 20px;
}

/* Style the select element */
select {
    padding: 10px;
    font-size: 16px;
    border: 2px solid #ddd;
    border-radius: 5px;
    width: 100%;
    background-color: #f8f9fa;
    color: #495057;
    cursor: pointer;
    appearance: none;  /* Remove default dropdown arrow */
    -webkit-appearance: none; /* For Safari */
    -moz-appearance: none; /* For Firefox */
}

/* Add custom arrow for the select box */
select::-ms-expand {
    display: none; /* Remove default dropdown arrow in IE */
}

/* Style the select element when it is focused */
select:focus {
    outline: none;
    border-color: #80bdff; /* Lighter blue for focus */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.2); /* Light blue shadow */
}

/* Style the options inside the select dropdown */
select option {
    padding: 10px;
    font-size: 16px;
    background-color: #ffffff; /* White background for options */
    color: #495057;
    border-bottom: 1px solid #ddd;
}

/* Hover effect on options */
select option:hover {
    background-color: #f1f1f1; /* Light gray background on hover */
}

/* Add a custom background color for select input */
select {
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8"><path fill="currentColor" d="M2.25 3.5a.75.75 0 0 1 1.5 0v2.75a.75.75 0 0 1-1.5 0V3.5zM3.5 5a.75.75 0 1 1 1.5 0V3.5a.75.75 0 1 1-1.5 0v2.75z"/></svg>'), linear-gradient(to bottom, #f8f9fa 0%, #e9ecef 100%);
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 12px 12px;
}

/* Make the options visible in a cleaner format when focused */
select:focus option {
    background-color: #f0f8ff; /* Lighter blue for selected option */
    color: #007bff; /* Blue color for text */
}


 </style>
 <script>
// Function to show the confirmation popup
function showConfirmationPopup() {
    // Get the number of prints from the dropdown
    const numPrints = document.getElementById('no_of_prints').value;
    document.getElementById('printCount').textContent = numPrints; // Update the popup text with the number of prints

    // Show the confirmation popup
    document.getElementById('confirmationPopup').style.display = 'flex';
}

// Function to close the popup
function closePopup() {
    // Hide the confirmation popup
    document.getElementById('confirmationPopup').style.display = 'none';
}

// Function to submit the form to the submit-form route
function submitForm() {
    // Submit the form
    document.getElementById('msform').submit();
}

const images = document.querySelectorAll('.event-image');

// Add click event listener to each image
images.forEach(image => {
    image.addEventListener('click', () => {
        // Remove 'selected' class from all images
        images.forEach(img => img.classList.remove('selected'));

        // Add 'selected' class to the clicked image
        image.classList.add('selected');
    });
});


//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})  

 </script>
</body>
</html>