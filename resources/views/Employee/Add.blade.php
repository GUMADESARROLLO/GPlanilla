@extends('layouts.plantilla')
@section('metodosjs')
@include('jsViews.js_employee')
@endsection
@section('content')
<main class="main" id="top">
@include('layouts.nav-vertical')
    <div class="container-fluid mt-7" data-layout="container">
        <div class="content">
           
        <div class="card mb-3">
                <div class="card-header">
                  
                  <div class="row gx-0 align-items-center">
            
                <div class="col-auto col-md-auto order-md-2">
                  <h4 class="mb-0 fs-0 fs-sm-1 fs-lg-2 calendar-title"></h4>
                </div>
                <div class="col col-md-auto d-flex justify-content-end order-md-3">
                <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal"> <span class="fas fa-plus me-2"></span>Guardar</button>
                </div>
                <div class="col-md-auto d-md-none">
                  <hr />
                </div>
                <div class="col-auto d-flex order-md-0"><h5 class="mb-0">Detalles de Ingreso</h5>
                  
                </div>
                <div class="col d-flex justify-content-end order-md-2">
                  
                </div>
              </div>
                </div>
                <div class="card-body bg-light">
                  <form>
                    <div class="row gx-2">
                      <div class="col-6 mb-3">
                        <label class="form-label" for="event-name">Primer Nombre</label>
                        <input class="form-control" id="event-name" type="text" placeholder="Event Title" />
                      </div>
                      <div class="col-6 mb-3">
                        <label class="form-label" for="event-name">Segundo Nombre</label>
                        <input class="form-control" id="event-name" type="text" placeholder="Event Title" />
                      </div>
                      
                      <div class="col-3 mb-3">
                        <label class="form-label" for="event-name">Telefono</label>
                        <input class="form-control" id="event-name" type="text" placeholder="XXXXXXXX" />
                      </div>
                      <div class="col-3 mb-3">
                        <label class="form-label" for="event-name">Cedula</label>
                        <input class="form-control" id="event-name" type="text" placeholder="XXXXXXXX" />
                      </div>
                      <div class="col-3 mb-3">
                        <label class="form-label" for="event-name">Numero INSS</label>
                        <input class="form-control" id="event-name" type="text" placeholder="XXXXXXXX" />
                      </div>
                      <div class="col-3 mb-3">
                        <label class="form-label" for="event-name">eMail</label>
                        <input class="form-control" id="event-name" type="text" placeholder="XXXXXXXX" />
                      </div>

                      <div class="col-sm-6 mb-3">
                        <label class="form-label" for="start-date">Fecha Entrada</label>
                        <input class="form-control datetimepicker" id="start-date" type="text" placeholder="d/m/y" data-options='{"dateFormat":"d/m/y","disableMobile":true}' />
                      </div>
                    
                      <div class="col-sm-6 mb-3">
                        <label class="form-label" for="start-time">Fecha Salida</label>
                        <input class="form-control datetimepicker" id="end-date" type="text" placeholder="d/m/y" data-options='{"dateFormat":"d/m/y","disableMobile":true}' />
                      </div>
                      <div class="col-sm-3">
                        <label class="form-label" for="position">Posicion
                        </label>
                        <select class="form-select" id="position">
                          <option>Posicion 01</option>
                          <option>Posicion 02</option>
                        </select>
                      </div>
                      <div class="col-sm-3">
                        <label class="form-label" for="contract_type">Contrato
                        </label>
                        <select class="form-select" id="contract_type">
                          <option>Contrato 01</option>
                          <option>Contrato 02</option>
                        </select>
                      </div>
                      <div class="col-sm-3">
                        <label class="form-label" for="contract_type">Nacionalidad
                        </label>
                        <select class="form-select" id="contract_type">
                          <option>Nacionalidad 01</option>
                          <option>Nacionalidad 02</option>
                        </select>
                      </div>
                      <div class="col-sm-3">
                        <label class="form-label" for="contract_type">Genero
                        </label>
                        <select class="form-select" id="contract_type">
                          <option>Genero 01</option>
                          <option>Genero 02</option>
                        </select>
                      </div>
                      <div class="col-12">
                        <div class="border-dashed-bottom my-3"></div>
                      </div>
                      <div class="col-sm-3 mb-3">
                        <label class="form-label" for="event-venue">Vacaciones Acumuladas</label>
                        <input class="form-control" id="event-venue" type="text" placeholder="0.00" />
                      </div>                     
                      <div class="col-sm-3 mb-3">
                        <label class="form-label" for="event-city">Talla Camisa</label>
                        <input class="form-control" id="event-city" type="text" placeholder="Ej. " />
                      </div>
                      <div class="col-sm-3 mb-3">
                        <label class="form-label" for="event-state">Talla Pantalon</label>
                        <input class="form-control" id="event-state" type="text" placeholder="Ej. " />
                      </div>
                      <div class="col-sm-3 mb-3">
                        <label class="form-label" for="event-country">Activo</label>
                        <input class="form-control" id="event-country" type="text" placeholder="Ej. " />
                      </div>
                      <div class="col-12">
                        <label class="form-label" for="event-direccion">Direccion</label>
                        <textarea class="form-control" id="event-direccion" rows="6"></textarea>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            @include('layouts.footer')
        </div>
    </div>
</main>
@endsection('content')