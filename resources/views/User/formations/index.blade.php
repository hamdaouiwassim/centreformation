@extends('layouts.app')

@section('content')
                    <div class="container pt-2">
                            <div class="row col-md-12">
                                

                                    @foreach ($formations as $f)
                                    <div class="col-md-4">
                                    
                                            <div class="card" >
                                                    <img src="{{ asset('uploads/formations')}}/{{ $f->affiche }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                    <h5 class="card-title">{{ $f->titre }}</h5>
                                                    <p class="card-text">{{ Str::limit($f->description, 100, '...')  }}</p>
                                                    <a href="/formation/{{ $f->id }}" class="btn btn-primary mr-2">Details</a>
                                                    <a style="color:white" class="btn btn-success" > {{ $f->prix }} DTT</a>
                                                    </div>
                                            </div>
                                        </div>
                                      @endforeach
                                

                             
                         
                            </div>
                    </div>
@endsection
