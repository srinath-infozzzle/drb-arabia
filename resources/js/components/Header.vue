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
          <a :href="getMenu('')" class="navbar-brand logo">
            <img
              :src="fullImageUrl('assets/img/logo.svg')"
              class="img-fluid"
              alt="Logo"
            />
          </a>
          <a :href="getMenu('')" class="navbar-brand logo-small">
            <img
              :src="fullImageUrl('assets/img/logo.svg')"
              class="img-fluid"
              alt="Logo"
            />
          </a>
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
              <img
                :src="fullImageUrl('assets/img/icons/earth-grid_black.png')"
                alt=""
                height="20"
                class="flag-img dark-img"
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
        </div>
        <div class="main-menu-wrapper">
          <div class="menu-header">
            <a :href="getMenu('')" class="menu-logo">
              <img
                :src="fullImageUrl('assets/img/logo.svg')"
                class="img-fluid"
                alt="Logo"
              />
            </a>
            <a id="menu_close" class="menu-close" href="#">
              <i class="fas fa-times"></i
            ></a>
          </div>

          <ul class="main-nav custom-row-reverse">
            <li class="nav-item has-submenu">
              <a :href="getMenu('/camps')" class="nav-link">
                {{ $t("menu.menuone") }}
                <i
                  class="fas fa-chevron-right"
                  @click.prevent="toggleSubmenu"
                  :class="{ 'submenu-open': isSubmenuOpen }"
                ></i
              ></a>
              <ul
                class="submenu custom-right-align"
                :style="{
                  display: isSubmenuOpen && isMobile ? 'block' : 'none',
                }"
              >
                <li>
                  <a :href="getMenu('/camps-leaf')">
                    {{ $t("menu.menunine") }}
                  </a>
                </li>
                <li>
                  <a :href="getMenu('/camps-leaf-hail')">{{
                    $t("menu.menuten")
                  }}</a>
                </li>
                <div class="menu-side-img camps-img"></div>
              </ul>
            </li>

            <li class="nav-item">
              <!--<a :href="getMenu('/experiences')" class="nav-link">{{ $t('menu.menutwo') }} </a>-->
              <a :href="getMenu('/experiences')" class="nav-link"
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
              <a :href="getMenu('/events')" class="nav-link"
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
                class="submenu custom-right-align"
                :style="{
                  display: isEventSubmenuOpen && isMobile ? 'block' : 'none',
                }"
              >
                <li>
                  <a :href="getMenu('/events-private')"
                    >{{ $t("menu.menueleven") }}
                  </a>
                </li>
                <li>
                  <a :href="getMenu('/events-corporate')">{{
                    $t("menu.menutwelve")
                  }}</a>
                </li>
                <div class="menu-side-img events-img"></div>
              </ul>
            </li>
            <li class="nav-item has-submenu">
              <a :href="getMenu('/aboutus')" class="nav-link"
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
                class="submenu custom-right-align"
                :style="{
                  display: isAboutSubmenuOpen && isMobile ? 'block' : 'none',
                }"
              >
                <li>
                  <a :href="getMenu('/faq')">{{ $t("menu.menusix") }}</a>
                </li>
                <li>
                  <a :href="getMenu('/sustainability')">{{
                    $t("menu.menuseven")
                  }}</a>
                </li>
                <div class="menu-side-img about-img"></div>
              </ul>
            </li>

            <li class="nav-item">
              <a :href="getMenu('/gallery')" class="nav-link"
                >{{ $t("menu.menufive") }}
              </a>
            </li>
            <!--    <li class="nav-item">
                            <a href="/faq" class="nav-link">{{ $t('menu.menusix') }} </a>
                        </li>
                        <li class="nav-item">
                        <Link href="/sustainability" class="nav-link">{{ $t('menu.menuseven') }}</Link>
                        </li>-->
            <li class="nav-item">
              <a :href="getMenu('/specialoffer')" class="nav-link"
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
        <ul class="nav header-navbar-rht custom-row-reverse">
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
                <img
                  :src="fullImageUrl('assets/img/icons/earth-grid_black.png')"
                  alt=""
                  height="20"
                  class="flag-img dark-img"
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
      document.body.className = ""; // Clear existing classes
      document.body.classList.add(`lang-${langopt}`);

      // Get the current path and remove any existing language codes (en or ar)
      let newPath = window.location.pathname.replace(/\/(en|ar)(?=\/|$)/g, "");

      // Ensure the newPath starts with a single slash
      if (!newPath.startsWith("/")) {
        newPath = "/" + newPath;
      }

      // Construct the new URL with the selected language
      const newUrl = `${window.location.origin}${newPath}/${langopt}`;

      // Replace any potential double slashes in the URL (except for protocol)
      const cleanUrl = newUrl.replace(/([^:]\/)\/+/g, "$1");

      // Update the URL without reloading
      window.history.pushState({ path: cleanUrl }, "", cleanUrl);
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
      if (
        pathArray[pathArray.length - 1] == "en" ||
        pathArray[pathArray.length - 1] == "ar"
      ) {
        this.$i18n.locale = pathArray[pathArray.length - 1];
      } else {
        this.$i18n.locale = "en";
      }
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
