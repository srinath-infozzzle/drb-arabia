<template>


    <div class="row">
        <div class="col-md-12">
            <div class="faq-wrapper">
                <div class="accordion" id="accordionExample">             

            
                    <div  v-for="n in faqcount" :key="n"class="accordion-item">
                    <h2 class="accordion-header" :id="'heading'+n">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        :data-bs-target="'#collapse'+n"
                        aria-expanded="false"
                        :aria-controls="'collapse'+n"
                      >
                      {{ $t("faq.question_" + n ) }}
                      </button>
                    </h2>
                    <div
                      :id="'collapse'+n"
                      class="accordion-collapse collapse custom-right-align"
                      :aria-labelledby="'heading'+n"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        {{ $t("faq.answer_" + n ) }}
                      </div>
                    </div>
                  </div>



                </div>
            </div>
        </div>
    </div>


     
  
</template>
<script>
export default {
    name: "Faqs",
    beforeMount() {     
        this.loadDatas();
    },
    methods: {
        async loadDatas() {
            const fetchurl = window.location.origin + "/langdata";
            const response = await fetch(fetchurl);
            this.data = await response.json();
            this.$i18n.messages.ar = this.data.ar;
            this.$i18n.messages.en = this.data.en;
         if(this.faqcount1==0)
         {
            this.faqcount = Object.keys(this.data.en.faq ).length/2;
         }
         else
         {
           
            
             this.faqcount =parseInt(this.faqcount1);
         }      
         
        },
        fullImageUrl(imageName) {


            return this.baseUrl + "/" + imageName;
        },
    },  props: {
        faqcount1: {
      type: Number,
      required: true,
    },
    },
    data() {
        return {
            // data: JSON.parse('[{"en":{"footercolumn":{"column1":{"name":"Camp Links","footertext_1":"test1","footerlink_1":"tet","footertext_2":"Main page","footerlink_2":"mainpage","linkcount":"2"},"column2":{"name":"test link","footertext_1":"Test page","footerlink_1":"Test page","linkcount":"1"},"column3":{"name":"Experiences","linkcount":"0"},"column4":{"name":"Events","linkcount":"0"},"column5":{"name":"Other","linkcount":"0"}}}}]'),

            data: null,
            faqcount:0,

            baseUrl: window.location.origin,





            
        };
    },
};
</script>
