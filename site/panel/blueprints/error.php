<?php if(!defined('KIRBY')) exit ?>

# error 404 blueprint

title: 404 Page, Error
pages: false
files: true
fields:

  title:
    label: Title
    type:  text
    required: true

	text:
		label: Text
		type: textarea
		size: large
		buttons:
			- h2
			- h3
			- bold
			- italic
			- email
			- link

	aside:
	  label: Sidebar
		type: textarea
		size: large
		buttons:
			- h2
			- h3
			- bold
			- italic
			- email
			- link