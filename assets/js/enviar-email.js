var form = document.forms.namedItem("enviar-email");
form.addEventListener('submit', function(ev) {

	document.querySelector(".botao-enviar").style.display = 'none';
	document.querySelector(".load").style.display = 'block';

	var oOutput = document.querySelector(".valida-envio"),
	oData = new FormData(form);

    oData.append("action", "enviar-email");

	var oReq = new XMLHttpRequest();
	oReq.open("POST", MyAjax.ajaxurl, true);
	oReq.onload = function(oEvent) {
		if (oReq.status == 200) {
			oOutput.innerHTML = oReq.response;
			document.querySelector(".load").style.display = 'none';
			document.querySelector(".botao-enviar").style.display = 'none';
		} else {
			oOutput.innerHTML = "Error " + oReq.status + " occurred when trying to upload your file.<br \/>";
		}
	};

	oReq.send(oData);
	ev.preventDefault();
}, false);
