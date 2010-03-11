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
