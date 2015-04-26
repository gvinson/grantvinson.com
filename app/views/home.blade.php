@extends('layouts.master')
@section('title')
@parent Home
@stop
@section('stylesheets')
	<script>
		!function(e){function t(t,n,r,o){"use strict";function a(){for(var e,n=0;u.length>n;n++)u[n].href&&u[n].href.indexOf(t)>-1&&(e=!0);e?c.media=r||"all":setTimeout(a)}var c=e.document.createElement("link"),i=n||e.document.getElementsByTagName("script")[0],u=e.document.styleSheets;return c.rel="stylesheet",c.href=t,c.media="only x",c.onload=o||null,i.parentNode.insertBefore(c,i),a(),c}var n=function(r,o){"use strict";if(r&&3===r.length){var a=e.navigator,c=e.Image,i=!(!document.createElementNS||!document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||e.opera&&-1===a.userAgent.indexOf("Chrome")||-1!==a.userAgent.indexOf("Series40")),u=new c;u.onerror=function(){n.method="png",n.href=r[2],t(r[2])},u.onload=function(){var e=1===u.width&&1===u.height,a=r[e&&i?0:e?1:2];n.method=e&&i?"svg":e?"datapng":"png",n.href=a,t(a,null,null,o)},u.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",document.documentElement.className+=" grunticon"}};n.loadCSS=t,e.grunticon=n}(this),function(e,t){"use strict";var n=t.document,r="grunticon:",o=function(e){if(n.attachEvent?"complete"===n.readyState:"loading"!==n.readyState)e();else{var t=!1;n.addEventListener("readystatechange",function(){t||(t=!0,e())},!1)}},a=function(e){return t.document.querySelector('link[href$="'+e+'"]')},c=function(e){var t,n,o,a,c,i,u={};if(t=e.sheet,!t)return u;n=t.cssRules?t.cssRules:t.rules;for(var l=0;n.length>l;l++)o=n[l].cssText,a=r+n[l].selectorText,c=o.split(");")[0].match(/US\-ASCII\,([^"']+)/),c&&c[1]&&(i=decodeURIComponent(c[1]),u[a]=i);return u},i=function(e){var t,o,a;o="data-grunticon-embed";for(var c in e)if(a=c.slice(r.length),t=n.querySelectorAll(a+"["+o+"]"),t.length)for(var i=0;t.length>i;i++)t[i].innerHTML=e[c],t[i].style.backgroundImage="none",t[i].removeAttribute(o);return t},u=function(t){"svg"===e.method&&o(function(){i(c(a(e.href))),"function"==typeof t&&t()})};e.embedIcons=i,e.getCSS=a,e.getIcons=c,e.ready=o,e.svgLoadedCallback=u,e.embedSVG=u}(grunticon,this);
					
			grunticon(["/css/icons.data.svg.css", "/css/icons.data.png.css", "/css/icons.fallback.css"]);
		</script>
		<noscript><link href="/css/icons.fallback.css" rel="stylesheet"></noscript>
@parent
@stop

@section('content')
	
	<div class="title-wrapper">
		<h1>GRANT</h1>
		<p>FRONT END DEVELOPER</p>
		<i class="icon-logo"></i>
		<p>UX DESIGNER</p>
	</div>

@stop

@section('scripts')
	@parent
@stop