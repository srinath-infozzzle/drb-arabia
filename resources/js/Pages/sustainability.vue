<script setup>
import $ from "jquery";
import Header from "../components/Header.vue";
import ContactUs from "../components/ContactUs.vue";
import FooterLinks from "../components/FooterLinks.vue";
import { Link } from "@inertiajs/vue3";
import languageData from "../../../lang/en/testimonials.json";
</script>
<template>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>DRB Arabia - Sustainability</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper sustainalbility-page">
      <!-- Header -->
      <Header></Header>

      <section class="slider-section">
        <div class="banner-slider">
          <div class="slider-fourteen"></div>
        </div>
      </section>

      <section class="leaf-section camp-section">
        <div class="container">
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-img">
                <img
                  :src="fullImageUrl('assets/img/sustain.png')"
                  class="img-fluid"
                  alt="Sustainability"
                />
              </div>
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-content">
                <h2>
                  {{ $t("sustainability.Committed_To_Conservation_Title") }}
                </h2>
                <p style="color: #ae4c29">
                  {{ $t("sustainability.Committed_To_Conservation_Para1") }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Experience Section -->
      <section class="exp-section custom-pb0">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2 class="custom-right-align">
                  {{ $t("sustainability.Preserving_Nature_Title") }}
                </h2>
              </div>
              <div class="content-info">
                <p class="text-center">
                  {{ $t("sustainability.Preserving_Nature_Description") }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="experience-section">
        <div class="container">
          <div class="row">
            <div class="col-md-3 aos custom-margin-top" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/sus-memories1.jpg')"
                alt=""
                class="img-fluid custom-width100"
              />
            </div>

            <div class="col-md-3 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/sus-memories2.jpg')"
                alt=""
                class="img-fluid custom-width100 custom-mt30"
              />
              <img
                :src="fullImageUrl('assets/img/sus-memories3.jpg')"
                alt=""
                class="img-fluid custom-width100"
                style="margin-top: 30px"
              />
            </div>
            <div class="col-md-3 aos sus-third-img" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/sus-memories4.jpg')"
                alt=""
                class="img-fluid custom-width100 custom-mt30"
              />
            </div>
            <div class="col-md-3 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/sus-memories5.jpg')"
                alt=""
                class="img-fluid custom-width100 custom-mt30"
              />
              <img
                :src="fullImageUrl('assets/img/sus-memories6.jpg')"
                alt=""
                class="img-fluid custom-width100"
                style="margin-top: 30px"
              />
            </div>
          </div>
        </div>
      </section>

      <footer class="footer">
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
  background-image: url("../../fullImageUrl('assets/img/Arrow37.png");
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
  name: "sustainability",
  components: {
    Link,
    Header,
    ContactUs,
  },
  beforeMount() {
    this.loadData();
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

      data: null,
      languages: languageData.testimonials,
      baseUrl: window.location.origin,
    };
  },
  methods: {
    async loadData() {
      const fetchurl = window.location.origin + "/langdata";
      const response = await fetch(fetchurl);
      this.data = await response.json();
      this.$i18n.messages.ar = this.data.ar;
      this.$i18n.messages.en = this.data.en;
      var count = Object.keys(this.data.en.testimonial).length;
      this.testmonnialcount = count / 2;
      this.footercolumnscount = Object.keys(this.data.en.footercolumn).length;
    },

    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },
  },
};
</script>
