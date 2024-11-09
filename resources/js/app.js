import "./bootstrap";
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import AOS from "aos";
import $ from "jquery";
import jQuery from "jquery";
import "aos/dist/aos.css";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap/dist/js/bootstrap.bundle.js";

import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

import "slick-carousel";
import "../assets/css/style.css";
import "../assets/css/magnific-popup.css";
import "../assets/css/lightgallery.css";

import "../assets/plugins/select2/css/select2.min.css";
import "../assets/css/flaticon.css";

import { createI18n } from "vue-i18n";

import { langs } from "./langs";

const currentLocale = window.location.pathname.includes("/ar") ? "ar" : "en";

const i18n = createI18n({
  locale: currentLocale,
  fallbackLocale: "en",
  messages: langs,
});

function loadmessage() {
  alert("this function called");
  alert(this.i18n.messages.name);
}

createInertiaApp({
  resolve: (name) => {
    const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
    return pages[`./Pages/${name}.vue`];
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(AOS.init())
      .use(plugin)
      .use(i18n)
      .mount(el);
  },
  created() {
    this.loadData();
  },
});
