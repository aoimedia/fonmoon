<?php if(!defined('KIRBY')) exit ?>

# article blueprint

title: Article
pages: false
files: true
fields:

  title:
    label: Title
    type:  text
    required: true

  author:
    label: Author
    type: author
    help: Author name is automaticaly complie with a current login user

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