=== Plugin Name ===
Contributors: C. E.
Donate link: 
Tags: CDF, Computable Document Format, Mathematica, Wolfram Language, Stack Exchange, syntax highlighter
Requires at least: 3.0.1
Tested up to: 4.2.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Syntax highlighting for Mathematica code. Automated CDF embedding. Wolfram Cloud API utility shortcode. Seamless cached interface to Mathematica.SE.

== Description ==

Mathematica Toolbox is a set of shortcodes for users who sometimes write about Mathematica programming. It is the only WordPress plugin that supports syntax highlighting for Wolfram Language, the language used in Mathematica.

**Syntax highlighting and formatting**

* Uses the same highlighting script that is used on Mathematica.StackExchange.com and on Wolfram Community.
* Preserves code indentation and prevents WordPress from inserting `<br>` and `<p>` into code.
* Replaces Wolfram Language character codes such as `\[Alpha]`, `\[Gamma]` etc. with their corresponding characters.

The highlighting feature can be triggered in two ways. In the editor `[wlcode]Wolfram Language code here[/wlcode]` can be used to place a code block directly into the text, however it is often desirable to put the code elsewhere and refer to it instead of putting it into the text itself. This is achieved by the shortcode `[wlcode field="name"]` where `name` refers to a custom post field that holds the code that should be inserted at that point. You may have to go to "screen options" at the top of the editor page to enable custom post fields before you can see the custom post field form.

**Embed Wolfram technologies**

* Easily embed CDFs on any post or page.
* Retrieve and display an image from a Wolfram Cloud API.
* Retrieve and display raw data from a Wolfram Cloud API.
* Display a link to the documentation of a Wolfram Language function.

The [official plugin](https://wordpress.org/plugins/wolfram-cdf-plugin/) from Wolfram Research that embeds CDFs [does not work](http://mathematica.stackexchange.com/q/66311/731) since WordPress 4.0.1. The shortcode in this plugin takes exactly the same arguments, so the instructions for that plugin are still valid. There is a button beneath the text editor in the post admin area that inserts a template that is straightforward to fill out. You can upload the CDF and its backup image, which you get if you use the CDF export wizard in Mathematica, via the media uploader. Remember to take note of the dimension that the export wizard tells you that the CDF has, because you will need it later.

When you create an "instant API" in the Wolfram Cloud using `CloudDeploy` and `APIFunction` Mathematica gives you a URL. `[WolframCloudAPI id=""]` accepts the ID part of that URL as a parameter and will output the API's return value. Any other parameters will be passed on to the API. By default `[WolframCloudAPI]` assumes that the return value of the API is an image. If it is data you should add `image="false"` as a parameter.

The shortcode `[wldoc]function[/wldoc]` generates a link to the online documentation page of `function`.

**Retrieve posts from Mathematica.StackExchange.com**

`[mma_se_questions ids="11350;3345;3646"]` retrieves the questions with the given IDs. Note that the IDs are separated by semicolons. Answers can be retrieved similarly by `[mma_se_answers ids="25616;259"]`. The display format in each case is an unordered list.

**Retrieve profile information from Mathematica.StackExchange.com**

`[mma_se_user user_id="731"]` displays a link to the Mathematica.StackExchange user profile of user 731. The link text is the user's name. `[mma_se_user user_id="731" link="false"]` displays the name without turning it into a link.

`[mma_se_profile_box user_id="731"]` displays a box with basic facts about user 731. Please see the screenshots page for a better understanding of what the result is.

`[mma_se_user_questions user_id="731"]` and `[mma_se_user_answers user_id="731"]` displays lists of questions and answers respectively written by user 731. This shortcode is a direct interface between WordPress and the Stack Exchange API: any parameter in API can be added to the shortcode. For example `[mma_se_user_questions user_id="731" pagesize="5" sort="votes"]` returns the five questions asked by user 731 that have the most votes. You can see the full set of parameters in the [documentation](http://api.stackexchange.com/docs/answers-by-ids) for the Stack Exchange API.

**Caching of results**
Note that queries sent to the Stack Exchange API are cached in the background, so for example `[mma_se_user user_id="731"]` will only look that user up once a week at most, because a week is the default expiration time of the cache. It's good to let the cache expire because sometimes users change their names. However if you want you can add the `expiration` parameter to any of the `mma_se_*` calls and specify the expiration time in seconds.

**Credits**

* The highlighter script is Google Code Prettify.

* [Patrick Scheibe](https://github.com/halirutan/Mathematica-Source-Highlighting) wrote the Google Code Prettify extension for Mathematica. He also wrote [this](http://meta.mathematica.stackexchange.com/questions/1043/additional-useful-buttons-for-our-m-se-editor/) browser extension with capablities that inspired this plugin, documentation links and Mathematica glyph codes to glyphs conversion.

* The CDF embedding Javascript script was written by Wolfram Research.

* [The Wordpress Plugin Boilerplate](http://wppb.io/) was used in this project.

* The banner at the top of this page was generated with code that's available in the Mathematica documentation under `ArrayPlot`.

== Installation ==

1. Upload the folder `Mathematica-Toolbox` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

You should now be able to use any of the shortcodes. If you forget what they are you can use the buttons that should have appeared underneath the text editor to insert shortcode templates into the text.

== Frequently Asked Questions ==

= What are the allowed parameters of `mma_se_user_*` shortcodes? =

The allowed parameters can be found in the [Stack Exchange API documentation](http://api.stackexchange.com/docs/answers-by-ids). Both the retrieval of questions and answers make use of the same parameters. Additionally a filter, as defined in the Stackexchange API documentation, can be specified. And `expiration` - the lifetime of a cached value given in the number of seconds - can also be specified.

= What are the default cache expiration times for Stack Exchange date? =
When data is retrieved from Stack Exchange using a `mma_se_*` shortcode and no expiration time for the cache is given, the following expiration times are assumed:
* `mma_se_user` is renewed once every week.
* `mma_se_user_*` is renewed once every day.
* `mma_se_(questions|answers)` is renewed once every month.
* `mma_se_profile_box` is renewed once every day.

== Screenshots ==

1. CDFs can be included in WordPress posts, as well as data and images from Wolfram Cloud APIs.
2. There are two different ways to include highlighted code blocks, but they produce the same result. Character codes such as `\[Alpha]` get replaced automatically with their corresponding characters.
3. Handy shortcodes can render usernames and links to the online documentation.
4. Shortcodes that interface with the Stackexchange API can retrieve information about a user. `[mma_se_profile_box user_id="731"]` creates the profile box seen in the image.
5. Answers specified by IDs, retrieved from the Stackexchange API.
6. The top metabox is the "toolbox" which the plugin is named after. A click on one of those buttons inserts the corresponding shortcode into the editor. Below the toolbox there is an example of code in custom post fields, which can be included in the post using `[wlcode field="example"]` and `[wlcode field="glyphs"]` respectively.

== Changelog ==

The current version is version 1.0.0.

== Upgrade Notice ==
