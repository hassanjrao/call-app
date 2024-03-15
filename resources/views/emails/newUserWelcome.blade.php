<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Welcome to HivoCall</title>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Nunito);
        img {
            max-width: 600px;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }
        html{
            margin: 0;
            padding:0;
        }
        a {
            text-decoration: none;
            border: 0;
            outline: none;
            color: #bbbbbb;
        }
        a img {
            border: none;
        }
        td, h1, h2, h3  {
            font-family: Helvetica, Arial, sans-serif;
            font-weight: 400;
        }
        td {
            text-align: center;
        }
        body {
            -webkit-font-smoothing:antialiased;
            -webkit-text-size-adjust:none;
            width: 100%;
            height: 100%;
            color: #666;
            background: #fff;
            font-size: 16px;
            height: 100vh;
            width: 100%;
            padding: 0px;
            margin: 0px;
        }
        table {
            border-collapse: collapse !important;
        }
        .headline {
            color: #444;
            font-size: 36px;
        }
        .force-full-width {
            width: 100% !important;
        }
    </style>
</head>
<body bgcolor="#fff" style="padding:20px; margin:0; display:block; background:#ffffff;">
<table align="center" cellpadding="0" cellspacing="0" height="100%" width="100%">
    <tbody>
    <tr>
        <td align="center" bgcolor="#fff" valign="top" width="100%">
            <center>
                <table cellpadding="0" cellspacing="0" class="w320" style="margin: 0 auto;" width="600">
                    <tbody>
                    <tr>
                        <td align="center" valign="top">
                            <table bgcolor="#fff" cellpadding="0" cellspacing="0" style="margin: 0 auto; width: 100%; margin-top: 100px;">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="logo" height="155" src="{{ asset('img/SVG/logoDark.svg') }}" width="155">
                                    </td>
                                </tr>
                                <tr><td class="headline">Welcome to HivoCall!</td></tr>
                                <tr>
                                    <td>
                                        <center>
                                            <table cellpadding="0" cellspacing="0" style="margin: 0 auto;" width="75%">
                                                <tbody>
                                                <tr>
                                                    <td style="color:#444; font-weight: 400;"><br><br>
                                                        Congratulations on joining HivoCall, the most reliable VoIP service for businesses and professionals. <br><br>
                                                        Here are your login credentials:
                                                        <br>
                                                        <span style="font-weight:bold;">Email:</span><span> {{ $email }}</span>
                                                        <br>
                                                        <span style="font-weight:bold;">Password:</span><span> {{ $password }}</span>
                                                        <br><br>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <a style="background-color:#FF1849;border-radius:4px;color:#fff;display:inline-block;font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:normal;line-height:50px;text-align:center;text-decoration:none;width:350px;" href="https://www.hivocall.com/dashboard">Access Your Dashboard</a>
                                        </div>
                                        <br>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table bgcolor="#fff" cellpadding="0" cellspacing="0" class="force-full-width">
                                <tbody>
                                <tr>
                                    <td style="color:#444;">
                                        <p>The password was auto-generated, feel free to change it
                                            <a href="https://www.hivocall.com/login" style="text-decoration: underline;">here</a>.
                                        </p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
