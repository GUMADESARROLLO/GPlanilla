@extends('layouts.plantilla')
@section('metodosjs')
@include('jsViews.js_employee')
@endsection
@section('content')
<main class="main" id="top">
@include('layouts.nav-vertical')
    <div class="container-fluid mt-7" data-layout="container" method="POST">
        <div class="content">
        <div class="card mb-3">
          
          <form class="row g-3 needs-validation" novalidate="" method="POST" action="{{ (isset($Employee)) ? route('UpdateEmployee') : route('SaveEmployee') }}">            
              @csrf
              <div class="card-body bg-light"> 
                  @if(session('message_success')) 
                    <div class="alert alert-success border-2 d-flex align-items-center" role="alert">
                      <div class="bg-success me-3 icon-item"><span class="fas fa-check-circle text-white fs-3"></span></div>
                      <p class="mb-0 flex-1">{{ session('message_success') }}</p>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  <div class="row gx-2">

                    @if(isset($Employee)) 
                      <div class="col-12 mb-3" style="display:none">
                        <input class="form-control" type="text" name="id_employee" value="{{ $Employee->id_employee ?? '' }}" />
                      </div>
                    @endif
                                        
                    <div class="col-6 mb-3">
                      <label class="form-label" for="event-name">Nombres</label>
                      <div class="input-group"><span class="input-group-text "><span class="fas fa-user"></span></span>
                        <input class="form-control" type="text" name="nombres" placeholder="Nombres de la persona" required="" value="{{ $Employee->first_name ?? '' }}" />
                        <div class="invalid-feedback">Campo Requerido.</div>
                      </div>
                    </div>
                    <div class="col-6 mb-3">
                      <label class="form-label" for="event-name">Apellidos</label>
                      <div class="input-group"><span class="input-group-text "><span class="fas fa-user"></span></span>
                        <input class="form-control" type="text" name="apellidos" placeholder="Apellidos de la persona" required="" value="{{ $Employee->last_name ?? '' }}" />
                        <div class="invalid-feedback">Campo Requerido.</div>
                      </div>
                    </div>
                    <div class="col-3 mb-3">
                      <label class="form-label" for="event-name">Telefono</label>
                      <div class="input-group"><span class="input-group-text "><span class="fas fa-phone-alt"></span></span>
                        <input class="form-control" id="event-name" type="text" name="telefono" placeholder="+505-0000-000" data-inputmask="'mask': ['+505-9999-9999']" data-mask value="{{ $Employee->phone_number ?? '' }}" />
                      </div>
                    </div>
                    <div class="col-3 mb-3">
                      <label class="form-label" for="event-name">Cedula</label>
                      <div class="input-group"><span class="input-group-text "><span class="far fa-address-card"></span></span>
                        <input class="form-control" id="event-name" type="text" name="cedula" placeholder="000-000000-0000A" data-inputmask="'mask': ['999-999999-9999A']" data-mask required="" value="{{ $Employee->cedula_number ?? '' }}"/>
                        <div class="invalid-feedback">Campo Requerido.</div>
                      </div>
                    </div>
                    <div class="col-3 mb-3">
                      <label class="form-label" for="event-name">Numero INSS</label>
                      <div class="input-group"><span class="input-group-text "><span class="far fa-address-card"></span></span>
                      <input class="form-control" id="event-name" type="text" name="num_inss" placeholder="0000000-0" data-inputmask="'mask': ['9999999-9']" data-mask value="{{ $Employee->inss_number ?? '' }}" />
                      </div>
                    </div>
                    <div class="col-3 mb-3">
                      <label class="form-label" for="event-name">EMail</label>
                      <div class="input-group"><span class="input-group-text "><span class="far fa-envelope"></span></span>
                        <input class="form-control" id="txt_email" type="text" name="email" placeholder="email@ejemplo.com" value="{{ $Employee->email ?? '' }}" />
                      </div>
                    </div>

                    <div class="col-6 mb-3">
                      <label class="form-label" for="event-name">Fecha Entrada</label>
                      <div class="input-group"><span class="input-group-text "><span class="far fa-calendar-check"></span></span>
                        <input class="form-control datetimepicker" id="start-date" type="text" name="date_in" placeholder="y/m/d" data-options='{"dateFormat":"Y-m-d","disableMobile":true}' required="" value="{{ $Employee->date_in ?? '' }}" />
                        <div class="invalid-feedback">Campo Requerido.</div>
                      </div>
                    </div>
                    
                    <div class="col-6 mb-3">
                      <label class="form-label" for="event-name">Fecha Salida</label>
                      <div class="input-group"><span class="input-group-text "><span class="far fa-calendar-times"></span></span>
                        <input class="form-control datetimepicker" id="end-date" type="text" name="date_out" placeholder="y-m-d" data-options='{"dateFormat":"Y-m-d","disableMobile":true}' value="{{ $Employee->date_out ?? '' }}"/>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <label class="form-label" for="position">Posicion</label>
                      <select class="form-select js-choice" size="1" name="posicion" data-options='{"removeItemButton":true,"placeholder":true}' required="">
                        @foreach($Position as $p)
                        <option value="{{ $p->id_position }}" @if(isset($Employee) && $p->id_position == $Employee->position_id) selected @endif>
                            {{ $p->position_name }}
                        </option>
                        @endforeach
                      </select>
                    </div>
                    
                    <div class="col-sm-3">
                      <label class="form-label" for="contract_type">Nacionalidad</label>
                      <select class="form-select js-choice" size="1" name="nacionalidad" data-options='{"removeItemButton":true,"placeholder":true}'>
                        @foreach($Paises as $p => $v)                     
                        <option value="{{ $p }}" @if(isset($Employee) && $p === $Employee->nationality) selected @endif>  
                            {{ $v }}
                        </option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="contract_type">Contrato</label>
                      <select class="form-select " size="1" name="contrato"  required="">
                        @foreach($Contract as $c)
                        <option value="{{$c->id_contract_type}}" @if(isset($Employee) && $c->id_contract_type == $Employee->contract_type_id) selected @endif>  
                          {{$c->contract_type_name}} 
                        </option>
                        @endforeach
                      </select>
                      <div class="invalid-feedback">Campo Requerido.</div>
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="contract_type">Genero</label>
                        <select class="form-select " size="1" name="genero">
                            <option value="1" @if(isset($Employee) && $Employee->gender == 1) selected @endif>Masculino</option>
                            <option value="2" @if(isset($Employee) && $Employee->gender == 2) selected @endif>Femenino</option>
                            <option value="3" @if(isset($Employee) && $Employee->gender == 3) selected @endif>Otros</option>
                        </select>
                    </div>
                    <div class="col-12">
                      <div class="border-dashed-bottom my-3"></div>
                    </div>

                    <div class="col-3 mb-3">
                      <label class="form-label" for="event-name">Vacaciones Acumuladas</label>
                      <div class="input-group"><span class="input-group-text "><span class="fas fa-child"></span></span>
                        <input class="form-control" type="text" name="Vacaciones" placeholder="0.00"  value="{{ $Employee->vacation_balance ?? '' }}" />
                      </div>
                    </div>
                    <div class="col-3 mb-3">
                      <label class="form-label" for="event-name">Talla Camisa</label>
                      <div class="input-group"><span class="input-group-text "><span class="fas fa-user-tag"></span></span>
                        <input class="form-control" type="text" name="talla_camisa" placeholder="Ej. "  value="{{ $Employee->shirt_size ?? '' }}"/>
                      </div>
                    </div>
                    <div class="col-3 mb-3">
                      <label class="form-label" for="event-name">Talla Pantalon</label>
                      <div class="input-group"><span class="input-group-text "><span class="fas fa-user-tag"></span></span>
                        <input class="form-control" type="text" name="talla_pantalon" placeholder="Ej. "  value="{{ $Employee->pants_size ?? '' }}" />
                      </div>
                    </div>
                  
                    <div class="col-sm-3 mb-3">
                      <label class="form-label" for="event-country">Activo</label>
                      <select class="form-select" size="1" name="activo" data-options='{"removeItemButton":true,"placeholder":true}'>
                        <option value="1" @if(isset($Employee) && $Employee->active == 1) selected @endif>Activo</option>
                        <option value="0" @if(isset($Employee) && $Employee->active == 2) selected @endif>Inactivo</option>
                      </select>
                    </div>
                    <div class="col-12 mb-3 invisible">
                      <div class="">
                        <div class="row" data-dropzone="data-dropzone" data-options='{"maxFiles":1,"data":[{"name":"avatar-4.jpg","size":"54kb","url":"/images/user","acceptedFiles" : "image/jpeg,image/png,image/gif"}]}'>
                          <div class="fallback">
                            <input type="file" name="file" />
                          </div>
                          <div class="col-md-auto">
                            <div class="dz-preview dz-preview-single">
                              <div class="dz-preview-cover d-flex align-items-center justify-content-center mb-3 mb-md-0">
                                <div class="avatar avatar-4xl"><img class="rounded-circle" src="/images/user/avatar-4.jpg" alt="..." data-dz-thumbnail="data-dz-thumbnail" /></div>
                                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="dz-message dropzone-area px-2 py-3" data-dz-message="data-dz-message">
                              <div class="text-center"><img class="me-2" src="images/cloud-upload.svg" width="25" alt="" />Upload your profile picture
                                <p class="mb-0 fs--1 text-400">Upload a 300x300 jpg image with <br />a maximum size of 400KB</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label class="form-label" for="event-direccion">Direccion</label>
                      <textarea class="form-control" rows="6" required="" name="direccion" >
                      {{ $Employee->address ?? '' }}
                      </textarea>
                      <div class="invalid-feedback">Campo Requerido.</div>
                    </div>
                  </div>
              </div>
              <div class="card-footer">
                <div class="row align-items-center">
                  <div class="pagination d-none"></div>
                  <div class="col">
                    <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"></span></p>
                  </div>
                  <div class="col-auto d-flex">
                    <button class="btn btn-sm btn-success px-4 ms-2" type="submit"><span>Guardar</span></button>
                  </div>
                </div>
              </div>
                
              </div>
            </form>
            @include('layouts.footer')
        </div>
    </div>
</main>
@endsection('content')