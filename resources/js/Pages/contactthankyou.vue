<script setup>
import $ from "jquery";
import Header from "../components/Header.vue";
import ContactUs from "../components/ContactUs.vue";
import FooterLinks from "../components/FooterLinks.vue";
import BookEvent from "../components/BookEvent.vue";
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
    <title>DRB Arabia - Thank You</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
      <!-- Header -->

      <Header></Header>

      <div style="background-color: #f1ebdf; padding-top: 100px"></div>

      <section class="exp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>Thank you!</h2>
              </div>
              <div class="content-info contact-thank">
                <p>
                  Thank you for getting in touch! We have received your message
                  and will respond as soon as possible.
                </p>
              </div>
            </div>

            <div class="camp-btn aos" data-aos="fade-up">
              <a href="/" class="btn btn-primary">Back to main page</a>
            </div>
          </div>
        </div>
      </section>

      <footer
        class="footer"
        style="background-color: #f1ebdf; color: blueviolet"
      >
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-2 col-md-4 aos" data-aos="fade-up">
              <div class="footer-widget footer-about">
                <img
                  :src="fullImageUrl('assets/img/LogoDark.svg')"
                  class="mb-3"
                  alt=""
                />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

            <!--  <div   v-for="columns in this.data.en.footercolumn" :key="columns" class="col-lg-2 col-md-4 aos" data-aos="fade-up"> -->

            <!--  <div  v-for="n in 5" :key="n" class="col-lg-2 col-md-4 aos" data-aos="fade-up">-->

            <div class="col-lg-2 col-md-4 aos" data-aos="fade-up">
              <div class="footer-widget footer-menu">
                <h2 class="footer-title">Camps</h2>
                <ul>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 aos" data-aos="fade-up">
              <div class="footer-widget footer-menu">
                <h2 class="footer-title">Experience</h2>
                <ul>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2 col-md-4 aos" data-aos="fade-up">
              <div class="footer-widget footer-menu">
                <h2 class="footer-title">Event</h2>
                <ul>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2 col-md-4 aos" data-aos="fade-up">
              <div class="footer-widget footer-menu">
                <h2 class="footer-title">About DRB Arabia</h2>
                <ul>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 aos" data-aos="fade-up">
              <div class="footer-widget footer-menu">
                <h2 class="footer-title">Gallery</h2>
                <ul>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                  <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                </ul>
              </div>
            </div>

            <!--   <ul>
             <li  v-for="m in parseInt($t('footercolumn.column'+n+'.linkcount'))" :key="m" ><a href="camps-leaf/en">{{  $t('footercolumn.column'+n+'.footertext_'+m)	 }} </a></li>
        
            </ul> -->

            <!--
    <div class="col-lg-2 col-md-4 aos" data-aos="fade-up">
        <div class="footer-widget footer-menu">
            <h2 class="footer-title">Lorem Ipsum</h2>
            <ul>
                <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
            </ul>
        </div>
    </div>
  -->
          </div>
          <div class="social-link">
            <a href="javascript:void(0);"
              ><i class="fab fa-facebook-f hi-icon"></i
            ></a>
            <a href="javascript:void(0);"
              ><i class="fab fa-twitter hi-icon"></i
            ></a>
            <a href="javascript:void(0);"
              ><i class="fab fa-linkedin-in hi-icon"></i
            ></a>
            <a href="javascript:void(0);"
              ><i class="fab fa-youtube hi-icon"></i
            ></a>
          </div>
        </div>
      </footer>
    </div>
  </body>
</template>

<style scoped>
.form-control {
  font-size: 18px;
  font-weight: 300;
  color: #566045;
  background: transparent;
  border: 0;
  border-radius: 0;
  padding-left: 0;
}

.footer-form-group {
  font-size: 18px;
  font-weight: 300;
  color: #566045;
  background: transparent;
  border: 0;
  border-radius: 0;
  padding-left: 0;
  border-bottom: 1px solid #566045;
}
.footer-form-group .form-control::placeholder {
  font-size: 18px;
  font-weight: 300;
  color: #566045 !important;
}

.footer-form-group textarea.form-control {
  resize: none;
  min-height: 150px;
  border: 1px solid #566045;
  padding: 15px;
}

.footer-menu ul li a {
  font-size: 14px;
  font-weight: 300;
  color: #566045;
}

.footer-menu ul li a {
  font-size: 14px;
  font-weight: 300;
  color: #566045;
}

.footer-widget .footer-title {
  font-size: 18px;
  font-weight: 400;
  color: #566045;
  margin-bottom: 20px;
}

.footer-about p {
  font-size: 16px;
  font-weight: 300;
  color: #566045;
  margin-bottom: 0;
  max-width: 200px;
}
</style>

<script>
export default {
  name: "contactthankyou",
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
