<!-- >>>>>>>>>>>>>>>  Backup Code: -->

<?php
$per_row = (empty($per_row)) ? 3 : $per_row;

$classes = array(
	'stm_loop__single stm_loop__grid stm_loop__single_style1 no_deco stm_loop__grid_' . $per_row,
	'ttc_h ttc'
);

$image = pearl_get_VC_post_img_safe(get_the_ID(), $img_size);

?>


<a href="<?php the_permalink(); ?>"
	<?php post_class(implode(' ', $classes)); ?>
   title="<?php the_title_attribute(); ?>">
    <div class="stm_service__single">
        <div class="stm_service__image">
			<?php echo pearl_sanitize_image($image); ?>
        </div>
        <div class="stm_service__title">
            <span class="mbc_a">
		Hello Title	<?php the_title(); ?>
            </span>
        </div>
        <div class="stm_service__overlay"></div>
    </div>
</a>

<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->









<?php

$per_row = (empty($per_row)) ? 3 : $per_row;

$classes = array(
	'stm_loop__single stm_loop__grid stm_loop__single_style1 no_deco stm_loop__grid_' . $per_row,
	'ttc_h ttc'
);


if ( has_post_thumbnail() ) {
	$image = get_the_post_thumbnail( get_the_ID(), 'medium' ); // or $img_size if defined
} else {
	$image = '/wp-content/uploads/2019/06/4.jpeg'; // or set a fallback image here
}


$image = pearl_get_VC_post_img_safe(get_the_ID(), $img_size);

?>

<a href="<?php the_permalink(); ?>"
	<?php post_class(implode(' ', $classes)); ?>
   title="<?php the_title_attribute(); ?>">
    <div class="stm_service__single">
        <div class="stm_service__image">
			<?php echo $image; ?>
			<?php echo get_the_post_thumbnail_url; ?>
        </div>
        <div class="stm_service__title">
            <span class="mbc_a">
		Hello Title	<?php the_title(); ?>
            </span>
        </div>
        <div class="stm_service__overlay"></div>
    </div>
</a>
