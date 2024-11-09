<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <header class="header">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg header-nav custom-row-reverse">
        <div class="navbar-header">
          <a id="mobile_btn" href="javascript:void(0);">
            <span class="bar-icon">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </a>
          <Link href="/" class="navbar-brand logo">
            <img
              :src="fullImageUrl('assets/img/logo.svg')"
              class="img-fluid"
              alt="Logo"
            />
          </Link>
          <Link href="/" class="navbar-brand logo-small">
            <img
              :src="fullImageUrl('assets/img/logo.svg')"
              class="img-fluid"
              alt="Logo"
            />
          </Link>
        </div>
        <div class="main-menu-wrapper">
          <div class="menu-header">
            <Link href="/" class="menu-logo">
              <img
                :src="fullImageUrl('assets/img/logo.svg')"
                class="img-fluid"
                alt="Logo"
              />
            </Link>
            <a id="menu_close" class="menu-close" href="#">
              <i class="fas fa-times"></i
            ></a>
          </div>

          <ul class="main-nav custom-row-reverse">
            <li class="nav-item has-submenu">
              <a href="/camps" class="nav-link">
                {{ $t("menu.menuone") }}
                <i
                  class="fas fa-chevron-right"
                  @click.prevent="toggleSubmenu"
                  :class="{ 'submenu-open': isSubmenuOpen }"
                ></i
              ></a>
              <ul
                class="submenu"
                :style="{
                  display: isSubmenuOpen && isMobile ? 'block' : 'none',
                }"
              >
                <li>
                  <a href="/camps-leaf">
                    {{ $t("menu.menunine") }}
                  </a>
                </li>
                <li>
                  <a href="/accommodation">{{ $t("menu.menuten") }}</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <!--<a :href="getMenu('/experiences')" class="nav-link">{{ $t('menu.menutwo') }} </a>-->
              <a href="/experiences" class="nav-link"
                >{{ $t("menu.menutwo") }}
              </a>
              <!--     <ul class="submenu">
								    <li><a href="/group-activities">Family Activities</a></li>-->

              <!--         <li v-for="subPage in subPageList" :key="subPage.name">
                                <a :href= "'\\'+subPage.pageurl " > {{ subPage.name }}  </a> 

                                
       
                                     </li>-->

              <!-- 		    <li><a href="/group-activities">Group Activities</a></li>
                                   <li><a href="/group-activities">Activities for kids</a></li>							
                                    <li><a href="/group-activities">Nature activities</a></li>							
                                    <li><a href="/group-activities">Wellness</a></li> 							
                                    
							</ul>-->
            </li>
            <li class="nav-item has-submenu">
              <a href="/events" class="nav-link"
                >{{ $t("menu.menuthree") }}
                <i
                  class="fas fa-chevron-right"
                  @click.prevent="toggleEventsSubmenu"
                  :class="{
                    'submenu-open': isEventSubmenuOpen,
                  }"
                ></i
              ></a>

              <ul
                class="submenu"
                :style="{
                  display: isEventSubmenuOpen && isMobile ? 'block' : 'none',
                }"
              >
                <li>
                  <a href="/events-private">{{ $t("menu.menueleven") }} </a>
                </li>
                <li>
                  <a href="/events-corporate">{{ $t("menu.menutwelve") }}</a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-submenu">
              <a href="/aboutus" class="nav-link"
                >{{ $t("menu.menufour") }}
                <i
                  class="fas fa-chevron-right"
                  @click.prevent="toggleAboutSubmenu"
                  :class="{
                    'submenu-open': isAboutSubmenuOpen,
                  }"
                ></i
              ></a>

              <ul
                class="submenu"
                :style="{
                  display: isAboutSubmenuOpen && isMobile ? 'block' : 'none',
                }"
              >
                <li>
                  <a href="/faq">{{ $t("menu.menusix") }}</a>
                </li>
                <li>
                  <a href="/sustainability">{{ $t("menu.menuseven") }}</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="/gallery" class="nav-link">{{ $t("menu.menufive") }} </a>
            </li>
            <!--    <li class="nav-item">
                            <a href="/faq" class="nav-link">{{ $t('menu.menusix') }} </a>
                        </li>
                        <li class="nav-item">
                        <Link href="/sustainability" class="nav-link">{{ $t('menu.menuseven') }}</Link>
                        </li>-->
            <li class="nav-item">
              <a href="/specialoffer" class="nav-link"
                >{{ $t("menu.menueight") }}
              </a>
            </li>

            <!--    <li class="nav-item">
                        <Link href="/group-activities" class="nav-link">Group Activities</Link>
                        </li> -->

            <!--        <li class="nav-item">
                        <Link href="/events-private" class="nav-link">Events Private</Link>
                        </li>
                        <li class="nav-item">
                        <Link href="/events-corporate" class="nav-link">Events Corporate</Link>
                        </li>
                        

                        
                        <li class="nav-item">
								<a href="/camps-leaf" class="nav-link">camps-leaf</a>
							</li>-->
            <li class="nav-item responsive-link">
              <a
                href="https://drbarabia.book-onlinenow.net/index.aspx"
                target="_blank"
                class="nav-link"
                >{{ $t("common.Book_Now_Button") }}</a
              >
            </li>
          </ul>
        </div>
        <ul class="nav header-navbar-rht">
          <li class="nav-item">
            <a
              href="https://drbarabia.book-onlinenow.net/index.aspx"
              target="_blank"
              class="btn btn-primary"
              >{{ $t("common.Book_Now_Button") }}</a
            >
          </li>
          <li class="nav-item dropdown">
            <div class="flag-dropdown">
              <a
                class="dropdown-toggle nav-link"
                data-bs-toggle="dropdown"
                href="javascript:void(0);"
                role="button"
              >
                <img
                  :src="fullImageUrl('assets/img/icons/globe-icon.svg')"
                  alt=""
                  height="20"
                  class="flag-img"
                />
                <span>{{ $t("common.current_language") }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a
                  href="javascript:void(0);"
                  class="dropdown-item"
                  @click="changeLang('en')"
                >
                  English
                </a>
                <a
                  href="javascript:void(0);"
                  class="dropdown-item"
                  v-on:click="changeLang('ar')"
                >
                  عربي
                </a>
              </div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!--

    <ul style="display: block;color: black;visibility: visible; position: relative; Top:200px;z-index: 99; " >
<li style="color: black;visibility: visible;">

<Link href="/camps-leaf">The Leaf</Link>
<a href="/camps-leaf">The Leaf</a>
<Link to="/camps-leaf" class="nav-link " >  The Leaf </Link>                           
</li>
<li style="color: black;">
This is test

</li>
<li style="color: black;">
This is test

</li>

                            </ul>-->
</template>

<script>
export default {
  name: "Header",
  components: {
    Link,
  },
  beforeMount() {
    this.setUrllang();

    this.loadMenuData();
  },
  mounted() {
    this.checkUrlForLang();
    this.checkIfMobile();
    window.addEventListener("resize", this.checkIfMobile);
  },
  beforeDestroy() {
    window.removeEventListener("resize", this.checkIfMobile);
  },
  methods: {
    checkUrlForLang() {
      // Check if the current URL contains '/ar'
      if (window.location.pathname.includes("/ar")) {
        // Add the 'lang-ar' class to the body
        document.body.classList.add("lang-ar");
      }
    },
    toggleSubmenu() {
      if (this.isMobile) {
        this.isSubmenuOpen = !this.isSubmenuOpen;
      }
    },
    toggleEventsSubmenu() {
      if (this.isMobile) {
        this.isEventSubmenuOpen = !this.isEventSubmenuOpen;
      }
    },
    toggleAboutSubmenu() {
      if (this.isMobile) {
        this.isAboutSubmenuOpen = !this.isAboutSubmenuOpen;
      }
    },
    checkIfMobile() {
      this.isMobile = window.innerWidth <= 768; // Adjust this breakpoint as needed
    },
    changeLang(langopt) {
      this.$i18n.locale = langopt;
      // Add a class to the body element based on the selected language
      document.body.className = ""; // Clear existing classes
      document.body.classList.add(`lang-${langopt}`);
    },
    async loadMenuData() {
      const fetchurl = window.location.origin + "/subpagelist";

      const response = await fetch(fetchurl);
      this.subPageList = await response.json();
      //  this.data=footerjson[0];
      //alert(Object.keys(this.data[0].en));
      //alert(JSON.stringify( this.subPageList));
      //    this.data= JSON.parse('{    "en": {"footercolumn": [{"column_1": "Camp Links","links": [{"id": 1,"name": "Apple"},{"id": 2,"name": "Banana"}]},{"column_2": "test link","links": [{"id": 1,"name": "Apple"},{"id": 2,"name": "Banana"}]}]}}');
      //this.$i18n.messages.ar.footercolumn = this.data[1].ar.footercolumn;
      //this.$i18n.messages.en.footercolumn = this.data[0].en.footercolumn;
    },
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },

    getMenu(menulink) {
      return menulink + "/" + this.$i18n.locale;
    },
    setUrllang() {
      const pathArray = window.location.pathname.split("/");

      this.$i18n.locale = pathArray[pathArray.length - 1];
    },
  },
  data() {
    return {
      subPageList: JSON.parse(
        '[{"name":"Group Activities","pageurl":"group-activities"}]'
      ),
      baseUrl: window.location.origin,
      isSubmenuOpen: false,
      isEventSubmenuOpen: false,
      isAboutSubmenuOpen: false,
      isMobile: false,
    };
  },
};
</script>
