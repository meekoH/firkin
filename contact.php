<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>Firkin Pubs | Restaurant | Bar | Restaurants | Best Restaurant</title>
        <meta name="title" content="Firkin Group of Pubs - Experience a New Breed of British Pubs" />
        <meta name="description" content="Visit our location page to inquire about a Firkin Pub near you. Stop in on any day of the week to take advantage of our daily Bevvy &amp; Bites specials!" />
        <style>
            .content { text-align:center; }
            h4 { text-transform:uppercase; }
        </style>
        <script src="http://www.digitalmarketingbox.com/unoapp/js/jquery.webinquiry.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
    </head>
    <body>
    	<div class="wrapper">
            <?php require_once('components/header.html'); ?>
            <?php require_once('components/slider.php'); ?>
    		<div class="content-wrapper with-banner" id="contact">
                <div class="content">
                    <h1 class="blue-heading">The <span>Firkin</span> Group of Pubs</h1>
                    <h4>Corporate Contact Information</h4>

                    <p><a href="tel:9053059792">(905) 305-9792</a><br>
                        20 Steelcase Rd. W<br>
                        Unit 1C<br>
                        Markham, ON<br>
                        L3R 1B2</p>

                    <h3 class="firkin-head">Questions or Comments?</h3>

                    <p>Please note this form is not for requesting reservations.<br>
                        To do so, kindly find the <a href="locations">location</a> nearest you.<br>
                        We appreciate your understanding.</p>

                    <form action="javascript:void(0)" id="reservationForm" data-recipient="larry@firkinpubs.com,scott@firkinpubs.com,davegodfrey@firkinpubs.com" data-formtype="Firkin Group of Pubs - Corporate Contact Inquiry">

                        <div id="customSuccessMsg" style="display: none;">
                            <div class="modal-center">
                                <h2 class="thanks">Thank You.</h2>
                                <p>Thank you for submitting your inquiry.</p>
                                <p>We'll get back to you shortly to discuss the details.</p>
                                <div onclick="$('#customSuccessMsg').hide();" class="ok-btn">OK</div>
                            </div>
                        </div>

                        <div id="errorModal" style="display: none;">
                            <div class="modal-center">
                                <h2 class="error">Error</h2>
                                <p class="msg">This text will be replaced with the error message.</p>
                                <div onclick="$('#errorModal').hide();" class="ok-btn">OK</div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="left-side">
                                <label for="First_Name">First Name <span class="required">*</span></label>
                                <input data-name="First Name" name="First_Name" type="text" data-required tabindex="1">
                            </div>
                            <div class="right-side">
                                <label for="Last_Name">Last Name <span class="required">*</span></label>
                                <input data-name="Last Name" name="Last_Name" type="text" data-required tabindex="2">
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="form-row">
                            <div class="left-side">
                                <label for="Email">Email <span class="required">*</span></label>
                                <input data-name="Email" name="Email" type="text" data-required data-email tabindex="3">
                            </div>
                            <div class="right-side">
                                <label for="Phone">Phone # <span class="required">*</span></label>
                                <input data-name="Phone #" name="Phone" type="text" data-required tabindex="4">
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="form-row">
                            <div class="left-side">
                                <label for="Date_Visited">Date Visited</label>
                                <input data-name="Date Visited" name="Date_Visited" type="text" class="datepicker" tabindex="5">
                            </div>
                            <div class="right-side">
                                <label for="Location">Location <span class="required">*</span></label>
                                <select data-name="Location Visited" onchange="find_onchange();" data-required="Please let us know which Location you visited." tabindex="6">
                                    <option value="" selected>Select a Location</option>
                                    <option value="Firkin on the Bay">Firkin on the Bay</option>
                                    <option value="Firkin at the Tannery">Firkin at the Tannery</option>
                                    <option value="Firkin on Bloor">Firkin on Bloor</option>
                                    <option value="Firkin on Harbour">Firkin on Harbour: A Firkin Pub</option>
                                    <option value="Firkin on King">Firkin on King</option>
                                    <option value="Firkin on Yonge">Firkin on Yonge</option>
                                    <option value="Firkin on Danforth">Firkin on Danforth</option>
                                    <option value="The Bear and Firkin">The Bear: A Firkin Pub</option>
                                    <option value="The Bull and Firkin">The Bull: A Firkin Pub</option>
                                    <option value="The Churchmouse and Firkin">The Churchmouse: A Firkin Pub</option>
                                    <!-- <option value="The Crown and Firkin">The Crown and Firkin</option> -->
                                    <option value="Drake: A Firkin Pub">Drake: A Firkin Pub</option>
                                    <option value="The Falcon and Firkin">The Falcon and Firkin</option>
                                    <option value="The Fiddle and Firkin">The Fiddle and Firkin</option>
                                    <option value="The Filly and Firkin">The Filly and Firkin</option>
                                    <option value="The Flatiron and Firkin">The Flatiron: A Firkin Pub</option>
                                    <option value="The Flyer and Firkin">The Flyer &amp; Firkin - Baltimore: A Firkin Pub</option>
                                    <option value="The Fox and Firkin">The Fox: A Firkin Pub</option>
                                    <option value="The Friar and Firkin">The Friar: A Firkin Pub</option>
                                    <option value="The Frigate and Firkin">The Frigate and Firkin</option>
                                    <option value="The Frog and Firkin">The Frog: A Firkin Pub</option>
                                    <option value="The Goose and Firkin">The Goose: A Firkin Pub</option>
                                    <option value="The Gull and Firkin">The Gull: A Firkin Pub</option>
                                    <option value="The Moose and Firkin">The Moose and Firkin</option>
                                    <option value="The Owl and Firkin">The Owl: A Firkin Pub</option>
                                    <option value="The Pheasant and Firkin">The Pheasant: A Firkin Pub</option>
                                    <option value="The Quail and Firkin">The Quail: A Firkin Pub</option>
                                    <option value="The Squire and Firkin">The Squire: A Firkin Pub</option>
                                    <option value="The Swan and Firkin">The Swan: A Firkin Pub</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="form-row">
                            <label for="Comments">Questions / Comments?</label>
                            <textarea data-name="Comments" name="Comments" tabindex="7"></textarea>
                        </div>

                        <!-- Form Submission Button -->
                        <div onclick="submitReservation();" class="submit-btn">Submit</div>
                        <div class="clear"></div>
                    </form>
                </div>
            </div>
            <?php require_once('components/footer.html'); ?>
    	</div>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#contactBtn').addClass('selected');
        $('#resContactBtn').addClass('selected');
    </script>
    <script>
        // Form Functionality
        var successMsg = function(msg) {
            $('#customSuccessMsg').show();
        }
        var errorMsg = function(msg, $elems) {
            $('#errorModal').show();
            $('#errorModal .msg').text(msg);

            // Highlight the input fields with errors
            if ($elems) {
                $elems.addClass('highlighted');
            }
        }

        function submitReservation() {
            submitWebFormById('reservationForm',
                {
                    alwaysSubmitEmptyFields: true,
                    successHTML: 'customSuccessMsg',
                    onSuccess: successMsg,
                    onError: errorMsg
                }
            );
        }
        function loadDatepicker() {
            if (!$.datepicker) {
                setTimeout(loadDatepicker, 100)
            } else {
                $(".datepicker").datepicker();
            }
        }
        loadDatepicker();
    </script>
</html>
