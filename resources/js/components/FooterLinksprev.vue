<template>
<div class="container">

<div class="row align-items-center">
    <div class="col-lg-2 col-md-4 aos" data-aos="fade-up">
        <div class="footer-widget footer-about">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>

  
    <div  v-for="n in 5" :key="n" class="col-lg-2 col-md-4 aos" data-aos="fade-up">
      <div class="footer-widget footer-menu">
        

            <h2 class="footer-title">{{ $t('footercolumn.column'+n+'.name') }} </h2>
       
            <ul>
                <li  v-for="m in parseInt($t('footercolumn.column'+n+'.linkcount'))" :key="m" ><a href="camps-leaf/en">{{  $t('footercolumn.column'+n+'.footertext_'+m)	 }} </a></li>
               
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
<div class="social-link">
    <a href="javascript:void(0);"><i class="fab fa-facebook-f hi-icon"></i></a>
    <a href="javascript:void(0);"><i class="fab fa-twitter hi-icon"></i></a>
    <a href="javascript:void(0);"><i class="fab fa-linkedin-in hi-icon"></i></a>
    <a href="javascript:void(0);"><i class="fab fa-youtube hi-icon"></i></a>
</div>
</div>

</template>
<script>
export default {
    name: 'FooterLinks',   
beforeMount() {
    this.$i18n.messages.en.footercolumn = this.data[0].en.footercolumn;
this.loadDatas();
}, methods: {

async loadDatas() {

   const fetchurl = window.location.origin + '/footerlink';

    const response = await fetch(fetchurl);
    this.data = await response.json();
    this.$i18n.messages.ar.footercolumn = this.data[1].ar.footercolumn;
    this.$i18n.messages.en.footercolumn = this.data[0].en.footercolumn;


},},
data() {

return {  

    data: JSON.parse('[{"en":{"footercolumn":{"column1":{"name":"Camp Links","footertext_1":"test1","footerlink_1":"tet","footertext_2":"Main page","footerlink_2":"mainpage","linkcount":"2"},"column2":{"name":"test link","footertext_1":"Test page","footerlink_1":"Test page","linkcount":"1"},"column3":{"name":"Experiences","linkcount":"0"},"column4":{"name":"Events","linkcount":"0"},"column5":{"name":"Other","linkcount":"0"}}}}]'),
  
}

},
}

</script>