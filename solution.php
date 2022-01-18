<?php

function solution($prices) {
  $maxProfit = -1;
  $buyPrice = 0;
  $sellPrice = 0;
  
  $changeBuyIndex = true;
  
  for ($i = 0; $i < count($prices) -1; $i++) {
    $sellPrice = $prices[$i+1]; 

    if ($changeBuyIndex) { 
        $buyPrice = $prices[$i]; 
    }
    
    if ($sellPrice < $buyPrice) {
        $changeBuyIndex = true; 
        continue;
    }
   
    else { 
        $tempProfit = $sellPrice - $buyPrice;
    
        if ($temp_profit > $maxProfit) { 
            $maxProfit = $tempProfit; 
        }
        
        $changeBuyIndex = false;
    }
  }
  
  if($maxProfit === -1){
      return 0;
  }
  return $maxProfit;
}
