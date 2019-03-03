<template>
    <div class="courses-page">
        <div class="page-header">
            <div class="page-header-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <header class="entry-header">
                                <h1>Каталог продукции</h1>
                            </header><!-- .entry-header -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .page-header-overlay -->
        </div><!-- .page-header -->

        <div class="container" style="max-width: 1360px;">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs" id="next">
                        <ul class="flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li>Каталог продукции</li>
                        </ul>
                    </div><!-- .breadcrumbs -->
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="sidebar">
                        <div class="search-widget">
                            <form class="flex flex-wrap align-items-center">
                                <input type="search" placeholder="Поиск...">
                                <button type="submit" class="flex justify-content-center align-items-center"><i class="fa fa-search"></i></button>
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->

                        <div class="cat-links">
                            <h2>Категории</h2>

                            <ul class="p-0 m-0">
                                <li v-for="(category,index) in categories" v-bind:key="index" class="noDecor" @click="setCategory(category)">
                                    <span :class="{ activeCategory : category.id === currentCategory.id}"> {{ category.title }}</span>
                                </li>
                            </ul>
                        </div><!-- .cat-links -->

                        <div class="latest-courses">
                            <h2>Последние просмотренные товары</h2>

                            <ul class="p-0 m-0">
                                <li class="flex flex-wrap justify-content-between align-items-center">
                                    <img src="images/products/LiOH.png" alt="">

                                    <div class="content-wrap">
                                        <h3><a href="#">Натрий нитрат</a></h3>

                                        <div class="course-cost">100 грн</div>
                                    </div><!-- .content-wrap -->
                                </li>

                                <li class="flex flex-wrap justify-content-between align-items-center">
                                    <img src="images/products/LiOH.png" alt="">

                                    <div class="content-wrap">
                                        <h3><a href="#">Винная кислота</a></h3>

                                        <div class="course-cost">150 грн<span class="price-drop">210 грн</span></div>
                                    </div><!-- .content-wrap -->
                                </li>
                            </ul>
                        </div><!-- .latest-courses -->

                        <div class="ads">
                            <img src="images/favicon-default.png" width="50%" style="margin-left:25%;" alt="">
                        </div><!-- .ads -->
                    </div><!-- .sidebar -->
                </div><!-- .col -->
                <div class="col-12 col-lg-9">
                    <div class="featured-courses courses-wrap">
                        <div class="row mx-m-25">
                            <div v-for="(product,index) in paginatedData" v-bind:key="index" class="col-12 col-md-4 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img  :src="product.photo" alt="product image"></a>
                                    </figure><!-- .course-thumbnail -->

                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#">{{ product.name }} </a></h2>

                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-date">Международное название: {{ product.international_name }}</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->

                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                                            <div class="course-cost" v-show="product.price">
                                                {{ product.price }} грн <span class="price-drop" v-show="product.old_price">200 грн</span>
                                            </div><!-- .course-cost -->
                                        </footer><!-- .entry-footer -->
                                        <div class="buy-course">
                                            <a class="btn" href="#">Заказать</a>
                                        </div><!-- .buy-course -->

                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .category products -->
                    <div class="pagination flex flex-wrap justify-content-between align-items-center">
                        <div class="col-12 col-lg-4 order-2 order-lg-1 mt-3 mt-lg-0">
                            <ul class="flex flex-wrap align-items-center order-2 order-lg-1 p-0 m-0">
                                <li v-show="pageNumber+1 !== 1">
                                    <a href="#next" @click="prevPage"><i class="fa fa-angle-left"></i></a>
                                </li>
                                <li v-for="(page ,index) in pageCount" v-bind:key="index" :class="{ active : index === pageNumber}">
                                    <a href="#next" @click="setPage(index)">
                                        {{ index + 1 }}
                                    </a>
                                </li>
                                <li v-show="pageNumber+1 !== pageCount">
                                    <a href="#next" @click="nextPage"><i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .pagination -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->

        <div class="clients-logo">
            <div class="container">
                <div class="row">
                    <div class="col-12 flex flex-wrap justify-content-center justify-content-lg-between align-items-center">
                        <div class="logo-wrap">
                            <img src="images/logo-1.png" alt="">
                        </div><!-- .logo-wrap -->

                        <div class="logo-wrap">
                            <img src="images/logo-2.png" alt="">
                        </div><!-- .logo-wrap -->

                        <div class="logo-wrap">
                            <img src="images/logo-3.png" alt="">
                        </div><!-- .logo-wrap -->

                        <div class="logo-wrap">
                            <img src="images/logo-4.png" alt="">
                        </div><!-- .logo-wrap -->

                        <div class="logo-wrap">
                            <img src="images/logo-5.png" alt="">
                        </div><!-- .logo-wrap -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .clients-logo -->
    </div>
</template>

<script>
    export default {
        data(){
          return{
              categories:[],
              currentCategory: {},
              categoriesProducts:{
                  'ceramic_and_glass_industry' : [],
                  'wood_industry' : [],
                  'metallurgical_industry' : [],
                  'agricultural_industry' : [],
                  'food_industry' : [],
                  'construction_industry' : [],
                  'pharmaceutical_industry' : [],
                  'electroplating_metals' : [],
                  'varnishes_paints_and_resins' : [],
                  'lubricants_and_oils' : [],
                  'tires_and_rubber_goods' : [],
                  'cosmetic_industry' : []
              },
              pageNumber:0,
              productsPerPage : 9
          }
        },
        computed:{
            pageCount(){
                let currentProducts = this.categoriesProducts[this.currentCategory.ID_NAME];
                if(currentProducts !== undefined) {
                    let l = currentProducts.length,
                        s = this.productsPerPage;
                    return Math.ceil(l / s);
                }
            },
            paginatedData(){
                let currentProducts = this.categoriesProducts[this.currentCategory.ID_NAME];
                const  start = this.pageNumber * this.productsPerPage,
                       end = start + this.productsPerPage;
                if(currentProducts !== undefined){
                    return this.categoriesProducts[this.currentCategory.ID_NAME].slice(start, end);
                }
            }
        }
        ,
        methods:{
            getCategories(){
                axios.get('/catalogue/get/categories').then(
                    (response) => {
                        this.categories = response.data;
                        this.setCategory(this.categories[0]);
                    }
                );
            },
            setCategory(category){
                this.currentCategory = category;
                this.pageNumber = 0 ;
                this.getCategoryProducts(category);
            },
            getCategoryProducts(category){
                let categoryName = category.ID_NAME;
                if( this.categoriesProducts[categoryName].length > 0){
                    return;
                }
                axios.get('/catalogue/get/' + category.ID_NAME + '/products').then(
                    (response)=>{
                        this.categoriesProducts[category.ID_NAME] = response.data;
                    }
                );
            },
            nextPage(){
                this.pageNumber++;
                this.scrollUp();
            },
            prevPage(){
                this.pageNumber--;
                this.scrollUp();
            },
            setPage(index){
                this.pageNumber = index ;
                this.scrollUp();
            },
            scrollUp(){
                let target = '#next',
                    $target = $(target);

                $('html, body').stop().animate( {
                    'scrollTop': $target.offset().top
                }, 900, 'swing', function () {
                    window.location.hash = target;
                } );
            }
        },
        mounted() {
            this.getCategories();
        }
    }
</script>
<style>
    .activeCategory{
     color:  #19c880;
    }
</style>