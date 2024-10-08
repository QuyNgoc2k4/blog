<?php
// Bảo vệ tệp tránh bị truy cập trực tiếp
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header(); // Gọi header từ theme cha (Flatsome)
?>

<div class="container">
    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">

                    <!-- Thanh Breadcrumb Động -->
                    <nav class="breadcrumb">
                        <a href="<?php echo home_url(); ?>">Trang chủ</a> &gt;

                        <?php
                        if (is_home()) {
                            echo 'Trang tin tức';
                        } elseif (is_category() || is_single()) {
                        ?>
                            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Trang tin tức</a> &gt;

                        <?php
                            if (is_category()) {
                                echo single_cat_title('', false);
                            }

                            if (is_single()) {
                                $category = get_the_category();
                                if ($category) {
                                    $first_category = $category[0];
                                    echo '<a href="' . get_category_link($first_category->term_id) . '">' . $first_category->name . '</a> &gt; ';
                                }
                                the_title();
                            }
                        } elseif (is_page()) {
                            the_title();
                        }
                        ?>
                    </nav>

                    <!-- Nội dung trang -->
                    <div class="row row-nav_blog" id="row-352458429">
                        <div id="col-183531185" class="col filter-scroll nav-blog-1 small-12 large-12">
                            <div class="col-inner">
                                <p><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Nổi bật</a> |</p>
                                <p><a href="<?php echo get_category_link(get_category_by_slug('tin-tuc-ki-thuat')->term_id); ?>">Tin tức kỹ thuật</a></p>
                                <p><a href="<?php echo get_category_link(get_category_by_slug('cam-nang-thiet-ke')->term_id); ?>">Cẩm nang thiết kế</a></p>
                                <p><a href="<?php echo get_category_link(get_category_by_slug('khuyen-mai-su-kien')->term_id); ?>">Khuyến mãi – Sự kiện</a></p>
                                <p><a href="<?php echo get_category_link(get_category_by_slug('phong-thuy')->term_id); ?>">Phong thủy</a></p>
                                <p><a href="<?php echo get_category_link(get_category_by_slug('phong-thuy')->term_id); ?>">Hỏi đáp</a></p>
                            </div>
                        </div>

                        <div id="col-1347533027" class="col small-12 large-12">
                            <div class="col-inner">
                                <div class="is-border" style="border-color: rgb(0, 0, 0); border-width: 0px 0px 1px 0px;"></div>
                            </div>

                            <style>
                                #col-1347533027>.col-inner {
                                    margin: -20px 0px 0px 0px;
                                }
                            </style>
                        </div>
                    </div>

                    <div class="row" id="row-692609324">
                        <div id="col-1633488503" class="col small-12 large-12">
                            <div class="col-inner">
                                <h2>
                                    <?php
                                    // Kiểm tra tiêu đề hiển thị
                                    if (is_home()) {
                                        echo 'Bài viết mới nhất';
                                    } elseif (is_category()) {
                                        single_cat_title();
                                    } elseif (is_single()) {
                                        $category = get_the_category();
                                        if ($category) {
                                            echo $category[0]->name;
                                        }
                                    } else {
                                        echo 'Nổi bật';
                                    }
                                    ?>
                                </h2>
                            </div>

                            <style>
                                #col-1633488503>.col-inner {
                                    margin: 0px 0px -12px 0px;
                                }
                            </style>
                        </div>
                    </div>

                    <div class="row" id="row-296880263">
                        <!-- Hiển thị bài viết mới nhất -->
                        <?php
                        // Truy vấn bài viết cho trang tin tức hoặc trang danh mục
                        if (is_home()) {
                            // Truy vấn 1 bài viết mới nhất cho trang tin tức
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 1,
                            );
                        } elseif (is_category()) {
                            // Truy vấn 1 bài viết mới nhất thuộc danh mục hiện tại
                            $category = get_queried_object();
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 1,
                                'category_name' => $category->slug,
                            );
                        }

                        // Truy vấn bài viết
                        $latest_post = new WP_Query($args);

                        // Kiểm tra nếu có bài viết
                        if ($latest_post->have_posts()) :
                            while ($latest_post->have_posts()) : $latest_post->the_post();
                        ?>

                                <div id="col-<?php echo get_the_ID(); ?>" class="col medium-6 small-12 large-6">
                                    <div class="col-inner">
                                        <div class="box has-hover post-<?php echo get_the_ID(); ?> has-hover box-text-bottom">
                                            <div class="box-image img-post-1" style="border-radius: 3%; height: 384px; overflow: hidden;">
                                                <a href="<?php the_permalink(); ?>">
                                                    <div class="">
                                                        <img fetchpriority="high"
                                                            decoding="async"
                                                            width="800"
                                                            height="384"
                                                            src="<?php the_post_thumbnail_url('full'); ?>"
                                                            class="attachment- size-"
                                                            alt="<?php the_title(); ?>"
                                                            sizes="(max-width: 800px) 100vw, 800px"
                                                            style="width: 100%; height: 100%; object-fit: cover;" />
                                                    </div>
                                                </a>
                                            </div>
                                            <style>
                                                .img-post-1 img {
                                                    height: 384px !important;
                                                    object-fit: cover;
                                                }
                                            </style>
                                            <div class="box-text text-center">
                                                <div class="box-text-inner">
                                                    <div class="icon-box featured-box icon-post-actor icon-box-left text-left">
                                                        <div class="icon-box-img" style="width: 60px">
                                                            <div class="icon">
                                                                <div class="icon-inner">
                                                                    <?php echo get_avatar(get_the_author_meta('ID'), 60); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="icon-box-text last-reset">
                                                            <h3><?php the_title(); ?></h3>
                                                            <p><?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?></p>
                                                            <p><?php echo get_the_date(); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_author(); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo '<p>Không có bài viết nào.</p>';
                        endif;
                        ?>

                        <div id="col-750233409" class="col medium-6 small-12 large-6">
                            <div class="col-inner">
                                <div class="row" id="row-1209032081">
                                    <?php
                                    // Bỏ qua bài viết đầu tiên và hiển thị 4 bài viết mới nhất còn lại
                                    if (is_home()) {
                                        // Truy vấn 4 bài viết mới nhất ở trang tin tức
                                        $args_4_posts = array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 4,  // Lấy 4 bài viết mới nhất
                                            'offset' => 1,          // Bỏ qua bài viết đầu tiên
                                        );
                                    } elseif (is_category()) {
                                        // Truy vấn 4 bài viết mới nhất thuộc danh mục hiện tại, bỏ qua bài viết đầu tiên
                                        $category = get_queried_object();
                                        $args_4_posts = array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 4,  // Lấy 4 bài viết mới nhất
                                            'offset' => 1,          // Bỏ qua bài viết đầu tiên
                                            'category_name' => $category->slug,  // Lấy từ danh mục hiện tại
                                        );
                                    }

                                    // Truy vấn 4 bài viết mới nhất trừ bài đầu tiên
                                    $four_latest_posts = new WP_Query($args_4_posts);

                                    // Kiểm tra nếu có bài viết
                                    if ($four_latest_posts->have_posts()) :
                                        while ($four_latest_posts->have_posts()) : $four_latest_posts->the_post();
                                    ?>

                                            <div id="col-<?php echo get_the_ID(); ?>" class="col medium-6 small-12 large-6" style="margin-bottom: -40px;">
                                                <div class="col-inner">
                                                    <div class="box has-hover post-<?php echo get_the_ID(); ?> has-hover box-text-bottom">
                                                        <div class="box-image img-post-2" style="border-radius: 3%; height: 182px; overflow: hidden;">
                                                            <a href="<?php the_permalink(); ?>">
                                                                <div class="">
                                                                    <img fetchpriority="high"
                                                                        decoding="async"
                                                                        width="800"
                                                                        height="auto"
                                                                        src="<?php the_post_thumbnail_url('full'); ?>"
                                                                        class="attachment- size-"
                                                                        alt="<?php the_title(); ?>"
                                                                        sizes="(max-width: 800px) 100vw, 800px"
                                                                        style="width: 100%; object-fit: cover;" />
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <style>
                                                            .img-post-2 img {
                                                                height: 182px;
                                                                object-fit: cover;
                                                            }
                                                        </style>
                                                        <div class="box-text text-center">
                                                            <div class="box-text-inner">
                                                                <div class="icon-box featured-box icon-post-actor icon-box-left text-left">
                                                                    <div class="icon-box-img" style="width: 60px">
                                                                        <div class="icon">
                                                                            <div class="icon-inner">
                                                                                <?php echo get_avatar(get_the_author_meta('ID'), 60); ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="icon-box-text last-reset">
                                                                        <h3 style="font-size: 16px;"><?php the_title(); ?></h3>
                                                                        <p><?php echo get_the_date(); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_author(); ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                .box-text-inner h3 {
                                                    display: -webkit-box;
                                                    -webkit-line-clamp: 2;
                                                    /* Giới hạn 2 dòng */
                                                    -webkit-box-orient: vertical;
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    white-space: normal;
                                                    line-height: 1.4em;
                                                    /* Điều chỉnh chiều cao dòng phù hợp */
                                                    max-height: 2.8em;
                                                    /* 2 dòng x 1.4em */
                                                }
                                            </style>

                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    else :
                                        echo '<p>Không có bài viết nào.</p>';
                                    endif;
                                    ?> 

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer(); // Gọi footer từ theme cha (Flatsome)
?>
