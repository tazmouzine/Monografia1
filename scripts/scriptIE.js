$(document).ready(
function(){
var num = 2;		
		$('.setup').click(function(){
			$("#test_setup").append('<div class="fields" id="test_setup'+num+'"><input type="text" size="40" name="setup[]" id="setup" value=""></input><a style="color:#000" href="#" class="remove" onClick='rmvInput('#test_setup','\'test_setup'+count+'\'')'>Apagar</a><div>');
			$('#test_setup'+num).css('display','none');
			$('#test_setup'+num).slideDown();
			num++;
		});
	},
function(){
var num = 2;		
		$('.steps').click(function(){
			$("#test_steps").append('<div class="fields" id="test_steps'+num+'"><input type="text" size="40" name="step[]" id="steps" value=""></input><a style="color:#000" href="#" class="remove" onClick='rmvInput('#test_steps',\'test_steps'+count+'\'')'>Apagar</a><div>');
			$('#test_steps'+num).css('display','none');
			$('#test_steps'+num).slideDown();
			num++;
		});
	},
function(){
var attach_num = 2;		
		$('.attach').click(function(){
			$("#attach").append('<div class="fields" id="attach'+attach_num+'"><input type="text" size="40" name="attachs[]" id="attachs" value=""></input><a style="color:#000" href="#" class="remove" onClick='rmvInput('#attach',\'attach'+count+'\'')'>Apagar</a><div>');
			$('#attach'+attach_num).css('display','none');
			$('#attach'+attach_num).slideDown();
			attach_num++;
		});
});

this.rmvInput = function(div, inputs){	
	var parent = document.getElementById(inputs);
	parent.removeChild(div);
};

$(document).ready(function(){
	rmvInput(div, inputs);
});