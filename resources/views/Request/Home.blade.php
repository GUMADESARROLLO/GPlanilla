@extends('layouts.plantilla')
@section('metodosjs')
@include('jsViews.js_requests')
@endsection
@section('content')

<!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
    @include('layouts.nav-vertical')
      <div class="container-fluid mt-7" data-layout="container">
        <div class="content">
          
        <div class="col-lg-12 col-xl-12 col-xxl-12 h-100">
              <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-capsules"></i></span>
                <div class="col">
                  <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Solicitudes </span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing .</p>
                </div>
              </div>
              <div class="card theme-wizard mb-5">
                <div class="card-header bg-light pt-3 pb-2">
                  <ul class="nav nav-pills mb-3" role="tablist" id="pill-tab1">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#id_tab_requests" type="button" role="tab"  aria-selected="true"><span class="fas fa-dollar-sign me-2" data-fa-transform="shrink-2"></span><span class="d-none d-md-inline-block fs--1">Solicitudes</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="pill" data-bs-target="#id_tab_tipo" type="button" role="tab" aria-selected="false"><span class="fas fa-building me-2" data-fa-transform="shrink-2"></span><span class="d-none d-md-inline-block fs--1">Tipos</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="pill" data-bs-target="#id_tab_estados" type="button" role="tab" aria-selected="false"><span class="fas fa-user-friends me-2" data-fa-transform="down-2 shrink-2"></span><span class="d-none d-md-inline-block fs--1">Estados</span></button>
                    </li>
                    
                  </ul>
                </div>
                <div class="card-body ">
                  <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel"  id="id_tab_requests">

                      <div id="table" data-list='{"valueNames":["path"],"page":5,"pagination":true,"fallback":"pages-table-fallback"}'>
                        <div class="row flex-between-center">
                          <div class="col-auto col-sm-12 col-lg-12 mb-3">
                            <div class="input-group">
                              <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Buscar..." aria-label="search" />
                              <div class="input-group-text bg-transparent"><span class="fa fa-search fs--1 text-600"></span></div>
                              <div class="input-group-text bg-transparent"><span class="fa fa-plus fs--1 text-600" id="btn_open_modal_request"></span></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-0 py-0">
                          <div class="table-responsive scrollbar">
                            <table class="table fs--1 mb-0 overflow-hidden">
                              <thead class="bg-200 text-900">
                                <tr>
                                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="path">Nombre</th>
                                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="dtIni">Desde</th>
                                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="dtEnd">Hasta</th>
                                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="dtInte">Integra</th>
                                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="vlVaca">Dias Soli.</th>
                                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="vlEstatus">Estatus.</th>
                                  <th class="sort pe-card align-middle white-space-nowrap text-end" data-sort="exitRate">Acciones</th>
                                </tr>
                              </thead>
                              <tbody class="list">
                                @for ($i = 1; $i <= 10; $i++)
                                <tr class="btn-reveal-trigger">                                  
                                  <td class="align-middle white-space-nowrap path">
                                      <div class="d-flex align-items-center position-relative">
                                      <div class="avatar avatar-2xl status-online">
                                          <img class="rounded-circle" src="/images/user/avatar-4.jpg" alt="" />

                                      </div>
                                      <div class="flex-1 ms-3">
                                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">Nombre Y Foto del Colaborador</a></h6>
                                          <p class="text-500 fs--2 mb-0">Departamento | Posicion</p>
                                      </div>
                                      </div>
                                  </td>
                                  <td class="align-middle white-space-nowrap path">mar., ene. 00, 2024</td>
                                  <td class="align-middle white-space-nowrap path">mar., ene. 00, 2024</td>
                                  <td class="align-middle white-space-nowrap path">mar., ene. 00, 2024</td>
                                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">1.18</a></td>
                                  <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Contrato {{$i}}<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                                  <td class="align-middle white-space-nowrap views text-end">
                                  <div>
                                      <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"><span class="text-500 fas fa-edit"></span></button>
                                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Remover"><span class="text-500 fas fa-trash-alt"></span></button>
                                  </div>
                                  </td>
                                </tr>
                                @endfor     
                              </tbody>
                            </table>
                          </div>
                          <div class="text-center d-none" id="pages-table-fallback">
                            <p class="fw-bold fs-1 mt-3">Sin resultado</p>
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="row align-items-center">
                            <div class="pagination d-none"></div>
                            <div class="col">
                              <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"></span></p>
                            </div>
                            <div class="col-auto d-flex">
                              <button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Anterior</span></button>
                              <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Siguiente</span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                     

                    </div>
                    <div class="tab-pane " role="tabpanel"  id="id_tab_tipo">
                      
                      <div id="table" data-list='{"valueNames":["path"],"page":5,"pagination":true,"fallback":"pages-table-fallback"}'>
                        <div class="row flex-between-center">
                          <div class="col-auto col-sm-12 col-lg-12 mb-3">
                            <div class="input-group">
                              <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Buscar..." aria-label="search" />
                              <div class="input-group-text bg-transparent"><span class="fa fa-search fs--1 text-600"></span></div>
                              <div class="input-group-text bg-transparent"><span class="fa fa-plus fs--1 text-600"></span></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-0 py-0">
                          <div class="table-responsive scrollbar">
                            <table class="table fs--1 mb-0 overflow-hidden">
                              <thead class="bg-200 text-900">
                                <tr>
                                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="path">Tipos</th>
                                  <th class="sort pe-card align-middle white-space-nowrap text-end" data-sort="exitRate">Acciones</th>
                                </tr>
                              </thead>
                              <tbody class="list">
                                @for ($i = 1; $i <= 3; $i++)
                                <tr class="btn-reveal-trigger">
                                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">Tipos {{$i}}</a></td>
                                  <td class="align-middle white-space-nowrap views text-end">
                                  <div>
                                      <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"><span class="text-500 fas fa-edit"></span></button>
                                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Remover"><span class="text-500 fas fa-trash-alt"></span></button>
                                  </div>
                                  </td>
                                </tr>
                                @endfor     
                              </tbody>
                            </table>
                          </div>
                          <div class="text-center d-none" id="pages-table-fallback">
                            <p class="fw-bold fs-1 mt-3">Sin resultado</p>
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="row align-items-center">
                            <div class="pagination d-none"></div>
                            <div class="col">
                              <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"></span></p>
                            </div>
                            <div class="col-auto d-flex">
                              <button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Anterior</span></button>
                              <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Siguiente</span></button>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="tab-pane" role="tabpanel"  id="id_tab_estados">

                      <div id="table" data-list='{"valueNames":["path"],"page":5,"pagination":true,"fallback":"pages-table-fallback"}'>
                        <div class="row flex-between-center">
                          <div class="col-auto col-sm-12 col-lg-12 mb-3">
                            <div class="input-group">
                              <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Buscar..." aria-label="search" />
                              <div class="input-group-text bg-transparent"><span class="fa fa-search fs--1 text-600"></span></div>
                              <div class="input-group-text bg-transparent"><span class="fa fa-plus fs--1 text-600"></span></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-0 py-0">
                          <div class="table-responsive scrollbar">
                            <table class="table fs--1 mb-0 overflow-hidden">
                              <thead class="bg-200 text-900">
                                <tr>
                                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="path">Estados</th>
                                  <th class="sort pe-card align-middle white-space-nowrap text-end" data-sort="exitRate">Acciones</th>
                                </tr>
                              </thead>
                              <tbody class="list">
                                @for ($i = 1; $i <= 10; $i++)
                                <tr class="btn-reveal-trigger">
                                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">Estados {{$i}}</a></td>
                                  <td class="align-middle white-space-nowrap views text-end">
                                  <div>
                                      <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"><span class="text-500 fas fa-edit"></span></button>
                                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Remover"><span class="text-500 fas fa-trash-alt"></span></button>
                                  </div>
                                  </td>
                                </tr>
                                @endfor     
                              </tbody>
                            </table>
                          </div>
                          <div class="text-center d-none" id="pages-table-fallback">
                            <p class="fw-bold fs-1 mt-3">Sin resultado</p>
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="row align-items-center">
                            <div class="pagination d-none"></div>
                            <div class="col">
                              <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"></span></p>
                            </div>
                            <div class="col-auto d-flex">
                              <button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Anterior</span></button>
                              <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Siguiente</span></button>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    
                 
                  </div>
                </div>
                
              </div>
            </div>
        </div>
        <div class="modal fade" id="modal_new_request" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content border">
              <form id="addEventForm" autocomplete="off">
                <div class="modal-header px-card bg-light border-bottom-0">
                  <h5 class="modal-title">Nueva Solicitud de Permiso</h5>
                  <button class="btn-close me-n1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-card">                  
                  <div class="mb-3">
                    <label class="fs-0" for="eventStartDate">Inicia</label>
                    <input class="form-control datetimepicker" id="eventStartDate" type="text" required="required" name="startDate" placeholder="yyyy/mm/dd" data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d"}' />
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="eventEndDate">Termina</label>
                    <input class="form-control datetimepicker" id="eventEndDate" type="text" name="endDate" placeholder="yyyy/mm/dd" data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d"}' />
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="eventReturnDate">Regresa</label>
                    <input class="form-control datetimepicker" id="eventReturnDate" type="text" name="retunrDate" placeholder="yyyy/mm/dd" data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d"}' />
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="eventValDay">Tipo de Solicitud</label>
                    <select class="form-select" id="eventValDay" name="label">
                      <option value="" selected="selected"> Tipo de Solicitud</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="eventValDay">Cantidad de dias Solicitados</label>
                    <select class="form-select" id="eventValDay" name="label">
                      <option value="" selected="selected"> 1 / 2</option>
                      <option value="" > 1</option>
                      <option value="" >2</option>
                    </select>
                  </div>
                 
                  <div class="mb-3">
                    <label class="fs-0" for="eventDescription">Observacion:</label>
                    <textarea class="form-control" rows="3" name="description" id="eventDescription"></textarea>
                  </div>
                  
                </div>
                <div class="card-footer d-flex justify-content-end align-items-center bg-light">
                  <button class="btn btn-primary px-4" type="submit">Solcitar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

        

@endsection('content')