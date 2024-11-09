<script setup>
import $ from "jquery";
import Header from "../components/Header.vue";
import ContactUs from "../components/ContactUs.vue";
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
    <title>DRB Arabia - Experiences</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper experiences-page">
      <!-- Header -->
      <Header></Header>

      <section class="slider-section">
        <div class="banner-slider">
          <div class="slider-five"></div>
          <!--				<div class="slider-one"></div>
					<div class="slider-two"></div>
					<div class="slider-three"></div>
					<div class="slider-four"></div> -->
        </div>
      </section>

      <section
        class="experiences-path-section path-section pb-100 dark-section"
        style="padding-bottom: 200px; height: 480px"
      >
        <div class="container">
          <CampSearch></CampSearch>

          <div class="row">
            <div
              class="col-md-10 offset-md-1 text-center justify-content-center"
            >
              <div class="section-header aos" data-aos="fade-up">
                <h2 class="text-white">
                  {{ $t("experiences.Experiences_Title") }}
                </h2>
              </div>
              <div class="path-content aos" data-aos="fade-up">
                <p>{{ $t("experiences.Experiences_Description") }}</p>
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

      <section class="bg-image">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="content-info">
                <!--		<h3>Find Balance and Renewal in Nature</h3>
							<p>It's important to slow down and reconnect with nature to refresh both mind and body. Enjoy the peace, breathe deeply, and let the natural surroundings bring you back to a state of balance and well-being.</p> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Where Comfort Meets Adventure -->

      <section class="exp-section custom-pb0">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("experiences.Comfort_Meets_Title") }}</h2>
                <h6>{{ $t("experiences.Comfort_Meets_Description") }}</h6>
              </div>
            </div>
          </div>

          <!-- An Authentic outdoor seating area -->
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/experiences-img1.png')"
                class="img-fluid"
                alt="Experiences"
              />
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="content-info outdoor-seating-area">
                <h2>
                  {{ $t("experiences.Comfort_Meets_Para_Title") }}
                </h2>
                <p>{{ $t("experiences.Comfort_Meets_Para_Description") }}</p>
                <!--	<p>{{ $t('mainpage.Experiences_Description_Right_Para_2') }}</p> -->
              </div>
            </div>
            <!-- An Authentic outdoor seating area -->
          </div>
        </div>
      </section>
      <!-- Where Comfort Meets Adventure -->

      <!--	<section class="exp-section">
			<div class="container">
				<div class="row align-items-end">
						<div class="col-md-6 aos" data-aos="fade-up">
							<img :src="fullImageUrl('/img/experiences-img.png" class="img-fluid" alt="Experiences">
						</div>
						<div class="col-md-6 aos" data-aos="fade-up">
							<div class="content-info">
								<p>{{ $t('mainpage.Experiences_Description_Right_Para_1') }}</p>
								<p>{{ $t('mainpage.Experiences_Description_Right_Para_2') }}</p>
							</div>
						</div>
					</div>

			</div>
			</section> 


			<section class="camp-section">
				<div class="container">

					<div class="row align-items-center">
						<div class="col-md-6 aos" data-aos="fade-up">
							<div class="camp-img">
								<img :src="fullImageUrl('/img/experice_where.png" class="img-fluid" alt="Leaf">
							</div>
						</div>
						<div class="col-md-6 aos" data-aos="fade-up">
							<div class="camp-content" style="padding-left: 60px;">
								<h2> {{ $t('experiences.Right_Title') }}</h2>
								<p>
									{{ $t('experiences.Right_Description') }}

								</p>
							</div>
						</div>
					</div>
				</div>
			</section>-->

      <!-- Family activites -->

      <!-- Path Section -->

      <!-- Experience Section -->

      <!-- compass_adventure_hub -->
      <section class="exp-section">
        <div class="container">
          <div class="row mt-5">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("experiences.compass_adventure_hub") }}</h2>
                <h6>
                  {{ $t("experiences.compass_adventure_hub_description") }}
                </h6>
              </div>
            </div>
          </div>
          <div class="row">
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
          </div>

          <div class="row justify-content-center">
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
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/adventure_hub6.png')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>
                      {{ $t("common.Treasure_Hunting_Title") }}
                    </h4>
                    <p>
                      {{ $t("common.Treasure_Hunting_Description") }}
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
        </div>
      </section>
      <!-- compass_adventure_hub -->
      <!-- /Experience Section -->

      <!-- Camp Section -->
      <!-- majlis -->
      <section class="camp-section bg-style1">
        <div class="container">
          <div class="row majlis-p">
            <div class="col-md-6 text-center justify-content-center majlis-p">
              <div class="section-header aos" data-aos="fade-up">
                <h2 class="text-white">{{ $t("experiences.Majlis_Title") }}</h2>
              </div>
              <div class="path-content aos" data-aos="fade-up">
                <p>{{ $t("experiences.Majlis_Para1_Description") }}</p>
                <p>&nbsp;</p>
                <p class="majlis-p">
                  {{ $t("experiences.Majlis_Para2_Description") }}
                </p>
                <div class="d-flex justify-content-center gap-5"></div>
                <!-- <a href="javascript:void(0);" class="btn btn-primary">{{
                  $t("common.View_All_Button")
                }}</a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="path-imgs majlis-images">
          <div class="path-left aos" data-aos="fade-right">
            <img
              :src="fullImageUrl('assets/img/exp-left.png')"
              class="img-fluid"
              alt="Path"
            />
          </div>
          <div class="path-right aos" data-aos="fade-left">
            <img
              :src="fullImageUrl('assets/img/exp-left.png')"
              class="img-fluid"
              alt="Path"
            />
          </div>
        </div>
      </section>
      <!-- majlis -->
      <!--Activities for kids Section-->

      <!--Nature activities section

			<section class="experience-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 aos" data-aos="fade-up">
							<div class="section-header">
								<h2> Nature activities</h2>
								<h6> Immerse yourself in the beauty of the natural world with our variety of
									nature-focused activities and connect with the outdoors in a meaningful and
									refreshing way.</h6>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-md-4 aos" data-aos="fade-up">
							<div class="hover-wrapper">
								<a href="javascript:;" class="hover-main">
									<img :src="fullImageUrl('/img/hover-2.jpg" alt="" class="img-fluid" />
									<div class="hover-blk">
										<h4>{{ $t('mainpage.Explore_our_Image_1_Title') }}</h4>
										<p>{{ $t('mainpage.Explore_our_Image_1_Description') }}</p>
										<a href="bookevent" class="btn btn-primary mt-auto">Book now</a>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 aos" data-aos="fade-up">
							<div class="hover-wrapper">
								<a href="javascript:;" class="hover-main">
									<img :src="fullImageUrl('/img/variant 1.png" alt="" class="img-fluid" />
									<div class="hover-blk">
										<h4>{{ $t('mainpage.Explore_our_Image_2_Title') }}</h4>
										<p>{{ $t('mainpage.Explore_our_Image_2_Description') }}</p>
										<a href="javascript:;" class="btn btn-primary mt-auto">{{
											$t('common.Book_Now_Button') }}</a>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 aos" data-aos="fade-up">
							<div class="hover-wrapper">
								<a href="javascript:;" class="hover-main">
									<img :src="fullImageUrl('/img/hover-3.png" alt="" class="img-fluid" />
									<div class="hover-blk">
										<h4>{{ $t('mainpage.Explore_our_Image_3_Title') }}</h4>
										<p>{{ $t('mainpage.Explore_our_Image_3_Description') }}</p>
										<a href="javascript:;" class="btn btn-primary mt-auto">{{
											$t('common.Book_Now_Button') }}</a>
									</div>
								</a>
							</div>
						</div>

					</div>
					<div class="camp-btn aos" data-aos="fade-up">
						<a href="javascript:void(0);" class="btn btn-primary">See More</a>
					</div>
				</div>
			</section>

		-->

      <!--

			<section class="experience-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 aos" data-aos="fade-up">
							<div class="section-header">
								<h2> Activities on demand</h2>
								<h6>
									Enjoy meaningful moments with your loved ones through our thoughtfully designed family activities. These experiences are crafted to bring families closer together in a fun and engaging way. </h6>
							</div>
						</div>
					</div>


					<div class="row">


						<div class="leaf-slider">
							<div class="hover-wrapper">
								<a href="javascript:;" class="hover-main">
									<img :src="fullImageUrl('/img/wellenss12.png" alt="" class="img-fluid" />
									<div class="hover-blk">
										<h4>{{ $t('mainpage.Explore_our_Image_1_Title') }}</h4>
										<p>{{ $t('mainpage.Explore_our_Image_1_Description') }}</p>
										<a href="javascript:;" class="btn btn-primary mt-auto">Book now</a>
									</div>
								</a>
							</div>
							<div class="hover-wrapper">
								<a href="javascript:;" class="hover-main">
									<img :src="fullImageUrl('/img/hover-2.jpg" alt="" class="img-fluid" />
									<div class="hover-blk">
										<h4>{{ $t('mainpage.Explore_our_Image_2_Title') }}</h4>
										<p>{{ $t('mainpage.Explore_our_Image_2_Description') }}</p>
										<a href="javascript:;" class="btn btn-primary mt-auto">{{
											$t('common.Book_Now_Button') }}</a>
									</div>
								</a>
							</div>
							<div class="hover-wrapper">
								<a href="javascript:;" class="hover-main">
									<img :src="fullImageUrl('/img/wellness31.png" alt="" class="img-fluid" />
									<div class="hover-blk">
										<h4>{{ $t('mainpage.Explore_our_Image_3_Title') }}</h4>
										<p>{{ $t('mainpage.Explore_our_Image_3_Description') }}</p>
										<a href="javascript:;" class="btn btn-primary mt-auto">{{
											$t('common.Book_Now_Button') }}</a>
									</div>
								</a>
							</div>
							<div class="hover-wrapper">
								<a href="javascript:;" class="hover-main">
									<img :src="fullImageUrl('/img/wellenss12.png" alt="" class="img-fluid" />
									<div class="hover-blk">
										<h4>{{ $t('mainpage.Explore_our_Image_1_Title') }}</h4>
										<p>{{ $t('mainpage.Explore_our_Image_1_Description') }}</p>
										<a href="javascript:;" class="btn btn-primary mt-auto">Book now</a>
									</div>
								</a>
							</div>

						</div>


					</div>
					<div class="camp-btn aos" data-aos="fade-up">
						<a href="javascript:void(0);" class="btn btn-primary">See More</a>
					</div>
				</div>
			</section>-->

      <!--Memories Made in Every Moment section-->

      <!--
      <section class="experience-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("experiences.Memories_Title") }}</h2>
                <h6>{{ $t("experiences.Memories_Description") }}</h6>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/memories1.png')"
                alt=""
                class="img-fluid"
              />
            </div>

            <div class="col-md-3 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/memories21.png')"
                alt=""
                class="img-fluid"
              />
              <img
                :src="fullImageUrl('assets/img/memories22.png')"
                alt=""
                class="img-fluid"
                style="margin-top: 30px"
              />
            </div>
            <div class="col-md-3 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/memories3.png')"
                alt=""
                class="img-fluid"
              />
            </div>
            <div class="col-md-3 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/memories41.png')"
                alt=""
                class="img-fluid"
              />
              <img
                :src="fullImageUrl('assets/img/memories42.png')"
                alt=""
                class="img-fluid"
                style="margin-top: 30px"
              />
            </div>
          </div>
        </div>
      </section>
      -->

      <!-- /Camp Section -->

      <section class="experience-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("camps.Memories_Title") }}</h2>
                <h6>{{ $t("camps.Memories_Description") }}</h6>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 aos custom-margin-top" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/memories1.png')"
                alt=""
                class="img-fluid custom-width100"
              />
            </div>
            <div class="col-md-3 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/memories2.jpg')"
                alt=""
                class="img-fluid custom-width100 custom-mt30"
              />
              <img
                :src="fullImageUrl('assets/img/memories4.jpg')"
                alt=""
                class="img-fluid custom-width100"
                style="margin-top: 30px"
              />
            </div>
            <div class="col-md-3 aos custom-margin-top2" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/memories5.jpg')"
                alt=""
                class="img-fluid custom-width100 custom-mt30"
              />
            </div>
            <div class="col-md-3 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/memories6.jpg')"
                alt=""
                class="img-fluid custom-width100 custom-mt30"
              />
              <img
                :src="fullImageUrl('assets/img/memories7.jpg')"
                alt=""
                class="img-fluid custom-width100"
                style="margin-top: 30px"
              />
            </div>
          </div>
        </div>
      </section>

      <!-- kids-playground -->
      <section class="about-section p-0 custom-row-reverse">
        <div class="img-blk">
          <img
            :src="fullImageUrl('assets/img/exp-kids-playground.jpg')"
            class="img-fluid w-100 h-100"
            alt=""
          />
        </div>
        <div class="content-blk text-start aos" data-aos="fade-up">
          <div class="section-header text-start">
            <h2 class="text-white custom-right-align">
              {{ $t("experiences.Kids_Playground_Title") }}
            </h2>
          </div>
          <p>{{ $t("experiences.Kids_Playground_Description") }}</p>
          <!--	<p>{{ $t('mainpage.About_DRB_Arabia_Para_2') }}</p>-->
        </div>
      </section>
      <!-- kids-playground -->

      <!-- Testimonial Section -->

      <Testimonial></Testimonial>

      <!-- /Testimonial Section -->

      <footer class="footer">
        <ContactUs></ContactUs>
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
  name: "experiences",
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
      data: null,
      languages: languageData.testimonials,
      baseUrl: window.location.origin,
    };
  },
  methods: {
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },

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
  },
};
</script>
