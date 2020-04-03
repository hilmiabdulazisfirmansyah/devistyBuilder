 <section id="menu" data-stellar-background-ratio="0.5">
 	<div class="container">
 		<div class="row">

 			<div class="col-md-12 col-sm-12">
 				<div class="section-title wow fadeInUp" data-wow-delay="0.1s">
 					<h2>{{ $judul }}</h2>
 					<h4>{{ $sub_judul }}</h4>
 				</div>
 			</div>
			
			@include('blog.card.index',['cards' => $cards])
 			
 		</div>
 	</div>
 </section>