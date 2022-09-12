<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailerController extends Controller {
    public function composeEmail( $email, $subject, $body ) {
        require base_path( 'vendor/autoload.php' );
        $mail = new PHPMailer( true );
        // Passing `true` enables exceptions
        try {
            // Email server settings
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            // encryption - ssl/tls
            $mail->Port = 465;
            // port - 587/465

            // $mail->Host = 'mail.motorafrica.co';
            //  smtp host
            // $mail->SMTPAuth = true;
            // $mail->Username = 'noreply@motorafrica.co';
            //  sender username
            // $mail->Password = '@noreply100%';

            $mail->Host = 'teamenvio.com';
            //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'alpha@teamenvio.com';
            $mail->Password = '@teamalpha100%';

            $mail->Mailer = 'smtp';
            // sender password
            // sender password
            $mail->setFrom( 'alpha@teamenvio.com', 'Motor Africa' );
            $mail->addAddress( $email );
            // $mail->addCC( $request->emailCc );
            // $mail->addBCC( $request->emailBcc );
            $mail->addReplyTo( 'alpha@teamenvio.com', 'No reply' );

            $mail->isHTML( true );
            // Set email content format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            // $mail->AltBody = plain text version of email body;
            // dd( $mail->send() );
            if ( !$mail->send() ) {
                return false;
            } else {
                return true;
            }
        } catch ( Exception $e ) {
            dd( $mail->ErrorInfo );
            return false;
            //  return back()->with( 'error', 'Message could not be sent.' );
        }
    }

    public function header( $title ) {
        return '
        <!DOCTYPE html>

            <html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">

            <head>
                <title></title>
                <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
                <meta content="width=device-width, initial-scale=1.0" name="viewport" />
                <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
                <!--[if !mso]><!-->
                <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css" />
                <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet" type="text/css" />
                <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
                <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css" />
                <!--<![endif]-->
                <style>
                    * {
                        box-sizing: border-box;
                    }

                    body {
                        margin: 0;
                        padding: 0;
                    }

                    a[x-apple-data-detectors] {
                        color: inherit !important;
                        text-decoration: inherit !important;
                    }

                    #MessageViewBody a {
                        color: inherit;
                        text-decoration: none;
                    }

                    p {
                        line-height: inherit
                    }

                    .desktop_hide,
                    .desktop_hide table {
                        mso-hide: all;
                        display: none;
                        max-height: 0px;
                        overflow: hidden;
                    }

                    @media (max-width:670px) {
                        .desktop_hide table.icons-inner {
                            display: inline-block !important;
                        }

                        .icons-inner {
                            text-align: center;
                        }

                        .icons-inner td {
                            margin: 0 auto;
                        }

                        .row-content {
                            width: 100% !important;
                        }

                        .mobile_hide {
                            display: none;
                        }

                        .stack .column {
                            width: 100%;
                            display: block;
                        }

                        .mobile_hide {
                            min-height: 0;
                            max-height: 0;
                            max-width: 0;
                            overflow: hidden;
                            font-size: 0px;
                        }

                        .desktop_hide,
                        .desktop_hide table {
                            display: table !important;
                            max-height: none !important;
                        }
                    }
                </style>
            </head>
            <br>

            <body style="margin: 0; background-color: #fff; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
                <table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation"
                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff;" width="100%">
                    <tbody>
                        <tr>
                            <td>

                            <br>
                            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2"
                                role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                class="row-content stack" role="presentation"
                                                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; width: 650px;"
                                                width="650">
                                                <tbody>
                                                    <tr>
                                                        <td class="column column-1"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                            width="100%">
                                                            <table border="0" cellpadding="0" cellspacing="0"
                                                                class="heading_block block-1" role="presentation"
                                                                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                                width="100%">
                                                                <tr>
                                                                    <td class="pad" style="width:100%;text-align:center;">
                                                                        <h1
                                                                            style="margin: 0; color: #555555; font-size: 23px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: 700; letter-spacing: normal; margin-top: 0; margin-bottom: 0;">
                                                                            <span class="tinyMce-placeholder">
                                                                            '.$title.'
                                                                            </span></h1>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation"
                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            class="row-content stack" role="presentation"
                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; background-image: url("https://checkout.envio.africa/assets/email/top-bg.png"); background-repeat: no-repeat; color: #000000; width: 650px;"
                                            width="650">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 25px; padding-bottom: 25px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                        width="100%">
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="text_block block-1" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="padding-bottom:10px;padding-left:35px;padding-right:35px;padding-top:10px;">
                                                                    <div
                                                                        style="font-family: Georgia, "Times New Roman", serif">
                            ';
    }

    public function footer() {
        return '
        </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4"
                    role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                    <tbody>
                        <tr>
                            <td>
                                <table align="center" border="0" cellpadding="0" cellspacing="0"
                                    class="row-content stack" role="presentation"
                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; width: 650px;"
                                    width="650">
                                    <tbody>
                                        <tr>
                                            <td class="column column-1"
                                                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                width="100%">
                                                <table border="0" cellpadding="0" cellspacing="0"
                                                    class="image_block block-1" role="presentation"
                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                    width="100%">
                                                    <tr>
                                                        <td class="pad"
                                                            style="padding-bottom:5px;padding-left:10px;padding-right:10px;width:100%;">
                                                            <div align="center" class="alignment"
                                                                style="line-height:10px"><a
                                                                    href="http://www.motorafrica.co"
                                                                    style="outline:none" tabindex="-1"
                                                                    target="_blank"><img alt="LegalStudio"
                                                                        src="https://checkout.envio.africa/assets/email/motor-black.png"
                                                                        style="display: block; height: auto; border: 0; width: 130px; max-width: 100%;"
                                                                        title="LegalStudio" width="130" /></a></div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <table border="0" cellpadding="10" cellspacing="0"
                                                    class="paragraph_block block-2" role="presentation"
                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                    width="100%">
                                                    <tr>
                                                        <td class="pad">
                                                            <div
                                                                style="color:#000000;font-size:14px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-weight:400;line-height:120%;text-align:center;direction:ltr;letter-spacing:0px;mso-line-height-alt:16.8px;">
                                                                <p style="margin: 0; margin-bottom: 16px;">
                                                                    <em>Copyright © Motor Africa 2022. All rights
                                                                        reserved.</em></p>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5"
                    role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                    <tbody>
                        <tr>
                            <td>
                                <table align="center" border="0" cellpadding="0" cellspacing="0"
                                    class="row-content stack" role="presentation"
                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; background-color: #feb100; width: 650px;"
                                    width="650">
                                    <tbody>
                                        <tr>
                                            <td class="column column-1"
                                                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                width="66.66666666666667%">
                                                <table border="0" cellpadding="0" cellspacing="0"
                                                    class="text_block block-2" role="presentation"
                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                    width="100%">
                                                    <tr>
                                                        <td class="pad"
                                                            style="padding-left:15px;padding-top:5px;padding-bottom:5px;">
                                                            <div
                                                                style="font-family: Georgia, "Times New Roman", serif">
                                                                <div class="txtTinyMce-wrapper"
                                                                    style="font-size: 12px; font-family: "Droid Serif", Georgia, Times, "Times New Roman", serif; mso-line-height-alt: 18px; color: #393d47; line-height: 1.5;">
                                                                    <p
                                                                        style="margin: 0; font-size: 14px; text-align: center;">
                                                                        <a href="http://www.example.com"
                                                                            rel="noopener"
                                                                            style="text-decoration: none; color: #8a3b8f;"
                                                                            target="_blank"><span
                                                                                style="color:#333333;font-size:17px;"><span
                                                                                    style="color:#ffffff;"><span
                                                                                        style="font-size:12px;">Unsubscribe</span><span
                                                                                        style="font-size:12px;"> |
                                                                                    </span></span><span
                                                                                    style="color:#ffffff;font-size:12px;">Manage
                                                                                    Preferences</span></span></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td class="column column-2"
                                                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                width="33.333333333333336%">
                                                <table border="0" cellpadding="0" cellspacing="0"
                                                    class="social_block block-2" role="presentation"
                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                    width="100%">
                                                    <tr>
                                                        <td class="pad"
                                                            style="padding-left:10px;padding-right:10px;text-align:right;padding-top:5px;padding-bottom:5px;">
                                                            <div class="alignment" style="text-align:right;">
                                                                <table border="0" cellpadding="0" cellspacing="0"
                                                                    class="social-table" role="presentation"
                                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;"
                                                                    width="108px">
                                                                    <tr>
                                                                        <td style="padding:0 0 0 4px;"><a
                                                                                href="https://www.facebook.com/"
                                                                                target="_blank"><img alt="Facebook"
                                                                                    height="32"
                                                                                    src="https://checkout.envio.africa/assets/email/facebook2x.png"
                                                                                    style="display: block; height: auto; border: 0;"
                                                                                    title="facebook"
                                                                                    width="32" /></a></td>
                                                                        <td style="padding:0 0 0 4px;"><a
                                                                                href="https://www.linkedin.com/"
                                                                                target="_blank"><img alt="Linkedin"
                                                                                    height="32"
                                                                                    src="https://checkout.envio.africa/assets/email/linkedin2x.png"
                                                                                    style="display: block; height: auto; border: 0;"
                                                                                    title="linkedin"
                                                                                    width="32" /></a></td>
                                                                        <td style="padding:0 0 0 4px;"><a
                                                                                href="https://www.instagram.com/"
                                                                                target="_blank"><img alt="Instagram"
                                                                                    height="32"
                                                                                    src="https://checkout.envio.africa/assets/email/instagram2x.png"
                                                                                    style="display: block; height: auto; border: 0;"
                                                                                    title="instagram"
                                                                                    width="32" /></a></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6"
                    role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                    <tbody>
                        <tr>
                            <td>
                                <table align="center" border="0" cellpadding="0" cellspacing="0"
                                    class="row-content stack" role="presentation"
                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;"
                                    width="650">
                                    <tbody>
                                        <tr>
                                            <td class="column column-1"
                                                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                width="100%">
                                                <table border="0" cellpadding="0" cellspacing="0"
                                                    class="icons_block block-1" role="presentation"
                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                    width="100%">
                                                    <tr>
                                                        <td class="pad"
                                                            style="vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;">
                                                            <table cellpadding="0" cellspacing="0"
                                                                role="presentation"
                                                                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                                width="100%">
                                                                <tr>
                                                                    <td class="alignment"
                                                                        style="vertical-align: middle; text-align: center;">
                                                                        <!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
                                                                        <!--[if !vml]><!-->
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="icons-inner" role="presentation"
                                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;">
                                                                            <!--<![endif]-->

                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
            </tbody>
        </table><!-- End -->
        </body>

        </html>

                        ';
    }

    public function body() {
        $name = 'Prince';
        $title = 'New Installation Scheduled';
        $phone = '07030338024';
        $password = '12345';
        $email = 'prince.muteh@gmail.com';

        $body =    $this->header( $title ) . '
            <div class="txtTinyMce-wrapper" style="font-size: 12px; font-family: " Droid Serif", Georgia, Times, "Times New Roman" ,
            serif; mso-line-height-alt: 18px; color: #393d47; line-height: 1.5;">
            <p style="margin: 0; font-size: 20px; mso-line-height-alt: 30px;">
                <span style="font-size:20px;">Dear ' . $name . ',</span>
            </p>
            <p style="margin: 0; font-size: 20px; mso-line-height-alt: 18px;"></p>
            <p style="margin: 0; font-size: 20px; mso-line-height-alt: 30px;">
                <span style="font-size:20px;">

                    Do you know
                    how much you spent and made Last week?
                    Then, check out your Kippa weekly
                    Summary reports.

                </span>
            </p>
            <p style="margin: 0; font-size: 20px; mso-line-height-alt: 30px;">
                <span style="font-size:20px;">

                    Preview your
                    cash flow, the money that came in and
                    out of your business

                </span>
            </p>
            <p style="margin: 0; font-size: 20px; mso-line-height-alt: 18px;">
                </p>
            <p style="margin: 0; font-size: 20px; mso-line-height-alt: 30px;">
                <span style="font-size:20px;">Warm
                    Regards.</span>
            </p>
            </div>
             '. $this->footer();

        // return $body;
        return $this->composeEmail( $email, 'Checkout', $body );
    }

    public function addAdmin( $email, $name,  $id, $userId ) {
        $id = Crypt::encrypt( $userId );
        $body =
        $this->header( 'Zeus Web App' ) . '

        <div class="txtTinyMce-wrapper" style="font-size: 12px; font-family: " Droid Serif", Georgia, Times, "Times New Roman" ,
        serif; mso-line-height-alt: 18px; color: #393d47; line-height: 1.5;">
        <p style="margin: 0; font-size: 20px; mso-line-height-alt: 30px;">
            <span style="font-size:20px;">Dear ' . $name . ',</span>
        </p>
        <p style="margin: 0; font-size: 20px; mso-line-height-alt: 18px;">
            </p>
        <p style="margin: 0; font-size: 20px; mso-line-height-alt: 30px;">
            <span style="font-size:20px;">
            Via your dashboard, you can do the following:
            </span>
        </p>
        <p style="margin: 0; font-size: 20px; mso-line-height-alt: 20px;">
            <span style="font-size:18px;">
            <br>
                <ul>
                    <li style = "font-size: 18px;" >Create Your Fleet.</li>
                    <li style = "font-size: 18px;" >Manage and Monitor your Fleet.</li>
                </ul>
            </span>
        </p>
        <p style="margin: 0; font-size: 20px; mso-line-height-alt: 12px;">
          <a href="https://zeus.motorafrica.co/assign-password/' . $id . '"> Click Here To Create New Password and Transaction Pin</a>
        </p>
        <p style="margin: 0; font-size: 20px; mso-line-height-alt: 30px;">
            <span style="font-size:20px;">Warm
                Regards.</span>
        </p>
        </div>
'
        . $this->footer();
        return $this->composeEmail( $email, ' ', $body );
    }

    public function addSubAdmin( $name, $email, $org, $id ) {
        $id = Crypt::encrypt( $id );
        $body =
        $this->header( 'checkout dashboard' ) . '
        <div class="txtTinyMce-wrapper" style="font-size: 12px; font-family: " Droid Serif", Georgia, Times, "Times New Roman" ,
        serif; mso-line-height-alt: 18px; color: #393d47; line-height: 1.5;">
        <p style="margin: 0; font-size: 20px; mso-line-height-alt: 30px;">
            <span style="font-size:20px;">Dear ' . $name . ',</span>
        </p>
        <p style="margin: 0; font-size: 20px; mso-line-height-alt: 18px;">
            </p>
        <p style="margin: 0; font-size: 20px; mso-line-height-alt: 30px;">
            <span style="font-size:20px;">
            The Checkout Dashboard for <b> ' . $org . ' </b> is ready.
            Via your dashboard, you can do the following;
            </span>
        </p>
        <p style="margin: 0; font-size: 20px; mso-line-height-alt: 30px;">
            <span style="font-size:20px;">
            <br>
                <ul>
                    <li style = "font-size: 18px;" >Create a loan product.</li>
                    <li style = "font-size: 18px;" >Process loan applications.</li>
                    <li style = "font-size: 18px;" >Monitor loan repayments.</li>
                </ul>
            </span>
        </p>
        <p style="margin: 0; font-size: 20px; mso-line-height-alt: 18px;">
          <a href="https://checkout.envio.africa/assign-password/' . $id . '"> CLick Here To Create New Password and Transaction Pin</a>
        </p>
        <p style="margin: 0; font-size: 20px; mso-line-height-alt: 30px;">
            <span style="font-size:20px;">Warm
                Regards.</span>
        </p>
        </div>
            '
        . $this->footer();
        return $this->composeEmail( $email, "$org, your checkout dashboard is ready. ", $body );
    }

}
