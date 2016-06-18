function cambio_tela(){
	alto=document.getElementById("alto_m").value;
	ancho=document.getElementById("ancho_m").value;
	x=document.getElementById("valor_x").value;
	precio=alto*ancho*x;
	document.getElementById("precio_mosquitero").innerHTML=precio;
}

function MF_clasico(){
	alto=document.getElementById("alto_MF").value;
	ancho=document.getElementById("ancho_MF").value;
	x=document.getElementById("valor_1").value;
	precio=alto*ancho*x;
	document.getElementById("pre_clasico").innerHTML=precio;
}

function MF_color(){
	alto=document.getElementById("alto_MF").value;
	ancho=document.getElementById("ancho_MF").value;
	x=document.getElementById("valor_2").value;
	precio=alto*ancho*x;
	document.getElementById("pre_color").innerHTML=precio;
}

function MC_Vertical(x){
    alto=document.getElementById("alto_MC").value;
    costo=(x*2)*alto;
    document.getElementById("costo_vertical_basico").innerHTML=costo;
}
