<?php get_header(); ?>
    <main>
        <section class="mainVisual">
                <ul class="sp-menu">
                    <li>Menu01</li>
                    <li>Menu02</li>
                    <li>Menu03</li>
                    <li>Menu04</li>
                </ul>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_pc.png" alt="" class="visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_sp.png" alt="" class="sp-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_pc.png" alt="" class="text-img">
            <div class="subtitle">
                <p>
                    進化し続ける「街」アメリカンビレッジマガジン
                </p>
            </div>
            <div class="sp-subtitle">
                <p>
                    進化し続ける「街」<br>アメリカンビレッジマガジン
                </p>
            </div>
        </section>
        <div class="section">
            <h1>Latest Articles</h1>
            <div class="contents">
                <?php // ブログの一覧を表示する start 
                ?>
                <?php if (have_posts()):
                    while (have_posts()):
                    the_post(); ?>
                        <!-- <article class="blog-list__list-item"> -->
                        <a href="<?php the_permalink(); ?>" class="box">
                            <?php // アイキャッチを表示させる start 
                            ?>
                            <!-- <div class="blog-item__thumbnail"> -->
                            <?php //if (has_post_thumbnail()) : ?>
                                <img class="thumbnail" src="<?php the_post_thumbnail_url('large'); ?>">
                            <?php //endif; ?>
                            <!-- </div> -->
                            <?php // アイキャッチを表示させる end 
                            ?>
                            <!-- <div class="blog-item__content"> -->
                            <?php //日付を表示させる　start
                            ?>
                            <p class="dates"><?php echo get_the_date(); ?></p>
                            <?php // タイトルを表示させる start 
                            ?>
                            <p class="text"><?php the_title(); ?></p>
                            <?php // タイトルを表示させる end 
                            ?>
                            <?php // 抜粋を表示させる start 
                            ?>
                            <!-- <h3 class="blog-item__read"><?php the_excerpt(); ?></h3> -->
                            <?php // 抜粋を表示させる end 
                            ?>
                            <div class="btn_box">
                                <span class="border">READ MORE</span>
                            </div>
                            <!-- </div> -->
                        </a>
                        <!-- </article> -->
                <?php endwhile; endif; ?>
                <?php // ブログの一覧を表示する end 
                ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>