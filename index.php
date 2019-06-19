<?php get_header(); ?>
 
    
        <main>
            <!-- ここにトップの画像など置く -->
            <div class="logo">
                <img class="logoimg" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
            </div>

            <div class="americanvillage">
                <img class="americanvillageimg"src="<?php header_image(); ?>" alt="">
                <img class="americanvillageimg-sp"src="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" alt="">
                <img class="textsp" src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="">
            </div>
           
           <div class="text">
                <img class="textpc" src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="">
            </div>

            <div class="phrase-box">
                <p class="phrase"><span>進化し続ける「街」</span><span>アメリカンビレッジマガジン</span></p>
            </div>
        </main>
    
        <section>
            <h2>Latest&nbsp;Articles</h2>

            <ul>
                <?php while (have_posts()):the_post(); ?>
                    <li class="article">

                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <?php else: ?>
                            <img src="http://placehold.jp/300x300.png?text=No Image"alt="">
                        <?php endif; ?>
                        
                        <p class="post-date"><?php the_date("Y / n/ j"); ?></p>
                        <p class="post-content"><?php the_title(); ?></p>
                        <p class="read-more"><a href="<?php the_permalink(); ?>">READ&nbsp;MORE</a></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        </section>
        <?php get_footer(); ?>
        