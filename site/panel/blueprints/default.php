<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
  template: default
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
		required: true

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