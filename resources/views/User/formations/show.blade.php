@extends('layouts.app')

@section('content')
                    <div class="container pt-4">
                            <div class="row">
                                <div class="col-md-12">

                                   
                                        
                                    
                                            <div class="card" >
                                                
                                                    <img src="{{ asset('uploads/formations')}}/{{ $formation->affiche }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                    <a href="#" class="btn btn-success  labelPrix"> {{ $formation->prix }} DTT</a>
                                                    <h3 class="card-title">{{ $formation->titre }} ( <span style="font-size: 18px" > {{ $formation->duree  }} Heures </span> ) </h3>
                                                    
                                                 
                                                    <hr />
                                                    <p class="card-text">{{ Str::limit($formation->description, 100, '...')  }}</p>
                                                    
                                                    <h6 >De {{ $formation->date_debut  }} Jusqu'a {{ $formation->date_fin  }}</h6>
                                                  
                                                    <br />
                                                    
                                                    <a href="" class="btn btn-primary " data-toggle="modal" data-target="#myModal">Inscription </a>
                                                    </div>
                                            </div>

                                    
                                </div>

                             
                         
                            </div>
                    </div>

                      <!-- sample modal content -->
                      <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                      aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title" id="myModalLabel">Inscription Aux formation {{ $formation->titre  }} </h4>
                                  <button type="button" class="close" data-dismiss="modal"
                                      aria-hidden="true">×</button>
                              </div>
                              <div class="modal-body">
                              <form action="{{ route('addInscription') }}" method="post" >
                                @csrf
                                        <div class="form-group">
                                            <label for=""> Nom et prenom </label>
                                            <input type="text" name="fullname" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <label for=""> Email </label>
                                            <input type="email" name="email" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <label for=""> Telephone </label>
                                            <input type="text" name="telephone" class="form-control">

                                        </div>
                                        
                                            
                                            <input type="hidden" name="idformation" value={{ $formation->id }} class="form-control">

                                      
                                    
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-light"
                                      data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                          </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
@endsection
