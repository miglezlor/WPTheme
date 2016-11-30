<?php
    get_header();
    
?>
<h2>Menu</h2>
<?php wp_nav_menu(
        array('menu' => 'BestMenuEU')
    );?>

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

<h2>Menu2</h2>
<?php wp_nav_menu(
        array('menu' => 'WorstMenuEU')
    );?>

<?php get_sidebar('sidebar.php'); ?>

<?php
    get_footer();
?>