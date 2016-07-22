<?php if(!defined('KIRBY')) exit ?>

# articles blueprint

title: Articles
pages:
  sort: flip
  limit: 10
files: false
fields:

  title:
    label: Title
    type: text
    required: true

  description:
    label: Description
    type: textarea
    size: small