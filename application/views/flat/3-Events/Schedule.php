<div id="profile" class="padding-x">
	<h2>Upcoming Performances</h2>
	<ul class="concerts">
		<li data-date="2017-12-25">
			<p class="date">25 December 2017</p>
			<p class="about">With singer Karthick in Chennai for the music season at Kamaraja Arangam</p>
		</li>
		<li data-date="2017-12-31">
			<p class="date">31 December 2017</p>
			<p class="about">With singer Vijay Prakash in Chennai for a private audience</p>
		</li>
		<li data-date="2018-01-07">
			<p class="date">7 January 2018</p>
			<p class="about">Performing Morsing for a vocal concert in Bengaluru</p>
		</li>
		<li data-date="2018-01-09">
			<p class="date">9 January 2018</p>
			<p class="about">Performing Morsing for a Traditonal Carnatic concert at Ramakrsihana Ashram, Bengaluru</p>
		</li>
		<li data-date="2018-01-13">
			<p class="date">13 January 2018</p>
			<p class="about">With singer M D Pallavi at Davanagere at a Private Concert</p>
		</li>
		<li data-date="2018-01-14">
			<p class="date">14 January 2018</p>
			<p class="about">With some of the renowned singers of Kannada film industry at Bengaluru</p>
		</li>
		<li data-date="2018-01-15">
			<p class="date">15 January 2018</p>
			<p class="about">Performing in Bengaluru for a Music school event</p>
		</li>
		<li data-date="2018-01-20">
			<p class="date">20 January 2018</p>
			<p class="about">Performing with Vijay TV Super Singers in London with for a world tour project</p>
		</li>
		<li data-date="2018-01-24">
			<p class="date">24 January 2018</p>
			<p class="about">Performing with LayaTharanga at TTD at Tirumala</p>
		</li>
		<li data-date="2018-01-26">
			<p class="date">26 January 2018</p>
			<p class="about">Performing at a special concert with N Amrit, Giridhar Udupa and Ravichandra Kulur in Bengaluru</p>
		</li>
		<!-- Template -->
		<!-- <li>
			<p class="date">12 January 2018</p>
			<p class="title">Bacardi NH7 Weekender</p>
			<p class="about">Whenever the Weekender dates are announced, it gets everyone talking. The NH7 Weekender has never once failed to infuse an enthusiasm in the crowd that can be accorded to another time of the year... <span class="more"><a href="#">more</a></span></p>
		</li> -->
	</ul>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		var today = new Date();
		$('.concerts li').each(function(index){

			var date = new Date($(this).attr('data-date'));
			if(date < today)
				$(this).remove();
		});
	});
</script>