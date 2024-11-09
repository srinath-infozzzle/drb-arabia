<script setup>
import $ from "jquery";
import Header from "../components/Header.vue";
import BookEvent from "../components/BookEvent.vue";
import FooterLinks from "../components/FooterLinks.vue";
import { Link } from "@inertiajs/vue3";
import languageData from "../../../lang/en/testimonials.json";
import Testimonial from "../components/Testimonial.vue";
import CampSearch from "../components/CampSearch.vue";
</script>
<template>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>DRB Arabia - Private Events</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <div class="main-wrapper specialofferread">
      <!-- Header -->

      <Header></Header>
      <div style="background-color: #f1ebdf; padding-top: 100px"></div>
      <!-- <section class="slider-section pb-0">
        <div class="banner-slider">
          <div class="slider-opening-offer"></div>
        </div>
      </section> -->
    </div>
    <!-- Camp Section -->
    <section class="leaf-section camp-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 aos" data-aos="fade-up">
            <div class="section-header">
              <h2>{{ $t("offer.opening_offer_head") }}</h2>
              <h6>
                {{ $t("offer.offer_subhead") }}
              </h6>
            </div>
          </div>
        </div>
        <div class="row align-items-center custom-row-reverse">
          <div class="col-md-7 aos" data-aos="fade-up">
            <div class="camp-content">
              <p class="custom-right-align">
                {{ $t("offer.offer_content") }}
              </p>
            </div>
          </div>
          <div class="col-md-5 aos" data-aos="fade-up">
            <div class="camp-img">
              <img
                :src="fullImageUrl('assets/img/offer-read.png')"
                class="img-fluid custom-flip"
                alt="Leaf"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial Section -->
    <Testimonial></Testimonial>
    <!-- /Testimonial Section -->

    <footer class="footer">
      <!-- <BookEvent></BookEvent> -->
      <FooterLinks></FooterLinks>
    </footer>
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
  name: "openingoffer",
  components: {
    Link,
    Header,
    BookEvent,
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
        //  prevArrow: false,
        slidesToScroll: 1,
        //   prevArrow: '<button class="slick-prev"><img src="../../assets/img/Arrow37.png" alt="Previous" /></button>',
        //   nextArrow: '<button class="slick-next"><img src="../../assets/img/Arrow36.png" alt="Next" /></button>',
      });
    }

    if ($(".box-slider").length > 0) {
      $(".box-slider").slick({
        dots: false,
        autoplay: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 768, // Applies settings for screens 768px wide or smaller
            settings: {
              slidesToShow: 1, // Show only 1 slide on mobile
              slidesToScroll: 1,
            },
          },
        ],
      });
    }

    // if ($(".box-slider").length > 0) {
    //   $(".box-slider").slick({
    //     dots: false,
    //     autoplay: true,
    //     infinite: true,
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //   });
    // }
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
