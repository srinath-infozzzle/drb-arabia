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
    <title>DRB Arabia - Book Event</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper specialoffer-page">
      <!-- Header -->

      <Header></Header>
      <div style="background-color: #f1ebdf; padding-top: 100px"></div>

      <div class="col-md-7 aos" data-aos="fade-up">
        <div class="row align-items-center">
          <div class="footer-form">
            <p>
              Get in touch with us to create your ideal stay in the heart of
              Saudi Arabia.
            </p>
            <form action="/bookingandcontact">
              <div class="footer-form-group">
                <input type="text" class="form-control" placeholder="Name" />
              </div>
              <div class="footer-form-group">
                <input type="text" class="form-control" placeholder="Phone" />
              </div>
              <div class="footer-form-group">
                <input type="text" class="form-control" placeholder="Email" />
              </div>
              <div class="footer-form-group">
                <textarea
                  class="form-control"
                  placeholder="Enter Message"
                ></textarea>
              </div>
              <div class="footer-form-btn">
                <button type="submit" class="btn white-btn">
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <footer
        class="footer"
        style="background-color: #f1ebdf; color: blueviolet"
      >
        <FooterLinks></FooterLinks>
      </footer>
    </div>
  </body>
</template>

<script>
export default {
  name: "bookevent",
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
