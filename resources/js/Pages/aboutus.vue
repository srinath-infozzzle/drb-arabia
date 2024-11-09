<script setup>
import $ from "jquery";
import Header from "../components/Header.vue";
import ContactUs from "../components/ContactUs.vue";
import FooterLinks from "../components/FooterLinks.vue";
import { Link } from "@inertiajs/vue3";
import languageData from "../../../lang/en/testimonials.json";
import Testimonial from "../components/Testimonial.vue";
</script>

<template>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <meta name="google" content="notranslate" />
    <title>DRB Arabia - About Us</title>

    <!-- Favicon 
	    <link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body class="notranslate">
    <!-- Main Wrapper -->
    <div class="main-wrapper aboutus">
      <!-- Header -->
      <Header></Header>

      <section class="slider-section">
        <div class="banner-slider">
          <div class="slider-aboutus"></div>
        </div>
      </section>

      <section class="aboutus-about-drb">
        <div class="container">
          <div class="row align-items-end custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="">
                <img
                  :src="fullImageUrl('assets/img/aboutus_about_drb.png')"
                  class="img-fluid"
                  alt="Experiences"
                />
              </div>
            </div>
            <div class="content-blk text-start aos" data-aos="fade-up">
              <div class="section-header text-start position-relative">
                <h2 class="text-white custom-right-align">
                  {{ $t("aboutus.About_DRB_Title") }}
                </h2>
                <img
                  src="https://drbarabia.com/assets/img/shape-01.png"
                  class="shape-right about-right-shape position-absolute"
                  alt="Shape"
                  width="80"
                />
              </div>
              <p>
                {{ $t("aboutus.About_DRB_Right_Para1") }}
              </p>
              <p>
                {{ $t("aboutus.About_DRB_Right_Para2") }}
              </p>
            </div>
          </div>
        </div>
      </section>

      <!--            <section class="events-path-section">


                <div class="row">
                    <div class="col-md-12">

                        <div class="path-shapes aos" data-aos="fade-up">
                            <img :src="fullImageUrl('assets/img/shape-01.png" class="shape-left" alt="Shape">

                            <img :src="fullImageUrl('assets/img/shape-01.png" class="shape-right" alt="Shape">
                        </div>
                    </div>
                </div>


                <div class="container">



                    <div class="path-search aos" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="path-group">
                                    <img :src="fullImageUrl('assets/img/icons/path-01.svg" alt="Icon">
                                    <div class="path-input">
                                        <input type="text" class="form-control" placeholder="Pick a camp">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="path-group">
                                    <img :src="fullImageUrl('assets/img/icons/path-02.svg" alt="Icon">
                                    <div class="path-input">
                                        <label>Dates</label>
                                        <input type="text" class="form-control bookingrange"
                                            placeholder="Jun 20 - Jun 23">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="path-group">
                                    <img :src="fullImageUrl('assets/img/icons/path-03.svg" alt="Icon">
                                    <div class="path-input">
                                        <label>Travelers</label>
                                        <input type="text" class="form-control" placeholder="2 travelers, 1 room">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="path-btn">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-1 path-shapes aos" data-aos="fade-up"
                            style="margin-top: 50px; margin-left: -80px">

                            <img :src="fullImageUrl('assets/img/shape-01.png" class="shape-left" alt="Shape">
                        </div>


                        <div class="col-md-10 offset-md-0 justify-content-center">


                            <div class="section-header aos" data-aos="fade-up">

                                <h2 class="text-white"> Events </h2>
                            </div>
                            <div class="path-content aos" data-aos="fade-up">
                                <p style="text-align: center;">Let us bring your event to life with elegance, style, and
                                    a touch of adventure.</p>
                            </div>


                        </div>

                        <div class="col-md-1 path-shapes aos" data-aos="fade-up"
                            style="margin-top: 50px;margin-left:80px;">

                            <img :src="fullImageUrl('assets/img/shape-01.png" class="shape-right" alt="Shape">
                        </div>
                    </div>

                </div>



                <div class="row">
                    <div class="col-md-12">

                        <div class="path-shapes aos" data-aos="fade-up">
                            <img :src="fullImageUrl('assets/img/shape-01.png" class="shape-left" alt="Shape">

                            <img :src="fullImageUrl('assets/img/shape-01.png" class="shape-right" alt="Shape">
                        </div>
                    </div>
                </div>


            </section>-->

      <!-- Camp Section -->

      <!-- /Experiences Section -->

      <!-- Experience Section -->
      <section class="exp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("aboutus.Our_Core_Values_Title") }}</h2>
              </div>
              <div class="content-info our-core-values">
                <ul class="custom-rtl custom-list">
                  <li>
                    <p>
                      {{ $t("aboutus.Our_Core_Values_Point1") }}
                    </p>
                  </li>
                  <li>
                    <p>
                      {{ $t("aboutus.Our_Core_Values_Point2") }}
                    </p>
                  </li>
                  <li>
                    <p>
                      {{ $t("aboutus.Our_Core_Values_Point3") }}
                    </p>
                  </li>
                </ul>

                <p>
                  {{ $t("aboutus.Our_Core_Values_Para1") }}
                </p>

                <p>
                  {{ $t("aboutus.Our_Core_Values_Para2") }}
                </p>

                <p>
                  {{ $t("aboutus.Our_Core_Values_Para3") }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="aboutus_bg-image">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="content-info">
                <!--	<h3>Find Balance and Renewal in Nature</h3>
							<p>It's important to slow down and reconnect with nature to refresh both mind and body. Enjoy the peace, breathe deeply, and let the natural surroundings bring you back to a state of balance and well-being.</p>
						
                        -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonial Section -->
      <Testimonial></Testimonial>
      <!-- /Testimonial Section -->

      <footer class="footer">
        <ContactUs></ContactUs>

        <section class="foorder_marign_section"></section>

        <FooterLinks></FooterLinks>
      </footer>

      <!-- Top Scroll -->
      <div class="back-to-top">
        <a
          class="back-to-top-icon align-items-center justify-content-center d-flex"
          href="#top"
        >
          <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </a>
      </div>
      <!-- /Top Scroll -->
    </div>
  </body>
</template>

<style scoped>
.slick-prev {
  background-image: url("../../assets/img/Arrow37.png");
  background-size: contain;
  /* Adjust as needed */
  width: 80px;
  /* Set your desired width */
  height: 80px;
  /* Set your desired height */
}

.slick-next {
  background-image: url("../../assets/img/Arrow36.png");
  background-size: contain;
  /* Adjust as needed */
  width: 80px;
  /* Set your desired width */
  height: 80px;
  /* Set your desired height */
}
</style>

<script>
//import HomeAboutUs from '../components/Home/AboutUs.vue';
export default {
  name: "aboutus",
  components: {
    Link,
    Header,
    ContactUs,
  },

  mounted() {
    if ($(".banner-slider").length > 0) {
      $(".banner-slider").slick({
        dots: false,
        autoplay: true,
        infinite: true,
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        speed: 1000,
        cssEase: "linear",
      });
    }

    if ($(".leaf-slider").length > 0) {
      $(".leaf-slider").slick({
        dots: false,
        autoplay: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow:
          '<button class="slick-prev"><img src="path/to/your/prev-image.png" alt="Previous" /></button>',
        nextArrow:
          '<button class="slick-next"><img src="path/to/your/next-image.png" alt="Next" /></button>',
      });
    }

    if ($(".box-slider").length > 0) {
      $(".box-slider").slick({
        dots: false,
        autoplay: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
      });
    }
  },
  data() {
    return {
      /*testimonials:      
         
          [
            { name: 'John Doe', description: 'This service was amazing!' },
            { name: 'Jane Smith', description: 'I had a fantastic experience!' },
            { name: 'Alice Johnson', description: 'Highly recommend to everyone!' },
          ],*/
      languages: languageData.testimonials,
      baseUrl: window.location.origin,
    };
  },
  methods: {
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },
  },
};
</script>
