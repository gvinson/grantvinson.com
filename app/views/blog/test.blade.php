@extends('layouts.master')
@section('title')
@parent Blog - An Overview of What My Blog Page Will Look Like
@stop
@section('stylesheets')
	
@parent
@stop

@section('content')
	
	<article>
	<p class="breadcrumb">
		<a href="/blog">Blog</a><span>&rsaquo;</span><a href="/blog/test">An Overview of What My Blog Page Will Look Like</a>
	</p>
		<h1>
			An Overview of What My Blog Page Will Look Like
		</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
		</p>
		<p data-height="268" data-theme-id="0" data-slug-hash="PwexwK" data-default-tab="result" data-user="vinsongrant" class='codepen'>See the Pen <a href='http://codepen.io/vinsongrant/pen/PwexwK/'>Responsive "Lightbox"</a> by Grant Vinson (<a href='http://codepen.io/vinsongrant'>@vinsongrant</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptat.
		</p>
		<div class="share-buttons">
			<a href="http://www.facebook.com/sharer.php?u=http://www.simplesharebuttons.com" target="_blank">
				<img class="icon facebook" src="/img/icons/facebook.svg">
			</a>
			<a href="http://twitter.com/share?url=http://www.simplesharebuttons.com&text=Simple Share Buttons&hashtags=simplesharebuttons" target="_blank">
				<img class="icon twitter" src="/img/icons/twitter.svg">
			</a>
			<a href="https://plus.google.com/share?url=http://www.simplesharebuttons.com" target="_blank">
				<img class="icon google-plus" src="/img/icons/google-plus.svg">
			</a>
		</div>
		<div class="clearfix"></div>
		<p class="meta">
			<span>Date: 04/26/2015</span>
			<span>Category: <a href="#">Hello, World!</a></span>
		</p>
		<a class="read-more" href="/blog">
			View More Posts
		</a>
	</article>

@stop

@section('scripts')
	@parent
	<script async src="//assets.codepen.io/assets/embed/ei.js"></script>
@stop