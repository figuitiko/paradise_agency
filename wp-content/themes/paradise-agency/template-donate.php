<?php
/*
Template Name: donate-page
*/
 get_header()?>

    <!-- Page Content -->
    <section>
        <div class="container">

            <div class="row">
                <div class="col-md-9">
                    <form  class="form-horizontal" action="https://www.paypal.com/cgi-bin/webscr" method="post">


                        <input  type="hidden" name="item_name" value="hat">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="cmd" value="_s-xclick">
                    <div class="form-group">
                        <label for="destino" class="col-lg-2 control-label">Amount</label>
                        <div class="col-lg-6">
                            <input type="money" class="form-control" name="amount" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="destino" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="first_name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="destino" class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="last_name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="destino" class="col-lg-2 control-label">Address 1</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="address1" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="destino" class="col-lg-2 control-label">Address 2</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="address2" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="destino" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="city" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="destino" class="col-lg-2 control-label">State</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="state" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="destino" class="col-lg-2 control-label">Zip Code</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="zip" value="">
                        </div>
                    </div>

                    <div class="form-group">
                            <label for="destino" class="col-lg-2 control-label">Movile</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="night_phone_a" value="">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="destino" class="col-lg-2 control-label">home phone</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="night_phone_b" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="destino" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="email" value="">
                        </div>
                    </div>
                        <INPUT TYPE="hidden" NAME="return" value="<?php echo site_url() ?>">

                        <input type="hidden" name="hosted_button_id" value="QNQSASH9C8DWG">
                    <div class="form-group">
                        <div class="col-lg-6">
                        <input  type="image" src="https://www.paypalobjects.com/en_US/NL/i/btn/btn_donateCC_LG.gif" border="0" name="submit"  alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </div>
                    </div>

                    </form>


                </div>

                <!-- Blog Post Content Column -->


                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-3 well">

                    <!-- Blog Search Well -->
                    <?php get_search_form()?>


                    <!-- Blog Categories Well -->


                    <!-- Side Widget Well -->


                </div>

            </div>
            <!-- /.row -->


        </div>
    </section>
<?php get_footer() ?>