<?php  
    $posts = [];
    $response = Http::get('https://visawizer.com.au/visawizer-blog/wp-json/wp/v2/posts?_embed&per_page=5');
    if ($response->successful()) {
        $posts = $response->json();
    }
?>

<style type="text/css">
.blog-card img.w-100 {
    height: 200px;
    object-fit: cover;
}
.blog-slider-active .content-top h3 {
    line-height: 22px !important;
    min-height: 70px;
}
</style>
<section class="latest-blog-section p-t-50 p-b-50" style="background: #e1e1e1;">
    <div class="container">
        <div class="row justify-content-between align-items-center m-b-50">
            <div class="col-md-6">
                <div class="latest-blog-content" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="common-subtitle">
                        <span class="bg-p">News & Blog</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Check Latest Blog Post</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-btn text-end">
                    <a class='e-primary-btn has-icon' href="<?php echo e(url('blogs')); ?>">Explore All Posts
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="blog-slider-active" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $title = $post['title']['rendered'];
                                    $slug = $post['slug'];
                                    $author = 'Visawizer';
                                    $date = \Carbon\Carbon::parse($post['date']);
                                    $day = $date->format('d');
                                    $month = $date->format('M');
                                    $year = $date->format('Y');
                                    $featuredImage = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? asset('assets/img/thumbs/thumb-6.webp');
                                ?>
                                <div class="swiper-slide">
                                    <div class="blog-card">
                                        <div class="thumb">
                                            <a href="<?php echo e(url('blog/' . $slug)); ?>"><img class="w-100" src="<?php echo e($featuredImage); ?>" alt="<?php echo e($slug); ?>"></a>
                                            <div class="category">
                                                <a href="javascript:void(0);"><?php echo e($author); ?></a>
                                            </div>
                                            <div class="event-date">
                                                <h2><?php echo e($day); ?></h2>
                                                <h5><?php echo e($month); ?></h5><span><?php echo e($year); ?></span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-top pt-3 m-b-20">
                                                <div class="title">
                                                    <h3><a href="<?php echo e(url('blog/' . $slug)); ?>"><?php echo $title; ?></a></h3>
                                                </div>
                                                <div class="text">
                                                    <p><?php echo e(Str::limit(strip_tags($post['excerpt']['rendered']), 80)); ?></p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <a class='e-primary-btn has-icon has-small' href="<?php echo e(url('blog/' . $slug)); ?>">Read More
                                                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span></a>
                                                <div class="social-share">
                                                    <?php
                                                        $url = urlencode(url('blog/' . $slug));
                                                        $title = urlencode('Check out this blog!');
                                                    ?>
                                                    <button class="total-shared"><i class="fa-solid fa-share-nodes"></i></button>
                                                    <div class="social-links">
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($url); ?>" target="_blank" title="Share on Facebook">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                        <a href="https://twitter.com/intent/tweet?url=<?php echo e($url); ?>&text=<?php echo e($title); ?>" target="_blank" title="Share on Twitter">
                                                            <i class="fab fa-x-twitter"></i>
                                                        </a>
                                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e($url); ?>" target="_blank" title="Share on LinkedIn">
                                                            <i class="fab fa-linkedin-in"></i>
                                                        </a>
                                                        <a href="https://api.whatsapp.com/send?text=<?php echo e($title); ?>%20<?php echo e($url); ?>" target="_blank" title="Share on WhatsApp">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="blog-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape"><img alt="shape" src="<?php echo e(asset('assets/img/shapes/shape-38.webp')); ?>"></div>
</section><?php /**PATH F:\xampp\htdocs\visawizer\resources\views/partials/blogs.blade.php ENDPATH**/ ?>