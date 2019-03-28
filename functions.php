<?php

function cargandoArchivos(){
    
    //carga bootstrap mediante un cdn. Encolamos los css y js
    wp_enqueue_style('bootstrapCSS', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    
    //en el caso de jquery que es libreria que ya esta cargada en wordpress, por eso no se tiene que poner ninguna url 
    wp_enqueue_script('jquery');
    
    //para que funcione el js de bootstrap hay que cargar primero el jquery por lo que hay
    //que añadir el array llamando a esa accion encolada para que se carge antes (marca la dependencia)
    //se añade tambien la version como parametro, para que cuando se actualice la version esto fuerce
    //la actualizacion
    wp_enqueue_script('bootstrapJS', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js", array('jquery'), '4.3.1', true);
    
    //carga el archivo de estilo cuyo directorio coge mediante la funcion get_style...
    wp_enqueue_style('style', get_stylesheet_uri());
    
    wp_enqueue_style('style', get_);
}

//añade la función cargando Archivos creada justo encima en el momento en el que wp carga css y js
add_action('wp_enqueue_scripts', 'cargandoArchivos');

//Nueva Navegacion

register_nav_menus(array(
    'menu_principal' => __('Menu Principal', 'Tema QTZ Marketing')
));

