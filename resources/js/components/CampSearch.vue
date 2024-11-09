<script setup>
import DateRangePicker from "../components/DateRangePicker.vue";
</script>
<template>
  <div class="path-search aos" data-aos="fade-up">
    <div class="row custom-row-reverse">
      <div class="col-lg-3 col-md-6">
        <div class="path-group custom-row-reverse">
          <img :src="fullImageUrl('assets/img/icons/path-01.svg')" alt="Icon" />
          <div class="path-input custom-right-align">
            <select
              class="form-control custom-right-align custom-rtl"
              id="camp"
              name="camp"
              :placeholder="$t('common.Search_The_Leaf')"
              v-model="selectedCamp"
            >
              <option value="The Leaf">
                {{ $t("common.Search_The_Leaf") }}
              </option>
              <option value="Leaf of Hai'l">
                {{ $t("common.Search_The_Leaf_Hail") }}
              </option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="path-group custom-row-reverse">
          <img :src="fullImageUrl('assets/img/icons/path-02.svg')" alt="Icon" />
          <div class="path-input custom-right-align">
            <label>{{ $t("common.Search_Dates") }}</label>

            <DateRangePicker
              @setStartdate="getStartdate"
              @setEnddate="getEnddate"
            ></DateRangePicker>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="path-group custom-row-reverse" ref="pathGroup">
          <img :src="fullImageUrl('assets/img/icons/path-03.svg')" alt="Icon" />
          <div class="path-input custom-right-align">
            <label> {{ $t("common.Search_travelers") }}</label>

            <input
              type="text"
              class="form-control custom-right-align custom-rtl"
              :placeholder="`2 ${$t('common.Search_Adults')}, 1 ${$t(
                'common.Search_Kids'
              )}`"
              :value="combinedTravelerText"
              @click="toggleTravellerPickers"
              ref="Travellers"
            />
          </div>
          <div v-show="showTravellerPickers" class="date-picker-container">
            <label class="custom-date-picker">{{
              $t("common.Search_Adults")
            }}</label>
            <input
              type="number"
              v-model="adults"
              class="form-control custom-rtl"
              :placeholder="$t('common.Search_Adults')"
              @input="handleTravellerChange"
              ref="adults"
              min="0"
            />

            <label class="custom-date-picker">{{
              $t("common.Search_Kids")
            }}</label>
            <input
              type="number"
              v-model="kids"
              class="form-control custom-rtl"
              @input="handleTravellerChange"
              :placeholder="$t('common.Search_Kids')"
              ref="kids"
              min="0"
            />
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="path-btn">
          <button
            type="submit"
            class="btn btn-primary"
            @click="buildAndRedirectUrl"
          >
            {{ $t("common.Search_Button") }}
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script scoped>
export default {
  name: "CampSearch",
  components: {
    DateRangePicker,
  },
  methods: {
    fullImageUrl(imageName) {
      return this.baseUrl + "/" + imageName;
    },
    getStartdate(data) {
      //alert(data.startDate);
      this.startDate1 = data.startDate;
    },
    getEnddate(data) {
      //alert(data.startDate);

      this.endDate1 = data.endDate;
    },
    toggleDatePickers() {
      // Toggle the visibility of the date pickers
      this.showDatePickers = !this.showDatePickers;
    },
    toggleTravellerPickers() {
      this.showTravellerPickers = !this.showTravellerPickers;
    },
    buildAndRedirectUrl() {
      // Helper function to format the date from yyyy-mm-dd to dd/mm/yyyy

      // Get the values from the input fields
      const adults = this.$refs.adults.value;
      const kids = this.$refs.kids.value;

      // Format the dates
      const formattedStartDate = this.startDate1;
      const formattedEndDate = this.endDate1;
      const rooms = this.selectedCamp;

      // Construct the URL using the retrieved values
      const baseSearchUrl = "https://drbarabia.book-onlinenow.net/index.aspx";

      const url = `${baseSearchUrl}?Page=3&arrival=${formattedStartDate}&departure=${formattedEndDate}&rooms=1&
selectedroom=${rooms}&adults=${adults}&kids=${kids}&lan_id=en-US&kid1=-1&kid2=1&kid3=-1&extra=0&cot=0`;

      window.open(url, "_blank");
    },

    handleTravellerChange(event) {
      const adultscount = this.$refs.adults.value; // Get value from adults input
      const kidscount = this.$refs.kids.value; // Get value from kids input

      // Get dynamic translations using $t for "Adults" and "Kids"
      const adultsText = this.$t("common.Search_Adults");
      const kidsText = this.$t("common.Search_Kids");

      // Set the combined value dynamically
      this.$refs.Travellers.value = `${adultscount} ${adultsText}, ${kidscount} ${kidsText}`;

      // this.$refs.Travellers.value = `${adultscount} Adults, ${kidscount} Kids`;
    },
    handleClickOutside(event) {
      if (
        this.showTravellerPickers &&
        !this.$refs.pathGroup.contains(event.target)
      ) {
        this.showTravellerPickers = false;
      }
    },
  },
  mounted() {
    document.addEventListener("click", this.handleClickOutside);
  },
  beforeDestroy() {
    document.removeEventListener("click", this.handleClickOutside);
  },
  data() {
    return {
      baseUrl: window.location.origin,
      showTravellerPickers: false,
      selectedCamp: "The Leaf",
      adults: 0,
      kids: 0,
    };
  },
  computed: {
    combinedTravelerText() {
      return `${this.adults} ${this.$t("common.Search_Adults")}, ${
        this.kids
      } ${this.$t("common.Search_Kids")}`;
    },
  },
};
</script>

<style scoped>
/* Initially hide the date picker container  This is for select box*/
.date-picker-container {
  background: #fff;
  position: absolute;
  width: 100%;
  padding: 10px;
  margin-top: 0px;
  top: 100%;
  z-index: 999;
}
</style>
