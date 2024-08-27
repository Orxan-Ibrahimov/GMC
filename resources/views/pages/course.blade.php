@extends('layout.master')

@section ('content')

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Təlimlər</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Ana Səhifə</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Təlimlər</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Category Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-info text-uppercase mb-3" style="letter-spacing: 5px;">Kateqoriyalar</h5>
            <h1>Təlim Kateqoriyalarını Araşdırın</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/cat-1.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">İnsan Resursları</h4>
                        <span>28 təlim</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/cat-2.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Risklərin İdarəsi</h4>
                        <span>42 təlim</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/cat-3.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Kiber Təhlükəsizlik</h4>
                        <span>27 təlim</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/cat-4.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Coaching</h4>
                        <span>36 təlim</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/cat-5.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Marketinq</h4>
                        <span>29 təlim</span>
                    </a>
                </div>
            </div>
          
            
        </div>
    </div>
</div>
<!-- Category Start -->


<!-- Courses Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-info text-uppercase mb-3" style="letter-spacing: 5px;">Təlimlər</h5>
            <h1>Əsas təlimlər</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
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
            <div class="col-lg-4 col-md-6 mb-4">
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
            <div class="col-lg-4 col-md-6 mb-4">
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
            <div class="col-lg-4 col-md-6 mb-4">
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
            <div class="col-lg-4 col-md-6 mb-4">
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
            <div class="col-lg-4 col-md-6 mb-4">
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


@endsection