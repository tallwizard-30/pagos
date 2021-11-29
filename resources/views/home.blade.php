@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hacer un Pago</div>

                <div class="card-body">
                  <form action="{{route('pay')}}" method="post" id="formasPagos">
                      @csrf
                      <div class="row">
                          <div class="col-auto">
                              <label >Cuanto Desea pagar</label>
                              <input type="number" name="value"
                              min="5"
                              step="0.01"
                              class=" form-control"
                              value="{{mt_rand('500', '10000')/ 100}}" required>
                              <small class="form-text text-muted">
                                  usar valores con dos cifras decimales separados por puntos
                              </small>
                          </div>
                          <div class="col-auto">
                            <label >Moneda</label>
                            <select name="currency"  class=" custom-select" required>
                                @foreach ($currencies as $currency)
                                <option value="{{$currency->iso}}">

                                    {{ strtoupper ($currency->iso)}}

                                </option>
                                    
                                @endforeach
                            </select>

            

                            </div>


                           
                           

                           
                      </div>

                      <div class="row mt-3 ">
                          <div class="col">


                         
                        <label class="text-center">Seleccione plataforma de pago deseada</label>
                    
                        <div class="form-goup" id="toggler">
                            <div class="btn btn-group btn-group-toggle" data-toggle="buttons">

                                @foreach ($plataformasPagos as $plataforma)

                                <label class="btn btn-outline-secondary rounded m-2 p-1"
                                data-target="#{{$plataforma->name}}Collapse"
                                data-toggle="collapse">
                                    <input type="radio" name="payment_platform" value="{{$plataforma->id}}"required>
                                    <img src="{{asset($plataforma->image)}}" alt="" class=" img-thumbnail">
                                </label>
                                    
                                @endforeach
                            </div>

                            @foreach ($plataformasPagos as $plataforma)

                            <div class="collapse"
                            data-parent="#toggler"
                            id="{{$plataforma->name}}Collapse"
                            >
                                @includeif('components.'.strtolower($plataforma->name.'-collapse'))
                            </div>
                                
                            @endforeach
                        </div>
                            <div class=" text-center mt-3">

                                <button type="submit" id="botonPago" class=" btn btn-outline-primary">Pagar</button>
                              </div>
                        </div>

                    
                    

                  </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
