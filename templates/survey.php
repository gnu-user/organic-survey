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
?>
<section id="register">
    <div class="page-header">
        <h1>Survey</h1>
    </div>
    <div class="row">
        <div class="span8">
            <!-- Survey info/notification box -->
            <?php
                if (isset($_SESSION['invalid']))
                {
                    echo '<div id="surveyinvalid" class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p>
                                <strong>Invalid Information Provided!</strong> The information you provided is not valid
                                please complete the survey and enter valid information.
                            </p>
                          </div>';
                }
                elseif (isset($_SESSION['success']))
                {
                    echo '<div id="surveyvalid" class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p>
                                <strong>Survey Submitted!</strong> Thank you, your survey has been successfully
                                submitted!
                            </p>
                          </div>';
                }
                else
                {
                    echo '<div id="surveyinfo" class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p>
                                Fill out the following survey to the best of your abilities, if there are any questions
                                for which you need clarification <strong>please let us know</strong>.
                            </p>
                          </div>';
                }
            ?>
            <form class="well form-horizontal" action="submit.php" method="post" accept-charset="UTF-8">
                <fieldset>
                    <!-- ORGANIC or NON-ORGANIC -->
                    <div class="control-group">
                        <label for="is_organic" class="control-label"><strong><strong>I think the pizza I ate was:</strong></strong></label>
                        <div class="controls">
                            <select id="is_organic" name="is_organic" class="input-xlarge">
                                <option></option>
                                <option value="1">ORGANIC</option>
                                <option value="0">NON-ORGANIC</option>
                            </select>
                        </div>
                    </div>
                    <!-- TASTE -->
                    <div class="control-group">
                        <label for="taste" class="control-label"><strong><strong>The pizza taste was:</strong></strong></label>
                        <div class="controls">
                            <select id="taste" name="taste" class="input-xlarge">
                                <option></option>
                                <option value="1">Worst tasting pizza I've ever had</option>
                                <option value="2">Barely edible</option>
                                <option value="3">Mediocre</option>
                                <option value="4">Good</option>
                                <option value="5">Best tasting pizza I've ever had</option>
                            </select>
                        </div>
                    </div>
                    <!-- TEXTURE -->
                    <div class="control-group">
                        <label for="texture" class="control-label"><strong>The texture was:</strong></label>
                        <div class="controls">
                            <select id="texture" name="texture" class="input-xlarge">
                                <option></option>
                                <option value="1">Worst texture I've ever had</option>
                                <option value="2">Barely edible</option>
                                <option value="3">Mediocre</option>
                                <option value="4">Good</option>
                                <option value="5">Best texture I've ever had</option>
                            </select>
                        </div>
                    </div>
                    <!-- CRUST -->
                    <div class="control-group">
                        <label for="crust" class="control-label"><strong>The taste of the crust was:</strong></label>
                        <div class="controls">
                            <select id="crust" name="crust" class="input-xlarge">
                                <option></option>
                                <option value="1">Worst crust I've ever tasted</option>
                                <option value="2">Barely edible</option>
                                <option value="3">Mediocre</option>
                                <option value="4">Good</option>
                                <option value="5">Best crust I've ever tasted</option>
                            </select>
                        </div>
                    </div>
                    <!-- TOPPINGS -->
                    <div class="control-group">
                        <label for="toppings" class="control-label"><strong>The taste of the toppings was:</strong></label>
                        <div class="controls">
                            <select id="toppings" name="toppings" class="input-xlarge">
                                <option></option>
                                <option value="1">Worst tasting toppings I've ever had</option>
                                <option value="2">Barely edible</option>
                                <option value="3">Mediocre</option>
                                <option value="4">Good</option>
                                <option value="5">Best tasting toppings I've ever had</option>
                            </select>
                        </div>
                    </div>
                    <!-- VISUAL -->
                    <div class="control-group">
                        <label for="visual" class="control-label"><strong>The visual appeal was:</strong></label>
                        <div class="controls">
                            <select id="visual" name="visual" class="input-xlarge">
                                <option></option>
                                <option value="1">Worst looking pizza I've ever seen</option>
                                <option value="2">Poor aesthetic appeal</option>
                                <option value="3">Mediocre aesthetic appeal</option>
                                <option value="4">Good aesthetic appeal</option>
                                <option value="5">Best looking pizza I've ever seen</option>
                            </select>
                        </div>
                    </div>
                    <!-- AROMA -->
                    <div class="control-group">
                        <label for="aroma" class="control-label"><strong>The aroma was:</strong></label>
                        <div class="controls">
                            <select id="aroma" name="aroma" class="input-xlarge">
                                <option></option>
                                <option value="1">Worst smelling pizza I've ever had</option>
                                <option value="2">Poor aroma</option>
                                <option value="3">Mediocre aroma</option>
                                <option value="4">Good aroma</option>
                                <option value="5">Best smelling pizza I've ever had</option>
                            </select>
                        </div>
                    </div>
                    <!-- Submit survey -->
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" id="survey" name="survey" class="btn btn-large btn-inverse">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</section>
