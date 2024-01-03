@extends('layouts.plantilla')
@section('metodosjs')
@include('jsViews.js_catalogos')
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
                  <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Calalogos </span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing .</p>
                </div>
              </div>
              <div class="card theme-wizard mb-5">
                <div class="card-header bg-light pt-3 pb-2">
                  <ul class="nav nav-pills mb-3" role="tablist" id="pill-tab1">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#id_tab_contratos" type="button" role="tab"  aria-selected="true"><span class="fas fa-dollar-sign me-2" data-fa-transform="shrink-2"></span><span class="d-none d-md-inline-block fs--1">Contratos</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="pill" data-bs-target="#id_tab_unidad" type="button" role="tab" aria-selected="false"><span class="fas fa-building me-2" data-fa-transform="shrink-2"></span><span class="d-none d-md-inline-block fs--1">Unidades de Negocio</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="pill" data-bs-target="#id_tab_depart" type="button" role="tab" aria-selected="false"><span class="fas fa-user-friends me-2" data-fa-transform="down-2 shrink-2"></span><span class="d-none d-md-inline-block fs--1">Departamento</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="pill" data-bs-target="#id_tab_posicion" type="button" role="tab" aria-selected="false"><span class="fas fa-address-card me-2" data-fa-transform="shrink-2"></span><span class="d-none d-md-inline-block fs--1">Posiciones</span></button>
                    </li>
                  </ul>
                </div>
                <div class="card-body ">
                  <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel"  id="id_tab_contratos">

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
                                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="path">Contratos</th>
                                  <th class="sort pe-card align-middle white-space-nowrap text-end" data-sort="exitRate">Acciones</th>
                                </tr>
                              </thead>
                              <tbody class="list">
                                @for ($i = 1; $i <= 10; $i++)
                                <tr class="btn-reveal-trigger">
                                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">Contrato {{$i}}</a></td>
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
                    <div class="tab-pane " role="tabpanel"  id="id_tab_unidad">
                      
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
                                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="path">Unidades</th>
                                  <th class="sort pe-card align-middle white-space-nowrap text-end" data-sort="exitRate">Acciones</th>
                                </tr>
                              </thead>
                              <tbody class="list">
                                @for ($i = 1; $i <= 3; $i++)
                                <tr class="btn-reveal-trigger">
                                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">Unidades {{$i}}</a></td>
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
                    <div class="tab-pane" role="tabpanel"  id="id_tab_depart">

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
                                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="path">Departamento</th>
                                  <th class="sort pe-card align-middle white-space-nowrap text-end" data-sort="exitRate">Acciones</th>
                                </tr>
                              </thead>
                              <tbody class="list">
                                @for ($i = 1; $i <= 10; $i++)
                                <tr class="btn-reveal-trigger">
                                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">Departamento {{$i}}</a></td>
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
                    <div class="tab-pane" role="tabpanel" id="id_tab_posicion">
                      
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
                                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="path">Posicion</th>
                                  <th class="sort pe-card align-middle white-space-nowrap text-end" data-sort="exitRate">Acciones</th>
                                </tr>
                              </thead>
                              <tbody class="list">
                                @for ($i = 1; $i <= 10; $i++)
                                <tr class="btn-reveal-trigger">
                                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">Posicion {{$i}}</a></td>
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
                              <button class="btn btn-sm btn-primary" type="button" data-list-pagination="next"><span>Siguiente</span></button>
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
        
      </div>
    </main>

        

@endsection('content')