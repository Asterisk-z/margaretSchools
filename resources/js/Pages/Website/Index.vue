<template>

    <Head title="Welcome" />

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- main header -->
        <header class="main-header header-two text-white">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container-fluid clearfix">

                    <div class="header-inner d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="/"><img src="assets/images/logo.png" alt="Logo" title="Logo" ></a></div>
                        </div>

                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                   <div class="mobile-logo p-15 m-auto">
                                       <a href="/">
                                            <img src="assets/images/logo.png" alt="Logo" title="Logo" />
                                       </a>
                                   </div>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/">About</a></li>
                                        <li><a href="/">Courses</a></li>
                                        <li><a href="/">Contact</a></li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>


                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>

        <!-- Hero Section Start -->
        <section class="hero-section-two rel z-1 bg-green">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-content-two mt-150 mb-120">
                           <span class="sub-title wow fadeInUp delay-0-2s">Welcome to Margaret Schools</span>
                            <h1 class="wow fadeInUp delay-0-4s">The Best Education that set standard</h1>
                            <div class="hero-btn mt-15 wow fadeInUp delay-0-8s">
                                <a href="#" class="theme-btn mt-15 style-four br-5">Get Enlightened<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-right-image">
                <img src="assets/images/clock.png" alt="Hero" class="clock d-block d-sm-block d-md-none d-lg-none">
                <img class="wow fadeInUp delay-0-2s background d-none d-sm-none d-md-block d-lg-block" src="assets/images/background.svg" alt="Heo Right" >
            </div>
            <div class="hero-three-shapes">
                <img src="assets/images/book.png" alt="Shape">
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- About Section Start -->
        <section class="about-section-two rel py-20 rpy-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left rel pt-10 rmb-55 wow fadeInLeft delay-0-2s">
                            <img src="assets/images/about.png" alt="About">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content wow fadeInRight delay-0-2s">
                            <div class="section-title mb-30">
                                <span class="sub-title">Who We Are</span>
                                <h2>Margaret Schools</h2>
                            </div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa libero voluptates debitis facere dolorum nisi id quae blanditiis omnis voluptate amet deleniti incidunt commodi tempore, inventore neque voluptatem repellendus a?</p>
                            <i>Natus sit voluptate maccusantium doloremque laudantium totam rem aperiam eaque ipsa quae inventore</i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

        <!-- Offer Section Start -->
        <section class="offer-section text-center rel z-1 pt-20 pb-50 rpt-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-10">
                        <div class="section-title mb-65">
                            <span class="sub-title">Our Courses</span>
                            <h2></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 col-small">
                        <a class="offer-item wow fadeInUp delay-0-2s" href="#">
                            <img src="assets/images/science.svg" class="courses"/>
                            <h5>Science</h5>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 col-small">
                        <a class="offer-item wow fadeInUp delay-0-4s" href="#">
                            <img src="assets/images/art.svg" class="courses"/>
                            <h5>Humanity</h5>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 col-small">
                        <a class="offer-item wow fadeInUp delay-0-6s" href="#">
                            <img src="assets/images/technology.svg" class="courses"/>
                            <h5>Technology</h5>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 col-small">
                        <a class="offer-item wow fadeInUp delay-0-8s" href="#">
                            <img src="assets/images/business.svg" class="courses"/>
                            <h5>Business</h5>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offer Section End -->



        <!-- Footer Area Start -->
        <footer class="main-footer bg-light-theme footer-two pt-40">
            <div class="container">
                <div class="footer-subscribe mb-55 wow fadeInLeft delay-0-2s">
                    <div class="subscribe-title">
                       <!-- <i class="flaticon-newspaper"></i> -->
                        <h3>Get update about our school</h3>
                    </div>
                    <form action="#" method="post" class="wow fadeInRight delay-0-4s">
                        <input type="email" name="email" placeholder="Enter Email" required>
                        <button value="submit" class="theme-btn style-three br-5"  id="subscribe">subscribe <i class="fas fa-long-arrow-alt-right"></i></button>
                    </form>
                </div>
                <div class="copyright-area pt-25 pb-45">
                    <ul class="footer-menu py-5">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Courses</a></li>
                    </ul>
                    <div class="copyright-social">
                        <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

    </div>




    <!-- Scroll Top Button -->
    <button class="scroll-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></button>


</template>


<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
export default {
  components: {
    Head,
    Link,
  },
}
</script>

<style scoped>
    @import '../../../css/app.css';
</style>
