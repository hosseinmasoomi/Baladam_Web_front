<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/baladam.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>baladam</title>
<body>
<section class="header1">
    <div class="navbar1">
        <img class="logonav" src="{{URL::asset('/image/1bg.jpg')}}" alt="logo">
        <a href="#home">وارد شو</a>
        <div class="dropdown1">
            <button class="dropbtn">خدمات
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown1-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="dropdown1">
            <button class="dropbtn">آموزش ها
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown1-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>

            </div>
        </div>
        <a href="#news">VIP</a>
        <div class=" btn btn-warning btnvorod">ورود</div>
    </div>

    <div class="search-box">
        <div class="search-text center white" >
            <h1>بــــــــــلدم</h1>
            <p>هر کجا هستید با چند کلیک سفارش دهید</p>
        </div>
        <form action="">
            <input type="text" class="search" placeholder="جستجو">
        </form>
        <button class="btn-serach-box"><a href="#"><i class="fa fa-search"></i></a></button>
    </div>

</section>
<section class="section2">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titel">
                    <h3>هر چیزی  که علاقمند به یادگیری هستید را در دنیایی از <br>ویدیو ها پیدا کنید</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">

                <div class="box  js--box" id="1b" onmouseenter="show(this.id)" onmouseleave="show1(this.id)"><a href="#">
                        <div id="1box">
                            <div class="box-img">
                                <img class="img-responsive" src="{{URL::asset('/image/game.svg')}}" alt="game">
                            </div>
                            <div class="box-txt center">
                                <h5>بازی و سرگرمی</h5>
                            </div>
                        </div>
                        <div class="box-dic op0 subbox" id="1subbox">
                            <ul>
                                <li><a href="#"> طراحی لوگو</a></li>
                                <li><a href="#"> طراحی بروشور</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>

                                <br>


                                <span><a href="#" style="margin-right:110px"> <i class="fa fa-arrow-left"></i>مشاهده کامل</a></span>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>




            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="box  js--box" id="2b" onmouseenter="show(this.id)" onmouseleave="show1(this.id)"><a href="#">
                        <div id="2box">
                            <div class="box-img">
                                <img class="img-responsive" src="{{URL::asset('/image/game.svg')}}" alt="game">
                            </div>
                            <div class="box-txt center">
                                <h5>برنامه نویسی و تکنولوژی</h5>
                            </div>
                        </div>
                        <div class="box-dic op0 subbox" id="2subbox">
                            <ul>
                                <li><a href="#"> طراحی لوگو</a></li>
                                <li><a href="#"> طراحی بروشور</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>
{{--ouo--}}
                                <br>

                                <span><a href="#" style="margin-right:110px"> <i class="fa fa-arrow-left"></i>مشاهده کامل</a></span>
                            </ul>
                        </div>
                    </a> </div>
            </div>




            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="box  js--box" id="3b" onmouseenter="show(this.id)" onmouseleave="show1(this.id)"><a href="#">
                        <div id="3box">
                            <div class="box-img">
                                <img class="img-responsive" src="{{URL::asset('/image/game.svg')}}" alt="game">
                            </div>
                            <div class="box-txt center">
                                <h5> طراحی و گرافیک</h5>
                            </div>
                        </div>
                        <div class="box-dic op0 subbox" id="3subbox">
                            <ul>
                                <li><a href="#"> طراحی لوگو</a></li>
                                <li><a href="#"> طراحی بروشور</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>

                                <br>

                                <span><a href="#" style="margin-right:110px"> <i class="fa fa-arrow-left"></i>مشاهده کامل</a></span>
                            </ul>
                        </div>
                    </a> </div>
            </div>



            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="box  js--box" id="4b" onmouseenter="show(this.id)" onmouseleave="show1(this.id)"><a href="#">
                        <div id="4box">
                            <div class="box-img">
                                <img class="img-responsive" src="{{URL::asset('/image/game.svg')}}" alt="game">
                            </div>
                            <div class="box-txt center">
                                <h5>نوشتن و ترجمه</h5>
                            </div>
                        </div>
                        <div class="box-dic op0 subbox" id="4subbox">
                            <ul>
                                <li><a href="#"> طراحی لوگو</a></li>
                                <li><a href="#"> طراحی بروشور</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>

                                <br>

                                <span><a href="#" style="margin-right:110px"> <i class="fa fa-arrow-left"></i>مشاهده کامل</a></span>
                            </ul>
                        </div>
                    </a> </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="box  js--box" id="5b" onmouseenter="show(this.id)" onmouseleave="show1(this.id)"><a href="#">
                        <div id="5box">
                            <div class="box-img">
                                <img class="img-responsive" src="{{URL::asset('/image/game.svg')}}" alt="game">
                            </div>
                            <div class="box-txt center">
                                <h5>ویدیو و انیمیشن</h5>
                            </div>
                        </div>
                        <div class="box-dic op0 subbox" id="5subbox">
                            <ul>
                                <li><a href="#"> طراحی لوگو</a></li>
                                <li><a href="#"> طراحی بروشور</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>

                                <br>

                                <span><a href="#" style="margin-right:110px"> <i class="fa fa-arrow-left"></i>مشاهده کامل</a></span>
                            </ul>
                        </div>
                    </a> </div>
            </div>



            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="box  js--box" id="6b" onmouseenter="show(this.id)" onmouseleave="show1(this.id)"><a href="#">
                        <div id="6box">
                            <div class="box-img">
                                <img class="img-responsive" src="{{URL::asset('/image/game.svg')}}" alt="game">
                            </div>
                            <div class="box-txt center">
                                <h5>موسیقی و صدا</h5>
                            </div>
                        </div>
                        <div class="box-dic op0 subbox" id="6subbox">
                            <ul>
                                <li><a href="#"> طراحی لوگو</a></li>
                                <li><a href="#"> طراحی بروشور</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>

                                <br>

                                <span><a href="#" style="margin-right:110px"> <i class="fa fa-arrow-left"></i>مشاهده کامل</a></span>
                            </ul>
                        </div>
                    </a> </div>
            </div>



            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="box  js--box" id="7b" onmouseenter="show(this.id)" onmouseleave="show1(this.id)"><a href="#">
                        <div id="7box">
                            <div class="box-img">
                                <img class="img-responsive" src="{{URL::asset('/image/game.svg')}}" alt="game">
                            </div>
                            <div class="box-txt center">
                                <h5>بازار یابی و فروش</h5>
                            </div>
                        </div>
                        <div class="box-dic op0 subbox" id="7subbox">
                            <ul>
                                <li><a href="#"> طراحی لوگو</a></li>
                                <li><a href="#"> طراحی بروشور</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>

                                <br>

                                <span><a href="#" style="margin-right:110px"> <i class="fa fa-arrow-left"></i>مشاهده کامل</a></span>
                            </ul>
                        </div>
                    </a> </div>
            </div>



            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="box  js--box" id="8b" onmouseenter="show(this.id)" onmouseleave="show1(this.id)"><a href="#">
                        <div id="8box">
                            <div class="box-img">
                                <img class="img-responsive" src="{{URL::asset('/image/game.svg')}}" alt="game">
                            </div>
                            <div class="box-txt center">
                                <h5>تجارت و کسب وکار</h5>
                            </div>
                        </div>
                        <div class="box-dic op0 subbox" id="8subbox">
                            <ul>
                                <li><a href="#"> طراحی لوگو</a></li>
                                <li><a href="#"> طراحی بروشور</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>
                                <li><a href="#"> طراحی اینفو گرافی</a></li>
                                <br>


                                <span><a href="#" style="margin-right:110px"> <i class="fa fa-arrow-left"></i>مشاهده کامل</a></span>
                            </ul>
                        </div>
                    </a> </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="sec2btn">
                <form action="">
                    <input type="button" class="sec2btn1" value="مشاهده تمامی دسته بندی ها">
                </form>
            </div>
        </div>
    </div>
</section>
</body>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/baladam.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

</html>
