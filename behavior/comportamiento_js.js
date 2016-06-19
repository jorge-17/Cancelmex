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

function MC_Horizontal(y){
    ancho=document.getElementById("ancho_MC").value;
    costo=(y*2)*ancho;
    document.getElementById("costo_horizontal_basico").innerHTML=costo;
}

function MC_Adaptador(a){
    ancho=document.getElementById("ancho_MC").value;
    costo=(a*2)*ancho;
    document.getElementById("costo_adaptador_basico").innerHTML=costo;
}

function MC_Angulo(a){
    ancho=document.getElementById("ancho_MC").value;
    costo=(a*2)*ancho;
    document.getElementById("costo_angulo_basico").innerHTML=costo;
}

function MC_jal(j){
    costo=(j*2);
    document.getElementById("costo_jal_basico").innerHTML=costo;
}

function MC_Carret(c){
    costo=(c*2);
    document.getElementById("costo_carret_basico").innerHTML=costo;
}
