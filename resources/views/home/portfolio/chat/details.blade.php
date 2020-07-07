<div class="container">
	<div class="row" id="app">		
			<div class="list-group offset-4 col-md-4">			
				<li class="list-group-item active"> Welcome  <span class="badge badge-pill badge-danger">{{ auth()->guard()->user()->name }}</span></li>
					<div class="content table-responsive">
						<ul class="list-group" v-chat-scroll>
							<message v-for="value,index in chat.message"
							:key=value.index
							:color=chat.color[index]
							:user=chat.user[index]
							:time=chat.time[index]
							>
							@{{ value }}
							</message>	
						</ul>		
					</div>
							<input type="text" class="form-control" placeholder="Type your message here..."
							v-model='message' @keyup.enter='send'>
			</div>			
		</div>		
	</div>
</div>

<script src ="{{ '../js/app.js' }}"></script>