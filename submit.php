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

require_once "inc/auth.php";
require_once "inc/db_interface.php";
require_once "inc/validate.php";

session_start();

$mysqli_conn = new mysqli("localhost", $db_user, $db_pass, $db_name);

/* check connection */
if (!valid_mysqli_connect($mysqli_conn))
{
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}

/* 
 * If all of the survey information is set add the results to the results table 
 */
if (       isset($_POST['test_cat']) && is_numeric($_POST['test_cat']) 
        && isset($_POST['is_organic']) && is_numeric($_POST['is_organic']) 
        && isset($_POST['taste']) && is_numeric($_POST['taste']) 
        && isset($_POST['texture']) && is_numeric($_POST['texture']) 
        && isset($_POST['crust']) && is_numeric($_POST['crust'])
        && isset($_POST['toppings']) && is_numeric($_POST['toppings']) 
        && isset($_POST['visual']) && is_numeric($_POST['visual'])
        && isset($_POST['aroma']) && is_numeric($_POST['aroma'])
    )
{
    $test_cat   = $_POST['test_cat'];
    $is_organic = $_POST['is_organic'];
    $taste      = $_POST['taste'];
    $texture    = $_POST['texture'];
    $crust      = $_POST['crust'];
    $toppings   = $_POST['toppings'];
    $visual     = $_POST['visual'];
    $aroma      = $_POST['aroma'];

    /* Submit the survey results */
    submit_survey($mysqli_conn, $test_cat, $is_organic, $taste, $texture, $crust, $toppings, $visual, $aroma);

    /* Survey results recorded, redirect to main page */
    $_SESSION['success'] = "success";
    header('Location: index.php');
}
else
{
    /* Invalid data, redirect to main page */
    $_SESSION['invalid'] = "invalid";
    header('Location: index.php');
}
?>