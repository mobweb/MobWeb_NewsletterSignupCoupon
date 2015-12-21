# MobWeb_NewsletterSignupCoupon extension for Magento

Automatically sends a coupon code to a new newsletter subscriber.

## Installation

Install using [colinmollenhour/modman](https://github.com/colinmollenhour/modman/).

## Configuration

### Shopping Cart Price Rule

First, you have to create a shopping cart price rule that will be used to create a coupon code that will be sent to the new subscriber.

You may create this shopping cart price rule like any other shopping cart price rule. However, make sure to check the "*Use Auto Generation*" checkbox. Also, we recommend setting "*Uses per Coupon*" to "*1*", unless you want the customer to be able to use the same coupon code more than once.

The rest of the settings you can chose freely. When a subsciber signs up for the newsletter, the extension will create a new coupon code for this shopping cart price rule and send it to the subscriber.

### Transactional Email

Next, you have to create a new transactional email that will be used to sent that coupon code. You can use the *{{var coupon_code}}* variable to include the coupon code in the email.

Here is an example transactional email:

```
<body style="background:#F6F6F6; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; margin:0; padding:0;">
<div style="background:#F6F6F6; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; margin:0; padding:0;">
<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
    <td align="center" valign="top" style="padding:20px 0 20px 0">
        <table bgcolor="#FFFFFF" cellspacing="0" cellpadding="10" border="0" width="650" style="border:1px solid #E0E0E0;">
            <!-- [ header starts here] -->
            <tr>
                <td valign="top"><a href="{{store url=""}}"><img src="{{var logo_url}}" alt="{{var logo_alt}}" style="margin-bottom:10px;" border="0"/></a></td>
            </tr>
            <!-- [ middle starts here] -->
            <tr>
                <td valign="top">
                    <h1 style="font-size:22px; font-weight:normal; line-height:22px; margin:0 0 11px 0;"">Hello,</h1>
                    <p style="font-size:12px; line-height:16px; margin:0;">
                        Thank you for signing up for our newsletter. Here is your coupon code that you can use on your next purchase: {{var coupon_code}}
                    </p>
            </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center" style="background:#EAEAEA; text-align:center;"><center><p style="font-size:12px; margin:0;">Thank you, <strong>{{var store.getFrontendName()}}</strong></p></center></td>
            </tr>
        </table>
    </td>
</tr>
</table>
</div>
</body>
```

### Extension Settings

Finally, in your Admin Panel, go to *System -> Configuration -> Newsletter -> Signup Coupon* and select the shopping cart price rule and transactional email that you've just created.

## Questions? Need help?

Most of my repositories posted here are projects created for customization requests for clients, so they probably aren't very well documented and the code isn't always 100% flexible. If you have a question or are confused about how something is supposed to work, feel free to get in touch and I'll try and help: [info@mobweb.ch](mailto:info@mobweb.ch).