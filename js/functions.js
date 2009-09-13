$(document).ready(function(){
$('div.pagination a.next').click(function(){
  var id = $(this).parent().attr('id');
  $('#'+id+' span.next a:first').appendTo('#'+id+' span.showing').after(' ');
  $('#'+id+' span.showing a:first').appendTo('#'+id+' span.prev');
  if ($('#'+id+' span.next a').length==0) $('#'+id+' a.next').hide();
  if ($('#'+id+' span.prev a').length>0) $('#'+id+' a.prev').css('display','inline');
  return false;
});

$('div.pagination a.prev').click(function(){
  var id = $(this).parent().attr('id');
  $('#'+id+' span.prev a:last').prependTo('#'+id+' span.showing').after(' ');
  $('#'+id+' span.showing a:last').prependTo('#'+id+' span.next');
  if ($('#'+id+' span.prev a').length==0) $('#'+id+' a.prev').hide();
  if ($('#'+id+' span.next a').length>0) $('#'+id+' a.next').css('display','inline');
  return false;
});
});