function cambio_tela() {
	alto=document.getElementById("alto_m").value;
	ancho=document.getElementById("ancho_m").value;
	x=document.getElementById("valor_x").value;
	precio=alto*ancho*x;
	document.getElementById("precio_mosquitero").innerHTML=precio;
}

function M_fijo(){
	alto=document.getElementById("alto_MF").value;
	ancho=document.getElementById("ancho_MF").value;

	clasico=document.getElementById("valor_1").value;
	precio_clasico=alto*ancho*clasico;
	document.getElementById("pre_clasico").innerHTML=precio_clasico;

    color=document.getElementById("valor_2").value;
	precio_color=alto*ancho*color;
	document.getElementById("pre_color").innerHTML=precio_color;
}

function M_corredizo(){
    alto=document.getElementById("alto_MC").value;
    ancho=document.getElementById("ancho_MC").value;
    c_vertical_b=60;
    c_horizontal_b=46;
    c_adaptador_b=25;
    c_angulo_b=20;
    c_vertical_c=70;
    c_horizontal_c=55;
    c_adaptador_c=28.5;
    c_angulo_c=22;
    c_jal=7;
    c_carret=7;
    c_vinil=2;
    c_tela=24;
    c_tornillo=1.2;
    c_silicon=30;


    vert_b=(c_vertical_b*2)*alto;
    document.getElementById("costo_vertical_basico").innerHTML=vert_b;
    vert_c=(c_vertical_c*2)*alto;
    document.getElementById("costo_vertical_color").innerHTML=vert_c;

    hori_b=(c_horizontal_b*2)*ancho;
    document.getElementById("costo_horizontal_basico").innerHTML=hori_b;
    hori_c=(c_horizontal_c*2)*ancho;
    document.getElementById("costo_horizontal_color").innerHTML=hori_c;

    adap_b=(c_adaptador_b*2)*ancho;
    document.getElementById("costo_adaptador_basico").innerHTML=adap_b;
    adap_c=(c_adaptador_c*2)*ancho;
    document.getElementById("costo_adaptador_color").innerHTML=adap_c;

    angu_b=(c_angulo_b*2)*ancho;
    document.getElementById("costo_angulo_basico").innerHTML=angu_b;
    angu_c=(c_angulo_c*2)*ancho;
    document.getElementById("costo_angulo_color").innerHTML=angu_c;

    jal_b_c=(c_jal*2);
    document.getElementById("costo_jal_basico").innerHTML=jal_b_c;
    document.getElementById("costo_jal_color").innerHTML=jal_b_c;

    carr_b_c=(c_carret*2);
    document.getElementById("costo_carret_basico").innerHTML=carr_b_c;
    document.getElementById("costo_carret_color").innerHTML=carr_b_c;

    vinil_b_c=((alto*c_vinil)+(ancho*c_vinil));
    document.getElementById("costo_vinil_basico").innerHTML=vinil_b_c;
    document.getElementById("costo_vinil_color").innerHTML=vinil_b_c;

    tela_b_c=(alto*ancho*c_tela);
    document.getElementById("costo_tela_basico").innerHTML=tela_b_c;
    document.getElementById("costo_tela_color").innerHTML=tela_b_c;

    torni_b_c=(c_tornillo*4);
    document.getElementById("costo_tornillo_basico").innerHTML=torni_b_c;
    document.getElementById("costo_tornillo_color").innerHTML=torni_b_c;

    document.getElementById("costo_silicon_basico").innerHTML=c_silicon;
    document.getElementById("costo_silicon_color").innerHTML=c_silicon;

    suma_total_b=vert_b+hori_b+adap_b+angu_b+jal_b_c+carr_b_c+vinil_b_c+tela_b_c+torni_b_c+c_silicon;
    document.getElementById("suma_total_basico").innerHTML=suma_total_b;
    suma_total_c=vert_c+hori_c+adap_c+angu_c+jal_b_c+carr_b_c+vinil_b_c+tela_b_c+torni_b_c+c_silicon;
    document.getElementById("suma_total_color").innerHTML=suma_total_c;

    costo_total_b=(alto*ancho*520);
    document.getElementById("costo_total_basico").innerHTML=costo_total_b;
    costo_total_c=(alto*ancho*450);
    document.getElementById("costo_total_color").innerHTML=costo_total_c;
}
