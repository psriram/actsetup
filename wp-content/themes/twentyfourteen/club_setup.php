<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
/*
	Template Name: Club Setup
*/

get_header(); ?>

<script src="<?php echo get_template_directory_uri().'/js/club_setup.js'; ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<div class="container">
    <div class="row smpl-step" style="border-bottom: 0; min-width: 500px;">
        <div class="col-xs-3 smpl-step-step complete">
            <div class="text-center smpl-step-num">Step 1</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a class="smpl-step-icon" href="/"><i class="fa fa-user" style="font-size: 60px; padding-left: 12px; padding-top: 3px; color: black;"></i></a>
            <div class="smpl-step-info text-center">Add Club</div>
        </div>

        <div class="col-xs-3 smpl-step-step complete">
            <div class="text-center smpl-step-num">Step 2</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a class="smpl-step-icon"><i class="fa fa-calendar" style="font-size: 60px; padding-left: 18px; padding-top: 5px; color: black;"></i></a>
            <div class="smpl-step-info text-center">Add Schedule</div>
        </div>
        <div class="col-xs-3 smpl-step-step active">
            <div class="text-center smpl-step-num">Step 3</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a class="smpl-step-icon"><i class="fa fa-file" style="font-size: 60px; padding-left: 7px; padding-top: 7px; color: black;"></i></a>
            <div class="smpl-step-info text-center">Preview</div>
        </div>

    </div>
</div>
<div class="container">
	<div class="row text-center">
     <p></p>
    </div>
     <div class="row text-center">
     <p></p>
    </div>
     <hr />
    <div class="row">
        <form role="form" method="post" name="formJoin" id="formJoin" action="">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span><span>1 </span><span> Club Details </span></div>

                <div class="form-group">
                    <label for="InputName">Club Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" value="<?php echo isset($_POST['InputName']) ? $_POST['InputName'] : '' ?>" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="InputName">Club Phone</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputPhone" id="InputPhone" placeholder="Enter Phone" value="<?php echo isset($_POST['InputPhone']) ? $_POST['InputPhone'] : '' ?>" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>


                <div id="locfindgroup" class="form-group">
                     <label for="autocomplete1">Locations</label>
                    <div class="input-group locationField">
                       <input id="autocomplete1" name="autocomplete1" placeholder="Enter Location 1"
                                                     onFocus="geolocate()" type="text" class="form-control" required></input>
                        <input type="hidden" id="hdnLat1" name="hdnLat1"/>
                        <input type="hidden" id="hdnLong1" name="hdnLong1"/>

                    </div>
                </div>
                <div class="form-group">
                   <!--<button type="button" id="btnFindLocation" class="btn btn-link">Cannot Find Location</button>-->
                    <button type="button" id="btnAddLocation" class="btn btn-link">Add Location</button>
                </div>

                <div id="divClass" class="form-group">
                     <label for="InputClass1">Class/Team</label>
                      <div class="row">
                        <div class="col-sm-6"><input type="text" class="form-control" name="InputClass1" id="InputClass1" placeholder="Enter Class" value="" required></div>
                        <div class="col-sm-3"><input type="text" class="form-control" name="InputStartAge1" id="InputStartAge1" placeholder="Enter Start Age" value=""></div>
                        <div class="col-sm-3"><input type="text" class="form-control" name="InputEndAge1" id="InputEndAge1" placeholder="Enter End Age" value=""></div>
                      </div>
                     <!--<div class="input-group classField">
                        <input type="text" class="form-control" name="InputClass1" id="InputClass1" placeholder="Enter Class" value="" required>
                        <input type="text" class="form-control" name="InputStartAge1" id="InputStartAge1" placeholder="Enter Start Age" value="">
                        <input type="text" class="form-control" name="InputEndAge1" id="InputEndAge1" placeholder="Enter End Age" value="">
                    </div>-->
                </div>
                <div class="form-group">

                    <button type="button" id="btnAddClass" class="btn btn-link">Add Class/Team</button>
                </div>
                <div id="divSchedule" class="form-group">
                     <label for="InputClass1">Club Schedule</label>
                     <div class="input-group classField">
                        <input type="text" class="form-control" name="InputSchedule1" id="InputSchedule1" placeholder="Enter Schedule Name" value="" required>
                    </div>
                </div>
                <div class="form-group">

                    <button type="button" id="btnAddSchedule" class="btn btn-link">Add Schedule</button>
                </div>

                <div class="form-group">
                  <label for="InputWebSite">Website</label>

                  <div class="input-group">
                      <input type="text" class="form-control" name="InputWebsite" id="InputWebSite" placeholder="Enter Website" value="<?php echo isset($_POST['InputWebsite']) ? $_POST['InputWebsite'] : '' ?>">
                      <span class="input-group-addon"><span class=""></span></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="InputDetails">Details</label>
                  <div class="input-group">
                      <textarea class="form-control" id="InputDetails" name="InputDetails" placeholder="Enter Details" cols="68" rows="7"><?php echo isset($_POST['InputDetails']) ? $_POST['InputDetails'] : '' ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                     <input type="button" name="btnSaveLeague" id="btnSaveLeague" value="Next" class="btn btn-info pull-right">
                  </div>
                </div>

            </div>
            <!--<div id="map-canvas"></div>-->

            <!-- create team code-->


            <input type="hidden" name="locationCounter" id="locationCounter" value="">
            <input type="hidden" name="classCounter" id="classCounter" value="">
            <input type="hidden" name="scheduleCounter" id="scheduleCounter" value="">
        </form>

    </div>
	</div>
</div>

<?php
//get_sidebar();
get_footer();
