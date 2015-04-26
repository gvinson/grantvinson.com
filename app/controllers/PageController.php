<?php

class PageController  extends BaseController {

	public function index($cat = null, $page = null)
	{	
		$body_classes = str_replace("-","_",$cat) . ' ';
		$body_classes .= str_replace("-","_",$page);

		if ($cat == null) {
			$body_classes = "home";
			$cat = 'home';
		}

		if ($page != null) {
			$body_classes .= ' subpage';
			$view = View::make($cat.'.'.$page);
		} else {
			$view = View::make($cat);
		}
		
		$view->with('body_classes', $body_classes);
		
		return $view;
	}

}
