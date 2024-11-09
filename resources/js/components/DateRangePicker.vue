<template>
    <div>
      <input type="text" ref="dateRange" id="searchdate" name="Searchdate"  class="form-control bookingrange" />
    </div>
  </template>
  
  <script scoped>
  
  //import $ from "jquery";
  import 'daterangepicker';

  export default {
    name: 'DateRangePicker',
    mounted() {
      $(this.$refs.dateRange).daterangepicker({
        opens: 'left',
        startDate: moment().startOf('month'),
        endDate: moment().endOf('month'),
        locale: {
          format: 'MMM DD'
        }
      }, (start, end) => {
       
      
       
        console.log(`Selected date range: ${start.format('MM/DD/YYYY')} - ${end.format('MM/DD/YYYY')}`);
       
        const startDate1 = start.format('DD/MM/YYYY');
        const endDate1 = end.format('DD/MM/YYYY');
      
  const data = { startDate: startDate1};
  this.$emit('setStartdate',  data);



  const data1 = { endDate: endDate1};

  this.$emit('setEnddate',  data1);





        

      });
    },
    beforeDestroy() {
      $(this.$refs.dateRange).daterangepicker('remove'); // Clean up on component destruction
    },
   
 

  };
  </script>
  

  