<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </header>

  <main>
    <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          the_content();
        endwhile;
      else :
        echo '<p>No content found</p>';
      endif;
    ?>
  </main>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> - My Resume</p>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
