<?php

class jojo_pagination
{
    var $id;          //DOM id for the pagination widget
    var $pagenum;     //the page you are currently on
    var $perpage;     //number of results per page
    var $numresults;  //number of results to paginate (required)
    var $showpages;   //number of pages to display at once
    var $urlformat;   //the format of URLs - eg 'search/page*/' - use a * as a placeholder for the page number
    var $urlformat1;  //is the page format different for page one? if so, enter here

    var $numpages;    //internal use

    function jojo_pagination($id='pagination', $numresults=0, $pagenum=1, $perpage=10, $showpages=5, $urlformat='', $urlformat1='')
    {
        $this->id = $id;
        $this->pagenum = $pagenum;
        $this->perpage = $perpage;
        $this->numresults = $numresults;
        $this->showpages = $showpages;
        $this->urlformat = $urlformat;
        $this->urlformat1 = $urlformat1;
    }

    function getPagination() {
        global $smarty;
        $this->numpages = ceil($this->numresults / $this->perpage);

        $endpagination = min($this->numpages, $this->pagenum + max($this->showpages-$this->pagenum,floor($this->showpages / 2)));

        $startpagination = max(1, min($endpagination-$this->showpages+1, $this->pagenum - floor($this->showpages / 2)));
        $pages = array();
        for ($i=1;$i<=$this->numpages;$i++) {
           $pages[$i] = (($i == 1) && !empty($this->urlformat1)) ? str_replace('*',$i,$this->urlformat1) : str_replace('*',$i,$this->urlformat);
        }
        $smarty->assign('paginationid',$this->id);
        $smarty->assign('startpagination',$startpagination);
        $smarty->assign('endpagination',$endpagination);
        $smarty->assign('numpages',$this->numpages);
        $smarty->assign('perpage',$this->perpage);
        $smarty->assign('pagenum',$this->pagenum);
        $smarty->assign('numresults',$this->numresults);
        $smarty->assign('pagination_pages',$pages);

        return $smarty->fetch('jojo_pagination.tpl');
    }

}