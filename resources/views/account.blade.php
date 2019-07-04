@extends('layouts.app')

@section('style')
<style>
    .row{
        height: 300px;
    }
</style>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="panel panel-default">               
                    <div class="card card-default">
                        <div class="card-header">
                            <b-row>
                                <b-col>
                                    <div class="mb-3">
                                        <h4>Voici votre compte</h4>
                                    </div>
                                    <div class="text-left">
                                        <p class="mb-1">{{Auth::user()->name}}</p>
                                        <p class="mb-3">{{Auth::user()->email}}</p>
                                        <b-button href="{{ route('users.edit', Auth::user()->id)}}" variant="info" style="width:100px;margin-right:20px;">Edit</b-button>
                                    </div>
                                    </b-col>
                                    <b-col>
                                        <div class="text-right">
                                            <div class="text-left">
                                                <h4>Récapitulatif des achats :</h4>
                                                <p>Futur commande</p>
                                            </div>
                                        </div>
                                    </b-col>
                            </b-row>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection