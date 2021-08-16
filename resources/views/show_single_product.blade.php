@extends('layouts.app')
@section('content')

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<ol class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li class="active">blog</li>
					</ol>
					<h1 class="page-name">{{ $product->name }}</h1>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="post post-single">
					<div class="post-thumb">
						<img class="img-responsive" src="{{ config('app.url').$product->thumbnail }}" alt="">
					</div>
                    <br>
					<h2 class="post-title">Details</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Product Category</td>
                                <td><a href="{{ route("show_searched_item_by_category",$product->category_id) }}">{{ $product->category->name }}</a></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>${{ $product->price }}</td>
                            </tr>
                            <tr>
                                <td>Product Created Date</td>
                                <td>{{ $product->created_at->format('D-d-M-Y') }}</td>
                            </tr>
                            <tr>
                                <td>Likes</td>
                                <td>{{ App\Models\likes::where('product_id',$product->id)->count() }} Peoples Likes This</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
					<div class="post-content post-excerpt">
						<p>{{ $product->description }}</p>
                            <div class="post-thumb">
                                <img class="img-responsive" src="{{ config('app.url').$product->image }}" alt="">
                            </div>
				    </div>
				    <div class="post-social-share">
				        <h3 class="post-sub-heading">Share this post</h3>
				        <div class="social-media-icons">
				        	<ul>
								<li><a class="facebook" href="https://facebook.com/"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a class="twitter" href="https://twittor.com/"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a class="instagram" href="https://instagram.com/"><i class="tf-ion-social-instagram"></i></a></li>
								<li><a class="googleplus" href="https://googleplus.com/"><i class="tf-ion-social-googleplus"></i></a></li>
							</ul>
				        </div>
				    </div>


				</div>

			</div>
		</div>
	</div>
</section>

    <section class="call-to-action bg-gray section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="title">
                        <h2>SUBSCRIBE TO NEWSLETTER</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, <br> facilis numquam impedit ut sequi. Minus facilis vitae excepturi sit laboriosam.</p>
                    </div>
                   @livewire('subscribe')
                </div>
            </div> 		<!-- End row -->
        </div>   	<!-- End container -->
    </section>   <!-- End section -->

@endsection
