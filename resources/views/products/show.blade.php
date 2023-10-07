@extends('layout.front')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Product Detail</h2>
                <ol>
                    <li><a href="{{ route('shop.products') }}">Home</a></li>
                    <li>Detail</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
<section>
    <div class="container">
		<div class="card">
			<div class="container-fliud product_details">
				<div class="wrapper row">
					<div class="preview col-md-4">
						<div class="preview-pic">
							@include('products.card_img')
						</div>
					</div>
					<div class="details col-md-4">
						<h3 class="product-title">{{ $product->name }}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">XXX reviews</span>
						</div>
						<p class="product-description">{{ $product->description }}</p>
						<h4 class="price">current price: <span>{{ $product->currency }}</span> <span>{{ $product->price }}</span></h4>
						<div class="action">
						</div>
                        <div class="payment_option">
                            @include('payment.payment_options')
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>    
@endsection
