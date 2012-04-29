this.addInput = function(div, teste) {
		var div_id = div.toString();
		div = document.getElementById(div_id);
		count++;
		var new_div = document.createElement('div');
		new_div.id = 'div_input'+count;		
		var new_input = document.createElement('input');
		new_input.type = 'text';
		new_input.name = teste.toString();
		new_input.size = '45';
		new_div.appendChild(new_input);
		var new_button = document.createElement('input');
		new_button.type = 'button';
		new_button.name = 'rmv';
		new_button.value = '-';
		new_button.id = 'botao';
		new_button.setAttribute('onClick','rmvInput(\''+div_id+'\',\'div_input'+count+'\')');
		new_div.appendChild(new_button);
		var new_break = document.createElement('div');
		new_div.appendChild(new_break);
		div.appendChild(new_div);
		$('#div_input'+count).css('display','none');
		$('#div_input'+count).slideDown();
	};

this.rmvInput = function(div, inputs) {
		div = document.getElementById(div);
		input = document.getElementById(inputs);				
		div.removeChild(input);
};

$(document).ready(function(){
	count = 0;
	addInput(div, teste);
});

$(document).ready(function(){
	rmvInput(div, inputs);
});