@extends('layout.front')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Product List</h2>
                <ol>
                    <li><a href="{{ route('shop.products') }}">Home</a></li>
                    <li>List</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section>
        <div class="container d-flex justify-content-center mt-50 mb-50">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-actions">
                                    @include('products.card_img')
                                </div>
                            </div>
                            <div class="card-body bg-light text-center">
                                <div class="mb-2">
                                    <h6 class="font-weight-semibold mb-2">
                                        <a href="#" class="text-default mb-2" data-abc="true">{{ $product->name }}</a>
                                    </h6>
                                    <a href="#" class="text-muted" data-abc="true">{{ $product->handle }}</a>
                                </div>
                                <h3 class="mb-0 font-weight-semibold">{{ $product->currency }} {{ $product->price }}</h3>
                                <div>
                                    <i class="fa fa-star star"></i>
                                    <i class="fa fa-star star"></i>
                                    <i class="fa fa-star star"></i>
                                    <i class="fa fa-star star"></i>
                                </div>
                                <a href="{{ route('shop.show_product', $product->handle) }}" class="btn btn-primary mt-4">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{ $products->links() }}
@endsection
