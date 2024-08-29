@extends('layout.master')

@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="min-height: 300px;">
                <img class="position-relative w-100" src="{{ asset('img/carousel-1.jpg') }}" style="min-height: 300px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h1 class="display-3 text-white mb-md-4">İş dünyasına addımını bizimlə at</h1>
                        <a href="" class="btn btn-info py-md-2 px-md-4 font-weight-semi-bold mt-2">Ətraflı</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="min-height: 300px;">
                <img class="position-relative w-100" src="img/carousel-2.jpg" style="min-height: 300px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h1 class="display-3 text-white mb-md-4">Bizim təlimlərə qoşulmaqla ən doğru seçimi etdiniz</h1>
                        <a href="" class="btn btn-info py-md-2 px-md-4 font-weight-semi-bold mt-2">Ətraflı</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div id="about" class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="img/about.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <div class="text-left mb-4">
                    <h5 class="text-info text-uppercase mb-3" style="letter-spacing: 5px;">Haqqımızda</h5>
                </div>
                <p>
                    Global Consulting Management 2024-cü ilin aprel ayında fəaliyyətə başlamışdır.Əsas fəaliyyət istiqaməti təlim-tədrisdir. Hal-hazırda bir neçə ixtisas üzrə təlimlər keçirilir. Təlimçilərimiz müxtəlif xarici ölkələrin sertifikatlarına sahib peşəkarlardırlar.
                </p>
                <a href="" class="btn btn-info py-md-2 px-md-4 font-weight-semi-bold mt-2">Ətraflı</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Category Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h2 class="text-info text-uppercase mb-3" style="letter-spacing: 5px;">Təlim Kateqoriyaları</h2>
        </div>
        <div class="row">
            <div id="category-1" class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/cat-1.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">İnsan Resursları</h4>
                        <span>28 saat</span>
                    </a>
                </div>
            </div>
            <div id="category-2" class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/cat-2.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Risklərin İdarəsi</h4>
                        <span>42 saat</span>
                    </a>
                </div>
            </div>
            <div id="category-3" class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/cat-3.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Kiber Təhlükəsizlik</h4>
                        <span>27 saat</span>
                    </a>
                </div>
            </div>
            <div id="category-4" class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/cat-4.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Coaching</h4>
                        <span>36 saat</span>
                    </a>
                </div>
            </div>
            <div id="category-5" class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/cat-5.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Marketinq</h4>
                        <span>29 saat</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category Start -->


