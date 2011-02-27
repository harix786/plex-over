<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



/*
| -------------------------------------------------------------------
|  AUTHENTIFICATION
| -------------------------------------------------------------------
| If you run your server over the web, you'll need to be authenticate
| before accessing files served.Only available for plex_over <-> plex media server
\ communications ATM.
| See here about how the password is accepted by Plex Server:
| http://getsatisfaction.com/plex/topics/api_documentation-1bo5rc#reply_3813016
|
*/
$config['username'] = '';
$config['password']	= '';

/*
| -------------------------------------------------------------------
|  GENRAL SETTINGS
| -------------------------------------------------------------------
*/
// Specify the template folder (plex_over/views/)
$config['template'] = "origin";

// enable plex h264 transcoding (true/false)
$config['video_transcode'] = false;
$config['video_quality'] 	 = 5; /* 0 to 5 */

// subtitles folder (copied in it if subtitles are found
$config['subtitles_folder'] = "cache/subtitles/";

// set the cache expiration in minutes (empty for no cache)
$config['cache_expire']	= '';

/*
| -------------------------------------------------------------------
|  PLEX SERVER URLS
| -------------------------------------------------------------------
*/
// the PRIVATE url of the Plex Server (no trailing slash !!!!)
// Used to retreive xml files. If your running plex server on same
// host, prefer localhost (no name/dns resolution required = faster)
$config['plex_local'] = 'http://localhost:32400';
// the PUBLIC url of the Plex Server (no trailing slash !!!!)
// used in frontend for downloads and images
$config['plex_url'] = 'http://localhost:32400';


