<?php

use App\Models\Leads;

function leadsnum(){
    $counter = (Leads::count()??0 ) + 1;
    // Get the current date components
    $date = date('ymd');

    // Format the sequential number with leading zeros
    $sequentialNumber = str_pad($counter, 5, '0', STR_PAD_LEFT);

    // Combine the components to create the final format
    return 'LD'.$date . $sequentialNumber;
}