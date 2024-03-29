<?php
/*
+--------------------------------------------------------------------------
|   BO ClassiFieds V 1.1 BETA 1
|   ========================================
|   by Bokhalifa
|   (c) 2004 - 2005 ib4arab.com
|   http://www.ib4arab.com
|   ========================================
|   Web: http://www.ib4arab.com
|   Time: Thu, 24 09 2004 04:57:42 uae
|   Email: bo@ib4arab.com
|   Licence Info: http://www.invisionboard.com/?license
+---------------------------------------------------------------------------
|
|   > Pager class Powered by Rafia
|
|	> Module Version Number: 1.1 BETA 1
+--------------------------------------------------------------------------
*/


class Pager
{
    var $start;
    var $page;
    var $numrows;
    var $perpage;
    var $pagelink;

    function Pager($_start,$_page, $_pagelink='')
    {
        $this->start     =  $_start;

        $this->page      =  $_page;

        $this->pagelink  =  $_pagelink;
    }

    function SetPagerN($_perpage,$_numrows)
    {
        $this->perpage = $_perpage;
        $this->numrows = $_numrows;
    }

    function PageNum()
    {
        if((isset($this->pagelink))&&($this->pagelink!=''))
        {
            $this->pagelink = $this->pagelink."&";
        }

        if ($this->numrows>$this->perpage)
        {

            $pagenum = "<p class=\"row1\" align=\"center\">������� : ";
            if($this->page > 2)
            {

                $pagenum .=  "<a href=$PHP_SELF?".$this->pagelink."start=0&page=1>[1]</a> ... \n";
            }
            $this->pages = ceil($this->numrows/$this->perpage);
            if($this->page == 0)
            {
                $this->page = 1;
            }
            if($this->page > 0)
            {
                $this->page = $this->page - 1;
            }
            $this->maxpage =  $this->page + 3 ;
            for ($i = $this->page ; $i <= $this->maxpage && $i <= $this->pages ; $i++)
            {
                if($i > 0)
                {
                    $this->nextpag = $this->perpage*($i-1);
                    if ($this->nextpag == $this->start)
                    {
                         $pagenum .= "<font size=2 face=tahoma><b>$i</b></font>&nbsp;\n";
                    }
                    else
                    {
                         $pagenum .= "<a href=$PHP_SELF?".$this->pagelink."start=$this->nextpag&page=$i>[$i]</a>&nbsp;\n";
                    }
                }
            }
            if (! ( ($this->start/$this->perpage) == ($this->pages - 1) ) && ($this->pages != 1) )
            {
                $this->nextpag = ($this->pages*$this->perpage)-$this->perpage;
                 $pagenum .= " ... <a href=$PHP_SELF?".$this->pagelink."start=$this->nextpag&page=$this->pages>[$this->pages]</a>\n";
            }
             $pagenum .= "</p>";

        }
        return $pagenum;
    }
}
?>
