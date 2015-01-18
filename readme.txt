=== Improve Enqueued Asset URLs ===
Contributors: codearachnid
Tags: cache, urls, enqueue, asset, pagespeed, pingdom, query, cleanup, resources, static, strings, yslow
Requires at least: 3.2
Tested up to: 4.1
Stable tag: 1.2.0
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Improve caching for browsers by improving enqueued asset URLs

== Description ==
TL;DR This plugin will remove query strings from enqueued static resources like CSS & JavaScript urls.

Resources with a question mark (?) or ampersand (&) in the URL often bypass a proxy cache server. Thus by cleansing the query string from the URL should significantly increase your WordPress site performance. The goal is to improve your speed scores in services like PageSpeed, YSlow, Pingdom, LoadImpact.

Additional funcitonality is to strip the protocal prefix to simplify asset loading to be relative to the protocal path. Attempts to force all linked assets to be of the same protocal.

== Installation ==
Installing the plugin is easy. Just follow these steps:

1. From the administration part of your site, navigate to Plugins -> Add New.
2. Select the "Upload Plugin" button and hit "Choose File."
3. When the popup appears select the improve-enqueued-asset-urls-x.x.x.zip file from your desktop. (The 'x.x.x' will change depending on the current version number).
4. Follow the on-screen instructions and wait as the upload completes.
5. When the upload is finished, activate the plugin via the prompt. A message will show confirming a successful activation.


== Frequently Asked Questions ==
TL;DR This plugin will remove query strings from enqueued static resources like CSS & JavaScript urls.

== Changelog ==
= 1.2.0 =
* added filter to transforms URL to use protocol relative path

= 1.0.1 =
* renamed `improved` to `improve` in the plugin

= 1.0.0 = 
* Initial launch