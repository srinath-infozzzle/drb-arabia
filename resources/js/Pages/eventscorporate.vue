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
    <title>DRB Arabia - Corporate Events</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper corporate-page">
      <!-- Header -->
      <Header></Header>

      <section class="slider-section">
        <div class="banner-slider">
          <div class="slider-twelve"></div>
        </div>
      </section>

      <section
        class="path-section pb-100"
        style="padding-bottom: 200px; height: 480px"
      >
        <div class="container">
          <!-- <CampSearch></CampSearch> -->

          <div class="row">
            <div
              class="col-md-10 offset-md-1 text-center justify-content-center"
            >
              <div class="section-header aos" data-aos="fade-up">
                <h2 class="text-white">
                  {{ $t("eventscorporate.Corporate_Events_Title") }}
                </h2>
              </div>
              <div class="path-content aos" data-aos="fade-up">
                <p style="text-align: center">
                  {{ $t("eventscorporate.Corporate_Events_Description") }}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="path-imgs" style="margin-top: -50px">
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

      <!--
            <section class="events-path-section">


                <div class="row">
                    <div class="col-md-12">

                        <div class="path-shapes aos" data-aos="fade-up">
                            <img :src="fullImageUrl('assets/img/shape-01.png" class="shape-left" alt="Shape">

                            <img :src="fullImageUrl('assets/img/shape-01.png" class="shape-right" alt="Shape">
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="path-search aos" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="path-group">
                                    <img :src="fullImageUrl('assets/img/icons/path-01.svg" alt="Icon">
                                    <div class="path-input">
                                        <input type="text" class="form-control" placeholder="Pick a camp">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="path-group">
                                    <img :src="fullImageUrl('assets/img/icons/path-02.svg" alt="Icon">
                                    <div class="path-input">
                                        <label>Dates</label>
                                        <input type="text" class="form-control bookingrange"
                                            placeholder="Jun 20 - Jun 23">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="path-group">
                                    <img :src="fullImageUrl('assets/img/icons/path-03.svg" alt="Icon">
                                    <div class="path-input">
                                        <label>Travelers</label>
                                        <input type="text" class="form-control" placeholder="2 travelers, 1 room">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="path-btn">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="row">
                        <div class="col-md-1 path-shapes aos" data-aos="fade-up"
                            style="margin-top: 50px; margin-left: -80px">

                            <img :src="fullImageUrl('assets/img/shape-01.png" class="shape-left" alt="Shape">
                        </div>


                        <div class="col-md-10 offset-md-0 justify-content-center">


                            <div class="section-header aos" data-aos="fade-up">

                                <h2 class="text-white"> {{ $t('eventscorporate.Corporate_Events_Title')  }}   </h2>
                            </div>
                            <div class="path-content aos" data-aos="fade-up">
                                <p style="text-align: center;">{{ $t('eventscorporate.Corporate_Events_Description')  }}   </p>
                            </div>


                        </div>

                        <div class="col-md-1 path-shapes aos" data-aos="fade-up"
                            style="margin-top: 50px;margin-left:80px;">

                            <img :src="fullImageUrl('assets/img/shape-01.png" class="shape-right" alt="Shape">
                        </div>
                    </div>
                    

                </div>



                <div class="row">
                    <div class="col-md-12">

                        <div class="path-shapes aos" data-aos="fade-up">
                            <img :src="fullImageUrl('assets/img/shape-01.png" class="shape-left" alt="Shape">

                            <img :src="fullImageUrl('assets/img/shape-01.png" class="shape-right" alt="Shape">
                        </div>
                    </div>
                </div>


            </section>


		-->

      <!-- Camp Section -->
      <section class="camp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h6 style="margin-top: 0px !important">
                  {{ $t("eventscorporate.Corporate_Events_Para1") }}
                </h6>
              </div>
            </div>
          </div>

          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-img">
                <img
                  :src="fullImageUrl('assets/img/event-03.png')"
                  class="img-fluid custom-flip"
                  alt="Leaf"
                />
              </div>
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-content">
                <p>{{ $t("eventscorporate.Corporate_Events_Right_Para2") }}</p>
                <p style="margin-top: 20px">
                  {{ $t("eventscorporate.Corporate_Events_Right_Para3") }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Camp Section -->

      <section
        class="box-slider-wrapper"
        style="margin-top: 20px; margin-bottom: 30px"
      >
        <div class="container custom-box">
          <div class="row">
            <div class="col-md-12">
              <div class="box-slider">
                <img :src="fullImageUrl('assets/img/corp-box1.jpg')" alt="" />
                <img :src="fullImageUrl('assets/img/corp-box2.jpg')" alt="" />
                <img :src="fullImageUrl('assets/img/corp-box3.jpg')" alt="" />
                <!-- <img :src="fullImageUrl('assets/img/corp-box2.jpg')" alt="" /> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="camp-section">
        <div class="container custom-adjust">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("eventscorporate.plan_with_us_Title") }}</h2>
                <h6>{{ $t("eventscorporate.plan_with_us_Description") }}</h6>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper custom-img-adjust">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/corp-box2.png')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-box-hover custom-right-align">
                    <h4>
                      {{ $t("eventscorporate.Plan_with_us_hover1_Title") }}
                    </h4>
                    <p>
                      {{
                        $t("eventscorporate.Plan_with_us_hover1_Description")
                      }}
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
              <div class="hover-wrapper custom-img-adjust">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/corp-box4.png')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-box-hover custom-right-align">
                    <h4>
                      {{ $t("eventscorporate.Plan_with_us_hover2_Title") }}
                    </h4>
                    <p>
                      {{
                        $t("eventscorporate.Plan_with_us_hover2_Description")
                      }}
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
              <div class="hover-wrapper custom-img-adjust">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/corp-box1.png')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-box-hover custom-right-align">
                    <h4>
                      {{ $t("eventscorporate.Plan_with_us_hover3_Title") }}
                    </h4>
                    <p>
                      {{
                        $t("eventscorporate.Plan_with_us_hover3_Description")
                      }}
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

      <!--

        <section class="exp-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 aos" data-aos="fade-up">
							<div class="section-header">
								<h2>Experiences</h2>
								<h6>We revolutionize the concept of travel by artfully combining exciting and unique adventures with serene wellness retreats in the heart of nature.</h6>
							</div>
						</div>
					</div>
					<div class="row align-items-end">
						<div class="col-md-6 aos" data-aos="fade-up">
							<img :src="fullImageUrl('assets/img/event_exp.png" class="img-fluid" alt="Experiences">
						</div>
						<div class="col-md-6 aos" data-aos="fade-up">
							<div class="content-info">

							
								<p>Our luxurious accommodations serve as the perfect backdrop for these thoughtfully designed experiences, where excitement meets tranquility. Every aspect of our curated journeys is tailored to create a harmonious balance, allowing you to fully immerse yourself in the thrill of exploration while simultaneously rejuvenating your body, mind, and spirit. Whatever you're seeking, our offerings provide the ultimate travel experience, leaving you refreshed and inspired.</p>
							
							</div>
						</div>
					</div>
