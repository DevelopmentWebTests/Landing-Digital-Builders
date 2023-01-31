$(document).ready(function(){
	$("#content_form").validate({
		rules: {
			nombre: {
				required: true,
				maxlength: 50,
			},
			email: {
				required: true,
				email: true,
				maxlength: 50,
			},
			telefono: {
				required: true,
				number: true,
				minlength: 7,
            	maxlength: 12,
			},
			empresa: {
				required: true,
				maxlength: 50,
			},
			asunto: {
				required: true,
				maxlength: 50,
			},
			mensaje: {
				required: true,
				maxlength: 500,
			},
			acepto: {
				required: true,
			},
		},
		messages: {
			nombre: "Este campo es obligatorio.",
			email: {
				required: "Este campo es obligatorio.",
				email: "Por favor, introduce una dirección de correo electrónico válida."
			},
			telefono: {
				required: "Este campo es obligatorio.",
				minlength: $.validator.format("Por favor, escribe más de {0} caracteres."),
				maxlength: $.validator.format( "Por favor, no escribas menos de {0} caracteres."),
				number: "Por favor, escribe un número válido.",
			},
			empresa: "Este campo es obligatorio.",
			asunto: "Este campo es obligatorio.",
			mensaje: "Este campo es obligatorio.",
			acepto: "Este campo es obligatorio.",
		},

		submitHandler: function(form){
	        $.ajax({
	            type: $(form).attr("method"),
				url: $(form).attr("action"),
				data: $(form).serialize(),     
	            success: function(data){
	            	$("#content_form .row").hide();
	            	$("#succes").show();
	            },
	            error: function(data){
	            	$("#error").show();
	            },
	        });
	        return false;
	    }
	});
});