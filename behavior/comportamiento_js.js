function cambio_tela() {
	alto=document.getElementById("alto_m").value;
	ancho=document.getElementById("ancho_m").value;
	x=document.getElementById("valor_x").value;
	precio=alto*ancho*x;
	document.getElementById("precio_mosquitero").innerHTML=precio.toFixed(2);
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

function fijos(){
    ancho=document.getElementById("ancho_F").value;
    alto=document.getElementById("alto_F").value;

    /*-----LINEA 2"-----*/
    p_bolsas_2=36;
    p_bolsal_2=36;
    p_jun_2=38;
    p_escalonado_2=35;
    p_vinil=10;
    p_silicon=40;
    p_acrilastic=30;
    p_vidrio=177;
    p_claro=180;
    p_tintex=80;
    p_filtrasol=60;

    bs_costo=(ancho*p_bolsas_2);
    document.getElementById("bs_2").innerHTML=bs_costo.toFixed(2);

    bl_costo=((p_bolsal_2*2)*alto);
    document.getElementById("bl_2").innerHTML=bl_costo.toFixed(2);

    junquillo_costo=(p_jun_2*2)*ancho;
    document.getElementById("jun_2").innerHTML=junquillo_costo.toFixed(2);

    escalonado_costo=(ancho*p_escalonado_2);
    document.getElementById("esc_2").innerHTML=escalonado_costo.toFixed(2);

    vinil_costo=(ancho*2)*(alto*2)*p_vinil;
    document.getElementById("vin_2").innerHTML=vinil_costo.toFixed(2);

    document.getElementById("sil_2").innerHTML=p_silicon.toFixed(2);

    document.getElementById("acri_2").innerHTML=p_acrilastic.toFixed(2);

    vidrio_costo=(ancho*alto*p_vidrio);
    document.getElementById("vid_2").innerHTML=vidrio_costo.toFixed(2);

    suma_total_2=bs_costo+bl_costo+junquillo_costo+escalonado_costo+vinil_costo+p_silicon+p_acrilastic+vidrio_costo;
    document.getElementById("suma_total_2").innerHTML=suma_total_2.toFixed(2);

    precio_total_2=suma_total_2*1.7;
    document.getElementById("costo_total_2").innerHTML=precio_total_2.toFixed(2);

    costo_claro_2=(ancho*alto*p_claro+precio_total_2);
    document.getElementById("p_claro_2").innerHTML=costo_claro_2.toFixed(2);

    costo_tintex_2=(ancho*alto*p_tintex+precio_total_2);
    document.getElementById("p_tintex_2").innerHTML=costo_tintex_2.toFixed(2);

    costo_filtrasol_2=(ancho*alto*p_filtrasol+precio_total_2);
    document.getElementById("p_filtrasol_2").innerHTML=costo_filtrasol_2.toFixed(2);

    /*-----LINEA 3"-----*/
    p_bolsas_3=58;
    p_bolsal_3=58;
    p_jun_3=45;
    p_escalonado_3=50;

    costo_bolsas_3=(ancho*p_bolsas_3);
    document.getElementById("bs_3").innerHTML=costo_bolsas_3.toFixed(2);

    costo_bolsal_3=(alto*p_bolsal_3*2);
    document.getElementById("bl_3").innerHTML=costo_bolsal_3.toFixed(2);

    costo_jun_3=(ancho*p_jun_3*2);
    document.getElementById("jun_3").innerHTML=costo_jun_3.toFixed(2);

    costo_escalonado_3=(ancho*p_escalonado_3);
    document.getElementById("esc_3").innerHTML=costo_escalonado_3.toFixed(2);

    vinil_costo=(ancho*2)*(alto*2)*p_vinil;
    document.getElementById("vin_3").innerHTML=vinil_costo.toFixed(2);

    document.getElementById("sil_3").innerHTML=p_silicon.toFixed(2);

    document.getElementById("acri_3").innerHTML=p_acrilastic.toFixed(2);

    vidrio_costo=(ancho*alto*p_vidrio);
    document.getElementById("vid_3").innerHTML=vidrio_costo.toFixed(2);

    suma_total_3=costo_bolsas_3+costo_bolsal_3+costo_jun_3+costo_escalonado_3+vinil_costo+p_silicon+p_acrilastic+vidrio_costo;
    document.getElementById("suma_total_3").innerHTML=suma_total_3.toFixed(2);

    precio_total_3=(suma_total_3*1.7);
    document.getElementById("costo_total_3").innerHTML=precio_total_3.toFixed(2);

    costo_claro_3=(ancho*alto*p_claro+precio_total_3);
    document.getElementById("p_claro_3").innerHTML=costo_claro_3.toFixed(2);

    costo_tintex_3=(ancho*alto*p_tintex+precio_total_3);
    document.getElementById("p_tintex_3").innerHTML=costo_tintex_3.toFixed(2);

    costo_filtrasol_3=(ancho*alto*p_filtrasol+precio_total_3);
    document.getElementById("p_filtrasol_3").innerHTML=costo_filtrasol_3.toFixed(2);
}
function ventana_fija(){
    alto=document.getElementById("alto_VS").value;
    ancho=document.getElementById("ancho_VS").value;

    p_jamba_l1=31;
    p_jambas_l1=31;
    p_riel_l1=22;
    p_chapa_l1=0;
    p_traslape_l1=15;
    p_zoclopta_l1=0;
    p_zoclito_l1=24;
    p_carretillas_l1=13;
    p_jalembutir_l1=10;
    p_silicon=40;
    p_acrilastic=30;
    p_vidrio_l1=90;
    p_vinil=10;

    costo_jamba_l1=(alto*2*p_jamba_l1);
    document.getElementById("jamba_l1-").innerHTML=costo_jamba_l1.toFixed(2);

    costo_jambas_l1=(ancho*1*p_jambas_l1);
    document.getElementById("jambas_l1-").innerHTML=costo_jambas_l1.toFixed(2);

    costo_riel_l1=(ancho*p_riel_l1);
    document.getElementById("riel_l1-").innerHTML=costo_riel_l1.toFixed(2);

    costo_chapa_l1=(alto*2*p_chapa_l1);
    document.getElementById("cchapa_l1-").innerHTML=costo_chapa_l1.toFixed(2);

    costo_traslape_l1=();
}
