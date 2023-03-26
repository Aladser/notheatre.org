<?php
class View
{
	function generate($template_view, $content_view, $content_styles)
	{
		include 'application/views/'.$template_view;
	}
}