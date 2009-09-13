<div id="{$paginationid}" class="pagination">
{$numresults} result{if $numresults>1}s.{/if}  {if $numresults > $perpage}
Page: <a href="" class="prev{if $startpagination<=1} hidden{/if}" rel="nofollow">&lt;&lt;</a>&nbsp;
<span class="prev">
{foreach from=$pagination_pages item=v key=k name=pagination}
{if $k==$startpagination}</span>

<span class="showing">{/if}
{if $k==$pagenum}
<a href="{$v}"{if $OPTIONS.nofollow_pagination=='yes' && $k!=1} rel="nofollow"{/if}><strong>{$OPTIONS.pagination_before}{$k}{$OPTIONS.pagination_after}</strong></a>{if !$smarty.foreach.pagination.last}{$OPTIONS.pagination_separator}{/if} {*comment so whitespace don't get lost*}
{else}
<a href="{$v}"{if $OPTIONS.nofollow_pagination=='yes' && $k!=1} rel="nofollow"{/if}>{$OPTIONS.pagination_before}{$k}{$OPTIONS.pagination_after}</a>{if !$smarty.foreach.pagination.last}{$OPTIONS.pagination_separator}{/if} {*comment so whitespace don't get lost*}
{/if}
{if $k==$endpagination}</span>

<span class="next">{/if}
{/foreach}
</span>
<a href="" class="next{if $endpagination>=$numpages} hidden{/if}" rel="nofollow">&gt;&gt;</a>
{/if}
</div>