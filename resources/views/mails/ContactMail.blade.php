<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>New Contact Message - {{general()->title}}</title>
</head>
<body style="margin:0; padding:0; background:#eef2f7; font-family:Arial, Helvetica, sans-serif; color:#333;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#eef2f7; padding:30px 12px;">
    <tr>
        <td align="center">
            <table role="presentation" width="600" cellpadding="0" cellspacing="0" border="0" style="width:100%; max-width:600px; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 18px rgba(10,37,64,0.08);">

                <!-- Header -->
                <tr>
                    <td align="center" style="background:#0a2540; padding:28px 24px;">
                        <img src="{{URL::asset(general()->logo())}}" alt="{{general()->title}}" style="max-width:170px; height:auto; display:block; margin:0 auto 14px;" />
                        <div style="color:#ffffff; font-size:20px; font-weight:bold; letter-spacing:0.5px;">New Contact Message</div>
                        <div style="color:#07d9d0; font-size:13px; margin-top:6px;">Received from the website contact form</div>
                    </td>
                </tr>

                <!-- Accent bar -->
                <tr><td style="height:4px; background:#17a2b8; line-height:4px; font-size:0;">&nbsp;</td></tr>

                <!-- Intro -->
                <tr>
                    <td style="padding:26px 30px 6px;">
                        <p style="margin:0; font-size:15px; line-height:1.6;">
                            Hello,<br>
                            You have received a new message from <strong>{{$datas['name']}}</strong>. Details are below.
                        </p>
                    </td>
                </tr>

                <!-- Details -->
                <tr>
                    <td style="padding:16px 30px;">
                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #e3e8ef; border-radius:8px; border-collapse:separate; overflow:hidden;">
                            <tr>
                                <td style="width:120px; background:#f5f8fb; padding:12px 16px; font-size:13px; font-weight:bold; color:#104b7c; border-bottom:1px solid #e3e8ef;">Name</td>
                                <td style="padding:12px 16px; font-size:14px; border-bottom:1px solid #e3e8ef;">{{$datas['name']}}</td>
                            </tr>
                            <tr>
                                <td style="background:#f5f8fb; padding:12px 16px; font-size:13px; font-weight:bold; color:#104b7c; border-bottom:1px solid #e3e8ef;">Email</td>
                                <td style="padding:12px 16px; font-size:14px; border-bottom:1px solid #e3e8ef;"><a href="mailto:{{$datas['email']}}" style="color:#104b7c; text-decoration:none;">{{$datas['email']}}</a></td>
                            </tr>
                            <tr>
                                <td style="background:#f5f8fb; padding:12px 16px; font-size:13px; font-weight:bold; color:#104b7c; border-bottom:1px solid #e3e8ef;">Phone</td>
                                <td style="padding:12px 16px; font-size:14px; border-bottom:1px solid #e3e8ef;"><a href="tel:{{$datas['phone']}}" style="color:#104b7c; text-decoration:none;">{{$datas['phone']}}</a></td>
                            </tr>
                            <tr>
                                <td style="background:#f5f8fb; padding:12px 16px; font-size:13px; font-weight:bold; color:#104b7c;">Subject</td>
                                <td style="padding:12px 16px; font-size:14px;">{{$datas['subject']}}</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Message -->
                <tr>
                    <td style="padding:6px 30px 10px;">
                        <div style="font-size:13px; font-weight:bold; color:#104b7c; text-transform:uppercase; letter-spacing:1px; margin-bottom:8px;">Message</div>
                        <div style="background:#f5f8fb; border-left:4px solid #104b7c; border-radius:6px; padding:16px 18px; font-size:14px; line-height:1.7; color:#444;">
                            {!! $datas['message'] ? nl2br(e($datas['message'])) : '<em style="color:#999;">No message provided.</em>' !!}
                        </div>
                    </td>
                </tr>

                <!-- Reply button -->
                <tr>
                    <td align="center" style="padding:20px 30px 28px;">
                        <a href="mailto:{{$datas['email']}}?subject={{rawurlencode('Re: '.$datas['subject'])}}" style="display:inline-block; background:#104b7c; color:#ffffff; text-decoration:none; font-size:14px; font-weight:bold; padding:12px 30px; border-radius:6px;">Reply to {{$datas['name']}}</a>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background:#f5f8fb; padding:16px 30px; border-top:1px solid #e3e8ef; font-size:12px; color:#888; line-height:1.6;" align="center">
                        Submitted on {{$datas['time']}} &middot; IP: {{$datas['ip']}}<br>
                        &copy; {{date('Y')}} {{general()->title}}. This email was sent automatically from your website.
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>
</body>
</html>
