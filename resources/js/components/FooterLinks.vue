<template>
  <div class="container">
    <div class="row align-items-center custom-row-reverse">
      <div class="col-lg-2 col-md-4 aos" data-aos="fade-up">
        <div class="footer-widget footer-about custom-right-align">
          <img :src="fullImageUrl('assets/img/logo.svg')" class="mb-3" alt="" />
          <!-- <p>A Once in a Lifetime Experience…Every Time</p> -->
          <p class="custom-right-align">{{ $t("common.footer_quote") }}</p>
        </div>
      </div>

      <div
        v-for="n in 5"
        :key="n"
        class="col-lg-2 col-md-4 aos"
        data-aos="fade-up"
      >
        <div class="footer-widget footer-menu">
          <h2 class="footer-title custom-right-align">
            {{ $t("footercolumn.column" + n + ".name") }}
          </h2>

          <ul>
            <li
              class="custom-row-reverse"
              v-for="m in parseInt(
                $t('footercolumn.column' + n + '.linkcount')
              )"
              :key="m"
            >
              <!--<a href="{{  $t('footercolumn.column'+n+'.footerlink_'+m)	 }} "
                >{{ $t("footercolumn.column" + n + ".footertext_" + m) }}
              </a>-->
              <a :href="getFooterLink(n, m)"
                >{{ $t("footercolumn.column" + n + ".footertext_" + m) }}
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!--
    <div class="col-lg-2 col-md-4 aos" data-aos="fade-up">
        <div class="footer-widget footer-menu">
            <h2 class="footer-title">Lorem Ipsum</h2>
            <ul>
                <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
                <li><a href="javascript:void(0);">Lorem Ipsum</a></li>
            </ul>
        </div>
    </div>
  -->
    </div>
    <div class="social-link custom-footer-icons">
      <a
        href="https://www.facebook.com/profile.php?id=61554877419523"
        target="_blank"
        ><i class="fab fa-facebook-f hi-icon"></i
      ></a>
      <a
        href="https://www.instagram.com/drbarabia?igsh=MWc2aXFqZzJiaHNk"
        target="_blank"
        ><i class="fab fa-instagram hi-icon"></i
      ></a>
      <a href="https://www.linkedin.com/company/drbarabia/" target="_blank"
        ><i class="fab fa-linkedin-in hi-icon"></i
      ></a>
      <!-- <a href="javascript:void(0);"><i class="fab fa-youtube hi-icon"></i></a> -->
    </div>
  </div>
</template>
<script>
export default {
  name: "FooterLinks",
  beforeMount() {
    //alert(JSON.stringify(this.$i18n.messages.en.footercolumn));
    //  console.log(JSON.stringify(this.$i18n.messages.en.footercolumn));
    this.$i18n.messages.en.footercolumn = this.data[0].en.footercolumn;
    this.$i18n.messages.ar.footercolumn = this.data[0].en.footercolumn;
    this.loadDatas();
  },
  methods: {
    async loadDatas() {
      const fetchurl = window.location.origin + "/footerlink";

      const response = await fetch(fetchurl);
      this.data = await response.json();

      //alert(JSON.stringify(this.data[0].en.footercolumn));

      this.$i18n.messages.ar.footercolumn = this.data[1].ar.footercolumn;
      this.$i18n.messages.en.footercolumn = this.data[0].en.footercolumn;
    },
    getFooterLink(n, m) {
      return "/" + this.$t(`footercolumn.column${n}.footerlink_${m}`);
    },
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },
  },

  data() {
    return {
      // data: JSON.parse('[{"en":{"footercolumn":{"column1":{"name":"Camp Links","footertext_1":"test1","footerlink_1":"tet","footertext_2":"Main page","footerlink_2":"mainpage","linkcount":"2"},"column2":{"name":"test link","footertext_1":"Test page","footerlink_1":"Test page","linkcount":"1"},"column3":{"name":"Experiences","linkcount":"0"},"column4":{"name":"Events","linkcount":"0"},"column5":{"name":"Other","linkcount":"0"}}}}]'),

      data: [
        {
          en: {
            footercolumn: {
              column1: { name: "Camps", linkcount: "0" },
              column2: { name: "Experiences", linkcount: "0" },
              column3: { name: "Events", linkcount: "0" },
              column4: { name: "About us", linkcount: "0" },
              column5: { name: "Gallery", linkcount: "0" },
            },
          },
        },
      ],
      baseUrl: window.location.origin,
    };
  },
};
</script>
