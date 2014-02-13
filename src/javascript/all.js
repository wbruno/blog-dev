(function() {
	/*global jQuery: false*/
	'use strict';

	var $external = document.querySelectorAll('a[rel*="external"]'),
		$body = document.getElementsByTagName('body')[0],
		$pre = document.getElementsByTagName('pre'),
		$switch = document.getElementById('switch'),
		$menu = document.getElementById('anchor-header-sidebar'),
		$itensMenu = document.getElementById('header-sidebar');

	function loop($elements, cb) {
		var i = $elements.length;

		while (i--) {
			cb($elements[i]);
		};
	};//loop

	/* a rel="external" */
	loop($external, function ($element) {
		$element.onclick = function () {
			window.open(this.href);

			return false;
		};
	});

	$switch.onclick = function () {
		var $this = this;

		if ( $body.classList.contains('black') ) {
			$body.classList.remove('black');
			$this.innerHTML = 'black theme';
		} else {
			$body.classList.add('black');
			$this.innerHTML = 'white theme';
		};
	};
	
	// Sintax Highlight do Google Prettify
	loop($pre, function ($element) {
		$element.classList.add('prettyprint');	
		$element.classList.add('linenums');

		$element.onclick = function () {
			var $this = this,
				mw = window.open('', 'pre', 'width=600, height=' + $this.height);

			mw.document.write('<style>ol {list-style: none;}</style><pre>'+$this.innerHTML+'</pre>');
		};
	}); 
	prettyPrint();
	
})();//function


