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
    <title>DRB Arabia - Book Event</title>

    <!-- Favicon 
	<link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper bookanevent-page">
      <!-- Header -->

      <Header></Header>

      <div style="background-color: #f1ebdf; padding-top: 100px"></div>

      <section class="bookanevent" style="background-color: white">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2 class="text-white">The Leaf Event</h2>
              </div>
            </div>
          </div>
          <div class="map-blk align-items-center text-center">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="footer-form mb-0">
                  <form @submit.prevent="handleSubmit" method="POST">
                <!-- First Name -->
                <div class="footer-form-group">
                  <input
                    type="text"
                    class="form-control"
                    v-model="formData.first_name"
                    :placeholder="$t('common.book_now_first_name')"
                    required
                  />
                </div>

                <!-- Last Name -->
                <div class="footer-form-group">
                  <input
                    type="text"
                    class="form-control"
                    v-model="formData.last_name"
                    :placeholder="$t('common.book_now_last_name')"
                    required
                  />
                </div>

                <!-- Email -->
                <div class="footer-form-group">
                  <input
                    type="email"
                    class="form-control"
                    v-model="formData.email"
                    :placeholder="$t('common.book_now_email')"
                    required
                  />
                </div>


                 <!-- mobile -->
                 <div class="footer-form-group">
                  <input
                    type="text"
                    class="form-control"
                    v-model="formData.mobile"
                    :placeholder="$t('common.Contact_Us_Phone')"
                    required
                  />
                </div>

                <!-- Date Selection -->
                <div
                  class="d-flex cal-blk bookForm-bm footer-form-group align-items-center gap-3 custom-row-reverse"
                >
                  <label class="bookForm" for="">{{ $t("common.book_now_date") }}</label>
                  <div class="d-flex select-group gap-4 custom-row-reverse">
                    <!-- Day -->
                    <select
                      v-model="formData.day"
                      class="form-control select bookForm"
                      required
                    >
                      <option value="">{{ $t("common.book_now_day") }}</option>
                      <option v-for="day in 31" :key="day" :value="day">
                        {{ day }}
                      </option>
                    </select>

                    <!-- Month -->
                    <select
                      v-model="formData.month"
                      class="form-control select bookForm bookForm-options"
                      required
                    >
                      <option value="">
                        {{ $t("common.book_now_month") }}
                      </option>
                      <!-- <option
                        v-for="(month, index) in months"
                        :key="index"
                        :value="index + 1"
                      >
                        {{ month }}
                      </option> -->
                      <option value="01">
                        {{ $t("common.book_now_jan") }}
                      </option>
                      <option value="02">
                        {{ $t("common.book_now_feb") }}
                      </option>
                      <option value="03">
                        {{ $t("common.book_now_mar") }}
                      </option>
                      <option value="04">
                        {{ $t("common.book_now_apr") }}
                      </option>
                      <option value="05">
                        {{ $t("common.book_now_may") }}
                      </option>
                      <option value="06">
                        {{ $t("common.book_now_jun") }}
                      </option>
                      <option value="07">
                        {{ $t("common.book_now_jul") }}
                      </option>
                      <option value="08">
                        {{ $t("common.book_now_aug") }}
                      </option>
                      <option value="09">
                        {{ $t("common.book_now_sept") }}
                      </option>
                      <option value="10">
                        {{ $t("common.book_now_oct") }}
                      </option>
                      <option value="11">
                        {{ $t("common.book_now_nov") }}
                      </option>
                      <option value="12">
                        {{ $t("common.book_now_dec") }}
                      </option>
                    </select>

                    <!-- Year -->
                    <select
                      v-model="formData.year"
                      class="form-control select bookForm"
                      required
                    >
                      <option value="">{{ $t("common.book_now_year") }}</option>
                      <option v-for="year in years" :key="year" :value="year">
                        {{ year }}
                      </option>
                    </select>
                  </div>
                </div>

                <!-- Type of Event -->
                <div class="footer-form-group">
                  <input
                    type="text"
                    class="form-control"
                    v-model="formData.type_event"
                    :placeholder="$t('common.book_now_type_event')"
                    required
                  />
                </div>

                <!-- Estimated People -->
                <div class="footer-form-group">
                  <input
                    type="number"
                    class="form-control custom-rtl"
                    v-model="formData.estimated_people"
                    :placeholder="$t('common.book_now_estimated_people')"
                    required
                  />
                </div>

                <!-- Message -->
                <div class="footer-form-group">
                  <textarea
                    class="form-control"
                    v-model="formData.enquiry"
                    :placeholder="$t('common.book_now_message')"
                    required
                  ></textarea>
                </div>

                <!-- Submit Button -->
                <div class="footer-form-btn">
                  <button type="submit" class="bookForm-btn btn white-btn">
                    {{ $t("common.book_now_send_message") }}
                  </button>
                </div>
                <div v-if="message" class="alert alert-success">
                  {{ message }}
                </div>
              </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer
        class="footer"
        style="background-color: #f1ebdf; color: blueviolet"
      >
        <FooterLinks></FooterLinks>
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
  name: "bookanevent",
  components: {
    Link,
    Header,
    ContactUs,
  },
  beforeMount() {
    this.loadData();
  },
  mounted() {
    // Use URLSearchParams to directly get the query parameter from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const event = urlParams.get("event");

    // If the event parameter exists, set it in formData
    if (event) {
      this.formData.type_event = event;
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
        first_name: "",
        last_name: "",
        email: "",
        mobile: "",
        day: "",
        month: "",
        year: "",
        type_event: "",
        estimated_people: "",
        enquiry: "",
      },
      message: "",
      years: [2024, 2025, 2026],
    };
  },
  methods: {
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },
    getMenu(menulink) {
      return menulink + "/" + this.$i18n.locale;
    },
    getInitialFormData() {
      // Return the initial form data structure
      return {
        first_name: "",
        last_name: "",
        email: "",
        mobile: "",
        day: "",
        month: "",
        year: "",
        type_event: "",
        estimated_people: "",
        enquiry: "",
      };
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
    async handleSubmit() {
      this.message = "Submitting...";

      try {
        // Handle form submission
        const response = await axios.post(
          this.fullImageUrl("sendbookMail"),
          this.formData
        );

        // Set success message
        this.message = response.data.message;

        // Reset formData to its initial state after submission
        this.formData = this.getInitialFormData();
      } catch (error) {
        if (error.response && error.response.status === 422) {
          // Handle validation errors
          const errors = error.response.data.errors;
          this.message = "Validation error!";

          // Optional: Display validation error messages to the user
          for (let field in errors) {
            this.$set(this.formErrors, field, errors[field][0]);
          }
        } else {
          // Handle other errors
          this.message = "An error occurred. Please try again.";
        }
      }
    },
  },
};
</script>
