<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main" role="main" class="single row">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article class="page" id="post-<?php the_ID(); ?>">

    <?php edit_post_link('Update <i>' . get_the_title() . '</i>', '<p>', '</p>'); ?>

    <header class="columns four">
      <h2><?php the_title(); ?></h2>
    </header>

    <div class="page columns eight">
      <div class="content">
        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
    </div>
  
  </article>
  <?php endwhile; endif; ?>

  <!--section class="columns eight">
  <?php //comments_template(); ?>
  </section-->

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>