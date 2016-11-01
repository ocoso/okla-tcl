<div class="feature-alm">
<div class="feature-image">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
</div>
<div class="feature-content">
<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>
<span class="excerpt"><?php the_excerpt(10); ?></span>
<span class="category"><?php the_category(); ?></span>
</div>
</div>