var alto;
var ancho;
var x;
var precio;

function cambio_tela() {

	alto = document.getElementById("alto_m").value;
	ancho = document.getElementById("ancho_m").value;
	x = document.getElementById("valor_x").value;
	precio = alto * ancho * x;
	document.getElementById("precio_mosquitero").innerHTML = precio.toFixed(2);
}

function M_fijo(){
	alto=document.getElementById("alto_MF").value;
	ancho=document.getElementById("ancho_MF").value;

	clasico=document.getElementById("valor_1").value;
	precio_clasico=alto*ancho*clasico;
	document.getElementById("pre_clasico").innerHTML=precio_clasico.toFixed(2);

    color=document.getElementById("valor_2").value;
	precio_color=alto*ancho*color;
	document.getElementById("pre_color").innerHTML=precio_color.toFixed(2);
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
    document.getElementById("costo_vertical_basico").innerHTML=vert_b.toFixed(2);
    vert_c=(c_vertical_c*2)*alto;
    document.getElementById("costo_vertical_color").innerHTML=vert_c.toFixed(2);

    hori_b=(c_horizontal_b*2)*ancho;
    document.getElementById("costo_horizontal_basico").innerHTML=hori_b.toFixed(2);
    hori_c=(c_horizontal_c*2)*ancho;
    document.getElementById("costo_horizontal_color").innerHTML=hori_c.toFixed(2);

    adap_b=(c_adaptador_b*2)*ancho;
    document.getElementById("costo_adaptador_basico").innerHTML=adap_b.toFixed(2);
    adap_c=(c_adaptador_c*2)*ancho;
    document.getElementById("costo_adaptador_color").innerHTML=adap_c.toFixed(2);

    angu_b=(c_angulo_b*2)*ancho;
    document.getElementById("costo_angulo_basico").innerHTML=angu_b.toFixed(2);
    angu_c=(c_angulo_c*2)*ancho;
    document.getElementById("costo_angulo_color").innerHTML=angu_c.toFixed(2);

    jal_b_c=(c_jal*2);
    document.getElementById("costo_jal_basico").innerHTML=jal_b_c.toFixed(2);
    document.getElementById("costo_jal_color").innerHTML=jal_b_c.toFixed(2);

    carr_b_c=(c_carret*2);
    document.getElementById("costo_carret_basico").innerHTML=carr_b_c.toFixed(2);
    document.getElementById("costo_carret_color").innerHTML=carr_b_c.toFixed(2);

    vinil_b_c=((alto*c_vinil)+(ancho*c_vinil));
    document.getElementById("costo_vinil_basico").innerHTML=vinil_b_c.toFixed(2);
    document.getElementById("costo_vinil_color").innerHTML=vinil_b_c.toFixed(2);

    tela_b_c=(alto*ancho*c_tela);
    document.getElementById("costo_tela_basico").innerHTML=tela_b_c.toFixed(2);
    document.getElementById("costo_tela_color").innerHTML=tela_b_c.toFixed(2);

    torni_b_c=(c_tornillo*4);
    document.getElementById("costo_tornillo_basico").innerHTML=torni_b_c.toFixed(2);
    document.getElementById("costo_tornillo_color").innerHTML=torni_b_c.toFixed(2);

    document.getElementById("costo_silicon_basico").innerHTML=c_silicon.toFixed(2);
    document.getElementById("costo_silicon_color").innerHTML=c_silicon.toFixed(2);

    suma_total_b=vert_b+hori_b+adap_b+angu_b+jal_b_c+carr_b_c+vinil_b_c+tela_b_c+torni_b_c+c_silicon;
    document.getElementById("suma_total_basico").innerHTML=suma_total_b.toFixed(2);
    suma_total_c=vert_c+hori_c+adap_c+angu_c+jal_b_c+carr_b_c+vinil_b_c+tela_b_c+torni_b_c+c_silicon;
    document.getElementById("suma_total_color").innerHTML=suma_total_c.toFixed(2);

    costo_total_b=(alto*ancho*520);
    document.getElementById("costo_total_basico").innerHTML=costo_total_b.toFixed(2);
    costo_total_c=(alto*ancho*450);
    document.getElementById("costo_total_color").innerHTML=costo_total_c.toFixed(2);
}

