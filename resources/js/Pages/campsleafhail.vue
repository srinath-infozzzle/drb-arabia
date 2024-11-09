<script setup>
import $ from "jquery";
import jQuery from "jquery";
//import '../../assets/js/script.js';
import Header from "../components/Header.vue";
import ContactUs from "../components/ContactUs.vue";
import FooterLinks from "../components/FooterLinks.vue";
import Testimonial from "../components/Testimonial.vue";
import { Link } from "@inertiajs/vue3";
import languageData from "../../../lang/en/testimonials.json";
import CampSearch from "../components/CampSearch.vue";
import Faqs from "../components/Faqs.vue";
</script>
<template>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>DRB Arabia - Camps Leaf of Hai'l</title>
  </head>
  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper campsleaf-page">
      <!-- Header -->
      <Header></Header>

      <!-- /Header -->

      <!-- Slider -->
      <section class="slider-section">
        <div class="banner-slider">
          <div class="slider-leafhail"></div>

          <!--
				<div class="slider-one"></div>


				<div class="slider-two"></div>
				<div class="slider-three"></div>
				<div class="slider-four"></div>---->
        </div>
      </section>
      <!-- /Slider -->

      <!-- Path Section -->
      <section class="path-section">
        <div class="container">
          <CampSearch></CampSearch>

          <div class="row">
            <div class="path-shapes aos camp-leaf" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/shape-01.png')"
                class="shape-left"
                alt="Shape"
              />
              <img
                :src="fullImageUrl('assets/img/shape-01.png')"
                class="shape-right"
                alt="Shape"
              />
            </div>
            <div class="col-md-6 offset-md-3 justify-content-center">
              <div class="section-header aos" data-aos="fade-up">
                <!--			<h2 class="text-white">Choose your path...</h2>-->
                <img
                  :src="fullImageUrl('assets/img/camp-leaf-logo.png')"
                  class="img-fluid leaf-img-en"
                  alt="Path"
                />
                <img
                  :src="fullImageUrl('assets/img/the_leaf_ar.png')"
                  class="img-fluid leaf-img-ar"
                  alt="Leaf"
                />
              </div>
              <div class="path-content aos" data-aos="fade-up">
                <p class="custom-justify">
                  {{ $t("leafhail.The_Leaf_Description") }}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="path-imgs">
          <div class="path-left aos" data-aos="fade-right">
            <img
              :src="fullImageUrl('assets/img/camp-leaf-left.png')"
              class="img-fluid"
              alt="Path"
            />
          </div>
          <div class="path-right aos" data-aos="fade-left">
            <img
              :src="fullImageUrl('assets/img/camp-leaf-right.png')"
              class="img-fluid"
              alt="Path"
            />
          </div>
        </div>
      </section>
      <!-- /Path Section -->

      <!-- Camp Section -->
      <section class="camp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("leafhail.Experience_Title") }}</h2>
                <h6 class="custom-hfont">
                  {{ $t("leafhail.Experience_Description") }}
                </h6>
              </div>
            </div>
          </div>
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-img">
                <img
                :src="fullImageUrl('assets/img/leaf-hail-extraordinary.png')"
                class="img-fluid"
                  alt="Leaf"
                />
              </div>
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-content">
                <h2 class="custom-right-align">
                  {{ $t("leafhail.Experience_Right_Title") }}
                </h2>

                <p>
                  {{ $t("leafhail.Experience_Right_Description") }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Camp Section -->
      <section class="camp-section bg-style1">
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("leafhail.Accommodation_Title") }}</h2>
                <p>
                  {{ $t("leafhail.Accommodation_Description") }}
                </p>
              </div>
            </div>
          </div>
          <div class="private-info">
            <div class="row align-items-center custom-row-reverse">
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-img">
                  <img
                    :src="fullImageUrl('assets/img/camp-private.png')"
                    class="img-fluid custom-flip"
                    alt="Leaf"
                  />
                </div>
              </div>
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-content">
                  <div class="section-header text-start">
                    <h2 class="text-white custom-right-align">
                      {{ $t("leafhail.Accommodation_Right_Title") }}
                    </h2>
                  </div>
                  <p class="custom-right-align">
                    {{ $t("leafhail.Accommodation_Right_Description") }}
                  </p>
                </div>
                <div class="private-btn custom-right-align">
                  <a
                    href="https://drbarabia.book-onlinenow.net/index.aspx"
                    target="_blank"
                    class="btn btn-primary"
                  >
                    {{ $t("common.Book_a_Dome") }}
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Camp Section -->
      <section
        class="box-slider-wrapper camp-leaf-slider"
        style="margin-top: 30px; margin-bottom: 30px"
      >
        <div class="full-container">
          <div class="row">
            <div class="col-md-12">
              <div class="box-slider">
                <img :src="fullImageUrl('assets/img/box-img-1.jpg')" alt="" />
                <img :src="fullImageUrl('assets/img/box-img-2.jpg')" alt="" />
                <img :src="fullImageUrl('assets/img/box-img-3.jpg')" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--	<section class="box-slider-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="box-slide">
							<img :src="fullImageUrl('assets/img/box-img-1.jpg')" alt="">
							<img :src="fullImageUrl('assets/img/box-img-2.jpg')" alt="">
							<img :src="fullImageUrl('assets/img/box-img-3.jpg')" alt="">
							<img :src="fullImageUrl('assets/img/box-img-1.jpg')" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>-->

      <section class="grid-img-wrapper px-40">
        <div class="container">
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6">
              <div class="grid-img-info">
                <h3 class="custom-right-align">
                  {{ $t("leafhail.Dining_Title") }}
                </h3>
                <p class="custom-right-align">
                  {{ $t("leafhail.Dining_Description") }}
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

      <!-- Camp Section -->
      <section class="camp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("leafhail.Experiences_Title") }}</h2>
                <p class="custom-hfont2">
                  {{ $t("leafhail.Experiences_Description") }}
                </p>
              </div>
            </div>
          </div>
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-img">
                <img
                  :src="fullImageUrl('assets/img/leaf-hail-under-stars2.png')"
                  class="img-fluid custom-lhus"
                  alt="Leaf"
                />
              </div>
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-content">
                <p>{{ $t("leafhail.Experiences_Right_Para1") }}</p>
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
                    <h4>
                      {{ $t("common.Explore_our_Image_1_Title") }}
                    </h4>
                    <p>
                      {{ $t("common.Explore_our_Image_1_Description") }}
                    </p>
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
                    :src="fullImageUrl('assets/img/hover-6.jpg')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>
                      {{ $t("common.Explore_our_Image_2_Title") }}
                    </h4>
                    <p>
                      {{ $t("common.Explore_our_Image_2_Description") }}
                    </p>
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
                    <h4>
                      {{ $t("common.Explore_our_Image_3_Title") }}
                    </h4>
                    <p>
                      {{ $t("common.Explore_our_Image_3_Description") }}
                    </p>
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
                    :src="fullImageUrl('assets/img/hover-4.jpg')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>
                      {{ $t("common.Explore_our_Image_4_Title") }}
                    </h4>
                    <p>
                      {{ $t("common.Explore_our_Image_4_Description") }}
                    </p>
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
                    <h4>
                      {{ $t("common.Explore_our_Image_5_Title") }}
                    </h4>
                    <p>
                      {{ $t("common.Explore_our_Image_5_Description") }}
                    </p>
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
                    :src="fullImageUrl('assets/img/Mountain.png')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>
                      {{ $t("common.Mountain_Bikes_Title") }}
                    </h4>
                    <p>
                      {{ $t("common.Mountain_Bikes_Description") }}
                    </p>
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
              $t("camps.view_all_experiences")
            }}</a>
          </div>
        </div>
      </section>
      <!-- /Camp Section -->
      <!-- Private -->
      <!-- <section class="camp-section private-section">
        <div class="container">
          <div class="private-info">
            <div class="section-header">
              <h2 class="text-white">{{ $t("camps.events_main_title") }}</h2>
              <p class="text-white">
                {{ $t("camps.events_main_description") }}
              </p>
            </div>
            <div class="row align-items-center custom-row-reverse">
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-img custom-flip">
                  <img
                    :src="fullImageUrl('assets/img/event-03.png')"
                    class="img-fluid"
                    alt="Leaf"
                  />
                </div>
              </div>
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-content">
                  <div class="section-header text-start">
                    <h2 class="text-white custom-right-align">
                      {{ $t("leafhail.Corporate_Events_Left_Title") }}
                    </h2>
                  </div>

                  <p custom-right-align>
                    {{ $t("leafhail.Corporate_Events_Left_Description") }}
                  </p>
                </div>
                <div class="private-btn custom-right-align">
                  <a href="/events-corporate" class="btn white-btn">{{
                    $t("common.View_More_Button")
                  }}</a>
                </div>
              </div>
            </div>
          </div>

          <div class="private-info mb-0">
            <div class="row align-items-center custom-row-reverse">
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-content">
                  <div class="section-header text-start">
                    <h2 class="text-white custom-right-align">
                      {{ $t("leafhail.Private_Events_Right_Title") }}
                    </h2>
                  </div>
                  <p class="custom-right-align">
                    {{ $t("leafhail.Private_Events_Right_Para") }}
                  </p>
                </div>
                <div class="private-btn private-btn-right custom-right-align">
                  <a href="/events-private" class="btn white-btn">{{
                    $t("common.View_More_Button")
                  }}</a>
                </div>
              </div>
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-img custom-flip">
                  <img
                    :src="fullImageUrl('assets/img/event-04.png')"
                    class="img-fluid"
                    alt="Leaf"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- /Private Section -->
      <!-- Testimonial Section -->

      <Testimonial></Testimonial>

      <!-- /Testimonial Section -->
      <!-- Camp Section -->
      <section class="leaf-section camp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("leafhail.Sustainability_Title") }}</h2>
                <!--			<h6>The Leaf offers a harmonious blend of nature and luxury, providing a tranquil escape in the heart of the desert.</h6>
				-->
              </div>
            </div>
          </div>
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-img">
                <img
                  :src="fullImageUrl('assets/img/aboutus_drb.png')"
                  class="img-fluid"
                  alt="Sustainability"
                />
              </div>
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-content">
                <h2>
                  {{ $t("leafhail.Sustainability_Right_Para_Title") }}
                </h2>
                <p>
                  {{ $t("leafhail.Sustainability_Right_Para_Description") }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Camp Section -->

      <!-- Footer -->
      <footer class="footer">
        <ContactUs></ContactUs>
        <div class="container">
          <div
            class="map-blk mb-5 d-flex flex-column mx-auto align-items-center text-center"
          >
            <h3 class="text-white">{{ $t("common.location_check_out") }}</h3>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d17106.562928380674!2d46.6639014!3d25.3600905!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2e9f9af85d5295%3A0x9944f9842561e504!2sKing%20Khalid%20Royal%20Reserve!5e1!3m2!1sen!2sin!4v1729336403620!5m2!1sen!2sin"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
            <!--<img
                            :src="fullImageUrl('assets/img/map-img.jpg')"
                            class="my-4"
                            alt=""
                        />-->
            <a
              href="https://maps.app.goo.gl/VMpwbdvUR49ry2eaA"
              class="btn white-btn"
              style="max-width: 203px"
              target="_blank"
              >{{ $t("common.google_map_button") }}</a
            >
          </div>
        </div>
      </footer>

      <section class="faq-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("common.faqs") }}</h2>
              </div>
            </div>
          </div>
          <Faqs faqcount1="7"></Faqs>
        </div>
      </section>
      <!-- /Footer -->

      <!-- Footer -->

      <footer class="footer">
        <FooterLinks></FooterLinks>
      </footer>
      <!--  <FooterLinks></FooterLinks>
		
		 /Footer -->

      <!-- Mouse Cursor -->
      <div class="mouse-cursor cursor-outer"></div>
      <div class="mouse-cursor cursor-inner"></div>
      <!-- /Mouse Cursor -->

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
    <!-- /Main Wrapper -->
  </body>
</template>
<script>
//import HomeAboutUs from '../components/Home/AboutUs.vue';
export default {
  name: "campsleafhail",
  components: {
    Link,
    Header,
    FooterLinks,
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
        responsive: [
          {
            breakpoint: 768, // For tablets and mobile devices
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
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
            breakpoint: 768, // For tablets and mobile devices
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    }
  },
  data() {
    return {
      languages: languageData.testimonials,
      baseUrl: window.location.origin,
    };
  },
  methods: {
    getImagePath(filelocation) {
      return window.location.origin + "/" + filelocation;
    },
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },
  },
};
</script>
