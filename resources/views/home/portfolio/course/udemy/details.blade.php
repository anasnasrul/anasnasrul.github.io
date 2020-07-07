<div class="wrapper">
@include('home.portfolio.course.udemy.sidebar')

    <div class="main-panel" >
         

        <div class="container">
        	<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="content">
								<div class="row">
									<h4 align="center">Cracking</h4>
									 	<div align="center" >
										  <video id="udemy1" class="video-js vjs-theme-city vjs-big-play-centered" 
										  controls preload="auto" width="220" height="120" data-setup='{"sources": [{ "type": "video/mp4", "src": "/assets/video/cracking.mp4"}] }'>										  		
								    	  </video>		
										  {{ Html::script('assets/js/video.js') }}										  
										  	<script>
									        videojs(document.getElementById('udemy1'), {}, function() {
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
									<p><h4 align="center">Template</h4></p>
									<div align="center" >
									  <video id="udemy2" class="video-js vjs-theme-city vjs-big-play-centered" 
									  controls preload="auto" width="220" height="120" data-setup='{"sources": [{ "type": "video/mp4", "src": "/assets/video/template.mp4"}] }'>
									  </video>
									  {{ Html::script('assets/js/video.js') }}
									  	<script>
								        videojs(document.getElementById('udemy2'), {}, function() {
								            // This is functionally the same as the previous example.
								        });
								    	</script>
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