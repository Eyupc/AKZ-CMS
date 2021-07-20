
<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12 d-lg-block d-none">
				<h4>Random Online User's</h4>

                @foreach(App\utils\Functions::randomUsersOnline() as $users)
					<div class="avatar  light-gray ">
						<img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$users->look}}&size=m&direction=3&head_direction=3&gesture=sml&headonly=1" data-toggle="tooltip" data-placement="top" title="{{$users->username}}">
					</div>
                @endforeach
			</div>
			<div class="col-lg-3 col-6">
				<h4>Help</h4>
				<ul class="links">
					<li>
						<a href="https://discord.gg/HRezw5w">
							<i style="left: -3px;margin-top: 2px;"></i><img src="../../../../assets/assets2/img/banzai_icon.gif"> Discord
                        </a><
                    </li>
                </ul>
					</div>
					<div class="col-lg-3 col-6">
						<h4>Social</h4>
						<ul class="social">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="legal-footer">
			<p> is a non-educational nonprofit project.</p>
		</div>
		<script src="../../../../assets/assets2/js/app.js?5455"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
		<script>
	$(function () {
		/* activate carousel on header */
		var carousel = $('.camera-carousel');
		carousel.on({
			'initialized.owl.carousel': function () {
				carousel.find('.item').show();
				carousel.find('.loading-placeholder').hide();
			}

			}).owlCarousel({
			loop: true,
			margin: 10,
			nav: false,
			items: 1,
			autoplay: true,
			autoplaySpeed: 2500,
			autoplayTimeout: 2500,
			autoplayHoverPause: true,
		});

		$('.first').mouseenter(function() {
			//$( this ).hide();
			//$( this ).parent().find('.second').fadeIn( 500 );
		});

		$('.second').mouseout(function() {
			//$( this ).hide();
			//$( this ).parent().find('.first').fadeIn( 500 );
		});
	});
</script>
<script>
$(function () {
$('.staff-carousel').owlCarousel({
loop: true,
nav: true,
items: 1,
autoWidth: false,
autoplay: true,
autoplayHoverPause: true
});
})
</script>
<script>
$(function () {
$('.load-more').on('click', function(e) {
e.preventDefault();

var type = $(this).data('type');

$(this).hide();

if (type == 'credits') {
$('.credit-leaderboard tr').fadeIn();
} else if (type == 'snowflakes') {
$('.snowflake-leaderboard tr').fadeIn();
} else if (type == 'duckets') {
$('.ducket-leaderboard tr').fadeIn();
} else if (type == 'respected') {
$('.respected-leaderboard tr').fadeIn();
} else if (type == 'active') {
$('.active-leaderboard tr').fadeIn();
}
});
});
</script>
