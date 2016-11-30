<?php
    get_header();
    
?>
<div id="menu">
<h2>Menu</h2>
<?php wp_nav_menu(
        array('menu' => 'BestMenuEU')
    );?>
</div>
    
<div id="loop">

<h2>Entradas</h2>
<?php 
if ( have_posts() ){
	while ( have_posts() ){
		the_post(); ?>
		<h2 id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
    <?php the_title(); ?></a></h2>
    <small><?php the_time('F jS, Y') ?> <a> by </a> <b><?php the_author() ?></b> </small>
		<?php
		the_content();
	}
}
echo "---Listo---";
    
?>
</div>
<div id="sidebar">
    <?php get_sidebar('sidebar.php'); ?>
</div>


<?php get_footer();?>