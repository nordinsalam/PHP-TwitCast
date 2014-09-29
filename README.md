PHP-TwitCast
===========

Publish title and artist from icecast metadata to twitter

This project aimed to Radio Stations (public, private, community) whom needs simple tools to publish their aired program title & track using twitter.

Installation
------------
- Download and Extract PHP-TwitCast
- Move the icecast-status.xsl into /web on your icecast installation
- Edit icecast.php and adjust the url and port ($SERVER), mount point ($STATS_FILE), streampage or homepage url ($STREAM_PAGE)
- Create twitter application (http://dev.twitter.com)
- Make sure you have make "Read and write" on your app permission
- Edit twitter.php and adjust your Consumer key token, Consumer secret token, Access Token, and Access Token Secret
- Create cron that point to twitter.php, and set your own timing
