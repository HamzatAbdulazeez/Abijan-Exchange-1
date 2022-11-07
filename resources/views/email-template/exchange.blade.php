<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <p>Dear {{Auth::user()->profile->firstname}},</p>
    <p>We have received the {{number_format(($invoice->amount_sent/getCurrentBtcDollar()), 6)}} BTC exchange request placed on abijanexchange.com.</p>
    <p><strong>INVOICE NO:-</strong> {{$invoice->invoice_id}}. (You must provide this invoice no if you need to contact us about this
        transaction)</p>
    <p>Your order summary is below:</p>
    @if ($invoice->currency == "bitcoin Cash")
    <p>You are Selling ${{number_format($invoice->amount_sent, 2)}} worth of Bitcoin Cash for {{number_format(($invoice->amount_sent*rates()[4]['sell_rate']), 2)}} Naira</p>
    <p>Your Naira wallet will be credited once your bitcoin cash has been received and confirmed.</p>
    <p>Abijan Exchange's Bitcoin Cash wallet address you should send fund to:</p>
    <p>WALLET ADDRESS: {{settings()->bch_wallet}}</p>
    @endif
    @if ($invoice->currency == "Ethereum")
    <p>You are Selling ${{number_format($invoice->amount_sent, 2)}} worth of Ethereum for {{number_format(($invoice->amount_sent*rates()[2]['sell_rate']), 2)}} Naira</p>
    <p>Your Naira wallet will be credited once your ethereum has been received and confirmed.</p>
    <p>Abijan Exchange's Ethereum wallet address you should send fund to:</p>
    <p>WALLET ADDRESS: {{settings()->eth_wallet}}</p>
    @endif
    @if ($invoice->currency == "Bitcoin")
    <p>You are Selling ${{number_format($invoice->amount_sent, 2)}} worth of Bitcoin for {{number_format(($invoice->amount_sent*rates()[0]['sell_rate']), 2)}} Naira</p>
    <p>Your Naira wallet will be credited once your bitcoin has been received and confirmed.</p>
    <p>Abijan Exchange's Bitcoin wallet address you should send fund to:</p>
    <p>WALLET ADDRESS: {{settings()->btc_wallet}}</p>
    @endif
    @if ($invoice->currency == "USDT TRC20")
    <p>You are Selling ${{number_format($invoice->amount_sent, 2)}} worth of USDT TRC20 for {{number_format(($invoice->amount_sent*rates()[3]['sell_rate']), 2)}} Naira</p>
    <p>Your Naira wallet will be credited once your USDT TRC20 has been received and confirmed.</p>
    <p>Abijan Exchange's USDT TRC20 wallet address you should send fund to:</p>
    <p>WALLET ADDRESS: {{settings()->usdt_wallet}}</p>
    @endif
    <p>Please keep this information in a safe place, it will be required when you want to make the transfer. </p>
    <p>=============================================================</p>
    <p>
        USD AMT: {{number_format($invoice->amount_sent, 2)}} <br>
        BTC VALUE: {{number_format(($invoice->amount_sent/getCurrentBtcDollar()), 6)}} <br>
        FUNDING METHOD: External transfer to Company's wallet <br>
        PAYMENT METHOD: Naira Wallet (Internal)
    </p>
    <p>=============================================================</p>
    <p>
        IMPORTANT!!!
    </p>
    <p> After funding our wallet, Make sure you sign into your dashboard on abijanexchange.com and click the 'Send Notice'
        beside your order detail, if not, we will not get your exchange request and it might not be processed.</p>
    <p>
        For more info/help, contact us on Message Center located in your Abijan Exchange dashboard.
    </p>
    <p>
        Regards,
    </p>
    <p>
        Abijan Exchange <br>
        Website: <a href="https://www.abijanexchange.com">www.abijanexchange.com</a>
    </p>
    <p>
        ___________________________
    </p>
    <p> THIS IS AN AUTOMATED NOTIFICATION.</p>
</body>

</html>
