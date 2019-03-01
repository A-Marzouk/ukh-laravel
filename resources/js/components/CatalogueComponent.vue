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
                    <div class="breadcrumbs">
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
                                <li v-for="(category,index) in categories" v-bind:key="index" class="noDecor" @click="setCategory(category.id)">
                                    <a href="javascript:void(0)"> {{ category.title }}</a>
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
                                    <img src="images/products/tartaricacid1.png" alt="">

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
                            <div class="col-12 col-md-4 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/products/LiOH.png" alt=""></a>
                                    </figure><!-- .course-thumbnail -->

                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#">Натрий нитрат</a></h2>

                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-date">Международное название: Sodium Nitrate.</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->

                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                                            <div class="course-cost">
                                                100 грн
                                            </div><!-- .course-cost -->
                                        </footer><!-- .entry-footer -->
                                        <div class="buy-course">
                                            <a class="btn" href="#">Заказать</a>
                                        </div><!-- .buy-course -->

                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->

                            <div class="col-12 col-md-4 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/products/tartaricacid1.png" alt=""></a>
                                    </figure><!-- .course-thumbnail -->

                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#">Винная кислота</a></h2>

                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-date">Международное название: Tartaric acid.</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->

                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                                            <div class="course-cost">
                                                150 грн <span class="price-drop">210 грн</span>
                                            </div><!-- .course-cost -->
                                        </footer><!-- .entry-footer -->
                                        <div class="buy-course">
                                            <a class="btn" href="#">Заказать</a>
                                        </div><!-- .buy-course -->

                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->

                            <div class="col-12 col-md-4 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/products/absk1.png" alt=""></a>
                                    </figure><!-- .course-thumbnail -->

                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#">АБСК</a></h2>

                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-date">Международное название: LABSA.</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->

                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                                            <div class="course-cost">
                                                120 грн <span class="price-drop">200 грн</span>
                                            </div><!-- .course-cost -->
                                        </footer><!-- .entry-footer -->
                                        <div class="buy-course">
                                            <a class="btn" href="#">Заказать</a>
                                        </div><!-- .buy-course -->

                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->


                            <div class="col-12 col-md-4 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/products/LiOH.png" alt=""></a>
                                    </figure><!-- .course-thumbnail -->

                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#">Натрий нитрат</a></h2>

                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-date">Международное название: Sodium Nitrate.</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->

                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                                            <div class="course-cost">
                                                100 грн <span class="price-drop">150 грн</span>
                                            </div><!-- .course-cost -->
                                        </footer><!-- .entry-footer -->
                                        <div class="buy-course">
                                            <a class="btn" href="#">Заказать</a>
                                        </div><!-- .buy-course -->

                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->

                            <div class="col-12 col-md-4 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/products/tartaricacid1.png" alt=""></a>
                                    </figure><!-- .course-thumbnail -->

                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#">Винная кислота</a></h2>

                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-date">Международное название: Tartaric acid.</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->

                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                                            <div class="course-cost">
                                                150 грн <span class="price-drop">210 грн</span>
                                            </div><!-- .course-cost -->
                                        </footer><!-- .entry-footer -->
                                        <div class="buy-course">
                                            <a class="btn" href="#">Заказать</a>
                                        </div><!-- .buy-course -->

                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->

                            <div class="col-12 col-md-4 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/products/absk1.png" alt=""></a>
                                    </figure><!-- .course-thumbnail -->

                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#">АБСК </a></h2>

                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-date">Международное название: LABSA.</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->

                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                                            <div class="course-cost">
                                                120 грн <span class="price-drop">200 грн</span>
                                            </div><!-- .course-cost -->
                                        </footer><!-- .entry-footer -->
                                        <div class="buy-course">
                                            <a class="btn" href="#">Заказать</a>
                                        </div><!-- .buy-course -->

                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->

                        </div><!-- .row -->
                    </div><!-- .featured-courses -->

                    <div class="pagination flex flex-wrap justify-content-between align-items-center">
                        <div class="col-12 col-lg-4 order-2 order-lg-1 mt-3 mt-lg-0">
                            <ul class="flex flex-wrap align-items-center order-2 order-lg-1 p-0 m-0">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
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
              currentCategory: '',
              categoriesProducts:[]
          }
        },
        methods:{
            getCategories(){
                axios.get('/catalogue/get/categories').then(
                    (response) => {
                        this.categories = response.data;
                        this.currentCategory = this.categories[0].id;
                    }
                );
            },
            setCategory(category_id){
                this.currentCategory = category_id ;
            },
            getCategoryProducts(category){
                if( this.categoriesProducts[category.id].length > 0){
                    return;
                }

                axios.get('/catalogue/get/' + category.ID_NAME + '/products').then(
                    (response)=>{
                        this.categoriesProducts[category.id] = response.data;
                    }
                );
            }
        },
        mounted() {
            this.getCategories();
        }
    }
</script>