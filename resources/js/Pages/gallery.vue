<script setup>
import $ from "jquery";
import Header from "../components/Header.vue";
import Question from "../components/Question.vue";
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
    <title>DRB Arabia - Gallery</title>
  </head>

  <body>
    <div class="main-wrapper gallery-page">
      <Header></Header>
      <section class="slider-section pb-0">
        <div class="banner-slider">
          <div class="slider-eight"></div>
          <!--	<div class="slider-two"></div>
				<div class="slider-three"></div>
				<div class="slider-four"></div>-->
        </div>
      </section>
      <!--:alt="image.alt" grid-gallery
 -->
      <section class="camp-section gallery-grid-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("gallery.Experience_The_Magic_Title") }}</h2>
              </div>
            </div>
          </div>

          <div class="grid-gallery" ref="lightGallery">
            <div class="grid-item" data-src="assets/img/gallery/gallery-1.jpg">
              <a :href="fullImageUrl('assets/img/gallery/gallery-1.jpg')">
                <img
                  :src="fullImageUrl('assets/img/gallery/gallery-1.jpg')"
                  alt="image1"
                />
              </a>
            </div>
            <a
              :href="fullImageUrl('assets/img/gallery/gallery-2.jpg')"
              class="grid-item"
            >
              <img
                :src="fullImageUrl('assets/img/gallery/gallery-2.jpg')"
                alt="image2"
              />
            </a>
            <a
              :href="fullImageUrl('assets/img/gallery/gallery-3.jpg')"
              class="grid-item"
            >
              <img
                :src="fullImageUrl('assets/img/gallery/gallery-3.jpg')"
                alt="image3"
              />
            </a>

            <a
              :href="fullImageUrl('assets/img/gallery/gallery-4.jpg')"
              class="grid-item"
            >
              <img :src="fullImageUrl('assets/img/gallery/gallery-4.jpg')" />
            </a>
            <a
              :href="fullImageUrl('assets/img/gallery/gallery-5.jpg')"
              class="grid-item"
            >
              <img :src="fullImageUrl('assets/img/gallery/gallery-5.jpg')" />
            </a>

            <a
              :href="fullImageUrl('assets/img/gallery/gallery-6.jpg')"
              class="grid-item"
            >
              <img :src="fullImageUrl('assets/img/gallery/gallery-6.jpg')" />
            </a>
          </div>

          <div class="gallery-last">
            <a
              :href="fullImageUrl('assets/img/gallery/gallery-7.jpg')"
              class="grid-item"
            >
              <img :src="fullImageUrl('assets/img/gallery/gallery-7.jpg')" />
            </a>

            <a
              :href="fullImageUrl('assets/img/gallery/gallery-8.jpg')"
              class="grid-item"
            >
              <img :src="fullImageUrl('assets/img/gallery/gallery-8.jpg')" />
            </a>

            <a
              :href="fullImageUrl('assets/img/gallery/gallery-9.jpg')"
              class="grid-item"
            >
              <img :src="fullImageUrl('assets/img/gallery/gallery-9.jpg')" />
            </a>
          </div>
        </div>
      </section>

      <section class="banner-section">
        <div class="container">
          <img
            :src="fullImageUrl('assets/img/gallerybanner.png')"
            style="width: 100%"
          />
        </div>
      </section>

      <footer class="footer">
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
//import lightGallery from 'lightgallery';
//import 'lightgallery/css/lightgallery.css';

export default {
  name: "gallery",
  data() {
    return {
      baseUrl: window.location.origin,
      data: null,
    };
  },
  beforeMount() {
    this.loadData();
  },
  mounted() {
    lightGallery(this.$refs.lightGallery, {
      mode: "lg-slide",
      cssEasing: "ease",
      speed: 600,
      // Add more options here
    });
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

<style scoped>
/*.gallery {
	display: flex;
	flex-wrap: wrap;
	justify-content: flex-start; 

}

.gallery-item {
	margin: 5px;
	
}


.gallery img {
	max-width: 100%;
	height: auto;
	border-radius: 4px;
	cursor: pointer;
	display: block;
	position: relative;
}
*/

.grid-gallery {
  width: 100%;
  max-width: 1320px;
  margin: 0 auto;
  padding: 0px 0px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  grid-auto-rows: 250px;
  grid-auto-flow: dense;
  grid-gap: 20px;
}

.grid-gallery .grid-item {
  position: relative;
  background-color: #efefef;
  overflow: hidden;
}

.grid-gallery .grid-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.grid-gallery .grid-item:hover img {
  transform: scale(1.1);
}

.grid-gallery .grid-item a {
  cursor: zoom-in;
}

.grid-gallery .grid-item:nth-child(10n - 9) {
  grid-column: span 2;
  grid-row: span 2;
}

.grid-gallery .grid-item:nth-child(10n - 8) {
  grid-column: span 2;
}

.grid-gallery .grid-item:nth-child(10n - 7) {
  grid-row: span 2;
}

.grid-gallery .grid-item:nth-child(10n - 6) {
  grid-row: span 2;
}

.grid-gallery .grid-item:nth-child(10n - 5) {
  grid-column: span 2;
  grid-row: span 2;
}

.grid-gallery .grid-item:nth-child(10n - 4) {
  grid-column: span 2;
}

.grid-gallery .grid-item:nth-child(10n - 3) {
  grid-row: span 2;
}

.grid-gallery .grid-item:nth-child(10n - 2) {
  grid-row: span 2;
}

.grid-gallery .grid-item:nth-child(10n - 1) {
  grid-row: span 2;
}

.grid-gallery .grid-item:nth-child(10n - 0) {
  grid-row: span 2;
}

/* Let's make it responsive */
@media (max-width: 768px) {
  .grid-gallery {
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-auto-rows: 250px;
  }

  .grid-gallery .grid-item:nth-child(3n - 2) {
    grid-column: unset;
    grid-row: unset;
  }
}
</style>
