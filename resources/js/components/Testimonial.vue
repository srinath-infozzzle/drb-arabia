<template>
    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 aos" data-aos="fade-up">
                    <div
                        id="carouselExampleAutoplaying"
                        class="carousel slide"
                        data-bs-ride="carousel"
                    >
                        <div class="carousel-inner">
                            <div
                                v-for="n in testmonnialcount"
                                :key="n"
                                :class="{ active: n === 1 }"
                                class="carousel-item"
                            >
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div
                                            class="slider-content align-items-center"
                                        >
                                            <img
                                                :src="
                                                    fullImageUrl(
                                                        'assets/img/quote-img.png'
                                                    )
                                                "
                                                alt=""
                                            />

                                            <p style="text-align: center">
                                                {{
                                                    $t(
                                                        "testimonial.testimonial_text_" +
                                                            n
                                                    )
                                                }}
                                            </p>

                                            <h3>
                                                {{
                                                    $t(
                                                        "testimonial.testimonial_name_" +
                                                            n
                                                    )
                                                }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="carousel-control-prev"
                            type="button"
                            data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev"
                        >
                            <span
                                class="carousel-control-prev-icon"
                                aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                            class="carousel-control-next"
                            type="button"
                            data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next"
                        >
                            <span
                                class="carousel-control-next-icon"
                                aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    name: "Testimonial",

    beforeMount() {
        this.loadData();
    },
    data() {
        return {
            data: null,
            baseUrl: window.location.origin,
            testmonnialcount: 2,
        };
    },
    methods: {
        async loadData() {
            const fetchurl = window.location.origin + "/langdata";
            const response = await fetch(fetchurl);
            this.data = await response.json();
            //alert(		this.testmonnialcount);

            this.$i18n.messages.ar = this.data.ar;
            this.$i18n.messages.en = this.data.en;
            //		alert(this.testmonnialcount);
            var count = Object.keys(this.data.en.testimonial).length;
            this.testmonnialcount = count / 2;
            this.footercolumnscount = Object.keys(
                this.data.en.footercolumn
            ).length;

            //alert(		this.testmonnialcount);
        },
        fullImageUrl(imageName) {
            return this.baseUrl + "/" + imageName;
        },
    },
};
</script>
