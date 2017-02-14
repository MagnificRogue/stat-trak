<div class="side-widgets">
	<div class="widgets-content">
		<div class="text-xs-center"> 
			<a href="profile"><img src="images/flat-avatar.png" class="user-avatar" /></a>
			<div class="text-xs-center avatar-name">
				Ani Pascal
			</div>
		</div>
		
		<div class="calendar-container text-xs-center" >
			<div id="calendar2" class="fc-header-title"></div>
		</div>

		<div class="news-feed">
			<div class="feed-header">{{ Lang::get(\Session::get('lang').'.feed') }}</div>
			<div class="feed-content">
				<ul class="feed">
					<li>
						<a href="javascript:void(0)">{{ Lang::get(\Session::get('lang').'.li1') }}</a> <span class="feed-date">25/4/2015</span>
					</li>
					<li>
						<a href="javascript:void(0)">{{ Lang::get(\Session::get('lang').'.li2') }}</a> <span class="feed-date">25/4/2015</span>
					</li>
					<li>
						<a href="javascript:void(0)">{{ Lang::get(\Session::get('lang').'.li3') }}</a> <span class="feed-date">25/4/2015</span>
					</li>
					<li>
						<a href="javascript:void(0)">{{ Lang::get(\Session::get('lang').'.li4') }}</a> <span class="feed-date">25/4/2015</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
