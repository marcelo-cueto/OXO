@extends('layouts.plantilla')
@section('titulo')
  Register
@endsection

@section('principal')
  <div class="container ">
        <div class="row">
           @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
        </div>
        <div class="col-md-12 register-center">
           <div class ="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                 <h3 class ="register-heading">Registrate</h3>
                 <form action="/register" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row register-form">
                       <div class="col-md-6 left">
                          <div class="form-group">
                             <input type="text" class="form-control" placeholder="Primer Nombre *" value="{{old('name')}}" name='name' />
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apellido *" name="apellido" value="{{old('name')}}">
                          </div>
                          <div class="form-group">
                             <input type="password" class="form-control" placeholder="Contrasenia *" value=""  name='password' />
                          </div>
                          <div class="form-group">
                             <input type="password" class="form-control" placeholder="Confirmar Contrasenia *" value="" name='password_confirmation' />
                          </div>
                          <div class="form-group">
                             <input type="text" class="form-control" placeholder="Direccion *" value="{{old('address')}}" name='address' />
                          </div>
                        </div>
                        <div class="col-md-6 rigth">
                          <div class="form-group">
                             <input type="text" class="form-control" placeholder="Provincia *" value="{{old('state')}}" name='state' />
                          </div>
                          <div class="form-group">
                             <input type="text" class="form-control" placeholder="Codigo postal *" value="{{old('codigo')}}" name='codigo' />
                          </div>
                             <div class="form-group">
                               <input type="text" class="form-control" placeholder="Tu Email *" value="" name='email' />
                              </div>
                             <div class="form-group">
                               <input type="text" class="form-control" placeholder="Tu Teléfono *" value="{{old('phone')}}" name='phone' />
                             </div>
                             <div
                                class="form-group"> <input type="date" class="form-control" placeholder="Fecha de nacimiento *" name='nacimiento' value="">
                             </div>
                             <input type="hidden" name='is_admin' value="0">
                             <button type="submit" name="button">Entrar</button>
                           </div>
                           </div>
                        </div>


                             </div>
                       </div>
                 </form>
                 </div>
              </div>
           </div>
        </div>
@endsection
