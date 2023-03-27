<?php
class View
{
	function generate($template_view, $content_view, $content_css, $content_js, $pageName)
	{
		include 'application/views/'.$template_view;
	}
}