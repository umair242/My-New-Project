<!DOCTYPE html>
<html lang="en">
	<head>
			@foreach($headSections as $headSection)
			@include("components.".$headSection) 
			@endforeach
    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
			<div class="container">
			<div class="row">
					
			@foreach($HeaderSections as $HeaderSection)
			@include("components.".$HeaderSection) 
			@endforeach
			</div>
			</div>
			</div>
		</header>
		<!-- /HEADER -->
			@foreach($MainSections as $MainSection)
			@include("components.".$MainSection) 
			@endforeach
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
			@foreach($BodySections as $BodySection)
			@include("components.".$BodySection) 
			@endforeach

			<!-- /container -->
			
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			
				<!-- row -->
				@foreach($FooterSections as $FooterSection)
			@include("components.".$FooterSection) 
			@endforeach				
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		

			<!-- bottom footer -->
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->



	
	@foreach($finalFooterJsData as $name => $jskey)
		
		<script src="{{url($jskey)}}"></script>
		@endforeach
		@foreach($finalFooterJsData as $name => $jskey)
		<script src="{{url($jskey)}}"></script>
		@endforeach
		@foreach($finalFooterJsData as $name => $jskey)
		<script src="{{url($jskey)}}"></script>
		@endforeach
		@foreach($finalFooterJsData as $name => $jskey)
		<script src="{{url($jskey)}}"></script>
		@endforeach
		@foreach($finalFooterJsData as $name => $jskey)
		<script src="{{url($jskey)}}"></script>
		@endforeach
		@foreach($finalFooterJsData as $name => $jskey)
		<script src="{{url($jskey)}}"></script>
		@endforeach

			
		<!-- jQuery Plugins 
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>-->

	</body>
</html>
