<?php
/*
You are tasked with implementing a dynamic pricing feature for Careem rides
that calculates the total price of a ride.
The pricing policy varies based on factors such as distance traveled, demand, time of day, and duration.

Price Policy:
-----------------------
Base fare: $5.00
Distance rate: $2.50 per kilometer
Time rate: $0.50 per minute

However, the pricing policy is subject to the following adjustments:

Distance Traveled :
-----------------------
For rides less than 5 kilometers, there's no additional charge.
For rides between 5 and 1O kilometers apply a 10% discount on the distance rate.
For rides longer than 1O kilometers, apply a 15% discount on the distance rate.

Demand Factor :
-----------------------
During peak demand periods, increase the base fare by 20%.
During low demand periods, decrease the base fare by 10%'.

Time of Day:
-----------------------
from 8:00 PM to 6:00 AM ( night hours), increase the time rate by 20%.
*/

function calculatePrice(int $distance, string $demand, string $time, int $duration)
{
    $base = 5;
    $disrate = 2.5 * $distance;
    $timerate = 0.5 * $duration;

    if ($distance >= 5 && $distance <= 10) $disrate *= .9;
    else if ($distance > 10) $disrate *= .85;

    if ($demand == 'peak') $base += $base * .2;
    elseif ($demand == 'low') $base -= $base * .1;

    $split = explode(':', $time);
    if ($time[-2] == 'P' && $split[0] >= 8 && $split[0] <= 11) {
        $timerate += $timerate * .2;
    } else if ($time[-2] == 'A' && $split[0] >= 1 && $split[0] <= 6) {
        $timerate += $timerate * .2;
    } else if ($time[-2] == 'A' && $split[0] == 12)
        $timerate += $timerate * .2;

    return $base + $disrate + $timerate;
}

print_r(calculatePrice(2, 'peak', '12:00 PM', 4));
