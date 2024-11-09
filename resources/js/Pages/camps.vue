<script setup>
import $ from "jquery";
//import '../../fullImageUrl('assets/js/script.js';
import Header from "../components/Header.vue";
import ContactUs from "../components/ContactUs.vue";
import FooterLinks from "../components/FooterLinks.vue";
import Testimonial from "../components/Testimonial.vue";
import { Link } from "@inertiajs/vue3";
import CampSearch from "../components/CampSearch.vue";
</script>
<template>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>DRB Arabia - Camps</title>
  </head>
  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper camps-page">
      <!-- Header -->
      <Header></Header>
      <!--	<header class="header">
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
						<Link href="/" class="navbar-brand logo">
							<img :src="fullImageUrl('assets/img/logo.svg')" class="img-fluid" alt="Logo">
						</Link>
						<Link href="/" class="navbar-brand logo-small">
							<img :src="fullImageUrl('assets/img/logo.svg')" class="img-fluid" alt="Logo">
						</Link>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<Link href="/" class="menu-logo">
								<img :src="fullImageUrl('assets/img/logo.svg')" class="img-fluid" alt="Logo">
							</Link>
							<a id="menu_close" class="menu-close" href="#"> <i class="fas fa-times"></i></a>
						</div>
						<ul class="main-nav navbar-nav">
							<li class="nav-item">
								<Link href="/camps" class="nav-link">Camps</Link>
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
									<img :src="fullImageUrl('assets/img/icons/globe-icon.svg')" alt="" height="20" class="flag-img"> 
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
      <!-- /Header -->

      <!-- Slider -->

      <section class="slider-section">
        <div class="banner-slider">
          <div class="slider-six"></div>

          <!--	<div class="slider-one"></div>
				<div class="slider-two"></div>
				<div class="slider-three"></div>
				<div class="slider-four"></div>-->
        </div>
      </section>
      <!-- /Slider -->

      <section
        class="experiences-path-section path-section pb-100 dark-section"
        style="padding-bottom: 200px; height: 480px"
      >
        <div class="container">
          <CampSearch></CampSearch>

          <div class="row">
            <div
              class="col-md-10 offset-md-1 text-center justify-content-center"
            >
              <div class="section-header aos" data-aos="fade-up">
                <h2 class="text-white">{{ $t("camps.Our_Camps_Title") }}</h2>
              </div>
              <div class="path-content aos" data-aos="fade-up">
                <p>{{ $t("camps.Our_Camps_Description") }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="path-imgs" style="margin-top: -50px">
          <div class="path-left aos" data-aos="fade-right">
            <img
              :src="fullImageUrl('assets/img/pattern-design-left.png')"
              class="img-fluid"
              alt="Path"
              style="height: 400px; margin-bottom: 20px; margin-left: 20px"
            />
          </div>
          <div class="path-right aos" data-aos="fade-left">
            <img
              :src="fullImageUrl('assets/img/pattern-design-right.png')"
              class="img-fluid"
              alt="Path"
              style="height: 400px; margin-bottom: 20px; margin-right: 20px"
            />
          </div>
        </div>
      </section>

      <!--


		<section class="experience-path-section">


<div class="row">
	<div class="col-md-12">

		<div class="path-shapes aos" data-aos="fade-up">
			<img :src="fullImageUrl('assets/img/shape-01.png')" class="shape-left" alt="Shape">

			<img :src="fullImageUrl('assets/img/shape-01.png')" class="shape-right" alt="Shape">
		</div>
	</div>
</div>


<div class="container">



	<div class="path-search aos" data-aos="fade-up">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="path-group">
					<img :src="fullImageUrl('assets/img/icons/path-01.svg')" alt="Icon">
					<div class="path-input">
						<input type="text" class="form-control" placeholder="Pick a camp">
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="path-group">
					<img :src="fullImageUrl('assets/img/icons/path-02.svg')" alt="Icon">
					<div class="path-input">
						<label>Dates</label>
						<input type="text" class="form-control bookingrange"
							placeholder="Jun 20 - Jun 23">
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="path-group">
					<img :src="fullImageUrl('assets/img/icons/path-03.svg')" alt="Icon">
					<div class="path-input">
						<label>Travelers</label>
						<input type="text" class="form-control" placeholder="2 travelers, 1 room">
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="path-btn">
					<button type="submit" class="btn btn-primary">Search</button>
				</div>
			</div>
		</div>
	</div>

	
	<div class="row">
		<div class="col-md-1 path-shapes aos" data-aos="fade-up"
			style="margin-top: 50px; margin-left: -80px">

			<img :src="fullImageUrl('assets/img/shape-01.png')" class="shape-left" alt="Shape">
		</div>


		<div class="col-md-10 offset-md-0 justify-content-center">


			<div class="section-header aos" data-aos="fade-up">

				<h2 class="text-white"> {{   $t('camps.Our_Camps_Title') }}  </h2>
			</div>
			<div class="path-content aos" data-aos="fade-up">
				<p style="text-align: center;">					
					{{   $t('camps.Our_Camps_Description') }}
					
					
					</p>
			</div>


		</div>

		<div class="col-md-1 path-shapes aos" data-aos="fade-up"
			style="margin-top: 50px;margin-left:80px;">

			<img :src="fullImageUrl('assets/img/shape-01.png')" class="shape-right" alt="Shape">
		</div>
	</div>
	
</div>

</section>
		-->
      <section class="camp-section">
        <div class="container">
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-img">
                <img
                  :src="fullImageUrl('assets/img/leaf-09.png')"
                  class="img-fluid"
                  alt="Leaf"
                />
              </div>
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-content custom-right-align">
                <h2>{{ $t("camps.Contemporary_Luxury_Title") }}</h2>

                <p>{{ $t("camps.Contemporary_Luxury_Description") }}</p>
              </div>
            </div>
          </div>
          <!--			<div class="camp-btn aos" data-aos="fade-up">
						<a href="javascript:void(0);" class="btn btn-primary">{{ $t('common.Find_out_More_Button')
							}}</a>
					</div> -->
        </div>
      </section>

      <section class="camp-bg-image">
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1">
              <div class="content-info">
                <h3>{{ $t("camps.Camps_Banner_Title") }}</h3>
                <p>{{ $t("camps.Camps_Banner_Description") }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Path Section 
		<section class="path-section pb-0 bg-white">
			<div class="container">
				<div class="path-search aos" data-aos="fade-up">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="path-group">
								<img :src="fullImageUrl('assets/img/icons/path-01.svg')" alt="Icon">
								<div class="path-input">
									<input type="text" class="form-control" placeholder="Pick a camp">
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="path-group">
								<img :src="fullImageUrl('assets/img/icons/path-02.svg')" alt="Icon">
								<div class="path-input">
									<label>Dates</label>
									<input type="text" class="form-control bookingrange" placeholder="Jun 20 - Jun 23">
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="path-group">
								<img :src="fullImageUrl('assets/img/icons/path-03.svg')" alt="Icon">
								<div class="path-input">
									<label>Travelers</label>
									<input type="text" class="form-control" placeholder="2 travelers, 1 room">
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="path-btn">
								<button type="submit" class="btn btn-primary">{{ $t('common.Search_Button') }}</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
      <!-- /Path Section -->

      <!-- Camp Section 
		<section class="camp-section pt-0">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header mb-0 aos" data-aos="fade-up">
							<h2>{{ $t('camps.Our_Camps_Title')}}</h2>
							<h6>{{ $t('camps.Our_Camps_Description')}}</h6>
						</div>
					</div>
				</div>
				<div class="leaf-slider">
					<div class="leaf-img">
						<img :src="fullImageUrl('assets/img/leaf-01.png')" class="img-fluid" alt="Leaf">
						<div class="mx-4">
							<div class="title-blk shadow">
								<h3> {{ $t('common.The_Leaf') }}  </h3>
								<a href="javascript:;" class="btn btn-outline-primary"> {{ $t('common.View_More_Button') }}</a>
							</div>
						</div>
					</div>
					<div class="leaf-img">
						<img :src="fullImageUrl('assets/img/leaf-02.png')" class="img-fluid" alt="Leaf">
						<div class="mx-4">
							<div class="title-blk shadow">
								<h3>{{ $t('common.The_Leaf') }}</h3>
								<a href="javascript:;" class="btn btn-outline-primary">{{ $t('common.View_More_Button') }}</a>
							</div>
						</div>
					</div>
					<div class="leaf-img">
						<img src="fullImageUrl('assets/img/leaf-03.png')" class="img-fluid" alt="Leaf">
						<div class="mx-4">
							<div class="title-blk shadow">
								<h3>{{ $t('common.The_Leaf') }}</h3>
								<a href="javascript:;" class="btn btn-outline-primary">{{ $t('common.View_More_Button') }}</a>
							</div>
						</div>
					</div>
					<div class="leaf-img">
						<img src="fullImageUrl('assets/img/leaf-03.png')" class="img-fluid" alt="Leaf">
						<div class="mx-4">
							<div class="title-blk shadow">
								<h3>{{ $t('common.The_Leaf') }}</h3>
								<a href="javascript:;" class="btn btn-outline-primary">{{ $t('common.View_More_Button') }}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
      <!-- /Camp Section -->

      <!-- Camp Section -->
      <section class="leaf-section camp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <!--			<h2>  {{ $t('camps.The_Leaf_Title') }} </h2>-->

                <img
                  :src="fullImageUrl('assets/img/full_colour_logo.png')"
                  class="img-fluid leaf-img-en"
                  alt="Leaf"
                />
                <img
                  :src="fullImageUrl('assets/img/the_leaf_ar.png')"
                  class="img-fluid leaf-img-ar"
                  alt="Leaf"
                />

                <h6>{{ $t("camps.The_Leaf_description") }}</h6>
              </div>
            </div>
          </div>
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-img">
                <img
                  :src="fullImageUrl('assets/img/leaf-10.png')"
                  class="img-fluid"
                  alt="Leaf"
                />
              </div>
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="camp-content custom-right-align">
                <h2>{{ $t("camps.The_Leaf_Right_Title") }}</h2>
                <p>{{ $t("camps.The_Leaf_Right_description") }}</p>
                <a href="/camps-leaf" class="btn btn-primary">{{
                  $t("common.View_More_Button")
                }}</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Camp Section -->

      <!-- Experience Section -->
      <section class="exp-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("camps.Experiences_Title") }}</h2>
                <h6 class="custom-hfont">
                  {{ $t("camps.Experiences_Description") }}
                </h6>
              </div>
            </div>
          </div>
          <div class="row align-items-end custom-row-reverse">
            <div class="col-md-6 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/camp-experiences-img.png')"
                class="img-fluid"
                alt="Experiences"
              />
            </div>
            <div class="col-md-6 aos" data-aos="fade-up">
              <div class="content-info">
                <p class="custom-right-align">
                  {{ $t("camps.Experiences_Description_Right_Para_1") }}
                </p>
                <p>{{ $t("camps.Experiences_Description_Right_Para_2") }}</p>
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
              $t("common.View_All_Experiences")
            }}</a>
          </div>
        </div>
      </section>
      <!-- /Experience Section -->

      <section class="grid-img-wrapper px-40">
        <div class="container">
          <div class="row align-items-center custom-row-reverse">
            <div class="col-md-6">
              <div class="grid-img-info">
                <div class="section-header">
                  <h3 class="custom-right-align">
                    {{ $t("camps.Dining_Title") }}
                  </h3>
                </div>
                <p class="custom-right-align">
                  {{ $t("camps.Dining_Description") }}
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="grid-img-blk">
                <div class="row align-items-center">
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
                      :src="fullImageUrl('assets/img/grid-img-5.jpg')"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--

		<section class="exp-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="box-slider">
							<img src="fullImageUrl('assets/img/box-1.jpg')" alt="">
							<img src="fullImageUrl('assets/img/box-2.jpg')" alt="">
							<img src="fullImageUrl('assets/img/box-3.jpg')" alt="">
							<img src="fullImageUrl('assets/img/box-1.jpg')" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>-->
      <!-- Experience Section 
		<section class="exp-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-header">
							<h2>    {{   $t('camps.The_Nomad_Title') }}      </h2>
							<h6> {{   $t('camps.The_Nomad_Description') }}  </h6>
						</div>
					</div>
				</div>
				<div class="row align-items-end">
					<div class="col-md-6 aos" data-aos="fade-up">
						<img src="fullImageUrl('assets/img/nomad.png')" class="img-fluid" alt="Experiences">
					</div>
					<div class="col-md-6 aos" data-aos="fade-up">
						<div class="content-info">
							<h2>{{   $t('camps.The_Nomad_Right_Title') }}  </h2>
							<p>{{   $t('camps.The_Nomad_Right_Para1') }}       </p>
							<p> {{   $t('camps.The_Nomad_Right_Para2') }}       </p>

						</div>
					</div>
				</div>
			</div>
		</section>-->
      <!-- /Experience Section -->

      <!-- Private -->
      <section class="camp-section private-section">
        <div class="container">
          <div class="private-info">
            <div class="section-header">
              <h2 class="text-white">{{ $t("camps.events_main_title") }}</h2>
              <p class="text-white">
                {{ $t("camps.events_main_description") }}
              </p>
            </div>
            <div class="row align-items-center custom-row-reverse">
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-img custom-flip">
                  <img
                    :src="fullImageUrl('assets/img/event-03.png')"
                    class="img-fluid"
                    alt="Leaf"
                  />
                </div>
              </div>
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-content">
                  <div class="section-header text-start">
                    <h2 class="text-white custom-right-align">
                      {{ $t("camps.Events_Left_Title") }}
                    </h2>
                  </div>
                  <p class="custom-right-align">
                    {{ $t("camps.Events_Left_Description") }}
                  </p>
                </div>
                <div class="private-btn custom-right-align">
                  <a href="/events-private" class="btn white-btn">{{
                    $t("common.View_More_Button")
                  }}</a>
                </div>
              </div>
            </div>
          </div>
          <div class="private-info mb-0">
            <div class="row align-items-center custom-row-reverse">
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-content">
                  <div class="section-header text-start">
                    <h2 class="text-white custom-right-align">
                      {{ $t("camps.Events_Right_Title") }}
                    </h2>
                  </div>
                  <p class="custom-right-align">
                    {{ $t("camps.Events_Right_Description") }}
                  </p>
                </div>
                <div class="private-btn private-btn-right custom-right-align">
                  <a href="/events-corporate" class="btn white-btn">{{
                    $t("common.View_More_Button")
                  }}</a>
                </div>
              </div>
              <div class="col-md-6 aos" data-aos="fade-up">
                <div class="camp-img custom-flip">
                  <img
                    :src="fullImageUrl('assets/img/event-04.png')"
                    class="img-fluid"
                    alt="Leaf"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="experience-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
              <div class="section-header">
                <h2>{{ $t("camps.Memories_Title") }}</h2>
                <h6>{{ $t("camps.Memories_Description") }}</h6>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 aos custom-margin-top" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/memories1.png')"
                alt=""
                class="img-fluid"
              />
            </div>

            <div class="col-md-3 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/memories2.jpg')"
                alt=""
                class="img-fluid"
              />
              <img
                :src="fullImageUrl('assets/img/memories4.jpg')"
                alt=""
                class="img-fluid"
                style="margin-top: 30px"
              />
            </div>
            <div class="col-md-3 aos custom-margin-top2" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/memories5.jpg')"
                alt=""
                class="img-fluid"
              />
            </div>
            <div class="col-md-3 aos" data-aos="fade-up">
              <img
                :src="fullImageUrl('assets/img/memories6.jpg')"
                alt=""
                class="img-fluid"
              />
              <img
                :src="fullImageUrl('assets/img/memories7.jpg')"
                alt=""
                class="img-fluid"
                style="margin-top: 30px"
              />
            </div>
          </div>
        </div>
      </section>

      <!-- /Private Section -->

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

    <!-- jQuery -->
  </body>
</template>

<script>
//import HomeAboutUs from '../components/Home/AboutUs.vue';

export default {
  name: "camps",
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
      //languages: languageData.testimonials,
      baseUrl: window.location.origin,
    };
  },
  methods: {
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },
  },
};
</script>
