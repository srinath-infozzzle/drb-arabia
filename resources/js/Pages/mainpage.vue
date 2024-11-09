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
import DateRangePicker from "../components/DateRangePicker.vue";
import CampSearch from "../components/CampSearch.vue";
</script>
<template>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>DRB Arabia</title>

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
          <div class="slider-main"></div>
          <!-- <div class="slider-one"></div>
          <div class="slider-two"></div>
          <div class="slider-three"></div> -->
          <!--<div class="slider-four"></div>-->
        </div>
      </section>
      <!-- /Slider -->

      <!-- Path Section -->
      <section class="path-section">
        <div class="container">
          <CampSearch></CampSearch>

          <!--    <div class="path-search aos" data-aos="fade-up">
                        <div class="row custom-row-reverse">
                            <div class="col-lg-3 col-md-6">
                                <div class="path-group">
                                    <img
                                        :src="
                                            fullImageUrl(
                                                'assets/img/icons/path-01.svg'
                                            )
                                        "
                                        alt="Icon"
                                    />
                                    <div class="path-input">
                    

                                        <select
                                            class="form-control"
                                            id="camp"
                                            name="camp"
                                            v-model="selectedCamp"
                                        >
                                            <option value="the leaf">
                                                The Leaf
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="path-group">
                                    <img
                                        :src="
                                            fullImageUrl(
                                                'assets/img/icons/path-02.svg'
                                            )
                                        "
                                        alt="Icon"
                                    />
                                    <div class="path-input">
                                        <label>Dates</label>
                                        <DateRangePicker
                                            @setStartdate="getStartdate"
                                            @setEnddate="getEnddate"
                                        ></DateRangePicker>
               

                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="path-group">
                                    <img
                                        :src="
                                            fullImageUrl(
                                                'assets/img/icons/path-03.svg'
                                            )
                                        "
                                        alt="Icon"
                                    />
                                    <div class="path-input">
                                        <label>Travelers</label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="2 Adult, 1 Kids"
                                            value="0 Adult, 0 Kids"
                                            @click="toggleTravellerPickers"
                                            ref="Travellers"
                                        />
                                    </div>
                                    <div
                                        v-show="showTravellerPickers"
                                        class="date-picker-container"
                                    >
                                       
                                        <label>Adults</label>
                                        <input
                                            type="number"
                                            v-model="adults"
                                            class="form-control"
                                            placeholder="Adults"
                                            @input="handleTravellerChange"
                                            ref="adults"
                                        />

                                       
                                        <label>Kids</label>
                                        <input
                                            type="number"
                                            v-model="kids"
                                            class="form-control"
                                            @input="handleTravellerChange"
                                            placeholder="Kids"
                                            ref="kids"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="path-btn">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                        @click="buildAndRedirectUrl"
                                    >
                                        {{ $t("common.Search_Button") }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> -->

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
                <h2 class="text-white custom-rtl">
                  {{ $t("mainpage.choose_your_ path_ title") }}
                </h2>
              </div>
              <div class="path-content aos" data-aos="fade-up">
                <p class="majlis-p custom-rtl">
                  {{ $t("mainpage.choose_your_path_description") }}
                </p>
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

      <div></div>

      <!-- Camp Section -->
      <section class="camp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header mb-0 aos" data-aos="fade-up">
                <h2>{{ $t("mainpage.Our_Camps_Title") }}</h2>
                <h6 class="custom-hfont">
                  {{ $t("mainpage.Our_Camps_Description") }}
                </h6>
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
                  class="img-fluid leaf-img-en"
                  alt="Leaf"
                />
                <img
                  :src="fullImageUrl('assets/img/the_leaf_ar.png')"
                  class="img-fluid leaf-img-ar"
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
      <section class="camp-section custom-rtl">
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
                <p class="custom-right-align">
                  {{ $t("mainpage.The_Leaf_Find_out_More_Description") }}
                </p>
              </div>
            </div>
          </div>
          <div class="camp-btn aos" data-aos="fade-up">
            <a href="camps-leaf" class="btn btn-primary">{{
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
								<img :src="fullImageUrl('assets/img/leaf-05.png')" class="img-fluid" alt="Leaf">
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
      <section class="camp-section private-section custom-rtl">
        <div class="container">
          <div class="private-info">
            <div class="row align-items-center">
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-img custom-flip">
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
                    <h2 class="text-white custom-right-align">
                      {{ $t("mainpage.Private_Events_Title") }}
                    </h2>
                  </div>
                  <p class="custom-right-align">
                    {{ $t("mainpage.Private_Events_Description") }}
                  </p>
                </div>
                <div class="private-btn custom-right-align">
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
                    <h2 class="text-white custom-right-align">
                      {{ $t("mainpage.Corporate_Events_Title") }}
                    </h2>
                  </div>
                  <p class="custom-right-align">
                    {{ $t("mainpage.Corporate_Events_Description") }}
                  </p>
                </div>
                <div class="private-btn private-btn-right custom-right-align">
                  <a href="events-corporate" class="btn white-btn">{{
                    $t("common.View_More_Button")
                  }}</a>
                </div>
              </div>
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-img custom-flip">
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
                <h6 class="custom-hfont2">
                  {{ $t("mainpage.Experiences_Description") }}
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
                <p class="custom-right-align">
                  {{ $t("mainpage.Experiences_Description_Right_Para_1") }}
                </p>
                <p class="custom-right-align">
                  {{ $t("mainpage.Experiences_Description_Right_Para_2") }}
                </p>
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
          </div>
          <div class="camp-btn aos" data-aos="fade-up">
            <a href="/experiences" class="btn btn-primary">{{
              $t("common.View_All_Experiences")
            }}</a>
          </div>
        </div>
      </section>
      <!-- /Experience Section -->

      <!-- About Section -->

      <section class="about-section p-0 custom-rtl">
        <div class="img-blk">
          <img
            :src="fullImageUrl('assets/img/about-img.jpg')"
            class="img-fluid w-100 h-100"
            alt=""
          />
        </div>
        <div class="content-blk text-start aos" data-aos="fade-up">
          <div class="section-header text-start custom-right-align">
            <h2 class="text-white">
              {{ $t("mainpage.About_DRB_Arabia_Title") }}
            </h2>
          </div>
          <p>{{ $t("mainpage.About_DRB_Arabia_Para_1") }}</p>
          <p>{{ $t("mainpage.About_DRB_Arabia_Para_2") }}</p>
          <div
            class="private-btn private-btn-right aos custom-right-align"
            data-aos="fade-up"
          >
            <a href="/aboutus" class="btn white-btn">
              {{ $t("common.Read_More_Button") }}
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
    <div></div>
  </body>
</template>
<script scoped>
//import DateRangePicker from "vue-daterange-picker";
//import "vue-daterange-picker/dist/vue-daterange-picker.css";

import { ref, onMounted, onBeforeUnmount } from "vue";
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
  data() {
    return {
      data: null,
      languages: languageData.testimonials,
      testmonnialcount: languageData.testimonials.length,
      baseUrl: window.location.origin,
      dateRange: "", // This will hold the selected date range
      showDatePickers: false,
      showTravellerPickers: false,
      startDate: null,
      endDate: null,
      startDate1: null,
      endDate1: null,
      selectedCamp: "The Leaf",
    };
  },
  methods: {
    async loadData() {
      const fetchurl = window.location.origin + "/langdata";
      const response = await fetch(fetchurl);
      this.data = await response.json();
      this.$i18n.messages.ar = this.data.ar;
      this.$i18n.messages.en = this.data.en;
      const count = Object.keys(this.data.en.testimonial).length;
      this.testmonnialcount = count / 2;
      this.footercolumnscount = Object.keys(this.data.en.footercolumn).length;
    },
    toggleDatePickers() {
      // Toggle the visibility of the date pickers
      this.showDatePickers = !this.showDatePickers;
    },
    toggleTravellerPickers() {
      this.showTravellerPickers = !this.showTravellerPickers;
    },
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },
    validateDateRange() {
      if (this.startDate && this.endDate) {
        if (new Date(this.startDate) > new Date(this.endDate)) {
          alert("End date cannot be earlier than start date.");
          this.endDate = ""; // Reset end date if invalid
        }
      }
    },
    formatDate(date) {
      const options = { month: "short", day: "numeric" };
      return new Date(date).toLocaleDateString("en-US", options);
    },
    getFormattedDateRange() {
      if (this.startDate && this.endDate) {
        return `${this.formatDate(this.startDate)} TO ${this.formatDate(
          this.endDate
        )}`;
      }
      return "Select a date range";
    },
    buildAndRedirectUrl() {
      // Helper function to format the date from yyyy-mm-dd to dd/mm/yyyy

      // Get the values from the input fields
      const adults = this.$refs.adults.value;
      const kids = this.$refs.kids.value;

      // Format the dates
      const formattedStartDate = this.startDate1;
      const formattedEndDate = this.endDate1;
      const rooms = this.selectedCamp == "Pick a camp" ? "" : this.selectedCamp;

      // Construct the URL using the retrieved values
      const baseSearchUrl = "https://drbarabia.book-onlinenow.net/index.aspx";

      /*    const url = `${baseUrl}?arrival=${encodeURIComponent(formattedStartDate)}&departure=${encodeURIComponent(formattedEndDate)}&
rooms=${encodeURIComponent(rooms)}&adults=${encodeURIComponent(adults)}&kids=${encodeURIComponent(kids)}`;

*/

      const url = `${baseSearchUrl}?arrival=${formattedStartDate}&departure=${formattedEndDate}&
rooms=1&selectedroom=${rooms}&adults=${adults}&kids=${kids}`;

      // Redirect the user to the constructed URL in a new tab
      window.open(url, "_blank");
    },
    handleTravellerChange(event) {
      const adultscount = this.$refs.adults.value; // Get value from adults input
      const kidscount = this.$refs.kids.value; // Get value from kids input
      this.$refs.Travellers.value = `${adultscount} Adults, ${kidscount} Kids`;
    },
    handleDateChange() {
      const startDate = new Date(this.$refs.StartDate.value); // Get value from Start Date input
      const endDate = new Date(this.$refs.EndDate.value); // Get value from End Date input

      // Format the dates to 'day month'
      const formattedStartDate = startDate.toLocaleDateString("en-GB", {
        day: "numeric",
        month: "short",
      });
      const formattedEndDate = endDate.toLocaleDateString("en-GB", {
        day: "numeric",
        month: "short",
      });

      // Set the formatted value in the dateRangeInput field
      this.$refs.dateRangeInput.value = `${formattedStartDate} - ${formattedEndDate}`;
    },
    getStartdate(data) {
      //alert(data.startDate);
      this.startDate1 = data.startDate;
    },
    getEnddate(data) {
      //alert(data.startDate);

      this.endDate1 = data.endDate;
    },
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
  watch: {
    dateRange(newRange) {
      // Handle the date range change
      console.log("Selected date range:", newRange);
    },
  },
};
</script>
<style scoped>
/* Initially hide the date picker container */
.date-picker-container {
  background: #fff;
  position: absolute;
  width: 100%;
  padding: 10px;
  margin-top: 0px;
  top: 100%;
  z-index: 999;
}

/* Style for the date input */
.path-input input[type="text"] {
  cursor: pointer;
}

/* Style for form control (optional customization) */
.form-control {
  margin-bottom: 10px;
}
.path-search {
  z-index: 9999;
}
</style>
