<!DOCTYPE html>
<html lang="en">
    <head>                        
        <title>Poni - main</title>
        
        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>                
        <!-- APP WRAPPER -->
        <div class="app">                       
                        
            <!-- START APP CONTAINER -->
            <div class="app-container">                
                <!-- START APP HEADER -->
                <div class="app-header app-header-design-default">        
                    <ul class="app-header-buttons visible-mobile">
                        <li><a href="#" class="btn btn-link btn-icon" data-navigation-horizontal-toggle="true"><span class="icon-menu"></span></a></li>                    
                    </ul>
                    <a href="index.html" class="app-header-logo app-header-logo-light app-header-logo-condensed">Project</a>
                    
                    <ul class="app-header-buttons pull-right">
                        <li>
                            <div class="contact contact-rounded contact-bordered contact-lg contact-ps-controls">
                                <img src="" alt="John Doe">
                                <div class="contact-container">
                                    <a href="#">Дмитрий Свичкарь</a>
                                    <span>Graphic Designer</span>
                                </div>
                                <div class="contact-controls">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary btn-icon" data-toggle="dropdown"><span class="icon-menu"></span></button>                        
                                        <ul class="dropdown-menu dropdown-left">
                                            <li><a href="#"><span class="icon-user"></span> Профиль</a></li> 
                                            <li><a href="#"><span class="icon-cog"></span> Настройки</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" class="text-bloody-500"><span class="icon-exit"></span> Выход</a></li> 
                                        </ul>
                                    </div>                    
                                </div>
                            </div>
                        </li>        
                    </ul>              
                </div>
                <!-- END APP HEADER  -->
                
                <!-- START APP CONTENT -->
                <div class="app-content">
                    
                    <div class="app-navigation-horizontal">
                        <nav>
                            <ul>
                                <li class="active">
                                    <a>Календарь</a>
                                   
                                </li>                                
                                <li>
                                    <a href="/tenants">Пользователи</a>
                                   
                                </li>
                          
                            </ul>
                                            
                        </nav>
                    </div>
                    
                    <!-- START PAGE HEADING -->                    
                    <!--<div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">Панель управления</a></li>                                                     
                            <li class="active">Текущие проекты</li>
                        </ul>
                        <ul class="currency pull-right">
                            <li><span>RUB:</span> 0.396</li>
                            <li><span>USD:</span> 26.576</li>
                            <li><span>EUR:</span> 27.920</li>
                        </ul>
                    </div>-->
                    <!-- END PAGE HEADING -->
                    
                    

                    @yield('content') 




                        
            <!-- START APP FOOTER -->
            <div class="app-footer app-footer-default" id="footer">
                
              
                <div class="app-footer-line extended">
                    <div class="row">            
                        <div class="col-md-3 padding-right-50">                                                
                            <h3 class="title"><img src="" alt=Poni"></h3>                                
                            <p>Это CRM-система, собственная разработка компании <strong>ColorSpace™</strong>, которая позволяет оплачивать проекты, следить за их выполнением, иметь доступ ко всем исходным файлам. Система работает <strong>24/7</strong> и доступна <strong>только для клиентов</strong> студии. </p>
                            <p>При возникновении вопросов, обращайтесь в службу<br> тенической поддержки:</p>
                            <div class="row">
                                <div class="col-md-6 text-bold">support@colorspace.ua</div>
                                <div class="col-md-6 text-bold text-right">+38 (093) 308-10-52<br>+38 (057) 750-60-62</div>
                            </div>                
                        </div>
                        <div class="col-md-2">                
                            <h3 class="title"><span class="icon-lifebuoy"></span> ВОЗНИКЛИ ВОПРОСЫ?</h3>
                            <ul class="list-unstyled">                    
                                <li><a href="#">Что такое PONI?</a></li>
                                <li><a href="#">Общие вопросы</a></li>
                                <li><a href="#">Компания в лицах</a></li>
                                <li><a href="#">Все контакты компании</a></li>
                                <li><a href="#">Оставить отзыв</a></li>
                                <li><a href="#">Составить жалобу/просмотреть решение</a></li>
                                <li><a href="#">Письмо руководителю</a></li>                    
                            </ul>                                
                        </div>
                        <div class="col-md-3">                                                                        
                            <h3 class="title"><span class="icon-reading"></span> НОВОСТИ</h3>
            
                            <div class="row app-footer-articles">
                                <div class="col-md-3 col-sm-4">
                                    <img src="" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-9 col-sm-8">
                                    <a href="#">Равным образом начало повседневной</a>
                                    <p>Идейные соображения высшего порядка, а также дальнейшее развитие различных форм а также дальнейшее развитие деятельности...</p>
                                </div>
                            </div>
                            <div class="row app-footer-articles">
                                <div class="col-md-3 col-sm-4">
                                    <img src="" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-9 col-sm-8">
                                    <a href="#">Не следует, однако забывать, что консультация</a>
                                    <p>Таким образом новая модель организационной деятельности влечет за собой процесс внедрения деятельности влечет за собой процесс...</p>
                                </div>
                            </div>         
                                            
                        </div>
                        <div class="col-md-4">
                            
                            <div class="row margin-bottom-30">
                                <div class="col-md-6">
                                    <p><span class="text-bold pull-left margin-right-10 text-lg text-white">1,332</span> Клиента в нашей системе</p>
                                </div>
                                <div class="col-md-6">
                                    <p><span class="text-bold pull-left margin-right-10 text-lg text-white">2,651</span> Успешный проект</p>
                                </div>
                            </div>
                            
                            <div class="row">                    
                                <div class="col-md-6">
                                    <h3 class="title"><img src="" alt="upwork"> Аккаунты на UPWORK.COM</h3>
                                    <div class="padding-left-10">
                                        <a href="" class="contact contact-rounded contact-bordered padding-bottom-5">
                                            <img src=""> Дмитрий Гончаров
                                        </a>
                                        <a href="http://www.fl.ru/users/color-space/" class="contact contact-rounded contact-bordered padding-bottom-5">
                                            <img src=""> Игорь Проценко
                                        </a>
                                        <a href="http://www.upwork.com/fl/dmitrysvichkar" class="contact contact-rounded contact-bordered">
                                            <img src=""> Дмитрий Свичкарь
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="title"><img src="" alt="FL"> Аккаунты на FL.RU</h3>
                                    <div class="padding-left-10">
                                        <a href="http://www.fl.ru/users/colorspace_ua/" class="contact contact-rounded contact-bordered padding-bottom-5">
                                            <img src=""> Дмитрий Гончаров
                                        </a>
                                        <a href="http://www.fl.ru/users/color-space/" class="contact contact-rounded contact-bordered">
                                            <img src=""> Игорь Проценко
                                        </a>
                                    </div>
                                </div>
                            </div>                
                        </div>                                    
                    </div>                    
                </div>
                <div class="app-footer-line darken">                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">&copy; 2017 ColorSpace™. Товарные знаки и торговые марки являются собственностью их соответствующих владельцев. Все права защищены.</div>
                        </div>
                        <div class="col-md-6 text-right">        
                            <img src="">
                            <img src="">
                            <img src="">
                            <img src="">        
                        </div>
                    </div>                
                </div>
            </div>
            <!-- END APP FOOTER -->
        </div>        
        <!-- END APP WRAPPER -->                
        
        <!--
        <div class="modal fade" id="modal-thanks" tabindex="-1" role="dialog">                        
            <div class="modal-dialog modal-sm" role="document">                    
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
                <div class="modal-content">                    
                    <div class="modal-body">                
                        <p class="text-center margin-bottom-20">
                            <img src="assets/images/smile.png" alt="Thank you" style="width: 100px;">
                        </p>                
                        <h3 id="modal-thanks-heading" class="text-uppercase text-bold text-lg heading-line-below heading-line-below-short text-center"></h3>
                        <p class="text-muted text-center margin-bottom-10">Thank you so much for likes</p>
                        <p class="text-muted text-center">We will do our best to make<br> Boooya template perfect</p>                
                        <p class="text-center"><button class="btn btn-success btn-clean" data-dismiss="modal">Continue</button></p>
                    </div>                    
                </div>
            </div>            
        </div>-->
        
        <!-- IMPORTANT SCRIPTS -->
        
        <script type="text/javascript" src="js/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript" src="js/vendor/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/vendor/moment/moment.min.js"></script>
        <script type="text/javascript" src="js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END IMPORTANT SCRIPTS -->
        <!-- THIS PAGE SCRIPTS -->
        <script type="text/javascript" src="js/vendor/bootstrap-select/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/vendor/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/vendor/datatables/dataTables.bootstrap.min.js"></script>
        <!-- END THIS PAGE SCRIPTS -->
        <!-- APP SCRIPTS -->
        <script type="text/javascript" src="{{ asset('/js/app.js?v=1.3') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!--<script type="text/javascript" src="js/app_plugins.js"></script>-->
        <!-- END APP SCRIPTS -->
         
    </body>
</html>