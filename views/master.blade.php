<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Welcome to Animal Search UK</title>
    <style type="text/css">
        #outlook a {padding:0;}
        html{width: 100%;}
        body{
			width: 100% !important;
			-webkit-text-size-adjust:100%;
			-ms-text-size-adjust:100%;
			margin:0;
			padding:0;
			font-family: 'Proxima Nova','proxima_nova_rgregular',Helvetica,Arial,'sans-serif';
            color: #888888;
            font-size: 16px;
            line-height: 25px;
		}
        .ExternalClass {width:100%;}
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
        #backgroundTable {
            margin:0;
            padding:0;
            width:100% !important;
            line-height: 100% !important;
            background-color: #F5F5F5;
            min-width: 620px;
        }
        .tableSection {margin:0; padding:0; width:100% !important;}

        img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
        a img {border:none;}
        .image_fix {display:block;}

        h1, h2, h3, h4 {
            font-family: 'Proxima Nova','proxima_nova_rgregular',Helvetica,Arial,'sans-serif';
            color: #555555;
            font-weight: 300;
            line-height: 1;
            margin: 0;
            padding: 0;
        }
		
		h1 {
			font-size: 25px;
		}
		
		h2 {
			font-size: 22px;	
		}

        p {
            margin: 1em 0;
            font-family: 'Proxima Nova','proxima_nova_rgregular',Helvetica,Arial,'sans-serif';
            font-size: 16px;
            line-height: 25px;
            color: #888888;
        }

        .center {text-align: center;}

        table td {border-collapse: collapse;}
        table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

        a {
			color: blue;
			font-weight: 300;
			font-family: 'Proxima Nova','proxima_nova_rgregular',Helvetica,Arial,'sans-serif';
		}

        .header {background-color: #ffffff;}

        .header-bar {
/*            background-color: #333333;*/
            background-color: #ffffff;
            box-shadow:0 10px 7px -7px #AEAEAE;
        }

        .header-bar td {
            padding-top: 15px;
        }

        .header-outer {
            padding-bottom: 15px;
        }

        .footer {
            padding: 20px 0 20px 0;
            background-color: #333333;
        }

        .btn {
            border-radius:3px;
        }

        .btn a:link, .btn a:visited {
            font-size:16px;
            font-family:'proxima_nova_rgregular',Proxima Nova,Helvetica,Arial,sans-serif;
            color:#ffffff;
            text-decoration:none;
            border-radius:3px;
            padding: 12px 18px;
            border:1px solid #e5916e;
            display:block;
            font-weight: 300;
        }

        .table tr td, .table tr th {
            font-family: 'Proxima Nova','proxima_nova_rgregular',Helvetica,Arial,'sans-serif';
            font-size: 16px;
            line-height: 25px;
        }

        .table tr th {
            font-weight: bold;
        }

        .alert {
            border: 1px solid transparent;
            border-radius: 4px;
            padding: 15px;
            font-size: 16px;
            line-height: 25px;
        }

        .alert-warning {
            background-color: #fcf8e3;
            border-color: #faebcc;
            color: #8a6d3b;
        }

        a:link, a:visited {
            color: #337ab7;
            text-decoration: none;
        }

        a:hover, a:focus {
            color: #23527c;
            text-decoration: underline;
        }

        .text-left {
            text-align: left;
        }

        @yield('css')

    </style>

</head>
<body width="100%">
    <table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" width="100%">
        <tr>
            <td class="header-outer">
                <table cellpadding="0" cellspacing="0" border="0" align="center" class="tableSection" width="100%">
                    <tr class="header-bar">
                        <td valign="top" align="center">
                            {{--<a href="{{ Config::get('api.web_url') }}">--}}
                                <img class="image_fix" src="{{ $message->embed(Config::get('api.content_url').'logo/blue_email_top.png') }}">
                            {{--</a>--}}
                        </td>
                    </tr>
                    <tr height="16" class="height: 16px">
                        <td valign="top" align="center" style="line-height: 1px; font-size: 1px">
                            {{--<a href="{{ Config::get('api.web_url') }}">--}}
                                <img height="16" class="image_fix" src="{{ $message->embed(Config::get('api.content_url').'logo/blue_email_bottom.png') }}">
                            {{--</a>--}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center">
                @yield('content')
            </td>
        </tr>
        <tr>
            <td class="footer" align="center">
                <table cellspacing="0" cellpadding="0" border="0" width="600">
                    <tr>
                        <td style="padding: 0 15px 15px 0">
                            <img src="{{ $message->embed(Config::get('api.content_url').'logo/white_email_sm.png') }}" class="image_fix">
                        </td>
                        <td>
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tbody>
                                <tr>
                                    <td colspan="3" style="font-family: 'Proxima Nova','proxima_nova_rgregular',Helvetica,Arial,'sans-serif'; font-size: 14px; line-height: 25px;color: #BBBABA; padding: 0 0 10px 0">
                                        &copy; 1999 - {{ date("Y") }} Animal Search UK
                                        <br>
                                        Official provider of lost and found services to Cats Protection
                                    </td>
                                </tr>
                                <tr class="brands">
                                    <td align="left" width="33%">
                                        <a href="https://www.facebook.com/AnimalSearchUK">
                                            <img src="{{ $message->embed(Config::get('api.content_url').'email/facebook.png') }}" class="image_fix">
                                        </a>
                                    </td>
                                    <td align="center" width="33%">
                                        <a href="https://twitter.com/AnimalSearchUK">
                                            <img src="{{ $message->embed(Config::get('api.content_url').'email/twitter.png') }}" class="image_fix">
                                        </a>
                                    </td>
                                    <td align="right" width="33%">
                                        <a href="http://www.cats.org.uk/">
                                            <img src="{{ $message->embed(Config::get('api.content_url').'email/cp.jpg') }}" class="image_fix">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>