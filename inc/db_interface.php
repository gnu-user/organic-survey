<?php
/*
 *  Organic Food Survey
 *
 *  Copyright (C) 2013 Jonathan Gillett
 *  All rights reserved.
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


/**
 * Submit the survey results into the database.
 *
 * @param mysqli $mysqli_conn The mysqli connection object
 * @param boolean $is_organic Is it ORGANIC
 * @param int $taste The taste on scale of 1 to 5
 * @param int $texture The texture on scale of 1 to 5
 * @param int $crust The crust on scale of 1 to 5
 * @param int $toppings The toppings on scale of 1 to 5
 * @param int $visual The appearance on scale of 1 to 5
 * @param int $aroma The appearance on scale of 1 to 5
 *
 */
function submit_survey($mysqli_conn, $is_organic, $taste, $texture, $crust, $toppings, $visual, $aroma)
{
    $results_table = 'results';

    /* Add the survey results to the results table */
    if ($stmt = $mysqli_conn->prepare("INSERT INTO ".$results_table." VALUES (?, ?, ?, ?, ?, ?, ?, CURDATE())"))
    {
        /* bind parameters for markers */
        $stmt->bind_param('iiiiiii', $is_organic, $taste, $texture, $crust, $toppings, $visual, $aroma);

        /* execute query */
        $stmt->execute();

        /* close statement */
        $stmt->close();
    }
}
?>