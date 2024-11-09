<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12 aos" data-aos="fade-up">
        <div class="section-header">
          <h2 class="text-white">{{ $t("common.Contact_Us_Title") }}</h2>
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
    <div class="row align-items-center custom-row-reverse">
      <div class="col-md-7 aos" data-aos="fade-up">
        <div class="footer-form">
          <p>{{ $t("common.Contact_Us_Description") }}</p>
          <form @submit.prevent="handleSubmit" method="POST">
            <div class="footer-form-group">
              <input
                type="text"
                class="form-control"
                v-model="formData.name"
                name="name"
                :placeholder="$t('common.Contact_Us_Name')"
                required
              />
            </div>
            <div class="footer-form-group">
              <input
                type="text"
                class="form-control"
                v-model="formData.phone"
                name="phone"
                :placeholder="$t('common.Contact_Us_Phone')"
                required
              />
            </div>
            <div class="footer-form-group">
              <input
                type="email"
                class="form-control"
                v-model="formData.email"
                name="email"
                :placeholder="$t('common.Contact_Us_Email')"
                required
              />
            </div>
            <div class="footer-form-group">
              <textarea
                class="form-control"
                v-model="formData.enquiry"
                name="message"
                :placeholder="$t('common.Contact_Us_Enter Message')"
                required
              ></textarea>
            </div>
            <div class="footer-form-btn custom-right-align">
              <button type="submit" class="btn white-btn">
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
        <div class="footer-img custom-flip">
          <img
            :src="fullImageUrl('assets/img/footer-img.png')"
            class="img-fluid"
            alt="Footer"
          />
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
/*
if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: Ensure a meta tag with name "csrf-token" is present in the head.');
}*/
export default {
  name: "ContactUs",

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