<!-- Courses Start -->
<div id="course" class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="text-info text-uppercase mb-3" style="letter-spacing: 5px;">Təlimlərimiz</h2>
        </div>
        <div class="row">
            <div id="course-1" class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid" src="img/course-1.jpg" alt="">
                    <div class="bg-secondary p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-users text-info mr-2"></i>25 tələbə</small>
                            <small class="m-0"><i class="far fa-clock text-info mr-2"></i>11.08.24</small>
                        </div>
                        <a class="h5" href="">İnsan resursları menecmenti</a>
                        <br>
                        <small>
                            Bu təlim proqramı HR mütəxəssislərinə əmək qanunvericiliyi, kargüzarlıq, əmək haqqının hesablanması, işəçıxmamalar, iş vaxtının uçotu tabeli, vaxt normaları, orta əmək haqqı və digər mövzular barədə nəzəri və praktiki təlimlərin keçirilməsini nəzərdə tutur!
                        </small>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa fa-star text-info mr-2"></i>4.5 <small>(250)</small></h6>
                                <h5 class="m-0">$99</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="course-2" class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid" src="img/course-2.jpg" alt="">
                    <div class="bg-secondary p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-users text-info mr-2"></i>12 tələbə</small>
                            <small class="m-0"><i class="far fa-clock text-info mr-2"></i>05.09.24</small>
                        </div>
                        <a class="h5" href="">Risklərin İdarə olunması</a>
                        <br>
                        <small>
                            Risklərin idarə edilməsi üzrə təlim öz təşkilatının məruz qalma risklərini idarə etməyə kömək edən bütün peşəkarlar üçün lazımdır. Buraya risk menecerləri, itkilərin qarşısının alınması agentləri və ya təhlükəsizlik işçiləri kimi işləyən şəxslər daxil ola bilər.
                        </small>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa fa-star text-info mr-2"></i>4.1 <small>(218)</small></h6>
                                <h5 class="m-0">$75</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="course-3" class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid" src="img/course-3.jpg" alt="">
                    <div class="bg-secondary p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-users text-info mr-2"></i>18 tələbə</small>
                            <small class="m-0"><i class="far fa-clock text-info mr-2"></i>22.08.24</small>
                        </div>
                        <a class="h5" href="">HR-lar üçün Excel təlimi</a>
                        <br>
                        <small>
                            Burada siz Exceli öz seçimləriniz əsasında konfiqurasiya etmək, standart seçimlərini dəyişdirmək, HR mütəxəssislərinin ən çox istifadə etdiyi axtarış funksiyalarının köməkliyi ilə fərqli məlumat bazalarında yer alan işçi məlumatlarının əldə etmək və sair kimi vacib elementləri öyrənəcəksiniz!
                        </small>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa fa-star text-info mr-2"></i>3.8 <small>(198)</small></h6>
                                <h5 class="m-0">$84</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="course-4" class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid" src="img/course-4.jpg" alt="">
                    <div class="bg-secondary p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-users text-info mr-2"></i>21 tələbə</small>
                            <small class="m-0"><i class="far fa-clock text-info mr-2"></i>01.07.24</small>
                        </div>
                        <a class="h5" href="">Media Hüququ</a>
                        <br>
                        <small>
                            Bu təlim media hüququna dair ətraflı təlimat almaq istəyən, öz bacarıqlarını təzələmək və mövcud qanunvericilikdən xəbərdar olmaq istəyən media əməkdaşları üçün nəzərdə tutulmuşdur.
                        </small>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa fa-star text-info mr-2"></i>4.7 <small>(200)</small></h6>
                                <h5 class="m-0">$91</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="course-5" class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid" src="img/course-5.jpg" alt="">
                    <div class="bg-secondary p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-users text-info mr-2"></i>16 tələbə</small>
                            <small class="m-0"><i class="far fa-clock text-info mr-2"></i>05.08.24</small>
                        </div>
                        <a class="h5" href="">Kiber təhlükəsizlik</a>
                        <br>
                        <small>
                            Bu təlimdə sürətlə inkişaf edən kibertəhlükəsizlik təhdidlərindən irəli gələn hüquqi, biznes və siyasət problemlərini araşdırırmaqla sizə vacib nünaslar öyrədiləcəkdir.
                        </small>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa fa-star text-info mr-2"></i>4.0 <small>(232)</small></h6>
                                <h5 class="m-0">$66</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="course-6" class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid" src="img/course-6.jpg" alt="">
                    <div class="bg-secondary p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-users text-info mr-2"></i>22 tələbə</small>
                            <small class="m-0"><i class="far fa-clock text-info mr-2"></i>09.09.24</small>
                        </div>
                        <a class="h5" href="">Coaching təlimi</a>
                        <br>
                        <small>Təlimlər əsas etibarı ilə iş adamları və sahibkarlar üçün nəzərdə tutulmuşdur. Burada əsas məqsəd müxtəlif sahələrdən olan mütəxəssislərin təlimçi kimi praktiki olmaq, uzun müddətli kouçinq və mentorluq bacarıqlarını tətbiq edə bilmək və iştirakçıların vaxtından səmərəli istifadə etməyi öyrətməkdir.</small>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa fa-star text-info mr-2"></i>4.8 <small>(187)</small></h6>
                                <h5 class="m-0">$73</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->


<!-- Team Start -->
<div id="teacher" class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h2 class="text-info text-uppercase mb-3" style="letter-spacing: 5px;">Təlimçilər</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="img/teacher-2.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Rəxşəndə Daşdəmirova</h5>
                        <p class="m-0">İnsan resursları üzrə təlimçi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Aysel Həsənova</h5>
                        <p class="m-0">Mühasibat üzrə təlimçi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Samir Əhmədov</h5>
                        <p class="m-0">Risklərin idarə edilməsi üzrə mütəxəssis</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Vaqif Ələsgərov</h5>
                        <p class="m-0">Proqram təminatı üzrə mütəxəssis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection