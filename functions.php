  <?php  function registrar_sidebar(){  
      register_sidebar(array(  
       'name' => 'Sidebar ejemplo',  
       'id' => 'sidebar-1',  
       'description' => 'Descripción de ejemplo',  
       'class' => 'sidebar',  
       'before_widget' => '<aside id="%1$s" class="widget %2$s">',  
       'after_widget' => '</aside>',  
       'before_title' => '<h2 class="widget-title">',  
       'after_title' => '</h2>',  
      ));  
    }  
    add_action( 'widgets_init', 'registrar_sidebar');  
    
    ?>