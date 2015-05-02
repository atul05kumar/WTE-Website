var slideno = 0;
var total_slides = 4;
var gallery_total = 7;
var current = 1;
var myVar;
function autoslider() {
    myVar = setInterval(left_slide, 2000);
}
function leftslide() {
	slideno++;
	slideno = slideno % total_slides;
	var img = document.getElementById('current_pic');
	img.src = "images/slider" + slideno + ".jpg";
}
function rightslide() {
	slideno--;
	if(slideno == -1) {
		slideno = 3;
	}	
	var img = document.getElementById('current_pic');
	img.src = "images/slider" + slideno + ".jpg";
}

function left_slide() {
	current++;
	if(current == 8) current = 1;
	var img = document.getElementById('gallary_pic');
	img.src = "images/gallary/g" + current + ".jpg";
}

function right_slide() {
	current--;
	if(current == 0) {
		current = gallery_total;
	}	
	var img = document.getElementById('gallary_pic');
	img.src = "images/gallary/g" + current + ".jpg";
}
