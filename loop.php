<?php while(have_posts()):the_post(); ?>
  <article>
    <h2 class="article-title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <ul class="meta">
      <li><?php the_time('Y/m/d'); ?></li>
      <?php if (!is_category()) { ?>
        <?php
          $cat = get_the_category();
          $catname = $cat[0]->cat_name;
        ?>
        <li><?php echo $catname; ?></li>
      <?php } ?>
    </ul>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <div class="text">
      <?php
        if (mb_strlen(strip_tags(get_the_content()), 'UTF-8') > 80) {
          $content = mb_substr(strip_tags(get_the_content()), 0, 80, 'UTF-8');
          echo $content . '…';
        } else {
          echo strip_tags(get_the_content());
        }
      ?>
    </div>
    <div class="readmore"><a href="<?php the_permalink(); ?>">READ MORE</a></div>
  </article>
<?php endwhile; ?>
