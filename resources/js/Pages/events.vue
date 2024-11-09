<script setup>
import $ from "jquery";
import Header from "../components/Header.vue";
import BookEvent from "../components/BookEvent.vue";
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
    <title>DRB Arabia - Events</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper events-page">
      <!-- Header -->
      <Header></Header>

      <section class="slider-section">
        <div class="banner-slider">
          <div class="slider-seven"></div>
          <!--       <div class="slider-one"></div>
                    <div class="slider-two"></div>
                    <div class="slider-three"></div>
                    <div class="slider-four"></div>-->
        </div>
      </section>

      <section
        class="path-section pb-100"
        style="
          height: 440px;
          padding-bottom: 100px;
          padding-left: 20px;
          padding-right: 20px;
        "
      >
        <div class="container">
          <div class="row">
            <div
              class="col-md-10 offset-md-1 text-center justify-content-center"
            >
              <div class="section-header aos" data-aos="fade-up">
                <h2 class="text-white">{{ $t("events.Events_Title") }}</h2>
              </div>
              <div class="path-content aos" data-aos="fade-up">
                <p>{{ $t("events.Events_Description") }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="path-imgs">
          <div class="path-left aos" data-aos="fade-right">
            <img
              :src="fullImageUrl('assets/img/pattern-design-left.png')"
              class="img-fluid"
              alt="Path"
              style="height: 400px; margin-bottom: 20px; margin-left: 20px"
            />
          </div>
          <div class="path-right aos" data-aos="fade-left">
            <img
              :src="fullImageUrl('assets/img/pattern-design-right.png')"
              class="img-fluid"
              alt="Path"
              style="height: 400px; margin-bottom: 20px; margin-right: 20px"
            />
          </div>
        </div>
      </section>

      <!-- Camp Section -->
      <section class="leaf-section camp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("events.Corporate_Events_Title") }}</h2>
                <h6>{{ $t("events.Corporate_Events_Description") }}</h6>
              </div>
            </div>
          </div>
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-img custom-flip">
                <img
                  :src="fullImageUrl('assets/img/events_corporate_event.png')"
                  class="img-fluid"
                  alt="Leaf"
                />
              </div>
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-content">
                <p>{{ $t("events.Corporate_Events_Right_Para1") }}</p>

                <p style="margin-top: 30px">
                  {{ $t("events.Corporate_Events_Right_Para2") }}
                </p>
                <p style="margin-top: 30px">
                  {{ $t("events.Corporate_Events_Right_Para3") }}
                </p>
                <p style="margin-top: 30px">
                  {{ $t("events.Corporate_Events_Right_Para4") }}
                </p>

                <div
                  class="private-btn private-btn-right aos custom-right-align"
                  data-aos="fade-up"
                  style="margin-top: 30px"
                >
                  <a
                    :href="getMenuEvent('/bookanevent', 'corporate')"
                    target="_blank"
                    class="btn btn-primary mt-auto"
                    >{{ $t("common.Book_Now_Button") }}</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="leaf-section camp-section custom-pt">
        <div class="full-container">
          <div class="row">
            <div class="col-md-12">
              <div class="box-slider">
                <img :src="fullImageUrl('assets/img/box-1.jpg')" alt="" />
                <img :src="fullImageUrl('assets/img/box-2.jpg')" alt="" />
                <img :src="fullImageUrl('assets/img/box-3.jpg')" alt="" />
                <!-- <img :src="fullImageUrl('assets/img/box-1.jpg')" alt="" /> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="leaf-section camp-section custom-row-reverse custom-pt">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("events.Private_Events_Title") }}</h2>
                <h6>{{ $t("events.Private_Events_Description") }}</h6>
              </div>
            </div>
          </div>
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-img custom-flip">
                <img
                  :src="fullImageUrl('assets/img/events_private_event.png')"
                  class="img-fluid"
                  alt="Leaf"
                />
              </div>
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-content">
                <p>{{ $t("events.Private_Events_Right_Para1") }}</p>

                <p style="margin-top: 30px">
                  {{ $t("events.Private_Events_Right_Para2") }}
                </p>
                <p style="margin-top: 30px">
                  {{ $t("events.Private_Events_Right_Para3") }}
                </p>
                <p style="margin-top: 30px">
                  {{ $t("events.Private_Events_Right_Para4") }}
                </p>
                <p style="margin-top: 30px">
                  {{ $t("events.Private_Events_Right_Para5") }}
                </p>

                <div
                  class="private-btn private-btn-right aos custom-right-align"
                  data-aos="fade-up"
                  style="margin-top: 30px"
                >
                  <a
                    :href="getMenuEvent('/bookanevent', 'private')"
                    target="_blank"
                    class="btn btn-primary mt-auto"
                    >{{ $t("common.Book_Now_Button") }}</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="leaf-section exp-section custom-pt">
        <div class="full-container">
          <div class="row">
            <div class="col-md-12">
              <div class="box-slider">
                <img :src="fullImageUrl('assets/img/pbox-1.jpg')" alt="" />
                <img :src="fullImageUrl('assets/img/pbox-2.jpg')" alt="" />
                <img :src="fullImageUrl('assets/img/pbox-3.jpg')" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- /Dinning Section -->
      <!--<section class="events-dinning-section">
                <div class="container" >
                <div class="row align-items-end">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="content-info text-white">
							<h2 class="text-white">Dinning</h2>
							<p>Our dining options offer a blend of authentic local dishes and international cuisine, prepared by skilled chefs using the freshest ingredients. Each meal is more than just food—it’s an opportunity to connect with the land, the culture, and your fellow travelers, making every dining experience truly unforgettable.</p>
						</div>
                    </div>
                    <div class="col-md-6 aos" data-aos="fade-up">
                       

                    </div>    

                </div>

                </div>

            </section>-->

      <section class="grid-img-wrapper">
        <div class="container">
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6">
              <div class="grid-img-info">
                <h3 class="custom-right-align">
                  {{ $t("events.Dining_Title") }}
                </h3>
                <p class="custom-right-align">
                  {{ $t("events.Dining_Description") }}
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="grid-img-blk">
                <div class="row align-items-center">
                  <div class="col-md-6 dining-imgs dine-img">
                    <img
                      :src="fullImageUrl('assets/img/grid-img-4.jpg')"
                      alt=""
                    />
                  </div>
                  <div class="col-md-6 dining-imgs">
                    <img
                      :src="fullImageUrl('assets/img/grid-img-2.jpg')"
                      class="mb-4"
                      alt=""
                    />
                    <img
                      :src="fullImageUrl('assets/img/grid-img-3.jpg')"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- /Experiences Section -->

      <section class="exp-section pb-0">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("events.Experiences_Title") }}</h2>
                <h6 class="custom-hfont2">
                  {{ $t("events.Experiences_Description") }}
                </h6>
              </div>
            </div>
          </div>
          <div class="row align-items-end custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/experiences-img.png')"
                class="img-fluid"
                alt="Experiences"
              />
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="content-info">
                <p>{{ $t("events.Experiences_Right_Para1") }}</p>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("common.Explore_our_Title") }}</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/hover-1.jpg')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>{{ $t("common.Explore_our_Image_1_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_1_Description") }}</p>
                    <a
                      href="https://drbarabia.book-onlinenow.net/index.aspx"
                      class="btn btn-primary mt-auto"
                      target="_blank"
                      >{{ $t("common.Book_Now_Button") }}</a
                    >
                  </div>
                </a>
              </div>
            </div>

            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/hover-3.png')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>{{ $t("common.Explore_our_Image_3_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_3_Description") }}</p>
                    <a
                      href="https://drbarabia.book-onlinenow.net/index.aspx"
                      class="btn btn-primary mt-auto"
                      target="_blank"
                      >{{ $t("common.Book_Now_Button") }}</a
                    >
                  </div>
                </a>
              </div>
            </div>

            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/hover-4.jpg')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>{{ $t("common.Explore_our_Image_4_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_4_Description") }}</p>
                    <a
                      href="https://drbarabia.book-onlinenow.net/index.aspx"
                      class="btn btn-primary mt-auto"
                      target="_blank"
                      >{{ $t("common.Book_Now_Button") }}</a
                    >
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/hover-6.jpg')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>{{ $t("common.Explore_our_Image_2_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_2_Description") }}</p>
                    <a
                      href="https://drbarabia.book-onlinenow.net/index.aspx"
                      class="btn btn-primary mt-auto"
                      target="_blank"
                      >{{ $t("common.Book_Now_Button") }}</a
                    >
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/treasure-hunting.png')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>{{ $t("common.Explore_our_Image_5_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_5_Description") }}</p>
                    <a
                      href="https://drbarabia.book-onlinenow.net/index.aspx"
                      class="btn btn-primary mt-auto"
                      target="_blank"
                      >{{ $t("common.Book_Now_Button") }}</a
                    >
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="camp-btn aos" data-aos="fade-up">
            <a href="/experiences" class="btn btn-primary">{{
              $t("common.View_All_Experiences")
            }}</a>
          </div>
        </div>
      </section>

      <!-- Testimonial Section -->

      <Testimonial></Testimonial>
      <!-- /Testimonial Section -->

      <footer class="footer">
        <BookEvent></BookEvent>
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
  name: "events",
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
        prevArrow: false,
        slidesToScroll: 1,
        prevArrow:
          '<button class="slick-prev"><img src="../../assets/img/Arrow37.png" alt="Previous" /></button>',
        nextArrow:
          '<button class="slick-next"><img src="../../assets/img/Arrow36.png" alt="Next" /></button>',
      });
    }

    if ($(".box-slider").length > 0) {
      $(".box-slider").slick({
        dots: false,
        autoplay: true,
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
  methods: {
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },
    getMenu(menulink) {
      return menulink + "/" + this.$i18n.locale;
    },
    getMenuEvent(menulink, attr) {
      return menulink + "/" + this.$i18n.locale + '?event=' + attr;
    },
  },

  data() {
    return {
      languages: languageData.testimonials,
      baseUrl: window.location.origin,
    };
  },
};
</script>
