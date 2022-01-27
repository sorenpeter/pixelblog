# pixelblog
A visual focused microblog powered by twtxt.txt

## about pixelblog

So what is pixelblog? It my attemt at making a nice looking frontend / GUI for showing you fee

It kind of a merge of the core features of twitter and instgram: a timeline view of your posts and a nice gallery of all the images in your posts.

Key features:
* Write posts to you twtxt.txt file using the `/post` interface
* Image upload
* Gallery view - show all images in a 

You have have a microblog with image support, that looks nice and your can personalise and integrate into your excisting website



## installation and setup

0. You need to have a webhosting with PHP and perferable running Apache or similar for pixelblog to work.

1. Download the code from https://github.com/sorenpeter/pixelblog as a zip

2. Upload the content of the zip to you webhosting using a FTP client
	- The default would be to put eveything from within the pixelblog-folder in the root so you will have:
		```
		www.mysite.net/twtxt/ (folder)
		www.mysite.net/twtxt.txt
		www.mysite.net/avatar.png
		www.mysite.net/README.md (can be deleted)
		```
	- or you can rename the folder `twtxt` to something else 

3. Rename or make a copy of `config_template.php` and save it as `config.php`

4. Open `config.php` and edit the setting to you liking and setup

5. Go to a site like https://hostingcanada.org/htpasswd-generator/ and generate a username and password

6. Add username and password string to  `post/.htpassword`



## posting and uploading images


## customization

* Open op `custom.css` and try out the provided themes by uncommenting the code

* Change the colors and other element `custom.css` to you liking

* Advacned: Mess around with the files in `layout`
	* Add a link to `layout/nav-bar.php` to a page with your own special filters like: 
	```
			https://darch.dk/pixelblog/?tag=pixelblog
	```

## TODO and current limitations

- the thumbnail function used only support local files, so if you want to use an external twtxt.txt or embed images not uploade via the `/post` feature you will need to turn it of by editing `system/Slimdown.php`

## credits
