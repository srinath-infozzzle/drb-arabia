<script setup>
import $ from "jquery";
import Header from "../components/Header.vue";
import Question from "../components/Question.vue";
import FooterLinks from "../components/FooterLinks.vue";
import { Link } from "@inertiajs/vue3";
import languageData from "../../../lang/en/testimonials.json";
import Faqs from "../components/Faqs.vue";
</script>
<template>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>DRB Arabia - FAQ</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper faq-page">
      <!-- Header -->
      <Header></Header>

      <section class="slider-section">
        <div class="banner-slider">
          <div class="slider-thirteen"></div>
        </div>
      </section>

      <section class="faq_section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("common.faqs") }}</h2>
              </div>
            </div>
          </div>
          <Faqs faqcount1="0"></Faqs>
          <!-- <div class="row">
            <div class="col-md-12">
              <div class="faq-wrapper">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="false"
                        aria-controls="collapseOne"
                      >
                        Is there parking located next to the POD?
                      </button>
                    </h2>
                    <div
                      id="collapseOne"
                      class="accordion-collapse collapse show"
                      aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        Yes, for guests staying at Branch 1 and VIP sections,
                        there is convenient parking available right next to the
                        PODs. For guests at Branch 2, a communal parking area is
                        provided, offering easy access to the accommodations.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                      >
                        What is the location of DRB Arabia’s LEAF Glamping site?
                      </button>
                    </h2>
                    <div
                      id="collapseTwo"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        LEAF is beautifully situated in the heart of the King
                        Khalid Royal Reserve, offering guests a perfect blend of
                        natural beauty and luxurious comfort.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                      >
                        Is it possible to visit DRB Arabia’s destinations
                        without prior reservations?
                      </button>
                    </h2>
                    <div
                      id="collapseThree"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        While it is possible, we highly recommend making
                        reservations in advance to ensure availability and to
                        guarantee the best possible experience.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseFour"
                        aria-expanded="false"
                        aria-controls="collapseFour"
                      >
                        What is the Season period of operation annually?
                      </button>
                    </h2>
                    <div
                      id="collapseFour"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        Our destinations are operational from September 1st
                        until April 30th each year, aligning with the most
                        favorable weather conditions.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseFive"
                        aria-expanded="false"
                        aria-controls="collapseFive"
                      >
                        What are the standard check-in and check-out times?
                      </button>
                    </h2>
                    <div
                      id="collapseFive"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        Check-in is typically at 10 AM. Check-out is at 2 PM,
                        giving you ample time to enjoy your final day before
                        departure.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseSix"
                        aria-expanded="false"
                        aria-controls="collapseSix"
                      >
                        Can the Camp accommodate different diets?
                      </button>
                    </h2>
                    <div
                      id="collapseSix"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        Absolutely, our team is experienced in catering to a
                        wide range of dietary preferences and requirements. We
                        do ask for advanced notice to prepare the best possible
                        options for your stay.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven"
                        aria-expanded="false"
                        aria-controls="collapseSeven"
                      >
                        Are there other meal options available - lunch boxes,
                        etc.?
                      </button>
                    </h2>
                    <div
                      id="collapseSeven"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        Yes, we offer lunch boxes available upon pre-booking,
                        and cook-in-a-bag meal options are also available for
                        those who prefer a more flexible dining experience
                        during their stay.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse8"
                        aria-expanded="false"
                        aria-controls="collapse8"
                      >
                        Is Wi-Fi available in the room? Is it free or paid?
                      </button>
                    </h2>
                    <div
                      id="collapse8"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        Yes, complimentary Wi-Fi is available in all rooms,
                        ensuring you stay connected during your retreat.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse9"
                        aria-expanded="false"
                        aria-controls="collapse9"
                      >
                        Can the adventure packages be customized?
                      </button>
                    </h2>
                    <div
                      id="collapse9"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        Absolutely! All of our adventure packages can be
                        tailored to meet your specific interests and needs,
                        providing a truly personalized experience.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse10"
                        aria-expanded="false"
                        aria-controls="collapse10"
                      >
                        Are there any cultural events and performances?
                      </button>
                    </h2>
                    <div
                      id="collapse10"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        Yes, cultural events and performances are a part of our
                        offerings. The schedule will be available on our social
                        media channels and website, so you can plan your stay
                        around these enriching experiences.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse11"
                        aria-expanded="false"
                        aria-controls="collapse11"
                      >
                        Can people organize their own events at your facilities?
                      </button>
                    </h2>
                    <div
                      id="collapse11"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        Yes, guests are welcome to organize their own events,
                        though we provide guidelines to ensure that everything
                        aligns with the venue’s offerings and standards.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse12"
                        aria-expanded="false"
                        aria-controls="collapse12"
                      >
                        Are DRB Arabia’s destinations accessible for guests with
                        disabilities?
                      </button>
                    </h2>
                    <div
                      id="collapse12"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        We strive to make our destinations as accessible as
                        possible. Accommodations and activities are designed to
                        cater to guests with various needs, and we invite you to
                        contact us to discuss specific accessibility
                        requirements.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse13"
                        aria-expanded="false"
                        aria-controls="collapse13"
                      >
                        What safety measures are in place for adventure
                        activities?
                      </button>
                    </h2>
                    <div
                      id="collapse13"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        Safety is our top priority. All activities are
                        supervised by trained professionals, and we provide all
                        necessary safety equipment. Additionally, detailed
                        safety briefings are given before each activity to
                        ensure a secure experience.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse14"
                        aria-expanded="false"
                        aria-controls="collapse14"
                      >
                        Is medical assistance available at DRB Arabia
                        destinations?
                      </button>
                    </h2>
                    <div
                      id="collapse14"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        Yes, medical assistance is available. We have first-aid
                        facilities on-site and trained staff ready to assist.
                        For more serious issues, we have arrangements with
                        nearby medical facilities to ensure prompt care.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </section>

      <section class="faq_question_section">
        <Question></Question>
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
  name: "faq",
  components: {
    Link,
    Header,
    Question,
  },
  beforeMount() {
    this.loadData();
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
      /*testimonials:      
         
          [
            { name: 'John Doe', description: 'This service was amazing!' },
            { name: 'Jane Smith', description: 'I had a fantastic experience!' },
            { name: 'Alice Johnson', description: 'Highly recommend to everyone!' },
          ],*/
      data: null,
      languages: languageData.testimonials,
    };
  },
};
</script>