</div></section>





            <section class="exp-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="box-slider">
							<img :src="fullImageUrl('assets/img/box-1.jpg" alt="">
							<img :src="fullImageUrl('assets/img/box-2.jpg" alt="">
							<img :src="fullImageUrl('assets/img/box-3.jpg" alt="">
							<img :src="fullImageUrl('assets/img/box-1.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>


           	<section class="exp-section">
			<div class="container">
				<div class="row align-items-end">
						<div class="col-md-6 aos" data-aos="fade-up">
							<img :src="fullImageUrl('assets/img/experiences-img.png" class="img-fluid" alt="Experiences">
						</div>
						<div class="col-md-6 aos" data-aos="fade-up">
							<div class="content-info">
								<p>{{ $t('mainpage.Experiences_Description_Right_Para_1') }}</p>
								<p>{{ $t('mainpage.Experiences_Description_Right_Para_2') }}</p>
							</div>
						</div>
					</div>

			</div>
			</section> -->

      <!-- Camp Section -->

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

      <!-- /Experiences Section -->

      <section class="exp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("eventscorporate.Experiences_Title") }}</h2>
                <h6 class="custom-hfont">
                  {{ $t("eventscorporate.Experiences_Description") }}
                </h6>
              </div>
            </div>
          </div>
          <div class="row align-items-end custom-row-reverse">
            <div class="col-md-6 aos text-center" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/camp-experiences-img.png')"
                class="img-fluid"
                alt="Experiences"
                style="width: 80%"
              />
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="content-info">
                <p>
                  {{ $t("eventscorporate.Experiences_Right_Para") }}
                </p>
                <p style="margin-top: 50px">&nbsp;</p>
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

          <!-- <div class="camp-btn aos" data-aos="fade-up">
            <a href="experiences" class="btn btn-primary">View All</a>
          </div> -->
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
  name: "eventscorporate",
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
  },

  // if ($(".box-slider").length > 0) {
  //   $(".box-slider").slick({
  //     dots: false,
  //     autoplay: true,
  //     infinite: true,
  //     slidesToShow: 3,
  //     slidesToScroll: 1,
  //   });
  // }

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
