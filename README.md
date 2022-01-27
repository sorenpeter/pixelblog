# pixelblog
A visual focused microblog powered by twtxt.txt

created by sorenpeter / www.darch.dk / sp@darch.dk 


## about pixelblog

See it live at: https://darch.dk/pixelblog/

So what is pixelblog? It my attemt at making a nice looking frontend / GUI for showing you fee

It kind of a merge of the core features of twitter and instgram: a timeline view of your posts and a nice gallery of all the images in your posts.

Key features:
* Write posts to you `twtxt.txt` file using the `/post` interface
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

5. Open up `www.mysite.net/twtxt/` in your browser and check for any errors


### password setup

1. Go to a site like https://hostingcanada.org/htpasswd-generator/ and generate a username and password

2. Add the username and password string as a new line in `post/.htpassword`


## posting to you twtxt feed

1. In your browser got to you site, but now add `/post` to the end so it says somthing like `www.mysite.net/twtxt/post`

2. Type in your username and password (see above for setup)

3. Write you message in the input field and press "Post"

### uploading and posting images

1. Select one or more images to upload

2. Copy the markdown code from the list to the input field together with you message or just post images if you like.
	`![](http://www.mysite.net/twtxt/media/2022-01-27_my_picture.png)`

- There is a special feature build into pixelblog that allows you to set if the images within a post should be show as a grid side by side or eath image on its own line. 


The default is to have each images on it own line when in timeline view. But to get a grid view with up to 5 images side by side, you can include the word `grid` in the first image of several like this:
`![grid](http://www.mysite.net/twtxt/media/2022-01-27_my_picture_1.png) ![](http://www.mysite.net/twtxt/media/2022-01-27_my_picture_2.png) ![](http://www.mysite.net/twtxt/media/2022-01-27_my_picture_3.png)`
Only put `grid` in the square brackets of the first images unless you wants some funky side effects (you have been warrend!)


## customization

* Open op `custom.css` and try out the provided themes by uncommenting the code

* Change the colors and other element `custom.css` to you liking

* __Advacned:__ Mess around with the files in `layout`
	
	* Add a link to `layout/nav-bar.php` to a page with your own special filter like: `<li><a href="<?=$public_url?>?tag=event"><i class="ti ti-calendar-event"></i>Events</a></li>`

## TODO and current limitations

- The thumbnail function used only support local files, so if you want to use an external twtxt.txt or embed images not uploade via the `/post` feature you will need to turn it of by editing `system/Slimdown.php`

## credits and others code 

- [twtxt](https://twtxt.readthedocs.io) - the original decentralised, minimalist microblogging service for hackers

- [yarn.social](https://yarn.social/) - the multi-user pods allowed everyone to use twtxt as a social media without selfhosting

- [picoblog](https://0xff.nu/picoblog) - the PHP backend that pixelblog are using for rendering the timeline view

- [Thumb](https://github.com/jamiebicknell/Thumb) - a simple thumbnail generation script written in PHP



