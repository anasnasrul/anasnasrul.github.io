<div class="wrapper">
@include('home.portfolio.course.youtube.sidebar')

    <div class="main-panel" >
         

        <div class="container">
        	<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="content">
								<div class="row">
									<h4 align="center">Intro</h4>
									 	<div align="center" >
										  <video id="youtube1" class="video-js vjs-theme-city vjs-big-play-centered" 
										  controls preload="auto" width="220" height="120" data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=l1W2OwV5rgY&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6"}] }'>										  		
								    	  </video>		
										  {{ Html::script('assets/js/video.min.js') }}
										  {{ Html::script('assets/js/youtube.min.js') }}
										  	<script>
									        videojs(document.getElementById('youtube1'), {}, function() {
									            // This is functionally the same as the previous example.
									        });
									    	</script>
									    	
										</div>										
								</div>								
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="content">
								<div class="row">
									<p><h4 align="center">Sejarah dan Karakteristik PHP</h4></p>
									<div align="center" >
									  <video id="youtube2" class="video-js vjs-theme-city vjs-big-play-centered" 
									  controls preload="auto" width="220" height="120" data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/q3NVC5JxgVI"}] }'>
									  </video>
									  {{ Html::script('assets/js/video.min.js') }}
									  {{ Html::script('assets/js/youtube.min.js') }}
									  	<script>
								        videojs(document.getElementById('youtube2'), {}, function() {
								            // This is functionally the same as the previous example.
								        });
								    	</script>
									</div>		
									
								</div>								
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="content">
								<div class="row">
									<p><h4 align="center">Persiapan Lingkungan Pengembangan</h4></p>
									<div align="center" >
									  <video id="youtube3" class="video-js vjs-theme-city vjs-big-play-centered" 
									  controls preload="auto" width="220" height="120" data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/o8oLQVYlpqw"}] }'>
									  </video>
									  {{ Html::script('assets/js/video.min.js') }}
									  {{ Html::script('assets/js/youtube.min.js') }}
									  	<script>
								        videojs(document.getElementById('youtube3'), {}, function() {
								            // This is functionally the same as the previous example.
								        });
								    	</script>
									</div>									
								</div>								
							</div>
						</div>
					</div>

					<p class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="card">
								<div class="content">
									<div class="row">
										<p><h4 align="center">Sintaks PHP</h4></p>
										<div align="center" >
										  <video id="youtube4" class="video-js vjs-theme-city vjs-big-play-centered" 
										  controls preload="auto" width="220" height="120" data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/XTrU0GzMfCk"}] }'>
										  </video>
										  {{ Html::script('assets/js/video.min.js') }}
										  {{ Html::script('assets/js/youtube.min.js') }}
										  	<script>
									        videojs(document.getElementById('youtube4'), {}, function() {
									            // This is functionally the same as the previous example.
									        });
									    	</script>
										</div>
									</div>								
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="card">
								<div class="content">
									<div class="row">
										<p><h4 align="center">Struktur Kendali</h4></p>
										<div align="center" >
										  <video id="youtube5" class="video-js vjs-theme-city vjs-big-play-centered" 
										  controls preload="auto" width="220" height="120" data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=9gpAJPWD-xI&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6&index=5"}] }'>  
										  </video>
										  {{ Html::script('assets/js/video.min.js') }}
										  {{ Html::script('assets/js/youtube.min.js') }}
										  	<script>
									        videojs(document.getElementById('youtube5'), {}, function() {
									            // This is functionally the same as the previous example.
									        });
									    	</script>
										</div>
									</div>								
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="card">
								<div class="content">
									<div class="row">
										<p><h4 align="center">Function</h4></p>
										<div align="center" >
										  <video id="youtube6" class="video-js vjs-theme-city vjs-big-play-centered" 
										  controls preload="auto" width="220" height="120" data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/R5C70w2MOkE"}] }'>
										  </video>
										  {{ Html::script('assets/js/video.min.js') }}
										  {{ Html::script('assets/js/youtube.min.js') }}
										  	<script>
									        videojs(document.getElementById('youtube6'), {}, function() {
									            // This is functionally the same as the previous example.
									        });
									    	</script>
										</div>
									</div>								
								</div>
							</div>
						</div>
					</p>					
        		</div> 
    		</div>
		</div>
	</div>
</div>