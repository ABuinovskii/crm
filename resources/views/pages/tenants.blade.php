@extends('layouts.app') 


   @section('content')


                    
                    <!-- START PAGE CONTAINER -->
                    <div class="container">

                        <div class="block block-condensed">                                                        
                            
                            <div class="block-content margin-top-20">                                
                                
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="fa fa-search"></span></div>
                                            <input type="text" placeholder="Быстрый поиск..." class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-md-offset-8">
                                        <a href="/tenants/create" class="btn btn-primary btn-icon-fixed btn-block"><span class="icon-plus-square"></span> Добавить клиента</a>
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="main_table">
                                        <thead>
                                            <tr>
                                                <th width="25">ID</th>                                                
                                                <th>Имя</th>                                                
                                                                                   
                                                <th class="nosort" width="150">EMAL</th>
                                                <th class="nosort" width="150">ТЕЛЕФОН</th>
                                                <th class="nosort" width="150">Комментарии</th>
                                            
                                                <th width="80">Регистрация</th>
                                                <th class="nosort" width="65"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($tenants as $tenant)                                       
                                            <tr>                                                    
                                                <td class="text-bold">{{ $tenant->id }}</td>
                                                <td>                                                    
                                                    <a href="#" class="contact text-blue-600"><img src="{{ asset('/images/avatar.svg') }}">{{ $tenant->name }}</a>
                                                </td>
                                              
                                                <td>
                                                    <button class="btn btn-default btn-sm btn-block btn-icon-fixed">
                                                        <span class="fa fa-envelope"></span> {{ $tenant->mail }} 
                                    
                                                    </button>
                                                </td>
                                                      <td>
                                                    <button class="btn btn-default btn-sm btn-block btn-icon-fixed">

                                                        <span class="fa fa-phone"></span> {{ $tenant->phone }} 
                                                      
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-default btn-sm btn-block" 
                                                            data-container=".app" 
                                                            data-html="true"
                                                            data-toggle="popover"                                                             
                                                            data-placement="top"
                                                            data-content="<div class='listing margin-bottom-0'><div class='listing-item'><p class='margin-bottom-0'>Pellentesque pharetra elementum consectetur. Donec pellentesque porta faucibus. In hac habitasse platea dictumst. Etiam id orci risus. Nullam feugiat tortor rhoncus.</p><p class='margin-bottom-0 text-muted text-sm text-italic'>Дата: 20.05.2016 &nbsp; Автор: Дмитрий Гончаров</p></div></div>">
                                                      @if(is_null($tenant->comments))
                                                           Отсутствуют
                                                      @else
                                                           {{ $tenant->comments }} 
                                                      @endif
                                                    </button>
                                                </td>
                                             
                                                <td class="text-bold">  {{ $tenant->created_at->format('Y-m-d') }} </td>
                                                <td class="text-center">
                                                   

                                                     {!! Html::linkRoute('tenants.edit', '', array($tenant->id), array('class' => 'btn btn-primary btn-icon btn-sm fa fa-pencil')) !!}

                                                    {!! Form::open(['route' => ['tenants.destroy', $tenant->id], 'method' => 'DELETE']) !!}

                                                   <button type="submit"  data-name="{{ $tenant->name }}" class="btn btn-danger btn-icon btn-sm delete-tenant fa fa-times"></button>

                                                    {!! Form::close() !!}




                                        
 


                                                  <!--  <button data-id="{{$tenant->id}}"" class="btn btn-danger btn-icon btn-sm delete-tenant" ><span class="fa fa-times"></span></button>
                                                   <button class="btn btn-primary btn-icon btn-sm"><span class="fa fa-pencil"></span></button>-->
                                                </td>
                                            </tr>                                                                                                                            
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>                                                                
                                
                            </div>                            
                        </div>

                    </div>
                    <!-- END PAGE CONTAINER -->
                  
                        
          @endsection