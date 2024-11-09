<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12 aos" data-aos="fade-up">
        <div class="section-header">
          <h2>{{ $t("common.ask_question") }}</h2>
        </div>
      </div>
    </div>

    <div class="row align-items-center">
      <div
        class="col-md-7 aos"
        data-aos="fade-up"
        style="margin-left: auto; margin-right: auto"
      >
        <div class="footer-form">
          <form @submit.prevent="handleSubmit" method="POST">
            <div class="faq-question-form-group">
              <input
                type="text"
                class="form-control"
                v-model="formData.name"
                :placeholder="$t('common.Contact_Us_Name')"
              />
            </div>
            <div class="faq-question-form-group">
              <input
                type="text"
                class="form-control"
                v-model="formData.phone"
                :placeholder="$t('common.Contact_Us_Phone')"
              />
            </div>
            <div class="faq-question-form-group">
              <input
                type="text"
                class="form-control"
                v-model="formData.email"
                :placeholder="$t('common.Contact_Us_Email')"
              />
            </div>

            <div class="faq-question-form-group">
              <textarea
                class="form-control"
                v-model="formData.enquiry"
                :placeholder="$t('common.Contact_Us_Enter Message')"
              ></textarea>
            </div>
            <div class="footer-form-btn custom-right-align">
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
    </div>
  </div>
</template>
<script>
import axios from "axios";

export default {
  name: "Question",

  methods: {
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },

    //:action="fullImageUrl('sendMail')"

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
  data() {
    return {
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
};
</script>
