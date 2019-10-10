{{--<div style="margin:50px auto;text-align: center;">--}}
    {{--<a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_NAME') }}</a>--}}
    {{--<p>Hello, {{ $firstName }}</p>--}}
    {{--<p>--}}
       {{--Welcome to Unpeep.--}}
        {{--We're glad to have you be part of us. We would be sending emails about updates to unpeep--}}
        {{--as we currently are in our beta-phase (No spam promise).--}}
    {{--</p>--}}
    {{--<br>--}}
    {{--<p>P.S - Fingers Crossed :)</p>--}}
{{--</div>--}}

<div class="canvas" style="height: 640px; width: 760px;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#F9F9F9;" id="bodyTable">
        <tbody><tr>
            <td align="center" valign="top" style="padding-right:10px;padding-left:10px;" id="bodyCell">
                <!--[if (gte mso 9)|(IE)]><table align="center" border="0" cellspacing="0" cellpadding="0" style="width:600px;" width="600"><tr><td align="center" valign="top"><![endif]-->

                <!-- Email Wrapper Webview Open //-->
                <table border="0" cellpadding="0" cellspacing="0" style="max-width:600px;" width="100%" class="wrapperWebview">
                    <tbody><tr>
                        <td align="center" valign="top">
                            <!-- Content Table Open // -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                    <td align="right" valign="middle" style="padding-top: 20px; padding-right: 0px;" class="webview">
                                        <!-- Email View in Browser // -->
                                        <a class="text hideOnMobile" href="{{ env('APP_URL') }}" target="_blank" style="color:#777777; font-family:'Open Sans', Helvetica, Arial, sans-serif; font-size:12px; font-weight:400; font-style:normal; letter-spacing:normal; line-height:20px; text-transform:none; text-align:right; text-decoration:underline; padding:0; margin:0">
                                            Oh wait, checkout unpeep! →
                                        </a>
                                    </td>
                                </tr>
                                </tbody></table>
                            <!-- Content Table Close // -->
                        </td>
                    </tr>
                    </tbody></table>
                <!-- Email Wrapper Webview Close //-->

                <!-- Email Wrapper Header Open //-->
                <table border="0" cellpadding="0" cellspacing="0" style="max-width:600px;" width="100%" class="wrapperWebview">
                    <tbody><tr>
                        <td align="center" valign="top">
                            <!-- Content Table Open // -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                    <td align="center" valign="middle" style="padding-top: 40px; padding-bottom: 40px;" class="emailLogo">
                                        <!-- Logo and Link // -->
                                        <a href="#" target="_blank" style="text-decoration:none;">
                                            <img src="{{ env('APP_URL') . '/assets/images/logo.png' }}" alt="" width="150" border="0" style="width:100%; max-width:150px;height:auto; display:block;">
                                        </a>
                                    </td>
                                </tr>
                                </tbody></table>
                            <!-- Content Table Close // -->
                        </td>
                    </tr>
                    </tbody></table>
                <!-- Email Wrapper Header Close //-->

                <!-- Email Wrapper Body Open // -->
                <table border="0" cellpadding="0" cellspacing="0" style="max-width:600px;" width="100%" class="wrapperBody">
                    <tbody><tr>
                        <td align="center" valign="top">

                            <!-- Table Card Open // -->
                            <table border="0" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF;border-color:#E5E5E5; border-style:solid; border-width:0 1px 1px 1px;" width="100%" class="tableCard">

                                <tbody><tr>
                                    <!-- Header Top Border // -->
                                    <td height="3" style="background-color:#003CE5;font-size:1px;line-height:3px;" class="topBorder">&nbsp;</td>
                                </tr>


                                <tr>
                                    <td align="center" valign="top" style="padding-bottom: 20px;" class="imgHero">
                                        <!-- Hero Image // -->
                                        <a href="#" target="_blank" style="text-decoration:none;">
                                            <img src="{{ env('APP_URL') . '/assets/images/user-subscribe.png' }}" width="600" alt="" border="0" style="width:100%; max-width:600px; height:auto; display:block;">
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center" valign="top" style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;" class="mainTitle">
                                        <!-- Main Title Text // -->
                                        <h2 class="text" style="color:#000000; font-family:'Poppins', Helvetica, Arial, sans-serif; font-size:28px; font-weight:500; font-style:normal; letter-spacing:normal; line-height:36px; text-transform:none; text-align:center; padding:0; margin:0">
                                            Hello {{ $firstName }}
                                        </h2>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center" valign="top" style="padding-bottom: 30px; padding-left: 20px; padding-right: 20px;" class="subTitle">
                                        <!-- Sub Title Text // -->
                                        <h4 class="text" style="color:#999999; font-family:'Poppins', Helvetica, Arial, sans-serif; font-size:16px; font-weight:500; font-style:normal; letter-spacing:normal; line-height:24px; text-transform:none; text-align:center; padding:0; margin:0">
                                            Welcome to Unpeep! 📷
                                        </h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center" valign="top" style="padding-left:20px;padding-right:20px;" class="containtTable ui-sortable">

                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription">
                                            <tbody><tr>
                                                <td align="center" valign="top" style="padding-bottom:20px;" class="description">
                                                    <!-- Description Text// -->
                                                    <p class="text" style="color:#666666; font-family:'Open Sans', Helvetica, Arial, sans-serif; font-size:14px; font-weight:400; font-style:normal; letter-spacing:normal; line-height:22px; text-transform:none; text-align:center; padding:0; margin:0">
                                                        We're glad to have you be part of us. We would be sending emails about updates to unpeep
                                                        as we currently are in our beta-phase (No spam promise).
                                                    </p>
                                                </td>
                                            </tr>
                                            </tbody></table>

                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableButton" style="">
                                            <tbody><tr>
                                                <td align="center" valign="top" style="padding-top:20px;padding-bottom:20px;">

                                                    <!-- Button Table // -->
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                                                        <tbody><tr>
                                                            <td align="center" class="ctaButton" style="background-color: rgb(0, 60, 229); padding: 12px 35px; border-radius: 50px;">
                                                                <!-- Button Link // -->
                                                                <a class="text" href="https://unpeep.com/" target="_blank" style="color:#FFFFFF; font-family:'Poppins', Helvetica, Arial, sans-serif; font-size:13px; font-weight:600; font-style:normal;letter-spacing:1px; line-height:20px; text-transform:uppercase; text-decoration:none; display:block">
                                                                    Explore
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>

                                                </td>
                                            </tr>
                                            </tbody></table>

                                    </td>
                                </tr>

                                <tr>
                                    <td height="20" style="font-size:1px;line-height:1px;">&nbsp;</td>
                                </tr>

                                <tr><td align="left" valign="middle" style="padding-bottom:40px" class="emailRegards">
                                        <!-- Image and Link // -->
                                        <a href="#" target="_blank" style="text-decoration:none;">
                                            <img mc:edit="signature" src="{{ env('APP_URL') . '/assets/images/footer.png' }}" alt="" width="150" border="0" style="width:100%;
max-width:150px; height:auto; display:block;">
                                        </a>
                                    </td>
                                </tr>
                                </tbody></table>
                            <!-- Table Card Close// -->

                            <!-- Space -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="space">
                                <tbody><tr>
                                    <td height="30" style="font-size:1px;line-height:1px;">&nbsp;</td>
                                </tr>
                                </tbody></table>

                        </td>
                    </tr>
                    </tbody></table>
                <!-- Email Wrapper Body Close // -->

                <!-- Email Wrapper Footer Open // -->
                <table border="0" cellpadding="0" cellspacing="0" style="max-width:600px;" width="100%" class="wrapperFooter">
                    <tbody><tr>
                        <td align="center" valign="top">
                            <!-- Content Table Open// -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="footer">
                                <tbody><tr>
                                    <td align="center" valign="top" style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;" class="socialLinks">
                                        <!-- Social Links (Facebook)// -->
                                        <a href="#facebook-link" target="_blank" style="display:inline-block;" class="facebook">
                                            <img src="{{ env('APP_URL') . '/assets/images/facebook.png' }}" alt="" width="40" border="0" style="height:auto; width:100%; max-width:40px; margin-left:2px; margin-right:2px">
                                        </a>
                                        <!-- Social Links (Twitter)// -->
                                        <a href="#twitter-link" target="_blank" style="display:inline-block;" class="twitter">
                                            <img src="{{ env('APP_URL') . '/assets/images/twitter.png' }}" alt="" width="40" border="0" style="height:auto; width:100%; max-width:40px; margin-left:2px; margin-right:2px">
                                        </a>
                                        <!-- Social Links (Pintrest)// -->
                                        <a href="https://www.youtube.com/channel/UCBcuf-npjsV64w9_YKA2qlg?view_as=subscriber" target="_blank" style="display:inline-block;" class="pintrest">
                                            <img src="{{ env('APP_URL') . '/assets/images/youtube.png' }}" alt="" width="40" border="0" style="height:auto; width:100%; max-width:40px; margin-left:2px; margin-right:2px">
                                        </a>
                                        <!-- Social Links (Instagram)// -->
                                        <a href="https://www.instagram.com/theunpeep/" target="_blank" style="display:inline-block;" class="instagram">
                                            <img src="{{ env('APP_URL') . '/assets/images/instagram.png' }}" alt="" width="40" border="0" style="height:auto; width:100%; max-width:40px; margin-left:2px; margin-right:2px">
                                        </a>
                                        <!-- Social Links (Linkdin)// -->
                                        <a href="#linkdin-link" target="_blank" style="display:inline-block;" class="linkdin">
                                            <img src="{{env('APP_URL') . '/assets/images/linkdin.png' }}" alt="" width="40" border="0" style="height:auto; width:100%; max-width:40px; margin-left:2px; margin-right:2px">
                                        </a>
                                    </td>
                                </tr>


                                <!-- Space -->
                                <tr>
                                    <td height="30" style="font-size:1px;line-height:1px;">&nbsp;</td>
                                </tr>
                                </tbody></table>
                            <!-- Content Table Close// -->
                        </td>
                    </tr>

                    <!-- Space -->
                    <tr>
                        <td height="30" style="font-size:1px;line-height:1px;">&nbsp;</td>
                    </tr>
                    </tbody></table>
                <!-- Email Wrapper Footer Close // -->

                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
            </td>
        </tr>
        </tbody></table>
</div>