/*-------------------- Tablas dinamicas fijos ----------------------------------------*/
 function mostrarDisplay_fijos(id,boton) {
     for(i=1;i<10;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById(boton).setAttribute("onclick","ocultarDisplay_fijo('"+id+"','"+boton+"');");
}

function ocultarDisplay_fijo(id,boton){
    for(i=1;i<10;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById(boton).setAttribute("onclick","mostrarDisplay_fijo('"+id+"','"+boton+"');");
}

/*---------------------- Tablas dinamicas puerta 3 pulgadas ------------------------------------*/
function mostrarDisplay_puerta3(id) {
     for(i=1;i<16;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById("boton_menu").setAttribute("onclick","ocultarDisplay_puerta3('"+id+"');");
}

function ocultarDisplay_puerta3(id){
    for(i=1;i<16;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById("boton_menu").setAttribute("onclick","mostrarDisplay_puerta3('"+id+"');");
}

/*----------------------- Tablas dinamicas puerta 2 pulgadas -----------------------------------*/
function mostrarDisplay_puerta2(id) {
     for(i=1;i<14;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById("boton_menu").setAttribute("onclick","ocultarDisplay_puerta2('"+id+"');");
}

function ocultarDisplay_puerta2(id){
    for(i=1;i<14;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById("boton_menu").setAttribute("onclick","mostrarDisplay_puerta2('"+id+"');");
}

/*----------------------- Tablas dinamicas puerta 1 3/4 pulgadas -----------------------------------*/
function mostrarDisplay_puerta1(id) {
     for(i=1;i<17;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById("boton_menu").setAttribute("onclick","ocultarDisplay_puerta1('"+id+"');");
}

function ocultarDisplay_puerta1(id){
    for(i=1;i<17;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById("boton_menu").setAttribute("onclick","mostrarDisplay_puerta1('"+id+"');");
}

/*--------------------------------- Tablas dinamicas ventana con antepecho de 4 hojas ------------------------------------*/
function mostrarDisplay_ventana_ante4(id,boton) {
     for(i=1;i<20;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById(boton).setAttribute("onclick","ocultarDisplay_puerta_ante4('"+id+"','"+boton+"');");
}

function ocultarDisplay_ventana_ante4(id,boton){
    for(i=1;i<20;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById(boton).setAttribute("onclick","mostrarDisplay_puerta_ante4('"+id+"','"+boton+"');");
}
/*--------------------------------- Tablas dinamicas ventana con antepecho de 3 hojas ------------------------------------*/
function mostrarDisplay_ventana_ante3(id,boton) {
     for(i=1;i<20;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById(boton).setAttribute("onclick","ocultarDisplay_ventana_ante3('"+id+"','"+boton+"');");
}

function ocultarDisplay_ventana_ante3(id,boton){
    for(i=1;i<20;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById(boton).setAttribute("onclick","mostrarDisplay_ventana_ante3('"+id+"','"+boton+"');");
}
/*--------------------------------- Tablas dinamicas ventana con antepecho de 2 hojas ------------------------------------*/
function mostrarDisplay_ventana_ante(id,boton) {
     for(i=1;i<22;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById(boton).setAttribute("onclick","ocultarDisplay_ventana_ante('"+id+"','"+boton+"');");
}

function ocultarDisplay_ventana_ante(id,boton){
    for(i=1;i<22;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById(boton).setAttribute("onclick","mostrarDisplay_ventana_ante('"+id+"','"+boton+"');");
}
/*--------------------------------- Tablas dinamicas ventana 4 hojas ------------------------------------*/
function mostrarDisplay_ventana4(id,boton) {
     for(i=1;i<15;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById(boton).setAttribute("onclick","ocultarDisplay_ventana4('"+id+"','"+boton+"');");
}

function ocultarDisplay_ventana4(id,boton){
    for(i=1;i<15;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById(boton).setAttribute("onclick","mostrarDisplay_ventana4('"+id+"','"+boton+"');");
}
/*--------------------------------- Tablas dinamicas ventana 2 hojas ------------------------------------*/
function mostrarDisplay_ventana2(id,boton) {
     for(i=1;i<15;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById(boton).setAttribute("onclick","ocultarDisplay_ventana2('"+id+"','"+boton+"');");
}

function ocultarDisplay_ventana2(id,boton){
    for(i=1;i<15;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById(boton).setAttribute("onclick","mostrarDisplay_ventana2('"+id+"','"+boton+"');");
}
/*--------------------------------- Tablas dinamicas ventana sencilla ------------------------------------*/
function mostrarDisplay_ventana(id,boton) {
     for(i=1;i<12;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById(boton).setAttribute("onclick","ocultarDisplay_ventana('"+id+"','"+boton+"');");
}

function ocultarDisplay_ventana(id,boton){
    for(i=1;i<12;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById(boton).setAttribute("onclick","mostrarDisplay_ventana('"+id+"','"+boton+"');");
}

/*--------------------------------- Tablas dinamicas ventana 3 hojas ------------------------------------*/
function mostratDisplay_ventana3(id,boton) {
     for(i=1;i<12;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById(boton).setAttribute("onclick","ocultarDisplay_ventana3('"+id+"','"+boton+"');");
}

function ocultarDisplay_ventana3(id,boton){
    for(i=1;i<12;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById(boton).setAttribute("onclick","mostratDisplay_ventana3('"+id+"','"+boton+"');");
}
/*--------------------------------- Tablas dinamicas ventana proyectable sencilla ------------------------------------*/
function mostratDisplay_ventanap_sencilla(id,boton) {
     for(i=1;i<9;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById(boton).setAttribute("onclick","ocultarDisplay_ventanap_sencilla('"+id+"','"+boton+"');");
}

function ocultarDisplay_ventanap_sencilla(id,boton){
    for(i=1;i<9;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById(boton).setAttribute("onclick","mostratDisplay_ventanap_sencilla('"+id+"','"+boton+"');");
}

/*---------------------- Tablas dinamicas puerta 3 pulgadas cuadriculada------------------------------------*/
function mostrarDisplay_puerta3_c(id) {
     for(i=1;i<15;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById("boton_menu").setAttribute("onclick","ocultarDisplay_puerta3_c('"+id+"');");
}

function ocultarDisplay_puerta3_c(id){
    for(i=1;i<15;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById("boton_menu").setAttribute("onclick","mostrarDisplay_puerta3_c('"+id+"');");
}
/*----------------------- Tablas dinamicas puerta 2 pulgadas cuadriculada----------------------------------*/
function mostrarDisplay_puerta2_c(id) {
     for(i=1;i<14;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById("boton_menu").setAttribute("onclick","ocultarDisplay_puerta2_c('"+id+"');");
}

function ocultarDisplay_puerta2_c(id){
    for(i=1;i<14;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById("boton_menu").setAttribute("onclick","mostrarDisplay_puerta2_C('"+id+"');");
}

/*----------------------- Tablas dinamicas puerta 1 3/4 pulgadas cuadriculada-----------------------------------*/
function mostrarDisplay_puerta1_c(id) {
     for(i=1;i<18;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById("boton_menu").setAttribute("onclick","ocultarDisplay_puerta1_c('"+id+"');");
}

function ocultarDisplay_puerta1_c(id){
    for(i=1;i<18;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById("boton_menu").setAttribute("onclick","mostrarDisplay_puerta1_c('"+id+"');");
}

/*---------------------- Tablas dinamicas puerta 3 pulgadas ------------------------------------*/
function mostrarDisplay_puerta3_d(id) {
     for(i=1;i<18;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById("boton_menu").setAttribute("onclick","ocultarDisplay_puerta3_d('"+id+"');");
}

function ocultarDisplay_puerta3_d(id){
    for(i=1;i<18;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById("boton_menu").setAttribute("onclick","mostrarDisplay_puerta3_d('"+id+"');");
}
/*----------------------- Tablas dinamicas puerta 1 3/4 pulgadas -----------------------------------*/
function mostrarDisplay_puerta1_d(id) {
     for(i=1;i<18;i++){
        fila = document.getElementById(id).rows[i].style.display='';
    }
     document.getElementById("boton_menu").setAttribute("onclick","ocultarDisplay_puerta1_d('"+id+"');");
}

function ocultarDisplay_puerta1_d(id){
    for(i=1;i<18;i++){
        fila = document.getElementById(id).rows[i].style.display='none';
    }
     document.getElementById("boton_menu").setAttribute("onclick","mostrarDisplay_puerta1_d('"+id+"');");
}
/*------------------------------------------------------------------------------------------------------------*/
function calcular(medida,s_a,nat,ano_n,elec,blan,lac,mad,a,s_a_s,nat_s,ano_n_s,elec_s,blan_s,lac_s,mad_s){
    var d = document.getElementById("dolar").value;
    var medida_a= document.getElementById(a).value;

    var pre_peso_s_a=s_a*d;
    var pre_m_s_a=pre_peso_s_a/medida;
    var pre_f_s_a=pre_m_s_a*medida_a;
    var a=pre_f_s_a*1.35;
    document.getElementById(s_a_s).innerHTML=a.toFixed(2);

    var pre_peso_nat=nat*d;
    var pre_m_nat=pre_peso_nat/medida;
    var pre_f_nat=pre_m_nat*medida_a;
    var b=pre_f_nat*1.35;
    document.getElementById(nat_s).innerHTML=b.toFixed(2);

    var pre_peso_ano_n=ano_n*d;
    var pre_m_ano_n=pre_peso_ano_n/medida;
    var pre_f_ano_n=pre_m_ano_n*medida_a;
    var c=pre_f_ano_n*1.35;
    document.getElementById(ano_n_s).innerHTML=c.toFixed(2);

    var pre_peso_elec=elec*d;
    var pre_m_elec=pre_peso_elec/medida;
    var pre_f_elec=pre_m_elec*medida_a;
    var z=pre_f_elec*1.35;
    document.getElementById(elec_s).innerHTML=z.toFixed(2);

    var pre_peso_blan=blan*d;
    var pre_m_blan=pre_peso_blan/medida;
    var pre_f_blan=pre_m_blan*medida_a;
    var e=pre_f_blan*1.35;
    document.getElementById(blan_s).innerHTML=e.toFixed(2);

    var pre_peso_lac=lac*d;
    var pre_m_lac=pre_peso_lac/medida;
    var pre_f_lac=pre_m_lac*medida_a;
    var f=pre_f_lac*1.35;
    document.getElementById(lac_s).innerHTML=f.toFixed(2);

    var pre_peso_mad=mad*d;
    var pre_m_mad=pre_peso_mad/medida;
    var pre_f_mad=pre_m_mad*medida_a;
    var g=pre_f_mad*1.35;
    document.getElementById(mad_s).innerHTML=g.toFixed(2);
}
