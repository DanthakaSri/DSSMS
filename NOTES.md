All the changes made to defaults are noted down here
================================

###### 01. w3capsule-codeigniter/.htaccess line 01 to 12 added
	To remove index.php from url to make seo friendly urls


###### 02. w3capsule-codeigniter/application/core/WC_Router.php file added
	To replace underscore "_" with hyphen "-" to make seo friendly urls


###### 03. w3capsule-codeigniter/application/helpers/WC_url_helper.php file added
	To configure content delivery network. To get cdn path by zone_url();  
	
	
###### 04. w3capsule-codeigniter/css/main.css file customized.
	
* Some of the opinionated defaults, clearfix & helper classes have been removed to prevent style duplication.
* Media queries and Print styles have been removed. [we have written commented areas to add custom Media queries and Print styles]