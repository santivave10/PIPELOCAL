
/**
 * theme.js
 *
 * @package     theme_klass
 * @copyright   2015 LMSACE Dev Team,lmsace.com
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
(function($){var img=$("header#header").find('.avatars').find('img[src$="/u/f2"]');var src=img.attr('src');img.attr('src',src+'_white');var msg=$("header#header").find('#nav-message-popover-container .nav-link').find("img[src$='t/message']");var msgsrc=msg.attr('src');msg.attr('src',msgsrc+"_white");var note=$("header#header").find('#nav-notification-popover-container .nav-link').find("img[src$='i/notifications']");var notesrc=note.attr('src');note.attr('src',notesrc+"_white");if($("#header .navbar-nav button").attr('aria-expanded')==="true"){$("#header .navbar-nav").find('button').addClass('is-active')}
$("#header .navbar-nav button").click(function(){var $this=$(this);setTimeout(function(){if($this.attr('aria-expanded')==="true"){$("#header .navbar-nav").find('button').addClass('is-active')}else{$("#header .navbar-nav").find('button').removeClass('is-active')}},200)})})(jQuery)