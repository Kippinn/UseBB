<?php

/*
	Copyright (C) 2003-2005 UseBB Team
	http://www.usebb.net
	
	$Header$
	
	This file is part of UseBB.
	
	UseBB is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	
	UseBB is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with UseBB; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

//
// Initialize a new template holder array
//
$templates = array();

//
// Define configuration variables of this template set
//
$templates['config'] = array(
	'item_delimiter'					=> '&middot;',
	'locationbar_item_delimiter'		=> '&raquo;',
	'open_nonewposts_icon'				=> 'open_nonewposts.gif',
	'open_newposts_icon'				=> 'open_newposts.gif',
	'closed_nonewposts_icon'			=> 'closed_nonewposts.gif',
	'closed_newposts_icon'				=> 'closed_newposts.gif',
	'forumlist_topic_rtrim_completion'	=> '...',
	'forumlist_topic_rtrim_length'		=> '20',
	'new_topic_button'					=> 'newtopic.gif',
	'reply_button'						=> 'reply.gif',
	'quote_button'						=> 'quote.gif',
	'edit_button'						=> 'edit.gif',
	'delete_button'						=> 'delete.gif',
	'sig_format'						=> '_______________<div class="signature">%s</small>',
	'quote_format'						=> '<fieldset class="quote"><legend>%s</legend>%s</fieldset>',
	'code_format'						=> '<pre class="code">%s</pre>',
	'textarea_rows'						=> '10',
	'textarea_cols'						=> '60',
	'quick_reply_textarea_rows'			=> '5',
	'quick_reply_textarea_cols'			=> '60',
);

//
// Globally needed templates
//

$templates['normal_header'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>{board_name}: {page_title} - Powered by UseBB</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="{css_url}" />
</head>
<body>
	<div id="pagewrapper">
	<div id="pagebox">
	
	<p id="logo"><a href="{link_home}"><img src="{img_dir}usebb.png" alt="UseBB" title="{home}" /></a></p>
	<h1 id="boardname"><span id="line">{board_name}</span></h1>
	<h2 id="boarddescr">{board_descr}</h2>
	
	<div id="topmenu"><ul>
		<li><a href="{link_home}">{home}</a></li><li><a href="{link_reg_panel}">{reg_panel}</a></li><li><a href="{link_faq}">{faq}</a></li><li><a href="{link_search}">{search}</a></li><li><a href="{link_active}">{active}</a></li><li id="logout"><a href="{link_log_inout}">{log_inout}</a></li>
	</ul></div>
	<div id="topmenu-shadow"></div>
';

$templates['normal_footer'] = '
	<p id="linkbar">
		{link_bar}
	</p>
	<address id="bottom">
		<!--
			We request not to remove the following copyright notice including the link to the UseBB Home Page.
			This shows your respect to everyone involved in UseBB\'s development and promotes the use of UseBB.
			If you don\'t want to show the Copyright notice, just leave the Powered by UseBB line. If you
			completely alter or remove the notice, support at our community forums or IRC channel will be affected.
		-->
		Powered by <a href="http://www.usebb.net">UseBB</a> {usebb_version} &middot; Copyright &copy; 2003-2005 UseBB Team
	</address>
	<div id="bottom-shadow"></div>
	
	</div>
	</div>
</body>
</html>
';

$templates['css'] = '
* {
	margin: 0px;
	padding: 0px;
}
html, body {
	min-height: 100%;
	font-size: 10pt;
	font-family: verdana, sans-serif;
	text-align: center;
	background-image: url({img_dir}body_bg.png);
	background-color: #CCCCCC;
	cursor: default;
}
#pagewrapper {
	width: 765px;
	margin: 0px auto 0px auto;
	padding: 0px 10px 0px 10px;
	background-image: url({img_dir}pagewrapper_bg.png);
	background-repeat: repeat-y;
	background-position: center;
}
#pagebox {
	padding: 20px 20px 15px 20px;
	background-image: url({img_dir}pagebox_bg.png);
	background-repeat: repeat-x;
	background-color: #FFFFFF;
}
a img {
	border: 0px;
}
label {
	cursor: pointer;
}
a:link, a:active, a:visited {
	color: #336699;
	text-decoration: underline;
}
a:hover {
	color: #7F0000;
	text-decoration: none;
}
a.administrator:link, a.administrator:active, a.administrator:visited {
	color: red;
}
a.moderator:link, a.moderator:active, a.moderator:visited {
	color: blue;
}
input, select, textarea {
	font-size: 10pt !important;
}
textarea {
	width: 99%;
}
input[type="submit"], input[type="reset"], input[type="button"] {
	padding: 0px 10px 0px 10px;
	cursor: pointer;
}
pre {
	display: block;
	margin: 0px;
	padding: 5px;
	font-size: 8pt;
	font-family: monospace;
	color: #7F0000;
	background-color: #FFFFFF;
	border: 1px solid #CDCDCD;
	overflow: auto;
}
fieldset {
	display: block;
	margin: 0px 25px 0px 25px;
	padding: 10px;
	font-size: 8pt;
	color: #333333;
	background-color: #FFFFFF;
	border: 1px solid #BFBFBF;
	overflow: auto;
}
fieldset legend {
	font-weight: bold;
}
small {
	font-size: 8pt;
}
#logo {
	float: left;
}
h1#boardname {
	text-align: right;
	font-size: 13pt;
	font-weight: bold;
	color: #336699;
	height: 30px !important;
	line-height: 30px !important;
}
h1#boardname #line {
	padding: 0px 0px 2px 0px;
	border-bottom: 2px solid #EBD6AD;
}
h2#boarddescr {
	text-align: right;
	font-size: 10pt;
	font-weight: normal;
	font-style: italic;
	color: #7F7F7F;
	height: 30px !important;
	line-height: 30px !important;
}
#topmenu * {
	font-size: 8pt;
	text-align: right;
}
#topmenu {
	float: left;
	width: 723px;
	background-image: url({img_dir}topmenu_bg.png);
	background-repeat: repeat-x;
	background-color: #E8E8E8;
	border: 1px solid #336699;
	padding: 3px 0px 3px 0px;
	margin: 4px 0px 0px 0px;
}
#topmenu ul {
	list-style: none;
}
#topmenu ul li {
	float: left;
}
#topmenu ul li#logout {
	float: none;
}
#topmenu ul li a:link, #topmenu ul li a:visited, #topmenu ul li a:hover {
	text-decoration: none;
	padding: 3px 7px 3px 7px;
	border-right: 1px solid #336699;
}
#topmenu ul li#logout a:link, #topmenu ul li#logout a:visited, #topmenu ul li#logout a:hover {
	border-right: 0px;
	border-left: 1px solid #336699;
}
#topmenu ul li a:link, #topmenu ul li a:visited {
	color: #336699;
}
#topmenu ul li a:active, #topmenu ul li a:hover {
	color: #7F0000;
	background-image: url({img_dir}topmenu_bg_reverse.png);
	background-repeat: repeat-x;
	background-color: #FFFFFF;
}
#topmenu-shadow {
	clear: both;
	height: 5px;
	background-image: url({img_dir}topmenu_shadow.png);
	background-repeat: repeat-x;
	background-color: #FFFFFF;
	line-height: 100%;
	overflow: hidden;
	margin: 0px 0px 15px 0px;
}
p.locationbar {
	clear: both;
	text-align: left;
	font-size: 8pt;
	font-style: italic;
	color: #333333;
	margin-bottom: 10px;
	margin-top: -10px;
	padding: 3px;
}
p.locationbar a {
	font-style: normal;
}
table.maintable, table.msgbox, table.confirmform {
	border-collapse: collapse;
	border-left: 1px solid silver;
	border-right: 1px solid silver;
	border-bottom: 1px solid silver;
	margin: 0px 0px 20px 0px;
	width: 100%;
}
table.maintable th, table.msgbox th, table.confirmform th {
	color: #EBD6AD;
	font-weight: bold;
	font-size: 8pt;
	background-color: #336699;
	background-image: url({img_dir}tableheadbg.gif);
	background-position: top;
	background-repeat: repeat-x;
	text-align: left;
	padding: 4px 6px 4px 6px;
	border-left: 1px solid silver;
	border-top: 1px solid silver;
}
table.maintable td, table.msgbox td, table.confirmform td, td.msg {
	background-color: #EFEFEF;
	padding: 6px;
	text-align: left;
	border-left: 1px solid silver;
	border-top: 1px solid silver;
	vertical-align: middle;
}
table.maintable td.forumcat {
	font-weight: bold;
	background-image: url({img_dir}menubg.gif);
	background-repeat: repeat-x;
	background-color: #E8E8E8;
}
table.maintable td.toolbar {
	background-image: url({img_dir}menubg.gif);
	background-repeat: repeat-x;
	background-color: #E8E8E8;
}
table.maintable td.toolbar img {
	margin-left: 5px;
}
table.maintable td.td1 {
	background-color: #EFEFEF;
}
table.maintable td.td2 {
	background-color: #E8E8E8;
}
table.maintable tr.posttop td {
	padding: 2px 2px 2px 5px;
}
table.maintable tr.post td {
	vertical-align: top;
}
table.maintable td.fieldtitle {
	background-color: #E8E8E8;
	width: 25%;
}
table.msgbox td, table.confirmform td, td.msg {
	padding: 18px 36px 18px 36px;
}
td.formcontrols {
	background-color: #E8E8E8 !important;
	text-align: center !important;
	padding: 6px !important;
}
.avatar {
	margin-top: 10px;
}
.avatar img {
	margin-bottom: 10px;
}
.posterinfo {
	font-size: 8pt;
	color: #3F3F3F;
}
.postlinks {
	float: right;
	font-size: 8pt;
}
.postcontent {
	padding-top: 6px;
	padding-bottom: 6px;
	overflow: auto;
}
p#panelmenu {
	color: #323232;
	font-size: 8pt;
	text-align: left;
	padding: 3px;
	margin-bottom: 10px;
	margin-top: -10px;
}
p#linkbar {
	color: #323232;
	font-size: 8pt;
	text-align: center;
	margin-bottom: 20px;
}
#bottom {
	clear: both;
	float: left;
	width: 705px;
	padding: 3px 9px 3px 9px;
	background-image: url({img_dir}topmenu_bg.png);
	background-repeat: repeat-x;
	background-color: #E8E8E8;
	border: 1px solid #336699;
	font-size: 8pt;
	font-style: normal;
	text-align: right;
	color: #333333;
}
#bottom a:link, #bottom a:hover, #bottom a:active, #bottom a:visited {
	text-decoration: none;
}
#bottom-shadow {
	clear: both;
	height: 5px;
	background-image: url({img_dir}topmenu_shadow.png);
	background-repeat: repeat-x;
	background-color: #FFFFFF;
	line-height: 100%;
	overflow: hidden;
}
';

$templates['location_bar'] = '
	<p class="locationbar">
		&bull; {location_bar}
	</p>
';

$templates['msgbox'] = '
	<table class="msgbox">
		<tr>
			<th>{box_title}</th>
		</tr>
		<tr>
			<td>{content}</td>
		</tr>
	</table>
';

$templates['confirm_form'] = '
	{form_begin}
	<table class="confirmform">
		<tr>
			<th>{title}</th>
		</tr>
		<tr>
			<td>{content}</td>
		</tr>
		<tr>
			<td class="formcontrols">{submit_button}&nbsp;{cancel_button}</td>
		</tr>
	</table>
	{form_end}
';

?>
