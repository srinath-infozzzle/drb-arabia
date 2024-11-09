<script setup>
import $ from "jquery";
import Header from "../components/Header.vue";
import ContactUs from "../components/ContactUs.vue";
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
    <title>DRB Arabia - Booking Contact</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper contactus-pg">
      <!-- Header -->
      <Header></Header>

      <section class="slider-section">
        <div class="banner-slider">
          <div class="slider-fifteen"></div>
        </div>
      </section>
      <section class="contact_section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("common.Contact_Us_Title") }}</h2>
              </div>
            </div>
          </div>
          <div class="contact-info aos" data-aos="fade-up">
            <ul class="nav">
              <li style="text-align: center">
                <h4 class="content-info" style="color: #566045">
                  {{ $t("common.Contact_Us_Phone") }}
                </h4>

                <p class="content-info" style="color: #566045">
                  <a href="mob:+966 53 834 4824">{{
                    $t("common.Contact_Us_Phone_Subtitle")
                  }}</a>
                </p>
              </li>

              <li style="text-align: center">
                <h4 class="content-info" style="color: #566045">Address</h4>

                <p class="content-info" style="color: #566045">
                  King Khalid reserve, Al Thumama.
                </p>
              </li>

              <li style="text-align: center">
                <h4 class="content-info" style="color: #566045">
                  {{ $t("common.Contact_Us_Email") }}
                </h4>
                <!--			{{'common.Contact_Us_Email_Subtitle'}}-->

                <p class="content-info" style="color: #566045">
                  <a href="mailto:sales@drbarabia.com">sales@drbarabia.com</a>
                </p>
              </li>
            </ul>
          </div>

          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h6 style="color: #566045">
                  If you have any questions, please don’t hesitate to ask.
                </h6>
              </div>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-7 aos" data-aos="fade-up">
              <div class="footer-form">
                <form @submit.prevent="handleSubmit" method="POST">
                  <div
                    class="footer-form-group"
                    style="color: #566045; border-bottom: 1px solid #566045"
                  >
                    <input
                      type="text"
                      class="form-control"
                      v-model="formData.name"
                      :placeholder="$t('common.Contact_Us_Name')"
                    />
                  </div>
                  <div
                    class="footer-form-group"
                    style="color: #566045; border-bottom: 1px solid #566045"
                  >
                    <input
                      type="text"
                      class="form-control"
                      v-model="formData.phone"
                      :placeholder="$t('common.Contact_Us_Phone')"
                    />
                  </div>
                  <div
                    class="footer-form-group"
                    style="color: #566045; border-bottom: 1px solid #566045"
                  >
                    <input
                      type="text"
                      class="form-control"
                      v-model="formData.email"
                      :placeholder="$t('common.Contact_Us_Email')"
                    />
                  </div>
                  <div
                    class="footer-form-group"
                    style="color: #566045; border-bottom: 1px solid #566045"
                  >
                    <textarea
                      class="form-control"
                      v-model="formData.enquiry"
                      :placeholder="$t('common.Contact_Us_Enter Message')"
                    ></textarea>
                  </div>
                  <div class="footer-form-btn">
                    <button type="submit" class="btn btn-primary">
                      {{ $t("common.Send_Message") }}
                    </button>
                  </div>
                  <div v-if="message" class="alert alert-success">
                    {{ message }}
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-5 aos" data-aos="fade-up">
              <div class="footer-img">
                <img
                  :src="fullImageUrl('assets/img/footer-img.png')"
                  class="img-fluid"
                  alt="Footer"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="map-section">
        <div class="container">
          <div
            class="map-blk mb-5 d-flex flex-column mx-auto align-items-center text-center"
          >
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
              class="btn btn-primary"
              style="max-width: 203px"
              target="_blank"
              >Open in Google Map</a
            >
          </div>
        </div>
      </section>

      <footer class="footer">
        <section class="foorder_marign_section"></section>
        <div style="background-color: #566045">
          <FooterLinks></FooterLinks>
        </div>
      </footer>
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
</style>

<script>
//import HomeAboutUs from '../components/Home/AboutUs.vue';
export default {
  name: "bookingandcontact",
  components: {
    Link,
    Header,
    ContactUs,
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
      languages: languageData.testimonials,
      baseUrl: window.location.origin,

      formData: {
        name: "",
        email: "",
        phone: "",
        enquiry: "",
      },
      message: "",
    };
  },
  methods: {
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },
    async handleSubmit() {
      this.message = "Submitting...";
      try {
        //alert(JSON.stringify(this.formData));

        const response = await axios.post(
          this.fullImageUrl("sendMail"),
          this.formData
        );
        this.message = response.data.message; // Assuming your backend returns a success message
        //alert( response.data.message);
      } catch (error) {
        console.error(error);
        this.message = "An error occurred.";
      }
    },
  },
};
</script>
