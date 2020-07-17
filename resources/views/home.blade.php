@extends('bootstrap_layout')
@extends('service-layout')

@section('title')
Roomi Designs
@endsection

@section('blayout')
@section('servicelayout')	
	
	<!-- Home -->

	<div class="home">
		<!-- Home Slider -->
		<div class="home_slider_container">
		
				
				<!-- Slide -->
					<div class="background_image" style='background-image:url("../assets/img/bg_4.jpg")'></div>
					<div class="container fill_height">
						<div class="row fill_height">
							<div class="col fill_height">
								<div class="home_container d-flex flex-column align-items-center justify-content-start">
									<div class="home_content">
										<div class="home_title">New Arrivals</div>
										<div class="home_subtitle">~~~~~~~~~~~</div>
										<div class="home_items">
											<div class="row">
												<div class="col-sm-3 offset-lg-1">
													<div class="home_item_side"><img src="{{elixir('images/product/women/19.jpg')}}" alt=""></a></div>
												</div>
												<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
													<div class="product home_item_large">
														<div class="product_image"><img src="{{elixir('images/product/kids/14.jpg')}}" alt=""></div>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="home_item_side"><img src="{{elixir('images/product/women/4.jpg')}}" alt=""></a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		</div>
	</div>







    <div class="goto-here"></div>
    
    <section class="ftco-section ftco-product">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big"><div style="height:20px"></div>Trending</h1>
            <h2 class="mb-4">Trending</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="product-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="product">
		    					<a href="#" class="img-prod"><img class="img-fluid" src="{{elixir('images/product/women/1.jpg')}}" alt="Colorlib Template">
		    						
		    					</a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
			    							<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
			    						</div>
			    						
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="#" class="img-prod"><img class="img-fluid" src="{{elixir('images/product/women/2.jpg')}}" alt="Colorlib Template"></a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
				    						<p class="price"><span>$120.00</span></p>
				    					</div>
				    					
			    					</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="#" class="img-prod"><img class="img-fluid" src="{{elixir('images/product/women/3.jpg')}}" alt="Colorlib Template"></a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
				    						<p class="price"><span>$120.00</span></p>
				    					</div>
				    					
			    					</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="#" class="img-prod"><img class="img-fluid" src="{{elixir('images/product/women/4.jpg')}}" alt="Colorlib Template"></a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
				    						<p class="price"><span>$120.00</span></p>
				    					</div>
				    					
			    					</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="#" class="img-prod"><img src="{{elixir('images/product/women/5.jpg')}}" alt="Colorlib Template">
			    					
			    				</a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
			    							<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
			    						</div>
			    						
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="#" class="img-prod"><img src="{{elixir('images/product/women/6.jpg')}}" alt="Colorlib Template"></a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
				    						<p class="price"><span>$120.00</span></p>
				    					</div>
				    					
			    					</div>
		    					</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('../assets/img/bg_2.jpg')">
						<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-5 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Modist <br>Online <br> <span>Fashion Shop</span></h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
							<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Products</h1>
            <h2 class="mb-4">Our Products</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{elixir('images/product/kids/7.jpg')}}" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
		    					
	    					</div>
	    					<hr>
    						
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{elixir('images/product/kids/8.jpg')}}" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
		    					
	    					</div>
	    					<hr>
    						
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{elixir('images/product/kids/9.jpg')}}" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
		    					
	    					</div>
	    					<hr>
    						
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{elixir('images/product/kids/10.jpg')}}" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
		    					
	    					</div>
	    					<hr>
    						
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-section-more img" style="background-image: url('../assets/img/bg_5.jpg');">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section ftco-animate">
          	<h2>Summer Sale</h2>
          </div>
        </div>
    	</div>
    </section>

    <!-- <section class="ftco-section testimony-section bg-light">
      <div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Testimony</h1>
          </div>
        </div>    		
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url('../assets/img/person_1.jpg')">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url('../assets/img/person_2.jpg')">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url('../assets/img/person_3.jpg')">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url('../assets/img/person_1.jpg')">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url('../assets/img/person_1.jpg')">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section> -->


    <!-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big">Blog</h1>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('../assets/img/image_1.jpg');">
              </a>
              <div class="text mt-3 d-block">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('../assets/img/image_2.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('../assets/img/image_3.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url('../assets/img/bg+4.jpg');">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Partner</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section> -->

@endsection
		
@endsection

</body>
</html>