jojo_pagination is a plugin for adding pagination to Jojo pages that need it. This can be used for search results, product databases, or most Jojo plugins that require pagination.

This plugin is totally separate from your query - it is your responsibility to read the page number from the URL and do your own query. This plugin simply creates the widget for the end user.

The pagination is a combination of Javascript and PHP, and degrades reasonably well if Javascript is disabled.

To use, prepare the following variables in your plugin...

foreach (JOJO::listPlugins('jojo_pagination.php') as $pluginfile) require_once($pluginfile);
$pagination = new jojo_pagination();
$pagination->id = 'pagination';
$pagination->pagenum = 4;
$pagination->perpage = 10;
$pagination->numresults = 300;
$pagination->showpages = 5;
$pagination->urlformat = 'page*';
$pagination->urlformat1 = '';

$smarty->assign('pagination',$pagination->getPagination());

Variables
=========
*id*
A DOM ID for the pagination widget. Defaults to "pagination". This needs to be unique for each instance on the page.
*pagenum*
The page you are currently on. Defaults to 1.
*perpage*
The number of results you are displaying per page.
*numresults*
The number of results returned by your query. eg. SELECT COUNT(*) AS numresults FROM `table` WHERE foo LIKE '%bar%'
*showpages*
The number of pages visible in the pagination widget at any given time. If this is set to 5 (default) then generally the current page + 2 pages either side are visible.
*urlformat*
The purpose of the pagination widget is to produce a series of hyperlinks to your page2, page3, page4 pages. A URL format needs to be defined for this to work. An asterisk (*) is the placeholder for the page number.
eg. If your Page 2 URL is "search/green-apples/page2/" then the urlformat should be "search/green-apples/page*/"
*urlformat1*
It's best practice to not mention the page number when the page number is 1. With the above example, the page 1 URL should be "search/green-apples/" and not "search/green-apples/page1/". The urlformat1 variable is used in exactly the same way as urlformat, but is used only for page1. For this example, the value you would enter is simply "search/green-apples/".

Credits
=======
Plugin created by Harvey Kane.
If you like this plugin, please place a link to www.jojocms.org or www.ragepank.com

License
=======
Lesser GPL - www.jojocms.org/license/