<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @yield('content')
    <script src="/js/main.js"></script>

<script type="text/javascript">
	$('.table--group').isotope({
		//options
		itemSelector: '.table--item',
		layoutMode: 'fitRows'
	});

	//init isotope
	var $portfolio = $('.table--group').isotope({
	  itemSelector: '.table--item'
	});

	// store filter for each group
	var filters = {};

    $('.toolbar--top').on( 'change', 'select', function() {
	  var $this = $('option:selected', this).attr('data-filter');
      var select = $(this).attr('data-filter-group');
	  // set filter for group
	  filters[ select ] = $this;
	  // combine filters
	  var filterValue = concatValues( filters );
	  // set filter for Isotope
	  $portfolio.isotope({ filter: filterValue });
	});

	// flatten object by concatting values
	function concatValues( obj ) {
	  var value = '';
	  for ( var prop in obj ) {
	    value += obj[ prop ];
	  }
	  return value;
	}
  </script>
  </body>
</html>
