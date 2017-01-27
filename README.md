# sicms
Simple Image+Content Management System

## Concept

The website home page will show a grid of squared images (from /img) and if there is a MarkDown file in the root directory with the same name of the image but with .md extension, the image will link to it. If any MarkDown file (.md) is requested, it will be interpreted (check [https://github.com/m0wer/markdown-handler](m0wer/markdown-handler)). You will need to enable .htaccess override in the Apache configuration.

## Requirements

* Apache
* PHP
* Access to the website home directory and to apache configuration.

## Installation

1. Enable .htaccess
2. Clone contents to web root.
3. Add images to img folder.
4. Add MarkDown files to the web root (not necessarily).

You are ready to go!

## Recommendations

* Change title and meta tags from index.php
