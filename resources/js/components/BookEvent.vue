<template>
  <footer class="footer pb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12 aos" data-aos="fade-up">
          <div class="section-header">
            <h2 class="text-white">{{ $t("common.book_your_event") }}</h2>
          </div>
        </div>
      </div>
      <div class="contact-info aos" data-aos="fade-up">
        <ul class="nav">
          <li>
            <h4 class="custom-centre">{{ $t("common.Contact_Us_Phone") }}</h4>

            <p style="direction: ltr !important">
              {{ $t("common.Contact_Us_Phone_Subtitle") }}
            </p>
          </li>
          <li>
            <h4 class="custom-centre">{{ $t("common.Contact_Us_Email") }}</h4>
            <!--			{{'common.Contact_Us_Email_Subtitle'}}-->

            <p>sales@drbarabia.com</p>
          </li>
        </ul>
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

                <!-- Date Selection -->
                <div
                  class="d-flex cal-blk footer-form-group align-items-center gap-3 custom-row-reverse"
                >
                  <label for="">{{ $t("common.book_now_date") }}</label>
                  <div class="d-flex select-group gap-4 custom-row-reverse">
                    <!-- Day -->
                    <select
                      v-model="formData.day"
                      class="form-control select"
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
                      class="form-control select"
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
                      class="form-control select"
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
                  <button type="submit" class="btn white-btn">
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
  </footer>
</template>
<script>
export default {
  name: "BookEvent",
  data() {
    return {
      baseUrl: window.location.origin,
      formData: {
        first_name: "",
        last_name: "",
        email: "",
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
    getInitialFormData() {
      // Return the initial form data structure
      return {
        first_name: "",
        last_name: "",
        email: "",
        day: "",
        month: "",
        year: "",
        type_event: "",
        estimated_people: "",
        enquiry: "",
      };
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
