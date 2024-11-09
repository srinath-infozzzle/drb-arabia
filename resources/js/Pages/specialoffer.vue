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
    <title>DRB Arabia - Special Offer</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper specialoffer-page">
      <!-- Header -->

      <Header></Header>
      <div style="background-color: #f1ebdf; padding-top: 100px"></div>

      <section class="experience-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2 class="">DRB Arabia Special Offers</h2>
                <h6 class="">
                  Enjoy a Unique Guest Experience with our Available Packages
                </h6>
              </div>
            </div>
          </div>

          <div class="justify-content-center row">
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/adventure_hub1.png')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk">
                    <h4 class="custom-right-align">
                      {{ $t("offer.opening_offer_head") }}
                    </h4>
                    <p class="custom-right-align">
                      {{ $t("offer.offer_subhead") }}
                    </p>
                    <a
                      :href="getMenu('/opening-offer')"
                      class="btn btn-primary mt-auto"
                      >{{ $t("common.Read_More_Button") }}</a
                    >
                  </div>
                </a>
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

<script>
export default {
  name: "specialoffer",
  components: {
    Link,
    Header,
    ContactUs,
  },
  beforeMount() {
    this.loadData();
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
      data: null,
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
    getMenu(menulink) {
      return menulink + "/" + this.$i18n.locale;
    },
  },
};
</script>
