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



                    <div class="row" id="row-296880263">
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
                                                    src="https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg"
                                                    class="attachment- size-"
                                                    alt=""
                                                    srcset="
                          https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg         800w,
                          https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-300x171.jpg 300w,
                          https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-768x438.jpg 768w,
                          https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-509x290.jpg 509w
                        "
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
                                                                src="https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-300x200.jpg"
                                                                class="attachment-medium size-medium"
                                                                alt=""
                                                                srcset="
                                https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-300x200.jpg 300w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-509x339.jpg 509w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi.jpg         600w
                              "
                                                                sizes="(max-width: 300px) 100vw, 300px" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icon-box-text last-reset">
                                                    <h3>Tên bài viết 1</h3>
                                                    <p>
                                                        Bạn đang tìm kiếm một chiếc lavabo vừa đẹp mắt vừa
                                                        tiện nghi cho không gian nhà tắm của mình? Việc lựa
                                                        chọn chiều cao lavabo phù hợp không chỉ ảnh hưởng đến
                                                        tính thẩm mỹ mà còn trực tiếp tác động đến trải nghiệm
                                                        sử dụng hàng ngày. ài viết này sẽ giúp bạn hiểu rõ hơn
                                                        về tầm…
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
                                                                src="https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg"
                                                                class="attachment- size-"
                                                                alt=""
                                                                srcset="
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg         800w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-300x171.jpg 300w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-768x438.jpg 768w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-509x290.jpg 509w
                              "
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
                                                                            src="https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-300x200.jpg"
                                                                            class="attachment-medium size-medium"
                                                                            alt=""
                                                                            srcset="
                                      https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-300x200.jpg 300w,
                                      https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-509x339.jpg 509w,
                                      https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi.jpg         600w
                                    "
                                                                            sizes="(max-width: 300px) 100vw, 300px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box-text last-reset">
                                                                <div id="text-2932897077" class="text">
                                                                    <h3>Tên bài viết 1</h3>
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
                                                                src="https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg"
                                                                class="attachment- size-"
                                                                alt=""
                                                                srcset="
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg         800w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-300x171.jpg 300w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-768x438.jpg 768w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-509x290.jpg 509w
                              "
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
                                                                            src="https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-300x200.jpg"
                                                                            class="attachment-medium size-medium"
                                                                            alt=""
                                                                            srcset="
                                      https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-300x200.jpg 300w,
                                      https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-509x339.jpg 509w,
                                      https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi.jpg         600w
                                    "
                                                                            sizes="(max-width: 300px) 100vw, 300px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box-text last-reset">
                                                                <div id="text-3924096638" class="text">
                                                                    <h3>Tên bài viết 1</h3>
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
                                                                src="https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg"
                                                                class="attachment- size-"
                                                                alt=""
                                                                srcset="
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg         800w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-300x171.jpg 300w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-768x438.jpg 768w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-509x290.jpg 509w
                              "
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
                                                                            src="https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-300x200.jpg"
                                                                            class="attachment-medium size-medium"
                                                                            alt=""
                                                                            srcset="
                                      https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-300x200.jpg 300w,
                                      https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-509x339.jpg 509w,
                                      https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi.jpg         600w
                                    "
                                                                            sizes="(max-width: 300px) 100vw, 300px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box-text last-reset">
                                                                <div id="text-682131834" class="text">
                                                                    <h3>Tên bài viết 1</h3>
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
                                                                src="https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg"
                                                                class="attachment- size-"
                                                                alt=""
                                                                srcset="
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg         800w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-300x171.jpg 300w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-768x438.jpg 768w,
                                https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-509x290.jpg 509w
                              "
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
                                                                            src="https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-300x200.jpg"
                                                                            class="attachment-medium size-medium"
                                                                            alt=""
                                                                            srcset="
                                      https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-300x200.jpg 300w,
                                      https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi-509x339.jpg 509w,
                                      https://nhatamviet.com/wp-content/uploads/2024/10/2025-menh-gi.jpg         600w
                                    "
                                                                            sizes="(max-width: 300px) 100vw, 300px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box-text last-reset">
                                                                <div id="text-1973668233" class="text">
                                                                    <h3>Tên bài viết 1</h3>
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
                    <div class="row" id="row-331505517">
                        <div id="col-1289728645" class="col medium-8 small-12 large-8">
                            <div class="col-inner">
                                <div class="row" id="row-451792851">
                                    <div id="col-520293063" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div
                                                class="is-border"
                                                style="
                        border-color: rgb(0, 0, 0);
                        border-width: 0px 0px 1px 0px;
                        margin: 0px 0px 36px 0px;
                      "></div>

                                            <div class="row" id="row-666480837">
                                                <div
                                                    id="col-1958819073"
                                                    class="col medium-4 small-4 large-4">
                                                    <div class="col-inner">
                                                        <div
                                                            class="img has-hover img-post-2 x md-x lg-x y md-y lg-y"
                                                            id="image_310385690">
                                                            <div class="img-inner dark">
                                                                <img
                                                                    decoding="async"
                                                                    width="800"
                                                                    height="456"
                                                                    src="https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg"
                                                                    class="attachment-large size-large"
                                                                    alt=""
                                                                    srcset="
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg         800w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-300x171.jpg 300w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-768x438.jpg 768w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-509x290.jpg 509w
                                "
                                                                    sizes="(max-width: 800px) 100vw, 800px" />
                                                            </div>

                                                            <style>
                                                                #image_310385690 {
                                                                    width: 100%;
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    id="col-1589405985"
                                                    class="col medium-8 small-8 large-8">
                                                    <div class="col-inner">
                                                        <div
                                                            id="text-3728308929"
                                                            class="text content-tittle-post">
                                                            <h3
                                                                class="mb-1 content-description-meta-2 fw-6 fs-18">
                                                                Hướng dẫn cách thay bộ xả bồn cầu 2 nút nhấn đơn
                                                                giản tại nhà
                                                            </h3>
                                                            <p class="content-description-meta fs-16">
                                                                Thay thế bộ xả bồn cầu 2 nút nhấn là giải pháp
                                                                hiệu quả để khắc phục những sự cố này. Với hướng
                                                                dẫn chi tiết dưới đây, bạn hoàn toàn có thể tự tay
                                                                thay thế bộ xả tại nhà mà không cần gọi thợ, tiết
                                                                kiệm cả thời gian và chi phí.
                                                            </p>
                                                            <p>Thời gian&nbsp; &nbsp; &nbsp; Tác giả</p>

                                                            <style>
                                                                #text-3728308929 {
                                                                    font-size: 0.75rem;
                                                                }

                                                                @media (min-width: 550px) {
                                                                    #text-3728308929 {
                                                                        font-size: 0.75rem;
                                                                    }
                                                                }

                                                                @media (min-width: 850px) {
                                                                    #text-3728308929 {
                                                                        font-size: 1rem;
                                                                    }
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            #col-520293063>.col-inner {
                                                margin: 0px 0px -50px 0px;
                                            }
                                        </style>
                                    </div>

                                    <div id="col-159475831" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div
                                                class="is-border"
                                                style="
                        border-color: rgb(0, 0, 0);
                        border-width: 0px 0px 1px 0px;
                        margin: 0px 0px 36px 0px;
                      "></div>

                                            <div class="row" id="row-987831871">
                                                <div
                                                    id="col-134788203"
                                                    class="col medium-4 small-4 large-4">
                                                    <div class="col-inner">
                                                        <div
                                                            class="img has-hover img-post-2 x md-x lg-x y md-y lg-y"
                                                            id="image_1215675486">
                                                            <div class="img-inner dark">
                                                                <img
                                                                    decoding="async"
                                                                    width="800"
                                                                    height="456"
                                                                    src="https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg"
                                                                    class="attachment-large size-large"
                                                                    alt=""
                                                                    srcset="
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg         800w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-300x171.jpg 300w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-768x438.jpg 768w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-509x290.jpg 509w
                                "
                                                                    sizes="(max-width: 800px) 100vw, 800px" />
                                                            </div>

                                                            <style>
                                                                #image_1215675486 {
                                                                    width: 100%;
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    id="col-1000656509"
                                                    class="col medium-8 small-8 large-8">
                                                    <div class="col-inner">
                                                        <div
                                                            id="text-2162245694"
                                                            class="text content-tittle-post">
                                                            <h3
                                                                class="mb-1 content-description-meta-2 fw-6 fs-18">
                                                                Hướng dẫn cách thay bộ xả bồn cầu 2 nút nhấn đơn
                                                                giản tại nhà
                                                            </h3>
                                                            <p class="content-description-meta fs-16">
                                                                Thay thế bộ xả bồn cầu 2 nút nhấn là giải pháp
                                                                hiệu quả để khắc phục những sự cố này. Với hướng
                                                                dẫn chi tiết dưới đây, bạn hoàn toàn có thể tự tay
                                                                thay thế bộ xả tại nhà mà không cần gọi thợ, tiết
                                                                kiệm cả thời gian và chi phí.
                                                            </p>
                                                            <p>Thời gian&nbsp; &nbsp; &nbsp; Tác giả</p>

                                                            <style>
                                                                #text-2162245694 {
                                                                    font-size: 0.75rem;
                                                                }

                                                                @media (min-width: 550px) {
                                                                    #text-2162245694 {
                                                                        font-size: 0.75rem;
                                                                    }
                                                                }

                                                                @media (min-width: 850px) {
                                                                    #text-2162245694 {
                                                                        font-size: 1rem;
                                                                    }
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            #col-159475831>.col-inner {
                                                margin: 0px 0px -50px 0px;
                                            }
                                        </style>
                                    </div>

                                    <div id="col-471500583" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div
                                                class="is-border"
                                                style="
                        border-color: rgb(0, 0, 0);
                        border-width: 0px 0px 1px 0px;
                        margin: 0px 0px 36px 0px;
                      "></div>

                                            <div class="row" id="row-1970661772">
                                                <div
                                                    id="col-1331625613"
                                                    class="col medium-4 small-4 large-4">
                                                    <div class="col-inner">
                                                        <div
                                                            class="img has-hover img-post-2 x md-x lg-x y md-y lg-y"
                                                            id="image_1137403648">
                                                            <div class="img-inner dark">
                                                                <img
                                                                    decoding="async"
                                                                    width="800"
                                                                    height="456"
                                                                    src="https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg"
                                                                    class="attachment-large size-large"
                                                                    alt=""
                                                                    srcset="
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg         800w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-300x171.jpg 300w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-768x438.jpg 768w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-509x290.jpg 509w
                                "
                                                                    sizes="(max-width: 800px) 100vw, 800px" />
                                                            </div>

                                                            <style>
                                                                #image_1137403648 {
                                                                    width: 100%;
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    id="col-1461555505"
                                                    class="col medium-8 small-8 large-8">
                                                    <div class="col-inner">
                                                        <div
                                                            id="text-2461484375"
                                                            class="text content-tittle-post">
                                                            <h3
                                                                class="mb-1 content-description-meta-2 fw-6 fs-18">
                                                                Hướng dẫn cách thay bộ xả bồn cầu 2 nút nhấn đơn
                                                                giản tại nhà
                                                            </h3>
                                                            <p class="content-description-meta fs-16">
                                                                Thay thế bộ xả bồn cầu 2 nút nhấn là giải pháp
                                                                hiệu quả để khắc phục những sự cố này. Với hướng
                                                                dẫn chi tiết dưới đây, bạn hoàn toàn có thể tự tay
                                                                thay thế bộ xả tại nhà mà không cần gọi thợ, tiết
                                                                kiệm cả thời gian và chi phí.
                                                            </p>
                                                            <p>Thời gian&nbsp; &nbsp; &nbsp; Tác giả</p>

                                                            <style>
                                                                #text-2461484375 {
                                                                    font-size: 0.75rem;
                                                                }

                                                                @media (min-width: 550px) {
                                                                    #text-2461484375 {
                                                                        font-size: 0.75rem;
                                                                    }
                                                                }

                                                                @media (min-width: 850px) {
                                                                    #text-2461484375 {
                                                                        font-size: 1rem;
                                                                    }
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            #col-471500583>.col-inner {
                                                margin: 0px 0px -50px 0px;
                                            }
                                        </style>
                                    </div>

                                    <div id="col-1030341134" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div
                                                class="is-border"
                                                style="
                        border-color: rgb(0, 0, 0);
                        border-width: 0px 0px 1px 0px;
                        margin: 0px 0px 36px 0px;
                      "></div>

                                            <div class="row" id="row-842158594">
                                                <div
                                                    id="col-369285442"
                                                    class="col medium-4 small-4 large-4">
                                                    <div class="col-inner">
                                                        <div
                                                            class="img has-hover img-post-2 x md-x lg-x y md-y lg-y"
                                                            id="image_734604530">
                                                            <div class="img-inner dark">
                                                                <img
                                                                    decoding="async"
                                                                    width="800"
                                                                    height="456"
                                                                    src="https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg"
                                                                    class="attachment-large size-large"
                                                                    alt=""
                                                                    srcset="
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg         800w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-300x171.jpg 300w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-768x438.jpg 768w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-509x290.jpg 509w
                                "
                                                                    sizes="(max-width: 800px) 100vw, 800px" />
                                                            </div>

                                                            <style>
                                                                #image_734604530 {
                                                                    width: 100%;
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    id="col-561069159"
                                                    class="col medium-8 small-8 large-8">
                                                    <div class="col-inner">
                                                        <div
                                                            id="text-32404978"
                                                            class="text content-tittle-post">
                                                            <h3
                                                                class="mb-1 content-description-meta-2 fw-6 fs-18">
                                                                Hướng dẫn cách thay bộ xả bồn cầu 2 nút nhấn đơn
                                                                giản tại nhà
                                                            </h3>
                                                            <p class="content-description-meta fs-16">
                                                                Thay thế bộ xả bồn cầu 2 nút nhấn là giải pháp
                                                                hiệu quả để khắc phục những sự cố này. Với hướng
                                                                dẫn chi tiết dưới đây, bạn hoàn toàn có thể tự tay
                                                                thay thế bộ xả tại nhà mà không cần gọi thợ, tiết
                                                                kiệm cả thời gian và chi phí.
                                                            </p>
                                                            <p>Thời gian&nbsp; &nbsp; &nbsp; Tác giả</p>

                                                            <style>
                                                                #text-32404978 {
                                                                    font-size: 0.75rem;
                                                                }

                                                                @media (min-width: 550px) {
                                                                    #text-32404978 {
                                                                        font-size: 0.75rem;
                                                                    }
                                                                }

                                                                @media (min-width: 850px) {
                                                                    #text-32404978 {
                                                                        font-size: 1rem;
                                                                    }
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            #col-1030341134>.col-inner {
                                                margin: 0px 0px -50px 0px;
                                            }
                                        </style>
                                    </div>

                                    <div id="col-115250958" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div
                                                class="is-border"
                                                style="
                        border-color: rgb(0, 0, 0);
                        border-width: 0px 0px 1px 0px;
                        margin: 0px 0px 36px 0px;
                      "></div>

                                            <div class="row" id="row-1036675158">
                                                <div
                                                    id="col-812328919"
                                                    class="col medium-4 small-4 large-4">
                                                    <div class="col-inner">
                                                        <div
                                                            class="img has-hover img-post-2 x md-x lg-x y md-y lg-y"
                                                            id="image_1946408266">
                                                            <div class="img-inner dark">
                                                                <img
                                                                    decoding="async"
                                                                    width="800"
                                                                    height="456"
                                                                    src="https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg"
                                                                    class="attachment-large size-large"
                                                                    alt=""
                                                                    srcset="
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg         800w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-300x171.jpg 300w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-768x438.jpg 768w,
                                  https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-509x290.jpg 509w
                                "
                                                                    sizes="(max-width: 800px) 100vw, 800px" />
                                                            </div>

                                                            <style>
                                                                #image_1946408266 {
                                                                    width: 100%;
                                                                }

                                                                @media (min-width: 550px) {
                                                                    #image_1946408266 {
                                                                        width: 100%;
                                                                    }
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    id="col-1947247274"
                                                    class="col medium-8 small-8 large-8">
                                                    <div class="col-inner">
                                                        <div
                                                            id="text-2203584805"
                                                            class="text content-tittle-post">
                                                            <h3
                                                                class="mb-1 content-description-meta-2 fw-6 fs-18">
                                                                Hướng dẫn cách thay bộ xả bồn cầu 2 nút nhấn đơn
                                                                giản tại nhà
                                                            </h3>
                                                            <p class="content-description-meta fs-16">
                                                                Thay thế bộ xả bồn cầu 2 nút nhấn là giải pháp
                                                                hiệu quả để khắc phục những sự cố này. Với hướng
                                                                dẫn chi tiết dưới đây, bạn hoàn toàn có thể tự tay
                                                                thay thế bộ xả tại nhà mà không cần gọi thợ, tiết
                                                                kiệm cả thời gian và chi phí.
                                                            </p>
                                                            <p>Thời gian&nbsp; &nbsp; &nbsp; Tác giả</p>

                                                            <style>
                                                                #text-2203584805 {
                                                                    font-size: 0.75rem;
                                                                }

                                                                @media (min-width: 550px) {
                                                                    #text-2203584805 {
                                                                        font-size: 0.75rem;
                                                                    }
                                                                }

                                                                @media (min-width: 850px) {
                                                                    #text-2203584805 {
                                                                        font-size: 1rem;
                                                                    }
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            #col-115250958>.col-inner {
                                                margin: 0px 0px -50px 0px;
                                            }
                                        </style>
                                    </div>

                                    <div id="col-1539682366" class="col small-12 large-12">
                                        <div class="col-inner text-center">
                                            <a
                                                class="button primary is-outline lowercase"
                                                style="border-radius: 10px; padding: 0px 80px 0px 80px">
                                                <span>Xem thêm</span>
                                                <i class="icon-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="col-155353671" class="col medium-4 small-12 large-4">
                            <div class="col-inner">
                                <div class="row" id="row-1315334844">
                                    <div id="col-265393374" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div
                                                class="is-border"
                                                style="
                        border-color: rgb(0, 0, 0);
                        border-radius: 10px;
                        border-width: 1px 1px 1px 1px;
                      "></div>

                                            <div id="text-380053320" class="text Text-title-prominent">
                                                <h2 style="text-align: center">Nổi bật</h2>
                                            </div>

                                            <div class="row" id="row-1183550723">
                                                <div id="col-423172930" class="col small-12 large-12">
                                                    <div class="col-inner">
                                                        <div class="row" id="row-317616301">
                                                            <div
                                                                id="col-341500646"
                                                                class="col medium-4 small-4 large-4">
                                                                <div class="col-inner">
                                                                    <div
                                                                        class="img has-hover img-prominent x md-x lg-x y md-y lg-y"
                                                                        id="image_63412955">
                                                                        <div class="img-inner dark">
                                                                            <img
                                                                                decoding="async"
                                                                                width="800"
                                                                                height="456"
                                                                                src="https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg"
                                                                                class="attachment-large size-large"
                                                                                alt=""
                                                                                srcset="
                                        https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5.jpg         800w,
                                        https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-300x171.jpg 300w,
                                        https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-768x438.jpg 768w,
                                        https://nhatamviet.com/wp-content/uploads/2024/10/nap-bon-cau-bi-o-vang-5-509x290.jpg 509w
                                      "
                                                                                sizes="(max-width: 800px) 100vw, 800px" />
                                                                        </div>

                                                                        <style>
                                                                            #image_63412955 {
                                                                                width: 100%;
                                                                            }
                                                                        </style>
                                                                    </div>
                                                                </div>

                                                                <style>
                                                                    #col-341500646>.col-inner {
                                                                        padding: 0px 0px 0px 10px;
                                                                        margin: 0px 0px -20px 0px;
                                                                    }
                                                                </style>
                                                            </div>

                                                            <div
                                                                id="col-391741777"
                                                                class="col medium-8 small-8 large-8">
                                                                <div class="col-inner">
                                                                    <div
                                                                        id="text-3316648330"
                                                                        class="text content-prominent-post">
                                                                        <h3>
                                                                            Năm 2025 là năm con gì, mệnh gì? Những điều
                                                                            cần…
                                                                        </h3>
                                                                        <p>
                                                                            Thời gian&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                            &nbsp; &nbsp;tên tác giả
                                                                        </p>

                                                                        <style>
                                                                            #text-3316648330 {
                                                                                font-size: 0.75rem;
                                                                                line-height: 1.3;
                                                                                text-align: left;
                                                                            }

                                                                            @media (min-width: 850px) {
                                                                                #text-3316648330 {
                                                                                    font-size: 0.75rem;
                                                                                }
                                                                            }
                                                                        </style>
                                                                    </div>
                                                                </div>

                                                                <style>
                                                                    #col-391741777>.col-inner {
                                                                        padding: 0px 10px 0px 0px;
                                                                        margin: 0px 0px -20px 0px;
                                                                    }
                                                                </style>
                                                            </div>
                                                        </div>




                                                    </div>

                                                    <style>
                                                        #col-423172930>.col-inner {
                                                            padding: 20px 0px 0px 0px;
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="col-143374765" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div
                                                class="box has-hover has-hover box-none box-text-bottom">
                                                <div class="box-image" style="border-radius: 2%">
                                                    <div class="">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="960"
                                                            height="1104"
                                                            src="https://nhatamviet.com/wp-content/uploads/2024/10/1-5-e1728204368549.png"
                                                            class="attachment- size-"
                                                            alt=""
                                                            srcset="
                              https://nhatamviet.com/wp-content/uploads/2024/10/1-5-e1728204368549.png          960w,
                              https://nhatamviet.com/wp-content/uploads/2024/10/1-5-e1728204368549-261x300.png  261w,
                              https://nhatamviet.com/wp-content/uploads/2024/10/1-5-e1728204368549-890x1024.png 890w,
                              https://nhatamviet.com/wp-content/uploads/2024/10/1-5-e1728204368549-768x883.png  768w,
                              https://nhatamviet.com/wp-content/uploads/2024/10/1-5-e1728204368549-509x585.png  509w
                            "
                                                            sizes="(max-width: 960px) 100vw, 960px" />
                                                    </div>
                                                </div>

                                                <div class="box-text text-center">
                                                    <div class="box-text-inner">
                                                        <h4>A title</h4>
                                                        <p>Image Box text</p>
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
    </div>

</div>

<?php
get_footer(); // Gọi footer từ theme cha (Flatsome)
?>