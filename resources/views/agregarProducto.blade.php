@extends('layouts.plantilla')
@section('titulo')
  Producto
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
               <h3 class ="register-heading">Crear producto</h3>
               <form action="/agregarProducto" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="row register-form">
                     <div class="col-md-6 left">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Nombre *" value="" name='name' />
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Precio *" name="precio" value="">
                        </div>
                        <div class="form-group">
                          <input type="text" name="stock"  placeholder="stock *"value="">
                        </div>
                        <div class="form-group">
                          <input type="file" name="image" value="">
                        </div>
                        <div class="form-group">
                          <select class="" name="clase" >
                            <option value="null"class="hidden" selected disabled>tipo</option>
                              @if(old('pregunta')==0)
                                <option value="0" checked>Slip</option>
                              @else
                                <option value="0" >slip</option>
                              @endif
                              @if(old('pregunta')==1)
                                <option value="1" checked>boxer</option>
                              @else
                                <option value="1">boxer</option>
                              @endif
                              @if(old('pregunta')==2)
                                <option value="2" checked>mini Boxer</option>
                              @else
                                <option value="2">mini Boxer</option>
                              @endif
                          </select>
                        </div>
                           <input type="hidden" name='is_admin' value="0">
                           <button type="submit" name="button">Agregar</button>
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
