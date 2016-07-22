<?php if(!defined('KIRBY')) exit ?>

# video article blueprint

title: Video Article
pages: false
files: true
fields:

  title:
    label: Title
    type:  text
    required: true

  date:
    label: Date
    type: date
    required: true
    format: M d, yy

  tags:
    label: Topics
    type: tags
    required: true
    index: all

  video:
    label: Video embeded code
    type: text
    help: Copy and Paste here the code

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