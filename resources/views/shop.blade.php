@extends('layouts.app')

<style scoped>
    #menu{
        width: 100%;
    }
    #boutique{
        display: flex;
        flex-direction: column;
        text-align: center;
        margin-top: 50px;
    }
    #placement{
        background-color: black;
        width: 100%;
        color: white;
        margin-bottom: 50px;
    }
    .mb-2{
        display: flex;
        justify-content: start;
        align-items: flex-start;
        flex-direction: column;
        text-align: start;
        height: 420px!important;
        max-width: 20rem;
    }
    img{
        height: 225px;
    }
    #price{
        text-align: left;
        font-size: 17px;
    }
    
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <h1>Bienvenue sur la boutique !</h1>
           <p>Ici vous pourrez découvrir de nombreux produits tel que une tasse ou une coque iphone</p>
           <div class="center d-flex justify-content-center" id="boutique">
                <div id="placement">
                  <h1>Boutique</h1>
                </div>
                <b-container class="bv-example-row">
                    <b-row>
                        @forelse($products as $product)
                            <b-col lg="4" md="6" sm="12" class="mb-5">
                                    <b-card title="{{$product->name}}" img-src="{{asset("images/products/$product->imageurl")}}" img-alt="Image" img-top tag="article" class="mb-2">
                                        <b-card-text>{{$product->description}}</b-card-text>
                                        <b-card-text id="price">{{$product->price}}$</b-card-text>
                                        <b-button href="{{ route('product.showProductPage', $product->slug) }}" variant="primary">Let's see it</b-button>
                                    </b-card>
                            </b-col lg="4" md="6" sm="12">
                        @empty
                        @endforelse
                    </b-row>
                </b-container>
              </div>
        </div>
    </div>
</div>

@endsection