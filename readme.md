# fLabs file dump

## what does it do?

It shows you pictures you uploaded.

It even can show you an overview of what has been uploaded so for. Actually, it sometimes  shows even preview images.

## suggestion for a lighttpd config

This thing is as <del>dump</del> dumb as it can be. Use the power of your web server to make it look smart.

	url.rewrite = (
		"/(files|template)/(.*)" => "/$0/$1",
		"/(.*)\.(png|jpg|jpeg|gif|tif|tiff)" => "/index.php?f=$1.$2",
	)
	
	server.error-handler-404 = "/template/404.php"

# ideas

- archive: show a nice info-bubble when hovering an image
- archive: filter content with a small search bar and the power of <a href="http://razorjack.net/quicksand/">Quicksand</a>
- add more clever thumbnail generator (create thumbnail when viewing the archvie page, threaded/background process)
- image page: click on 'share' highlights the textfield's content
- image page: click on image zooms to 100%