@extends('layouts.app')

@section('content')
    <div class="hero-content" id="mainSection">
        <div class="hero-content-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h4>Укрколорхим</h4>
                                <h1>Динамично компания <br/><span class="secondHeader">Создана опытными специалистами-химиками</span></h1>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p>
                                    Осуществляет поставки химического сырья и пищевых добавок точно в срок и с удобной для клиента регулярностью.
                                </p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer read-more">
                                <a href="#">Подробнее</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .hero-content-wrap -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .hero-content-hero-content-overlay -->
    </div><!-- .hero-content -->

    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding: 0;">
                    <h2 class="entry-title" style="color: #19c880;">Укрколорхим</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 align-content-lg-stretch" style="padding: 0;">
                    <header class="heading">
                        <p>
                            динамично развивающаяся компания, создана опытными специалистами-химиками.<br/>
                            специализируется на поставках сырья для производства лаков, красок и смол.
                        </p>
                    </header><!-- .heading -->

                    <div class="entry-content ezuca-stats">
                        <ul class="p-0 m-0 green-ticked" style="color:#757686;">
                            <li>Сырье для органорастворимых ЛКМ.</li>
                            <li>Сырье для ЛКМ на водной основе.</li>
                            <li>Наполнители.</li>
                            <li>Пигменты</li>
                            <li>Различные добавки</li>
                        </ul>
                    </div><!-- .ezuca-stats -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 flex align-content-center mt-5 mt-lg-0">
                    <div class="ezuca-video position-relative">
                        <img src="images/lab.jpg" style="border-radius: 3px;" alt="">
                    </div><!-- .ezuca-video -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .about-section -->
@endsection