<?php
    if($_GET['what']=='Mr')
    {
        echo '<script>console.log("HelloW")</script>';
        $service = array
        (
            array("EYEBROW SHAPING",15.00),
            array("JUNIOR HAIRCUT",15.00),
            array("HAIR WASHING",5.00)
        );
        echo getHTML($service);
        
    }


    function getHTML($names)
    {
        
        $strResult = '<ul class="list-group text-center">';

        for ($i=0; $i<count($names); $i++)
        {	
            $strResult.= '<li class="list-group-item">'
            .$names[$i][0].'<p class="list-group-item-text"> $'
            .priceFormat($names[$i][1]).'</p></li>';		
        }
        $strResult.= '</ul>';
        return $strResult;	
    }
    function priceFormat($price)
    {
        return number_format((float)$price, 2, '.', '');
    }
?>