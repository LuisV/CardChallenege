<?php

    function run()
    {
        $card1= choosecard(1);
        $card2= choosecard(2);
        
        if($card1 == $card2)
        {
            echo "<div> Tie! No one wins!</div>";
        }
        elseif($card1>$card2)
        {
            echo "<div> You won!</div>";
        }
        else
        {
            echo"<div> You lost...</div>";
        }
    }
    
    function choosecard($pos)
    {
        $suit = rand(0,3);
        $type = rand(0,4);
        
        display( $suit, $type,$pos);
        return $type;
    }
    
    function display($suit, $type, $pos)
    {
        switch($suit)
        {
            case 0: $suitName= "clubs";
            break;
            case 1: $suitName= "diamonds";
            break;
            case 2: $suitName= "hearts";
            break;
            case 3: $suitName= "spades";
            break;
        }
        
        switch($type)
        {
            case 0: $typeName= "ten";
            break;
            case 1: $typeName= "jack";
            break;
            case 2: $typeName= "queen";
            break;
            case 3: $typeName= "king";
            break;
            case 4: $typeName= "ace";
        }
        
        echo "<img id='card$pos' src='img/cards/$suitName/$typeName.png' alt='$suitName/$typeName' title=" . ucfirst($typeName)." width = '70' />";
        
    }
?>