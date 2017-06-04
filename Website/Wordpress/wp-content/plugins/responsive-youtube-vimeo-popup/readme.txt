=== Responsive YouTube & Vimeo Video Popup ===
Contributors: davidvongries
Tags: YouTube, Vimeo, Lightbox, Popup, YouTube Lightbox, Vimeo Lightbox
Requires at least: 4.0
Tested up to: 4.7
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create responsive YouTube & Vimeo Video Popup's in WordPress

== Description ==
Use the shortcode `[ryv-popup video="Embed-URL"]` in your post, page or template file to embed your responsive YouTube or Vimeo lightbox. To open the popup, add the CSS class `ryv-popup` to the element you wish to trigger the popup.

= Usage =
Shortcode to show a YouTube video:
`[ryv-popup video="https://www.youtube.com/embed/YlUKcNNmywk“]`

Shortcode to show a YouTube video with autoplay functionality:
`[ryv-popup video="https://www.youtube.com/embed/YlUKcNNmywk?autoplay=1"]`

Shortcode to show a vimeo video with autoplay functionality:
`[ryv-popup video="https://player.vimeo.com/video/30762834?autoplay=1"]`

CSS class to trigger the lightbox popup:
`ryv-popup`

Code-snippet to trigger the popup by a link:
`<a class="ryv-popup" href="#">Video</a>`

= Responsive YouTube & Vimeo Video Popup PRO =

To create multiple video popups on a single page, check out RYV-PRO!

[youtube https://www.youtube.com/watch?v=Kw2_13xu5wA]

Get [Responsive YouTube & Vimeo Video Popup PRO](https://mapsteps.com/en/downloads/responsive-youtube-vimeo-popup-wordpress/?utm_source=repo&utm_campaign=ryv_popup_pro&utm_medium=link)

== Installation ==
1. Download the responsive-youtube-vimeo-popup.zip file to your computer.
1. Unzip the file.
1. Upload the `responsive-youtube-vimeo-popup` folder to your `/wp-content/plugins/` directory.
1. Activate the plugin through the *Plugins* menu in WordPress.

== Frequently Asked Questions ==
= How do i use this plugin? =
The Responsive YouTube & Vimeo Popup Plugin doesn’t create an admin settings page. To trigger and display the lightbox popup, please follow the steps under the **Description** tab.

== Screenshots ==
1. Responsive YouTube & Vimeo Lightbox Popup

== Changelog ==
= 1.1.1 05/20/2017 =
* Added: Elementor support – by adding !important to the video iframe width and max-width attributes to prevent Elementor (and others) from overwriting.
= 1.1 02-27-2017 =
* stability & maintenance release
* Added: use ESC-key on your keyboard to close the popup
= 1.0.1 =
* Tweak: Increased z-index to make sure ryv-popup is on top
= 1.0 =
* Initial Release