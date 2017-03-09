@extends('layouts.master')

@section('title')
    Shop Home Page
@endsection


@section('content')

    @foreach($products->chunk(3) as $productChunck)
        <div class="row">
          @foreach($productChunck as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive"  src="{{ $product->imagePath }}" alt="...">
                        <div class="caption">
                            <h3>{{ $product->title }}</h3>
                            <p>{{ $product->description }}</p>
                            <div class="clearfix">
                                <div class="pull-left price">${{ $product->price }}</div>
                                <a href="{{ route('product.addtocart', ['id' => $product->id]) }}" class="btn btn-primary pull-right" role="button">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
          @endforeach
        </div>
    @endforeach

@endsection

