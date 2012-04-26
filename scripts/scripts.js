$(document).ready(function() {
var num = 2;		
$('.setup').click(function(){
			$("#test_setup").append('<div id="test_setup'+num+'"><label for="description">'+num+' - </label><input type="text" size="40" name="setup[]" id="setup" value=""></input><div>');
			$('#test_setup'+num).css('display','none');
			$('#test_setup'+num).slideDown();
			num++;
		});
});
$(document).ready(function() {
var num = 2;		
		$('.steps').click(function(){
			$("#test_steps").append('<div id="test_steps'+num+'"><label for="description">'+num+' - </label><input type="text" size="40" name="step[]" id="steps" value=""></input><div>');
			$('#test_steps'+num).css('display','none');
			$('#test_steps'+num).slideDown();
			num++;
		});
});
$(document).ready(function() {
var attach_num = 2;
		$('.attach').click(function(){
			$("#attach").append('<div id="attach'+attach_num+'"><label for="description">'+attach_num+' - </label><input type="text" size="40" name="attachs[]" id="attachs" value=""></input><a style="color:#000" href="#" class="remove" onClick="remove(attach'+attach_num+')">Apagar</a><div>');
			$('#attach'+attach_num).css('display','none');
			$('#attach'+attach_num).slideDown();
			attach_num++;
		});
});

$(document).ready(function remove(num){	
	var parent = document.getElementById("attach");
	parent.removeChild(num);
});	