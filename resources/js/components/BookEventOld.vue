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

            <p>{{ $t("common.Contact_Us_Phone_Subtitle") }}</p>
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
              <form action="#">
                <div class="footer-form-group">
                  <input
                    type="text"
                    class="form-control"
                    :placeholder="$t('common.book_now_first_name')"
                  />
                </div>
                <div class="footer-form-group">
                  <input
                    type="text"
                    class="form-control"
                    :placeholder="$t('common.book_now_last_name')"
                  />
                </div>
                <div class="footer-form-group">
                  <input
                    type="text"
                    class="form-control"
                    :placeholder="$t('common.book_now_email')"
                  />
                </div>

                <div
                  class="d-flex cal-blk footer-form-group align-items-center gap-3 custom-row-reverse"
                >
                  <label for="">{{ $t("common.book_now_date") }}</label>
                  <div class="d-flex select-group gap-4 custom-row-reverse">
                    <select name="" id="" class="form-control select">
                      <option value="">{{ $t("common.book_now_day") }}</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                    <select name="" id="" class="form-control select">
                      <option value="">
                        {{ $t("common.book_now_month") }}
                      </option>
                      <option value="1">{{ $t("common.book_now_jan") }}</option>
                      <option value="2">{{ $t("common.book_now_feb") }}</option>
                      <option value="3">{{ $t("common.book_now_mar") }}</option>
                      <option value="4">{{ $t("common.book_now_apr") }}</option>
                      <option value="5">{{ $t("common.book_now_may") }}</option>
                      <option value="6">{{ $t("common.book_now_jun") }}</option>
                      <option value="7">{{ $t("common.book_now_jul") }}</option>
                      <option value="8">{{ $t("common.book_now_aug") }}</option>
                      <option value="9">
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
                    <select name="" id="" class="form-control select">
                      <option value="">{{ $t("common.book_now_year") }}</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                      <option value="2026">2026</option>
                    </select>
                  </div>
                </div>

                <div class="footer-form-group">
                  <input
                    type="text"
                    class="form-control"
                    :placeholder="$t('common.book_now_type_event')"
                  />
                </div>
                <div class="footer-form-group">
                  <input
                    type="text"
                    class="form-control"
                    :placeholder="$t('common.book_now_estimated_people')"
                  />
                </div>
                <div class="footer-form-group">
                  <textarea
                    class="form-control"
                    :placeholder="$t('common.book_now_message')"
                  ></textarea>
                </div>
                <div class="footer-form-btn">
                  <button type="submit" class="btn white-btn">
                    {{ $t("common.book_now_send_message") }}
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--<div class="path-imgs">
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
            </div>-->
    </div>
  </footer>

  <!--
<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-header">
							<h2 class="text-white">Book your event</h2>
						</div>
					</div>
				</div>
				
				<div class="row align-items-center">
					<div class="col-md-7 aos" data-aos="fade-up" style="margin-left: auto;margin-right: auto;">
						<div class="footer-form" >
							
							<form action="#">
								<div class="footer-form-group">
									<input type="text" class="form-control"  :placeholder="$t('common.Contact_Us_Name')" >
								</div>
								<div class="footer-form-group">
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
								<div class="footer-form-group">
									<input type="text" class="form-control" :placeholder="$t('common.Contact_Us_Email')">
								</div>

								<div class="footer-form-group">
									<input type="text" class="form-control" placeholder="Date">
								</div>
								<div class="footer-form-group">
									<input type="text" class="form-control" placeholder="Type of Event">
								</div>
								<div class="footer-form-group">
									<textarea class="form-control" :placeholder="$t('common.Contact_Us_Enter Message')"></textarea>
								</div>
								<div class="footer-form-btn">
									<button type="submit" class="btn white-btn">{{$t('common.Send_Message')}}</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

--></template>
<script>
export default {
  name: "BookEvent",
  data() {
    return {
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
