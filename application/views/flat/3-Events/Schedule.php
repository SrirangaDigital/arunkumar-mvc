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
		<li data-date="2018-02-01">
			<p class="date">1 February 2018</p>
			<p class="about">Chowdaiah Memorial hall celebrating Father and Guru Sri Sukumar's 70th Birthday celebrations</p>
		</li>

		<li data-date="2018-02-03">
			<p class="date">3 February 2018</p>
			<p class="about">Concert with Vijay Prakash and Rajesh Krishnan </p>
		</li>

		<li data-date="2018-02-04">
			<p class="date">4 February 2018</p>
			<p class="about">Concert with Layatharanga for a Private Audiance</p>
		</li>

		<li data-date="2018-02-07">
			<p class="date">7 February 2018</p>
			<p class="about">Concert with Vijay Prakash at Shravanabelagola on the occasion of Maha Masthakabhisheka</p>
		</li>

		<li data-date="2018-02-08">
			<p class="date">8 February 2018</p>
			<p class="about">Private Concert</p>
		</li>

		<li data-date="2018-02-11">
			<p class="date">11 February 2018</p>
			<p class="about">Private Concert</p>
		</li>

		<li data-date="2018-02-16">
			<p class="date">16 February 2018</p>
			<p class="about">Concert with Vijay Prakash at VIT Vellore</p>
		</li>

		<li data-date="2018-02-18">
			<p class="date">18 February 2018</p>
			<p class="about">Concert with Vijay Prakash at Singapore</p>
		</li>

		<li data-date="2018-02-20">
			<p class="date">20 February 2018</p>
			<p class="about">Concert with Violin Masestro's Ganesh & Kumaresh at New Delhi</p>
		</li>

		<li data-date="2018-02-23">
			<p class="date">23 February 2018</p>
			<p class="about">Concert with Vijay Prakash in Bangalore</p>
		</li>

		<li data-date="2018-02-24">
			<p class="date">24 February 2018</p>
			<p class="about">Concert with Ghatam Giridhar Udupa in Bangalore</p>
		</li>

		<li data-date="2018-02-25">
			<p class="date">25 February 2018</p>
			<p class="about">Carnatic Classical concert at Shimoga</p>
		</li>

		<li data-date="2018-02-28">
			<p class="date">28 February 2018</p>
			<p class="about">Concert at TTD temple, Tirupathi</p>
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

			var date = new Date($(this).attr('data-date') + ' 23:59:59');
			if(date < today)
				$(this).remove();
		});
	});
</script>