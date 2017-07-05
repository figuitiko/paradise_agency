<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 22/04/2017
 * Time: 12:53 PM
 */?>
<footer>

    <!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

        <!-- Identify your business so that you can collect the payments. -->
    <!--<input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="QWQDC3FRADMPQ">

    <!-- Specify a Donate button. -->
    <!--<input type="hidden" name="cmd" value="_donations">

    <!-- Specify details about the contribution -->
    <!--<input type="hidden" name="item_name" value="Friends of the Park">
    <input type="hidden" name="item_number" value="Fall Cleanup Campaign">
    <input type="hidden" name="currency_code" value="USD">

    <!-- Display the payment button. -->
    <!--<input id="paypal" type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_donate_cc_147x47.png" alt="Donate" border="0" name="submit" formtarget="blank" >
    <img alt="" width="1" height="1"
         src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>-->
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="QNQSASH9C8DWG">
        <input id="paypal"type="image" src="https://www.paypalobjects.com/en_US/NL/i/btn/btn_donateCC_LG.gif" border="0" name="submit" formtarget="blank" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Paradise on Fire 2017</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="https://www.facebook.com/abelardo.destrademora"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/in/abelardo-destrade-mora-18ab5b82"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UCFjjfKq_PUSUr3S_6-4vnSQ"><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Privacy Policy</a>
                    </li>
                    <li><a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>

