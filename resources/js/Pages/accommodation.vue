<script setup>
import $ from "jquery";
import jQuery from "jquery";
//import '../../assets/js/script.js';
import Header from "../components/Header.vue";
import ContactUs from "../components/ContactUs.vue";
import FooterLinks from "../components/FooterLinks.vue";
import Testimonial from "../components/Testimonial.vue";
import { Link } from "@inertiajs/vue3";
import languageData from "../../../lang/en/testimonials.json";
import CampSearch from "../components/CampSearch.vue";
</script>
<template>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>DRB Arabia - Accomodation</title>
  </head>
  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper accommod">
      <!-- Header 
		<header class="header">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="javascript:void(0);" class="navbar-brand logo">
							<img :src="fullImageUrl('assets/img/logo.svg" class="img-fluid" alt="Logo">
						</a>
						<a href="javascript:void(0);" class="navbar-brand logo-small">
							<img :src="fullImageUrl('assets/img/logo.svg" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="javascript:void(0);" class="menu-logo">
								<img :src="fullImageUrl('assets/img/logo.svg" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="#"> <i class="fas fa-times"></i></a>
						</div>
						<ul class="main-nav navbar-nav">
							<li class="nav-item">
								<a href="javascript:void(0);" class="nav-link">Camps</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0);" class="nav-link">DRB Nomad</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0);" class="nav-link">Experiences</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0);" class="nav-link">Events</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0);" class="nav-link">About Us</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0);" class="nav-link">Gallery</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0);" class="nav-link">FAQ</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0);" class="nav-link">Sustainability</a>
							</li>
							<li class="nav-item responsive-link">
								<a href="javascript:void(0);" class="nav-link">Book Now</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
						<li class="nav-item">
							<a href="javascript:void(0);" class="btn btn-primary">Book Now</a>
						</li>
						<li class="nav-item dropdown">
							<div class="flag-dropdown">
								<a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
									<img :src="fullImageUrl('assets/img/icons/globe-icon.svg" alt="" height="20" class="flag-img"> 
									<span>EN</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:void(0);" class="dropdown-item">
										English
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										Arabic
									</a>
								</div>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</header>-->

      <Header></Header>

      <!-- /Header -->

      <!-- Slider -->
      <section class="slider-section pb-0">
        <div class="banner-slider">
          <div class="slider-ten"></div>
          <!--				<div class="slider-two"></div>
				<div class="slider-three"></div>
				<div class="slider-four"></div>-->
        </div>
      </section>
      <!-- /Slider -->

      <!-- Path Section -->
      <section class="accommodation-path-section path-section dark-section">
        <div class="container">
          <CampSearch></CampSearch>

          <div class="row">
            <div
              class="col-md-10 offset-md-1 text-center justify-content-center"
            >
              <div class="section-header aos" data-aos="fade-up">
                <h2 class="text-white">
                  {{ $t("accommodation.Introction_Title") }}
                </h2>
              </div>
              <div class="path-content aos" data-aos="fade-up">
                <p>{{ $t("accommodation.Introction_Description") }}</p>
              </div>
              <div
                class="section-header accomd-leaf-logo aos"
                data-aos="fade-up"
              >
                <!--			<h2 class="text-white">Choose your path...</h2>-->
                <img
                  :src="fullImageUrl('assets/img/accomod-leaf-logo.png')"
                  class="img-fluid leaf-img-en"
                  alt="Path"
                />
                <img
                  :src="fullImageUrl('assets/img/the-leaf-arab-white.png')"
                  class="img-fluid leaf-img-ar"
                  alt="Leaf"
                />
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="path-imgs"> -->
        <div class="path-left aos" data-aos="fade-right">
          <img
            :src="fullImageUrl('assets/img/pattern-design.png')"
            class="img-fluid"
            alt="Path"
          />
        </div>
        <div class="path-right aos" data-aos="fade-left">
          <img
            :src="fullImageUrl('assets/img/pattern-design.png')"
            class="img-fluid"
            alt="Path"
          />
        </div>
        <!-- </div> -->
      </section>
      <!-- /Path Section -->

      <!-- Camp Section -->
      <section class="camp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("accommodation.Junior_Suite_Title") }}</h2>
                <h6 class="custom-hfont">
                  {{ $t("accommodation.Junior_Suite_Description") }}
                </h6>
              </div>
            </div>
          </div>
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-img">
                <img
                  :src="fullImageUrl('assets/img/acco-junior.png')"
                  class="img-fluid custom-flip"
                  alt="Leaf"
                />
              </div>
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-content">
                <h2>{{ $t("accommodation.Junior_Suite_Right_Title") }}</h2>
                <p>{{ $t("accommodation.Junior_Suite_Right_Description") }}</p>
                <div class="private-btn custom-right-align custom-margin-top">
                  <a
                    href="https://drbarabia.book-onlinenow.net/index.aspx"
                    target="_blank"
                    class="btn btn-primary"
                  >
                    {{ $t("common.Book_a_Dome") }}
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Camp Section -->

      <section class="camp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("accommodation.Room_Type_Title") }}</h2>
              </div>
            </div>
          </div>

          <div class="row justify-content-center custom-row-reverse">
            <div class="col-md-4">
              <div class="leaf-img">
                <img
                  :src="fullImageUrl('assets/img/acco-de-room-type3.png')"
                  class="img-fluid"
                  alt="Leaf"
                />
                <div class="mx-4">
                  <div class="title-blk shadow">
                    <h3>
                      {{ $t("accommodation.Room_Type_Left_Image_Title") }}
                    </h3>
                    <a
                      href="https://drbarabia.book-onlinenow.net/index.aspx"
                      target="_blank"
                      class="btn btn-outline-primary"
                      >{{ $t("common.Book_Now_Button") }}</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="leaf-img">
                <img
                  :src="fullImageUrl('assets/img/acco-ju-room-type2.png')"
                  class="img-fluid"
                  alt="Leaf"
                />
                <div class="mx-4">
                  <div class="title-blk shadow">
                    <h3>
                      {{ $t("accommodation.Room_Type_Right_Image_Title") }}
                    </h3>
                    <a
                      href="https://drbarabia.book-onlinenow.net/index.aspx"
                      target="_blank"
                      class="btn btn-outline-primary"
                      >{{ $t("common.Book_Now_Button") }}</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--
		<section class="bg-image reconnect">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="content-info">
							<h3>Reconnect and Restore in Nature’s Embrace</h3>
							<p>Take a moment to escape the hustle and reconnect with the natural world. Feel the tranquility, inhale the fresh air, and allow the serene environment to restore your inner peace and harmony.</p>
						</div>
					</div>
				</div>
			</div>
		</section>	
