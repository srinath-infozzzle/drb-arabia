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
    <title>DRB Arabia - Special Offers</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper specialofferread">
      <!-- Header -->

      <Header></Header>
      <div style="background-color: #f1ebdf; padding-top: 100px"></div>

      <!-- Camp Section -->
      <section class="leaf-section camp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>Book direct to get 15% off</h2>
                <h6>
                  Savvy travellers know that booking direct is the best way to
                  guarantee the lowest rate on every stay.
                </h6>
              </div>
            </div>
          </div>
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-7 aos" data-aos="fade-up">
              <div class="camp-content">
                <p class="custom-right-align">
                  That's why we're offering this exclusive discount of 15% off
                  your stay when you book directly by phone or email, no matter
                  the length or season.
                </p>

                <p style="margin-top: 30px" class="custom-right-align">
                  And every stay always includes our amazing inclusions like: 
                </p>

                <ul class="custom-list custom-rtl">
                  <li>
                    Free full cooked to order breakfast for up to two guests
                  </li>
                  <li>Free in-room bottled water</li>
                  <li>Free wifi</li>
                  <li>Free 24-hour business service</li>
                </ul>

                <p style="margin-top: 30px" class="custom-right-align">
                  Please note this offer is only available on
                  stays booked directly by calling or emailing us.
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

      <footer
        class="footer"
        style="background-color: #f1ebdf; color: blueviolet"
      >
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
.leaf-section {
  padding: 80px 0;
  background: #ffffff;
  position: relative;
  overflow: hidden;
  color: #566045;
}
.custom-list {
  list-style-type: disc; /* Default bullet */
  padding-left: 20px; /* Optional: add some padding */
}
.custom-list li {
  margin-top: 20px;
  color: #566045;
  font-size: 20px;
}
</style>

<script>
export default {
  name: "specialofferread",
  components: {
    Link,
    Header,
    ContactUs,
  },

  mounted() {
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
