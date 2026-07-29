@include('layout.header')

<!-- rts blog-breadcrumb-area-start -->
<div class="rts-about-breadcrumb-area mb-5" style="background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(assets/images/about/banner.webp)">>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="rts-about-breadcrumb-content">
                    <ul>
                        <li><a href="{{ route('index') }}" class="text-white">Home</a></li>
                        <li><i class="fa fa-chevron-right text-white"></i></li>
                        <li><a href="{{ route('blog') }}" class="active">Blog</a></li>
                    </ul>
                    <h1 class="title rts-text-anime-style-1 text-white">Explore Our Latest Blogs</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts blog-breadcrumb-area-end -->


<!-- rts blog list area start -->
<div class="rts-blog-list-area rts-section-gapBottom pt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <!-- rts blog single wrapper-area -->
                <div class="rts-blog-list-wrapper">
                    <div class="single-blog-style-one">
                        <a href="blog-details.html" class="thumbnail-blog">
                            <img src="assets/images/blog/01.webp" alt="blog">
                        </a>
                        <div class="inner-content-blog">
                            <span>Development</span>
                            <a href="blog-details.html">
                                <h5 class="title">
                                    WordPress vs Storyblok: Which is the best CMS for fast-growing companies?
                                </h5>
                            </a>
                            <a href="blog-details.html" class="btn-line"><span>Learn More</span> <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="single-blog-style-one">
                        <a href="blog-details.html" class="thumbnail-blog">
                            <img src="assets/images/blog/02.webp" alt="blog">
                        </a>
                        <div class="inner-content-blog">
                            <span>Development</span>
                            <a href="blog-details.html">
                                <h5 class="title">
                                    WordPress vs Storyblok: Which is the best CMS for fast-growing companies?
                                </h5>
                            </a>
                            <a href="blog-details.html" class="btn-line"><span>Learn More</span> <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="single-blog-style-one">
                        <a href="blog-details.html" class="thumbnail-blog">
                            <img src="assets/images/blog/03.webp" alt="blog">
                        </a>
                        <div class="inner-content-blog">
                            <span>Development</span>
                            <a href="blog-details.html">
                                <h5 class="title">
                                    WordPress vs Storyblok: Which is the best CMS for fast-growing companies?
                                </h5>
                            </a>
                            <a href="blog-details.html" class="btn-line"><span>Learn More</span> <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="single-blog-style-one">
                        <a href="blog-details.html" class="thumbnail-blog">
                            <img src="assets/images/blog/04.html" alt="blog">
                        </a>
                        <div class="inner-content-blog">
                            <span>Development</span>
                            <a href="blog-details.html">
                                <h5 class="title">
                                    WordPress vs Storyblok: Which is the best CMS for fast-growing companies?
                                </h5>
                            </a>
                            <a href="blog-details.html" class="btn-line"><span>Learn More</span> <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- rts blog single wrapper-area end -->
            </div>
            <div class="col-xl-4 col-md-12 col-sm-12 col-12 pl--50 pl_md--10 pl_sm--10 mt_md--50 mt_sm--50">
                <!-- single wizered start -->
                <div class="rts-single-wized search">
                    <div class="wized-header">
                        <h5 class="title">
                            Search Here
                        </h5>
                    </div>
                    <div class="wized-body">
                        <div class="rts-search-wrapper">
                            <input class="Search" type="text" placeholder="Enter Keyword">
                            <button><i class="fal fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <!-- single wizered End -->
                <!-- single wizered start -->
                <div class="rts-single-wized Categories">
                    <div class="wized-header">
                        <h5 class="title">
                            Categories
                        </h5>
                    </div>
                    <div class="wized-body">
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="blog-details.html">Business Solution <i
                                        class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="blog-details.html">Strategy Growth<i
                                        class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="blog-details.html">Finance Solution<i
                                        class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="blog-details.html">Investment Policy<i
                                        class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="blog-details.html">Tax Managment<i class="far fa-long-arrow-right"></i></a>
                            </li>
                        </ul>
                        <!-- single categoris End -->
                    </div>
                </div>
                <!-- single wizered End -->
                <!-- single wizered start -->
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">
                            Recent Posts
                        </h5>
                    </div>
                    <div class="wized-body">
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="blog-details.html"><img src="assets/images/blog/sm/01.html"
                                        alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="blog-details.html">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="blog-details.html"><img src="assets/images/blog/sm/02.html"
                                        alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="blog-details.html">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="blog-details.html"><img src="assets/images/blog/sm/03.html"
                                        alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="blog-details.html">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                    </div>
                </div>
                <!-- single wizered End -->
                <!-- single wizered start -->
                <div class="rts-single-wized">
                    <div class="wized-header">
                        <h5 class="title">
                            Popular Tags
                        </h5>
                    </div>
                    <div class="wized-body">
                        <div class="tags-wrapper">
                            <a href="blog-details.html">Services</a>
                            <a href="blog-details.html">Business</a>
                            <a href="blog-details.html">Growth</a>
                            <a href="blog-details.html">Finance</a>
                            <a href="blog-details.html">UI/UX Design</a>
                            <a href="blog-details.html">Solution</a>
                            <a href="blog-details.html">Speed</a>
                            <a href="blog-details.html">Strategy</a>
                            <a href="blog-details.html">Technology</a>
                        </div>
                    </div>
                </div>
                <!-- single wizered End -->
            </div>
        </div>
    </div>
</div>
<!-- rts blog list area end -->

@include('layout.footer')