-->
      <!-- Camp Section -->
      <section class="camp-section-accommodation bg-style1">
        <div class="container">
          <div class="row">
            <div
              class="col-md-8 offset-md-2 text-center justify-content-center"
            >
              <div class="section-header aos" data-aos="fade-up">
                <h2 class="text-white">
                  {{ $t("accommodation.Rooms_Offer_Title") }}
                </h2>
              </div>
              <div class="path-content aos" data-aos="fade-up">
                <p>{{ $t("accommodation.Rooms_Offer_Description") }}</p>
                <div class="d-flex justify-content-center gap-5">
                  <ul class="my-5 justify-content-start custom-rtl">
                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point1") }}
                    </li>
                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point2") }}
                    </li>
                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point3") }}
                    </li>
                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point4") }}
                    </li>
                    <li>
                      <i
                        class="fa fa-circle me-2 custom-room-pt5"
                        aria-hidden="true"
                      ></i
                      >{{ $t("accommodation.Rooms_Offer_Point5") }}
                    </li>

                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point6") }}
                    </li>
                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point7") }}
                    </li>
                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point8") }}
                    </li>
                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point9") }}
                    </li>
                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point10") }}
                    </li>
                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point11") }}
                    </li>

                    <!-- <li><i class="fa fa-circle me-2" aria-hidden="true"></i>{{   $t('accommodation.Rooms_Offer_Point12') }}</li> -->
                    <!-- <li><i class="fa fa-circle me-2" aria-hidden="true"></i>{{   $t('accommodation.Rooms_Offer_Point13') }}</li> -->
                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point14") }}
                    </li>
                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point15") }}
                    </li>
                    <li>
                      <i class="fa fa-circle me-2" aria-hidden="true"></i
                      >{{ $t("accommodation.Rooms_Offer_Point16") }}
                    </li>
                    <li>
                      <i
                        class="fa fa-circle me-2 custom-room-ptlast"
                        aria-hidden="true"
                      ></i
                      >{{ $t("accommodation.Rooms_Offer_Point17") }}
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="path-imgs">
          <div class="acco_path-left aos" data-aos="fade-right">
            <img
              :src="fullImageUrl('assets/img/acco-left-path.png')"
              class="img-fluid"
              alt="Path"
            />
          </div>
          <div class="acco_path-right aos" data-aos="fade-left">
            <img
              :src="fullImageUrl('assets/img/acco-right-path.png')"
              class="img-fluid"
              alt="Path"
            />
          </div>
        </div>
      </section>

      <!-- /Camp Section -->
      <section
        class="box-slider-wrapper camp-leaf-slider"
        style="margin-top: 30px; margin-bottom: 30px"
      >
        <div class="full-container">
          <div class="row">
            <div class="col-md-12">
              <div class="box-slider">
                <img :src="fullImageUrl('assets/img/acco-box1.jpg')" alt="" />
                <img :src="fullImageUrl('assets/img/acco-box2.jpg')" alt="" />
                <img :src="fullImageUrl('assets/img/acco-box3.jpg')" alt="" />
                <!-- <img :src="fullImageUrl('assets/img/acco-box2.jpg')" alt=""> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Camp Section 
		<section class="camp-section bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-header">
							<h2>Junior Suite</h2>
							<h6>The Deluxe Domes are perfect for those looking to indulge in the ultimate comfort.</h6>
						</div>
					</div>
				</div>
				<div class="private-info">
					<div class="row align-items-center">
						<div class="col-md-6 aos" data-aos="fade-up">
							<div class="camp-img">
								<img :src="fullImageUrl('assets/img/acco-junior.png" class="img-fluid" alt="Leaf">
							</div>
						</div>
						<div class="col-md-6 aos" data-aos="fade-up">
							<div class="camp-content">
								<div class="section-header text-start">
									<h2>Junior Suite</h2>
								</div>
								<p>The junior suite Dome offer a truly elevated glamping experience, combining luxury with the serenity of nature. These domes come equipped with all the modern amenities you could need. You’ll sleep in comfort on King beds with premium Pollysateen bedding. For your security, a safe for valuables is provided. The private bathroom in the junior suite is a highlight, offering a shower, toilet, basin, and other amenities. These features make the junior suite perfect for those looking to indulge in the ultimate comfort.</p>
							</div>
							<div class="private-btn">
								<a href="javascript:void(0);" class="btn btn-primary">View More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="section-header mb-0 aos" data-aos="fade-up">
							<h2>Room Types</h2>
						</div>
					</div>
				</div>
				<div class="leaf-slider">
					<div class="leaf-img">
						<img :src="fullImageUrl('assets/img/leaf-01.png" class="img-fluid" alt="Leaf">
						<div class="mx-4">
							<div class="title-blk shadow">
								<h3>The Leaf</h3>
								<a href="javascript:;" class="btn btn-outline-primary">View More</a>
							</div>
						</div>
					</div>
					<div class="leaf-img">
						<img :src="fullImageUrl('assets/img/leaf-02.png" class="img-fluid" alt="Leaf">
						<div class="mx-4">
							<div class="title-blk shadow">
								<h3>The Leaf</h3>
								<a href="javascript:;" class="btn btn-outline-primary">View More</a>
							</div>
						</div>
					</div>
					<div class="leaf-img">
						<img :src="fullImageUrl('assets/img/leaf-03.png" class="img-fluid" alt="Leaf">
						<div class="mx-4">
							<div class="title-blk shadow">
								<h3>The Leaf</h3>
								<a href="javascript:;" class="btn btn-outline-primary">View More</a>
							</div>
						</div>
					</div>
					<div class="leaf-img">
						<img :src="fullImageUrl('assets/img/leaf-03.png" class="img-fluid" alt="Leaf">
						<div class="mx-4">
							<div class="title-blk shadow">
								<h3>The Leaf</h3>
								<a href="javascript:;" class="btn btn-outline-primary">View More</a>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</section>-->
      <!-- /Camp Section 
	
		<section class="box-slider-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="box-slider1">
							<img :src="fullImageUrl('assets/img/box-img-1.jpg" alt="">
							<img :src="fullImageUrl('assets/img/box-img-2.jpg" alt="">
							<img :src="fullImageUrl('assets/img/box-img-3.jpg" alt="">
							<img :src="fullImageUrl('assets/img/box-img-1.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>		-->

      <!-- Camp Section 
		<section class="camp-section bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-header">
							<h2>Deluxe Dome</h2>
							<h6>The Deluxe Pods are ideal for guests who appreciate 
								simplicity without compromising on comfort.</h6>
						</div>
					</div>
				</div>
				<div class="private-info mb-0">
					<div class="row align-items-center">
						<div class="col-md-6 aos" data-aos="fade-up">
							<div class="camp-content">
								<div class="section-header text-start">
									<h2>Deluxe Dome</h2>
								</div>
								<p>Our Deluxe Pods provide a more minimalist yet comfortable stay, ideal for those who prefer simplicity without sacrificing essential comforts. These pods also include WIFI and air conditioning, ensuring a pleasant stay. While the Deluxe Pods do not include a minibar, they offer a coffee station and basic furnishings like a bed, chairs, tables, and side tables. The Deluxe Pods are perfect for guests who value simplicity and functionality while still enjoying a comfortable stay amidst the desert landscape.</p>
							</div>
							<div class="private-btn private-btn-right">
								<a href="javascript:void(0);" class="btn btn-primary">View More</a>
							</div>
						</div>
						<div class="col-md-6 aos" data-aos="fade-up">
							<div class="camp-img">
								<img :src="fullImageUrl('assets/img/deluxe-room.png" class="img-fluid" alt="Leaf">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="section-header mb-0 aos" data-aos="fade-up">
							<h2>Room Types</h2>
						</div>
					</div>
				</div>
				<div class="leaf-slider">
					<div class="leaf-img">
						<img :src="fullImageUrl('assets/img/acco-de-room-type1.png" class="img-fluid" alt="Leaf">
						<div class="mx-4">
							<div class="title-blk shadow">
								<h3>The Leaf</h3>
								<a href="javascript:;" class="btn btn-outline-primary">View More</a>
							</div>
						</div>
					</div>
					<div class="leaf-img">
						<img :src="fullImageUrl('assets/img/acco-de-room-type2.png" class="img-fluid" alt="Leaf">
						<div class="mx-4">
							<div class="title-blk shadow">
								<h3>The Leaf</h3>
								<a href="javascript:;" class="btn btn-outline-primary">View More</a>
							</div>
						</div>
					</div>
					
					<div class="leaf-img">
						<img :src="fullImageUrl('assets/img/acco-de-room-type3.png" class="img-fluid" alt="Leaf">
						<div class="mx-4">
							<div class="title-blk shadow">
								<h3>The Leaf</h3>
								<a href="javascript:;" class="btn btn-outline-primary">View More</a>
							</div>
						</div>
					</div>









					


				</div>				
			</div>
		</section>-->
      <!-- /Camp Section
	
		<section class="box-slider-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<div class="box-slider2">
							<img :src="fullImageUrl('assets/img/box-img-1.jpg" alt="">
							<img :src="fullImageUrl('assets/img/box-img-2.jpg" alt="">
							<img :src="fullImageUrl('assets/img/box-img-3.jpg" alt="">
							<img :src="fullImageUrl('assets/img/box-img-1.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>		 	-->

      <section class="grid-img-wrapper" style="margin-top: 40px">
        <div class="container">
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6">
              <div class="grid-img-info">
                <h3 class="custom-right-align">
                  {{ $t("accommodation.Dining_Title") }}
                </h3>
                <p class="custom-right-align">
                  {{ $t("accommodation.Dining_Description") }}
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="grid-img-blk">
                <div class="row align-items-center custom-row-reverse">
                  <div class="col-md-6 dining-imgs dine-img">
                    <img
                      :src="fullImageUrl('assets/img/grid-img-4.jpg')"
                      alt=""
                    />
                  </div>
                  <div class="col-md-6 dining-imgs">
                    <img
                      :src="fullImageUrl('assets/img/grid-img-2.jpg')"
                      class="mb-4"
                      alt=""
                    />
                    <img
                      :src="fullImageUrl('assets/img/grid-img-3.jpg')"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--		<div class="row">
					<div class="col-md-12">
						
						<ul class="nav nav-tabs justify-content-center border-0 menu-nav">
							<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#appetizers">Appetizers</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#starters">Starters</a>
							</li>
							<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="tab" href="#course">Main Course</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#dessert">Dessert</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#beverages">Beverages</a>
							</li>
						</ul>
					-->
          <!-- Tab panes 
						<div class="tab-content menu-tab">
							<div class="tab-pane p-4 mt-5 text-center text-white container fade" id="appetizers">...</div>
							<div class="tab-pane p-4 mt-5 text-center text-white container active" id="course">
								<div class="row justify-content-center">
									<div class="col-md-8">
										<h4>Main Course</h4>
										<h5>Signature firewood rotisserie</h5>
										<p>Succulent lamb slow-cooked to perfection over a crackling firewood rotisserie. This traditional cooking method infuses the meat with a smoky depth, served with a rich, flavorful jus</p>
										<h5>Fire-grilled shrimp</h5>
										<p>Fire-cooked shrimp, marinated with sriracha sambal, accompanied by grilled lime</p>
										<h5>Black angus beef tagliata</h5>
										<p class="mb-5">Firewood-grilled black angus beef, tender and succulent, kissed with a goma sesame glaze, nested in a toss of tagliatelle vegetables</p>
		
										<h4>Sides</h4>
										<h5>Fire-grilled farm vegetable tian</h5>
										<p>Selection of fire-grilled vegetables, in a tangy tomato sauce, drizzled with rich pesto</p>
										<h5>Future farm local mushroom freekeh risotto</h5>
										<p>A creamy harmony of freekeh, mushroom, and asparagus, enriched with the nutty essence of parmesan cheese</p>
										<h5>Baked potato wedges</h5>
										<p>Crunchy potato wedges, baked with onion and olive oil</p>
									</div>
								</div>
							</div>
							<div class="tab-pane p-4 mt-5 text-center text-white container fade" id="starters">...</div>
							<div class="tab-pane p-4 mt-5 text-center text-white container fade" id="dessert">...</div>
							<div class="tab-pane p-4 mt-5 text-center text-white container fade" id="beverages">...</div>
						</div>						
					</div>
				</div>-->
        </div>
      </section>

      <section class="camp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("accommodation.Experiences_Title") }}</h2>
                <h6 class="custom-hfont">
                  {{ $t("accommodation.Experiences_Description") }}
                </h6>
              </div>
            </div>
          </div>
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-img">
                <img
                  :src="fullImageUrl('assets/img/acco-experience.png')"
                  class="img-fluid"
                  alt="Leaf"
                />
              </div>
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-content">
                <p>
                  {{ $t("accommodation.Experience_Right_Para_Description") }}
                </p>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("common.Explore_our_Title") }}</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/hover-1.jpg')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>{{ $t("common.Explore_our_Image_1_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_1_Description") }}</p>
                    <a
                      href="https://drbarabia.book-onlinenow.net/index.aspx"
                      class="btn btn-primary mt-auto"
                      target="_blank"
                      >{{ $t("common.Book_Now_Button") }}</a
                    >
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/hover-6.jpg')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>{{ $t("common.Explore_our_Image_2_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_2_Description") }}</p>
                    <a
                      href="https://drbarabia.book-onlinenow.net/index.aspx"
                      class="btn btn-primary mt-auto"
                      target="_blank"
                      >{{ $t("common.Book_Now_Button") }}</a
                    >
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/hover-3.png')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>{{ $t("common.Explore_our_Image_3_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_3_Description") }}</p>
                    <a
                      href="https://drbarabia.book-onlinenow.net/index.aspx"
                      class="btn btn-primary mt-auto"
                      target="_blank"
                      >{{ $t("common.Book_Now_Button") }}</a
                    >
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/hover-4.jpg')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>{{ $t("common.Explore_our_Image_4_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_4_Description") }}</p>
                    <a
                      href="https://drbarabia.book-onlinenow.net/index.aspx"
                      class="btn btn-primary mt-auto"
                      target="_blank"
                      >{{ $t("common.Book_Now_Button") }}</a
                    >
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 aos" data-aos="fade-up">
              <div class="hover-wrapper">
                <a href="javascript:;" class="hover-main">
                  <img
                    :src="fullImageUrl('assets/img/treasure-hunting.png')"
                    alt=""
                    class="img-fluid"
                  />
                  <div class="hover-blk custom-right-align">
                    <h4>{{ $t("common.Explore_our_Image_5_Title") }}</h4>
                    <p>{{ $t("common.Explore_our_Image_5_Description") }}</p>
                    <a
                      href="https://drbarabia.book-onlinenow.net/index.aspx"
                      class="btn btn-primary mt-auto"
                      target="_blank"
                      >{{ $t("common.Book_Now_Button") }}</a
                    >
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="camp-btn aos" data-aos="fade-up">
            <a href="/experiences" class="btn btn-primary">{{
              $t("camps.view_all_experiences")
            }}</a>
          </div>
        </div>
      </section>

      <!-- Camp Section 





		<section class="camp-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-header">
							<h2>Explore our..</h2>
							</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-4 aos" data-aos="fade-up">
						<div class="hover-wrapper">
							<a href="javascript:;" class="hover-main">
								<img :src="fullImageUrl('assets/img/hover-1.jpg" alt="" class="img-fluid" />
								<div class="hover-blk custom-right-align">
									<h4>Nature Activities</h4>
									<p>Immerse yourself in the beauty of the natural world with our variety of nature-focused activities and connect with the outdoors in a meaningful and refreshing way.</p>
									<a href="https://drbarabia.book-onlinenow.net/index.aspx" class="btn btn-primary mt-auto" target="_blank">Book now</a>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 aos" data-aos="fade-up">
						<div class="hover-wrapper">
							<a href="javascript:;" class="hover-main">
								<img :src="fullImageUrl('assets/img/hover-2.jpg" alt="" class="img-fluid" />
								<div class="hover-blk custom-right-align">
									<h4>Nature Activities</h4>
									<p>Immerse yourself in the beauty of the natural world with our variety of nature-focused activities and connect with the outdoors in a meaningful and refreshing way.</p>
									<a href="https://drbarabia.book-onlinenow.net/index.aspx" class="btn btn-primary mt-auto" target="_blank">Book now</a>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 aos" data-aos="fade-up">
						<div class="hover-wrapper">
							<a href="javascript:;" class="hover-main">
								<img :src="fullImageUrl('assets/img/hover-3.png" alt="" class="img-fluid" />
								<div class="hover-blk custom-right-align">
									<h4>Nature Activities</h4>
									<p>Immerse yourself in the beauty of the natural world with our variety of nature-focused activities and connect with the outdoors in a meaningful and refreshing way.</p>
									<a href="https://drbarabia.book-onlinenow.net/index.aspx" class="btn btn-primary mt-auto" target="_blank">Book now</a>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 aos" data-aos="fade-up">
						<div class="hover-wrapper">
							<a href="javascript:;" class="hover-main">
								<img :src="fullImageUrl('assets/img/hover-4.jpg" alt="" class="img-fluid" />
								<div class="hover-blk custom-right-align">
									<h4>Nature Activities</h4>
									<p>Immerse yourself in the beauty of the natural world with our variety of nature-focused activities and connect with the outdoors in a meaningful and refreshing way.</p>
									<a href="https://drbarabia.book-onlinenow.net/index.aspx" class="btn btn-primary mt-auto" target="_blank">Book now</a>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 aos" data-aos="fade-up">
						<div class="hover-wrapper">
							<a href="javascript:;" class="hover-main">
								<img :src="fullImageUrl('assets/img/hover-5.jpg" alt="" class="img-fluid" />
								<div class="hover-blk custom-right-align">
									<h4>Nature Activities</h4>
									<p>Immerse yourself in the beauty of the natural world with our variety of nature-focused activities and connect with the outdoors in a meaningful and refreshing way.</p>
									<a href="https://drbarabia.book-onlinenow.net/index.aspx" class="btn btn-primary mt-auto" target="_blank">Book now</a>
								</div>
							</a>
						</div>
					</div>
				</div>				
			</div>
		</section>-->
      <!-- /Camp Section -->

      <!-- Testimonial Section -->
      <Testimonial></Testimonial>

      <!-- /Testimonial Section -->

      <!-- Footer -->
      <footer class="footer">
        <ContactUs></ContactUs>
        <FooterLinks></FooterLinks>
      </footer>
      <!-- /Footer -->

      <!-- Mouse Cursor -->
      <div class="mouse-cursor cursor-outer"></div>
      <div class="mouse-cursor cursor-inner"></div>
      <!-- /Mouse Cursor -->

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
    <!-- /Main Wrapper -->
  </body>
</template>

<script>
//import HomeAboutUs from '../components/Home/AboutUs.vue';
export default {
  name: "accommodation",
  components: {
    Link,
    Header,
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

    // if ($('.box-slider').length > 0) {
    //     $('.box-slider').slick({
    //         dots: false,
    //         autoplay: true,
    //         infinite: true,
    //         slidesToShow: 3,
    //         slidesToScroll: 1
    //     });
    // }
    if ($(".box-slider").length > 0) {
      $(".box-slider").slick({
        dots: false,
        autoplay: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 768, // Applies settings for screens 768px wide or smaller
            settings: {
              slidesToShow: 1, // Show only 1 slide on mobile
              slidesToScroll: 1,
            },
          },
        ],
      });
    }

    if ($(".box-slider1").length > 0) {
      $(".box-slider1").slick({
        dots: false,
        autoplay: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
      });
    }

    if ($(".box-slider2").length > 0) {
      $(".box-slider2").slick({
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
      languages: languageData.testimonials,
      baseUrl: window.location.origin,
    };
  },
  methods: {
    getImagePath(filelocation) {
      return window.location.origin + "/" + filelocation;
    },
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },
  },
};
</script>
