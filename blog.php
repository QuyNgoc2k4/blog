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
                        // Kiểm tra xem có phải là trang blog (trang tin tức)
                        if (is_home()) {
                            echo 'Trang tin tức';
                        }
                        // Nếu là trang danh mục hoặc bài viết đơn lẻ
                        elseif (is_category() || is_single()) {
                        ?>
                            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Trang tin tức</a> &gt;

                        <?php
                            // Nếu là trang danh mục
                            if (is_category()) {
                                echo single_cat_title('', false);
                            }

                            // Nếu là bài viết đơn lẻ
                            if (is_single()) {
                                $category = get_the_category();
                                if ($category) {
                                    $first_category = $category[0];
                                    echo '<a href="' . get_category_link($first_category->term_id) . '">' . $first_category->name . '</a> &gt; ';
                                }
                                the_title();
                            }
                        }
                        // Nếu là trang tĩnh khác
                        elseif (is_page()) {
                            the_title();
                        }
                        ?>
                    </nav>



                    <!-- Nội dung trang -->
                    <div class="row row-nav_blog" id="row-352458429">
                        <div id="col-183531185" class="col filter-scroll nav-blog-1 small-12 large-12">
                            <div class="col-inner">
                                <p>
                                    <a href="https://nhatamviet.com/trang-tin-tuc/">Nổi bật</a> |
                                </p>
                                <p>
                                    <a href="https://nhatamviet.com/chuyen-muc/tin-tuc-ki-thuat/">Tin tức kỹ thuật</a>
                                </p>
                                <p>
                                    <a href="https://nhatamviet.com/chuyen-muc/cam-nang-thiet-ke/">Cẩm nang thiết kế</a>
                                </p>
                                <p>
                                    <a href="https://nhatamviet.com/chuyen-muc/khuyen-mai-su-kien/">Khuyến mãi – Sự kiện</a>
                                </p>
                                <p>
                                    <a href="https://nhatamviet.com/chuyen-muc/cam-nang-thiet-ke/">Cẩm nang thiết kế</a>
                                </p>
                                <p>
                                    <a href="https://nhatamviet.com/chuyen-muc/phong-thuy/">Hỏi đáp</a>
                                </p>
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
                                    // Lấy URL hiện tại
                                    $current_url = home_url(add_query_arg(array(), $wp->request));

                                    // Kiểm tra nếu người dùng đang truy cập đường dẫn Nổi Bật
                                    if ($current_url == 'https://nhatamviet.com/trang-tin-tuc/') {
                                        echo 'Nổi Bật';
                                    }
                                    // Kiểm tra nếu là trang danh mục
                                    elseif (is_category()) {
                                        single_cat_title();
                                    }
                                    // Kiểm tra nếu là trang bài viết đơn lẻ, hiển thị tên danh mục đầu tiên của bài viết
                                    elseif (is_single()) {
                                        $category = get_the_category();
                                        if ($category) {
                                            echo $category[0]->name;
                                        }
                                    }
                                    // Mặc định cho các trang khác
                                    else {
                                        echo 'Nổi Bật';
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

<!-- Hiển thị 5 bài viết mới nhất tùy theo danh mục được mở -->

                    <div class="row" id="row-296880263">
                        <!-- bài vi -->
                        <div id="col-546039295" class="col medium-6 small-12 large-6">
                            <div class="col-inner">
                                <div
                                    class="box has-hover post-1-nha-tam has-hover box-text-bottom">
                                    <div class="box-image" style="border-radius: 3%">
                                        <a href="link-bai-viet-1">
                                            <div class="">
                                                <img
                                                    fetchpriority="high"
                                                    decoding="async"
                                                    width="800"
                                                    height="456"
                                                    src="link ảnh bài viết 1"
                                                    class="attachment- size-"
                                                    alt=""
                                                 
                                                    sizes="(max-width: 800px) 100vw, 800px" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="box-text text-center">
                                        <div class="box-text-inner">
                                            <div
                                                class="icon-box featured-box icon-post-actor icon-box-left text-left">
                                                <div class="icon-box-img" style="width: 60px">
                                                    <div class="icon">
                                                        <div class="icon-inner">
                                                            <img
                                                                decoding="async"
                                                                width="300"
                                                                height="200"
                                                                src="link ảnh tác giả"
                                                                class="attachment-medium size-medium"
                                                                alt=""

                                                                sizes="(max-width: 300px) 100vw, 300px" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icon-box-text last-reset">
                                                    <h3>Tiêu đề bài viết</h3>
                                                    <p>
                                                        hiển thị mô tả bài viết khoảng 4 dòng và ẩn ...
                                                        (ví dụ
                                                        Bạn đang tìm kiếm một chiếc lavabo vừa đẹp mắt vừa
                                                        tiện nghi cho không gian nhà tắm của mình? Việc lựa
                                                        chọn chiều cao lavabo phù hợp không chỉ ảnh hưởng đến
                                                        tính thẩm mỹ mà còn trực tiếp tác động đến trải nghiệm
                                                        sử dụng hàng ngày. ài viết này sẽ giúp bạn hiểu rõ hơn
                                                        về tầm…)
                                                    </p>
                                                    <p>
                                                        Thời gian&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        &nbsp;tên tác giả
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="col-750233409" class="col medium-6 small-12 large-6">
                            <div class="col-inner">
                                <div class="row" id="row-1209032081">
                                    <!-- 4 bài viết tiếp theo -->
                                    <div id="col-1152827832" class="col medium-6 small-12 large-6">
                                        <div class="col-inner">
                                            <div
                                                class="box has-hover post-1-nha-tam has-hover box-text-bottom">
                                                <div class="box-image" style="border-radius: 3%">
                                                    <a href="link-bai-viet-2">
                                                        <div class="">
                                                            <img
                                                                fetchpriority="high"
                                                                decoding="async"
                                                                width="800"
                                                                height="456"
                                                                src="ảnh bài viết 2"
                                                                class="attachment- size-"
                                                                alt=""
                                                                
                                                                sizes="(max-width: 800px) 100vw, 800px" />
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-text text-center">
                                                    <div class="box-text-inner">
                                                        <div
                                                            class="icon-box featured-box icon-post-actor icon-box-left text-left">
                                                            <div class="icon-box-img" style="width: 60px">
                                                                <div class="icon">
                                                                    <div class="icon-inner">
                                                                        <img
                                                                            decoding="async"
                                                                            width="300"
                                                                            height="200"
                                                                            src="ảnh tác giả"
                                                                            class="attachment-medium size-medium"
                                                                            alt=""

                                                                            sizes="(max-width: 300px) 100vw, 300px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box-text last-reset">
                                                                <div id="text-2932897077" class="text">
                                                                    <h3>tiêu đề bài viết</h3>
                                                                    <p>
                                                                        Thời gian&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                        &nbsp; &nbsp;tên tác giả
                                                                    </p>

                                                                    <style>
                                                                        #text-2932897077 {
                                                                            font-size: 0.75rem;
                                                                            line-height: 1.3;
                                                                            text-align: left;
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            #col-1152827832>.col-inner {
                                                margin: 0px 0px -30px 0px;
                                            }
                                        </style>
                                    </div>

                                    <div id="col-1448986305" class="col medium-6 small-12 large-6">
                                        <div class="col-inner">
                                            <div
                                                class="box has-hover post-1-nha-tam has-hover box-text-bottom">
                                                <div class="box-image" style="border-radius: 3%">
                                                    <a href="link-bai-viet-2">
                                                        <div class="">
                                                            <img
                                                                fetchpriority="high"
                                                                decoding="async"
                                                                width="800"
                                                                height="456"
                                                                src="ảnh bài viết 3"
                                                                class="attachment- size-"
                                                                alt=""
                                                                
                                                                sizes="(max-width: 800px) 100vw, 800px" />
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-text text-center">
                                                    <div class="box-text-inner">
                                                        <div
                                                            class="icon-box featured-box icon-post-actor icon-box-left text-left">
                                                            <div class="icon-box-img" style="width: 60px">
                                                                <div class="icon">
                                                                    <div class="icon-inner">
                                                                        <img
                                                                            decoding="async"
                                                                            width="300"
                                                                            height="200"
                                                                            src="ảnh tác giả"
                                                                            class="attachment-medium size-medium"
                                                                            alt=""

                                                                            sizes="(max-width: 300px) 100vw, 300px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box-text last-reset">
                                                                <div id="text-3924096638" class="text">
                                                                    <h3>Tiêu đề bài viết</h3>
                                                                    <p>
                                                                        Thời gian&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                        &nbsp; &nbsp;tên tác giả
                                                                    </p>

                                                                    <style>
                                                                        #text-3924096638 {
                                                                            font-size: 0.75rem;
                                                                            line-height: 1.3;
                                                                            text-align: left;
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            #col-1448986305>.col-inner {
                                                margin: 0px 0px -30px 0px;
                                            }
                                        </style>
                                    </div>

                                    <div id="col-2106884186" class="col medium-6 small-12 large-6">
                                        <div class="col-inner">
                                            <div
                                                class="box has-hover post-1-nha-tam has-hover box-text-bottom">
                                                <div class="box-image" style="border-radius: 3%">
                                                    <a href="link-bai-viet-2">
                                                        <div class="">
                                                            <img
                                                                fetchpriority="high"
                                                                decoding="async"
                                                                width="800"
                                                                height="456"
                                                                src="ảnh bài viết 4"
                                                                class="attachment- size-"
                                                                alt=""
                                                                
                                                                sizes="(max-width: 800px) 100vw, 800px" />
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-text text-center">
                                                    <div class="box-text-inner">
                                                        <div
                                                            class="icon-box featured-box icon-post-actor icon-box-left text-left">
                                                            <div class="icon-box-img" style="width: 60px">
                                                                <div class="icon">
                                                                    <div class="icon-inner">
                                                                        <img
                                                                            decoding="async"
                                                                            width="300"
                                                                            height="200"
                                                                            src="ảnh tác giả"
                                                                            class="attachment-medium size-medium"
                                                                            alt=""
                                                                            
                                                                            sizes="(max-width: 300px) 100vw, 300px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box-text last-reset">
                                                                <div id="text-682131834" class="text">
                                                                    <h3>tiêu đề bài viết</h3>
                                                                    <p>
                                                                        Thời gian&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                        &nbsp; &nbsp;tên tác giả
                                                                    </p>

                                                                    <style>
                                                                        #text-682131834 {
                                                                            font-size: 0.75rem;
                                                                            line-height: 1.3;
                                                                            text-align: left;
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="col-1683083942" class="col medium-6 small-12 large-6">
                                        <div class="col-inner">
                                            <div
                                                class="box has-hover post-1-nha-tam has-hover box-text-bottom">
                                                <div class="box-image" style="border-radius: 3%">
                                                    <a href="link-bai-viet-2">
                                                        <div class="">
                                                            <img
                                                                fetchpriority="high"
                                                                decoding="async"
                                                                width="800"
                                                                height="456"
                                                                src="ảnh bài viết 5"
                                                                class="attachment- size-"
                                                                alt=""
                                                               
                                                                sizes="(max-width: 800px) 100vw, 800px" />
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-text text-center">
                                                    <div class="box-text-inner">
                                                        <div
                                                            class="icon-box featured-box icon-post-actor icon-box-left text-left">
                                                            <div class="icon-box-img" style="width: 60px">
                                                                <div class="icon">
                                                                    <div class="icon-inner">
                                                                        <img
                                                                            decoding="async"
                                                                            width="300"
                                                                            height="200"
                                                                            src="ảnh tác giả"
                                                                            class="attachment-medium size-medium"
                                                                            alt=""
                                                                            
                                                                            sizes="(max-width: 300px) 100vw, 300px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box-text last-reset">
                                                                <div id="text-1973668233" class="text">
                                                                    <h3>tiêu đề bài viết</h3>
                                                                    <p>
                                                                        Thời gian&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                        &nbsp; &nbsp;tên tác giả
                                                                    </p>

                                                                    <style>
                                                                        #text-1973668233 {
                                                                            font-size: 0.75rem;
                                                                            line-height: 1.3;
                                                                            text-align: left;
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
<!-- Kết thúc Hiển thị 5 bài viết mới nhất tùy theo danh mục được mở -->
                </div>
            </div>
        </div>
    </div>

</div>

<?php
get_footer(); // Gọi footer từ theme cha (Flatsome)
?>