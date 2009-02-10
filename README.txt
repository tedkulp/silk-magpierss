Magpie RSS plugin for Silk

This plugin allows you to pull an rss feed into a 
smarty variable.  It can then be displayed in any
template.



INSTALL
-------

Unzip into the extensions directory in your silk
application.  This is normally extensions/magpierss.



EXAMPLE USE
-----------

{magpie_rss url='http://url/to/rss.xml' assign='rss_entries'}
<ul>
	{foreach from=$rss_entries->items item='item'}
		<li>{$item.title} - {$item.date_timestamp|date_format:"%c"}</li>
	{/foreach}
</ul>



LICENSE
-------

This extension is released under the MIT license.  This applies to all
the code except for the contents of the lib directory.  The lib directory
contains the Magpie RSS library, which is released under the GPL.  It's
license is in the lib/README file.

