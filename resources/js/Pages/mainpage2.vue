<script setup>
import { ref, onMounted } from "vue";
import feather from "feather-icons";
import $ from "jquery";
import jQuery from "jquery";
import languageData from "../../../lang/en/testimonials.json";
//import Slick from 'vue-slick';
import "../../assets/js/script.js";
import Header from "../components/Header.vue";
import ContactUs from "../components/ContactUs.vue";
import FooterLinks from "../components/FooterLinks.vue";
import Testimonial from "../components/Testimonial.vue";
</script>
<template>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>{{ $t("common.Title") }}</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper main-page">
      <!-- Header -->
      <Header></Header>

      <!-- /Header -->

      <!-- Slider -->
      <section class="slider-section">
        <div class="banner-slider">
          <div class="slider-five"></div>
          <div class="slider-one"></div>
          <div class="slider-two"></div>
          <div class="slider-three"></div>
          <div class="slider-four"></div>
        </div>
      </section>
      <!-- /Slider -->

      <!-- Path Section -->
      <section class="path-section">
        <div class="container">
          <div class="path-search aos" data-aos="fade-up">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="path-group">
                  <img
                    :src="fullImageUrl('assets/img/icons/path-01.svg')"
                    alt="Icon"
                  />
                  <div class="path-input">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Pick a camp"
                    />
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="path-group">
                  <img
                    :src="fullImageUrl('assets/img/icons/path-02.svg')"
                    alt="Icon"
                  />
                  <div class="path-input">
                    <label>Dates</label>
                    <input
                      type="text"
                      class="form-control bookingrange"
                      placeholder="Jun 20 - Jun 23"
                    />
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="path-group">
                  <img
                    :src="fullImageUrl('assets/img/icons/path-03.svg')"
                    alt="Icon"
                  />
                  <div class="path-input">
                    <label>Travelers</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="2 travelers, 1 room"
                    />
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="path-btn">
                  <button type="submit" class="btn btn-primary">
                    {{ $t("common.Search_Button") }}
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8 offset-md-2 justify-content-center">
              <div class="path-shapes aos" data-aos="fade-up">
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
              <div class="section-header aos" data-aos="fade-up">
                <h2 class="text-white">
                  {{ $t("mainpage.choose_your_ path_ title") }}
                </h2>
              </div>
              <div class="path-content aos" data-aos="fade-up">
                <p>{{ $t("mainpage.choose_your_path_description") }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="path-imgs">
          <div class="path-left aos" data-aos="fade-right">
            <img
              :src="fullImageUrl('assets/img/path-left.png')"
              class="img-fluid"
              alt="Path"
            />
          </div>
          <div class="path-right aos" data-aos="fade-left">
            <img
              :src="fullImageUrl('assets/img/path-right.png')"
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
            <div class="col-md-12">
              <div class="section-header mb-0 aos" data-aos="fade-up">
                <h2>{{ $t("mainpage.Our_Camps_Title") }}</h2>
                <h6>{{ $t("mainpage.Our_Camps_Description") }}</h6>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Camp Section -->

      <!-- Leaf Section -->
      <section class="leaf-section">
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1 aos" data-aos="fade-up">
              <div class="section-header">
                <img
                  :src="fullImageUrl('assets/img/full_colour_logo.png')"
                  class="img-fluid"
                  alt="Leaf"
                />
                <!--	<h2>{{ $t('mainpage.The_Leaf_Title') }}</h2>-->
                <p>{{ $t("mainpage.The_Leaf_description") }}</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="leaf-img">
                <img
                  :src="fullImageUrl('assets/img/leaf-01.png')"
                  class="img-fluid"
                  alt="Leaf"
                />
              </div>
            </div>
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="leaf-img">
                <img
                  :src="fullImageUrl('assets/img/leaf-06.png')"
                  class="img-fluid"
                  alt="Leaf"
                />
              </div>
            </div>
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="leaf-img">
                <img
                  :src="fullImageUrl('assets/img/leaf-07.png')"
                  class="img-fluid"
                  alt="Leaf"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Leaf Section -->

      <!-- Camp Section -->
      <section class="camp-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-img">
                <img
                  :src="fullImageUrl('assets/img/leaf-04.png')"
                  class="img-fluid"
                  alt="Leaf"
                />
              </div>
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-content">
                <p>{{ $t("mainpage.The_Leaf_Find_out_More_Description") }}</p>
              </div>
            </div>
          </div>
          <div class="camp-btn aos" data-aos="fade-up">
            <a href="camps" class="btn btn-primary">{{
              $t("common.Find_out_More_Button")
            }}</a>
          </div>
        </div>
      </section>
      <!-- /Camp Section -->

      <!-- Camp Section 
			<section class="camp-section pt-0">
				<div class="container">
					<div class="row">
						<div class="col-md-12 aos" data-aos="fade-up">
							<div class="section-header mb-0">
								<h2>{{ $t('mainpage.DRB_Nomad_Title') }}</h2>
								<h6>{{ $t('mainpage.DRB_Nomad_Description') }}</h6>
							</div>
						</div>
					</div>
				</div>
			</section>
			 /Camp Section -->

      <!-- Camp Section
			<section class="camp-section camp-bg">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6 aos" data-aos="fade-up">
							<div class="camp-content">
								<p>{{ $t('mainpage.DRB_Nomad_Find_out_More_Description') }}</p>
							</div>
						</div>
						<div class="col-md-6 aos" data-aos="fade-up">
							<div class="camp-img">
								<img :src="fullImageUrl('assets/img/leaf-05.png" class="img-fluid" alt="Leaf">
							</div>
						</div>
					</div>
					<div class="camp-btn">
						<a href="javascript:void(0);" class="btn btn-primary">{{ $t('common.Find_out_More_Button')
							}}</a>
					</div>
				</div>
			</section> -->
      <!-- /Camp Section -->

      <!-- Private -->
      <section class="camp-section private-section">
        <div class="container">
          <div class="private-info">
            <div class="row align-items-center">
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-img">
                  <img
                    :src="fullImageUrl('assets/img/event-01.png')"
                    class="img-fluid"
                    alt="Leaf"
                  />
                </div>
              </div>
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-content">
                  <div class="section-header text-start">
                    <h2 class="text-white">
                      {{ $t("mainpage.Private_Events_Title") }}
                    </h2>
                  </div>
                  <p>{{ $t("mainpage.Private_Events_Description") }}</p>
                </div>
                <div class="private-btn">
                  <a href="events-private" class="btn white-btn">{{
                    $t("common.View_More_Button")
                  }}</a>
                </div>
              </div>
            </div>
          </div>
          <div class="private-info mb-0">
            <div class="row align-items-center">
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-content">
                  <div class="section-header text-start">
                    <h2 class="text-white">
                      {{ $t("mainpage.Corporate_Events_Title") }}
                    </h2>
                  </div>
                  <p>{{ $t("mainpage.Corporate_Events_Description") }}</p>
                </div>
                <div class="private-btn private-btn-right">
                  <a href="events-corporate" class="btn white-btn">{{
                    $t("common.View_More_Button")
                  }}</a>
                </div>
              </div>
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-img">
                  <img
                    :src="fullImageUrl('assets/img/event-02.png')"
                    class="img-fluid"
                    alt="Leaf"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Private Section -->

      <!-- Experience Section -->
      <section class="exp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("mainpage.Experiences_Title") }}</h2>
                <h6>{{ $t("mainpage.Experiences_Description") }}</h6>
              </div>
            </div>
          </div>
          <div class="row align-items-end">
            <div class="col-md-6 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/experiences-img.png')"
                class="img-fluid"
                alt="Experiences"
              />
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="content-info">
                <p>{{ $t("mainpage.Experiences_Description_Right_Para_1") }}</p>
                <p>{{ $t("mainpage.Experiences_Description_Right_Para_2") }}</p>
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
                  <div class="hover-blk">
                    <h4>{{ $t("common.Explore_our_Image_1_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_1_Description") }}</p>
                    <a href="https://drbarabia.book-onlinenow.net/index.aspx" class="btn btn-primary mt-auto" target="_blank">{{
                      $t("common.Book_Now_Button")
                    }}</a>
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
                  <div class="hover-blk">
                    <h4>{{ $t("common.Explore_our_Image_2_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_2_Description") }}</p>
                    <a href="https://drbarabia.book-onlinenow.net/index.aspx" class="btn btn-primary mt-auto"  target="_blank">{{
                      $t("common.Book_Now_Button")
                    }}</a>
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
                  <div class="hover-blk">
                    <h4>{{ $t("common.Explore_our_Image_3_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_3_Description") }}</p>
                    <a href="https://drbarabia.book-onlinenow.net/index.aspx" class="btn btn-primary mt-auto"  target="_blank">{{
                      $t("common.Book_Now_Button")
                    }}</a>
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
                  <div class="hover-blk">
                    <h4>{{ $t("common.Explore_our_Image_4_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_4_Description") }}</p>
                    <a href="https://drbarabia.book-onlinenow.net/index.aspx" class="btn btn-primary mt-auto"  target="_blank">{{
                      $t("common.Book_Now_Button")
                    }}</a>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/hover-5.jpg')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk">
                    <h4>{{ $t("common.Explore_our_Image_5_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_5_Description") }}</p>
                    <a href="https://drbarabia.book-onlinenow.net/index.aspx" class="btn btn-primary mt-auto"  target="_blank">{{
                      $t("common.Book_Now_Button")
                    }}</a>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="camp-btn aos" data-aos="fade-up">
            <a href="experiences" class="btn btn-primary">{{
              $t("common.View_All_Experiences")
            }}</a>
          </div>
        </div>
      </section>
      <!-- /Experience Section -->

      <!-- About Section -->

      <section class="about-section p-0">
        <div class="img-blk">
          <img
            :src="fullImageUrl('assets/img/about-img.jpg')"
            class="img-fluid w-100 h-100"
            alt=""
          />
        </div>
        <div class="content-blk text-start aos" data-aos="fade-up">
          <div class="section-header text-start">
            <h2 class="text-white">
              {{ $t("mainpage.About_DRB_Arabia_Title") }}
            </h2>
          </div>
          <p>{{ $t("mainpage.About_DRB_Arabia_Para_1") }}</p>
          <p>{{ $t("mainpage.About_DRB_Arabia_Para_2") }}</p>
          <div class="private-btn private-btn-right aos" data-aos="fade-up">
            <a href="/aboutus" class="btn white-btn">
              {{ $t("common.View_More_Button") }}
            </a>
          </div>
        </div>
      </section>

      <!-- /About Section -->

      <!-- Testimonial Section -->
      <Testimonial></Testimonial>
      <!-- /Testimonial Section -->

      <!-- Footer -->
      <footer class="footer">
        <ContactUs></ContactUs>
        <FooterLinks></FooterLinks>
      </footer>
      <!-- /Footer -->

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

    <!-- jQuery -->

    <!-- Bootstrap Core JS -->
  </body>
</template>
<script>
//import HomeAboutUs from '../components/Home/AboutUs.vue';
import { Link } from "@inertiajs/vue3";

export default {
  name: "mainpage",
  components: {
    Link,
    Header,
    ContactUs,
    FooterLinks,
    Testimonial,
  },
  beforeMount() {
    this.loadData();
    //this.loadLocaleMessages();
    //alert( this.$i18n.messages.en);
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
  },
  data() {
    return {
      data: null,
      languages: languageData.testimonials,
      testmonnialcount: languageData.testimonials.length,
      baseUrl: window.location.origin,
    };
  },
  methods: {
    async loadData() {
      const fetchurl = window.location.origin + "/langdata";
      const response = await fetch(fetchurl);
      this.data = await response.json();
      //	alert(		this.testmonnialcount);

      this.$i18n.messages.ar = this.data.ar;
      this.$i18n.messages.en = this.data.en;
      //		alert(this.testmonnialcount);
      var count = Object.keys(this.data.en.testimonial).length;
      this.testmonnialcount = count / 2;
      this.footercolumnscount = Object.keys(this.data.en.footercolumn).length;

      //alert(		this.testmonnialcount);
    },
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },
  },
};
</script>
