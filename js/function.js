function addVisitsAndShowTable() {
	$(document).ready(function() {
			addVisits();
			cleanFromVisits();
			$('#tabla').load('../components/tableDinamica.php');
	});
}

function addVisits() {

	nombre 	 	  = $('#nombre').val();
	empresa 	  = $('#empresa').val();
	cargo    	  = $('#cargo').val();
	telefono 	  = $('#telefono').val();
	email         = $('#email').val();
	observaciones = $('#observaciones').val();

	consultoria  = "";
	simuladores  = "";
	gestion  = "";
	otroVisita  = "";
	sass  = "";
	sfactory  = "";
	presupuesto  = "";
	tecnico  = "";
	demo  = "";
	otroConsulta  = "";

	if (document.getElementById('consultoria').checked) {
		consultoria   =  "Consultoria";
	}

	if (document.getElementById('simuladores').checked) {
		simuladores   = "Simuladores";
	}

	if (document.getElementById('gestion').checked) {
		gestion       = "Sist. Gestion";
	}

	if (document.getElementById('visitaDistinta').checked) {
		otroVisita    = $('#otroVisita').val();
	}

	if (document.getElementById('sass').checked) {
		sass 		  = "sass";
	}

	if (document.getElementById('sfactory').checked) {
		sfactory 	  = "S.factory";
	}

	if (document.getElementById('presupuesto').checked) {
		presupuesto   = "Presupuesto";
	}

	if (document.getElementById('tecnico').checked) {
		tecnico 	  = "Cont. Tecnico";
	}

	if (document.getElementById('demo').checked) {
			demo 		  = "Demo";
	}

	if (document.getElementById('otroConsultac').checked) {
		otroConsulta  = $('#otroConsulta').val();
	}
	
	cadena = "nombre=" + nombre + "&empresa=" + empresa 
			+ "&cargo=" + cargo + "&telefono=" + telefono 
			+ "&email=" + email + "&consultoria=" + consultoria  
			+ "&simuladores=" + simuladores	+ "&gestion=" + gestion 
			+ "&otroVisita=" + otroVisita + "&sass=" + sass
			+ "&sfactory=" + sfactory + "&presupuesto=" + presupuesto 
			+ "&tecnico=" + tecnico + "&demo=" + demo 
			+ "&otroConsulta=" + otroConsulta + "&observaciones=" + observaciones;

	$.ajax({
		type: "POST",
		url: "../php/addData.php",
		data: cadena,
		success: function(r) {
			if( r == 1 ) {
				alertify.success("Se envio su consulta");
			}else{
				alertify.error("Error en el servidor");
			}
		}
	});
}

function cleanFromVisits() {
	document.getElementById('formVisits').reset();
}