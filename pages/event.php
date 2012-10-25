<!--
BREADCRUMB is not in the TEMPLATE
-->
<div class="row">
	<div class="span16">
		<!-- CQ COMPONENT: Breadcrumb -->
		<div class="section breadcrumb">
			<ul class="breadcrumb">
				<li><a href="#">Home</a> <span class="divider">></span></li>
				<li>Events</li>
			</ul>
		</div>
		<!-- END: Breadcrumb -->
	</div>
</div>

<!--
TEMPLATE NOTES: Tertiary Page
Here is the markup for tertiary pages, without content for ease of integration.
<div class="row">
	<div class="span11">
		<div class="section feature-area">
			{Feature area parsys}
		</div>
		<div class="section main-content">
			{Main content parsys}
		</div>
	</div>
	<div class="span4 offset1">
		<div class="section modules">
			{Modules parsys}
		</div>
	</div>
</div>
-->
<div class="row">
	<div class="span11">
		<div class="section feature-area">
			<!-- CQ COMPONENT: Page Headline -->
			<div class="section page-headline">
				<h2>Upcoming Events</h2>
				<!-- This should be an optional image in Author. Should be labeled "Marquee Image" and have an authorable alt tag. -->
				<img src="/dam/marquee-events.jpg" alt="Events" />
			</div>
			<!-- END: Page Headline -->
		</div>
		<div class="section main-content">
			<!-- CQ COMPONENT: Event UI -->
			<div class="section event-ui">
				<div class="row">
					<div class="span11">
						<div class="event-tools">
							<form class="form-event" id="form-event-filters" name="form-event-filters" action="" method="post">
								<label for="events">Now showing</label>
								<select name="events" id="events">
									<option value="all">All events</option>
								</select>
								<label for="locations">Near the</label>
								<select name="locations" id="locations">
									<option value="001">Bellevue Campus</option>
								</select>
							</form>
							<div class="toggle-view">
								<a href="" rel="event" id="list-event">List</a>
								<a href="" rel="event" id="map-event">Map</a>
							</div>
						</div><!--/Tools -->
					</div>
				</div>
				<div class="row">
					<div class="span11">
						<div class="view-event active" id="list-event">
							<div class="list-item">
								<div class="indicator-date"><span class="month">Mar</span><span class="date">12</span></div>
								<div class="row">
									<div class="span8" itemscope itemtype="http://data-vocabulary.org/Event">
										<h3 itemprop="summary"><a href="">Alumni nurses network</a> &mdash; Bellevue, WA</h3>
										<h4 class="dateline">March 12, 2012, 7:30 p.m.</h4>
										<div itemprop="description">
											<p>
											Homecoming 2011 promises to be a fun and memorable event. University of Phoenix Western Washington campus invites alumni and a guest to an exclusive Pregame Mixer and Mariners games. Don't miss this great opportunity to celebrate and reconnect with fellow alumni as we cheer on the home team.
											</p>
											<p>
											RSVP to reserve your seat today! Simply return to the ticket section listed above and click on the orange ‘Register’ button to complete the registration process. School was never this much fun. We can’t wait to see you there!
											</p>
										</div>
										<p>
										<strong>Event details</strong><br />
										<span itemprop="startDate">5:00pm Sign-in and registration</span><br />
										5:00pm Food, fun, and networking<br />
										7:00pm Game time!
										</p>
									</div>
									<div class="span3">
										<div class="signup"><a href="">Sign me up</a></div>
										
										<div class="details-location" itemscope itemtype="http://data-vocabulary.org/Organization">
											[Google Map]
											<p>
											<strong><span itemprop="name">Bellevue Learning Center</span></strong><br />
											<span itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
												<span itemprop="street-address">223 18th St, Suite 1200</span><br />
												<span itemprop="locality">Bellevue</span>, <span itemprop="region">WA</span><br />
												<span itemprop="postalcode">98034</span>
											</span><br />
											<span itemprop="url"><a href="">Get directions</a></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="view-event" id="map-event">
							[Provided by Google Maps API]
						</div>
					</div>
				</div>
			</div>
			<!-- END: Event UI -->
		</div> <!-- END: Main content -->
	</div><!-- /span11 -->
	<div class="span4 offset1">
		<!-- CQ COMPONENT: Block -->
		<div class="section block">
			<h4>Homecoming</h4>
			<p>See how your fellow alumni celebrated homecoming</p>
			<div class="filmstrip-block">
				<p><a href="">Chicago, IL</a> &mdash; Oct 20, 2011<p>
				<ul class="filmstrip">
					<li><a href="">image</a></li>
					<li><a href="">image</a></li>
					<li><a href="">image</a></li>
				</ul>
			</div>
			<div class="filmstrip-block">
				<ul class="filmstrip">
					<li><a href="">image</a></li>
					<li><a href="">image</a></li>
					<li><a href="">image</a></li>
				</ul>
			</div>
			<a class="more" href="">See More</a>
		</div>
		<!-- END: Block -->
	</div><!-- /span4+1 -->
</div> <!-- /row -->