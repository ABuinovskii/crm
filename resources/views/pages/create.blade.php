@extends('layouts.app')
@section('content')
                    
                    <!-- START PAGE CONTAINER -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="block block-condensed">
                                    <div class="app-heading app-heading-small">                                        
                                        <div class="title">
                                            <h2>Добавление нового пользователя</h2>
                                            
                                        </div>
                                    </div>
                              
                                    {!! Form::open(array('route' => 'tenants.store')) !!}

                                     <div class="block-content padding-right-5 padding-left-5">
                                        <div class="form-group">                                                
                                                <div class="col-md-6">
                                                    {{ Form::label('mail','Email') }}
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><span class="fa fa-envelope-o"></span></div>
                                                        
                                                         {{ Form::email('mail', null, array('class' => 'form-control'))}}
                                                    </div>                                                                                                        
                                                </div>
                                                <div class="col-md-6">
                                                {{ Form::label('name','Имя') }}
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><span class="fa fa-user-o"></span></div>
                                                       {{ Form::text('name', null, array('class' => 'form-control' ))}}
                                                    </div>                                                    
                                                </div>
                                            </div>  

                                        <div class="form-group">                                                
                                               
                                                <div class="col-md-4">
                                                     {{ Form::label('phone','Телефон') }}
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                                                         {{ Form::number('phone', null, array('class' => 'form-control' ))}}
                                                    </div>
                                                </div>
                                               
                                        </div>



                                    </div>
                                     
                                                                          
                                        <div class="block-content padding-right-5 padding-left-5">
                                     

                                            <div class="form-group margin-top-10 margin-bottom-20">
                                                <div class="col-md-6">
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    {{ Form::submit('Сохранить изменения', array('class' => 'btn btn-primary btn-icon-fixed' ))}}
                                                   
                                        
                                                </div>
                                            </div>                                                                            
                                        </div>
                                       {!! Form::close() !!}
                                    <!--<form action="#" method="get">
                                        <div class="block-content padding-right-5 padding-left-5">

                                            <div class="form-group">                                                
                                                <div class="col-md-6">
                                                    <label>E-mail <span class="text-bloody-500">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><span class="fa fa-envelope-o"></span></div>
                                                        <input type="text" class="form-control" value="ivanovivan@domain.com">
                                                    </div>                                                                                                        
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Имя <span class="text-bloody-500">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><span class="fa fa-user-o"></span></div>
                                                        <input type="text" class="form-control" value="Иванов Иван">
                                                    </div>                                                    
                                                </div>
                                            </div>                                            
                                            <div class="form-group">                                                
                                                <div class="col-md-4">
                                                    <label>Skype</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><span class="fa fa-skype"></span></div>
                                                        <input type="text" class="form-control" value="ivanovSkype">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Телефон</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                                                        <input type="text" class="form-control" value="+38 (098) 765-43-21">
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="form-group  margin-top-20">                                                
                                                <div class="col-md-12">
                                                    <label>Изображение пользователя</label>
                                                    <div class="contact contact-bordered contact-xlg margin-top-5">
                                                        <img src="assets/images/users/user_4.jpg">
                                                        <div class="contact-container">                                                            
                                                            <button class="btn btn-default margin-bottom-5">Изменить изображение</button>
                                                            <a href="#" class="text-sm">Удалить изображение</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-divider"></div>
                                                                          
                                        <div class="block-content padding-right-5 padding-left-5">
                                     

                                            <div class="form-group margin-top-10 margin-bottom-20">
                                                <div class="col-md-6">
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <button class="btn btn-primary btn-icon-fixed"><span class="icon-floppy-disk"></span> Сохранить изменения</button>
                                                </div>
                                            </div>                                                                            
                                        </div>
                                    </form>-->

                                

                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTAINER -->
                    
                </div>
                <!-- END APP CONTENT -->
                                
            </div>
            <!-- END APP CONTAINER -->
                        
    
            
@endsection