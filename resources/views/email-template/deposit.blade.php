<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <p>Dear {{ Auth::user()->profile->firstname }},</p>
    <p>To complete the initiated deposit of {{ number_format($naira->_trf_amount, 2) }} Naira, use the below details to make
        your transfer. </p>
    <p style="margin-bottom: 20px">PAYMENT INSTRUCTIONS:</p>
    <p> Payment should be made to {{ settings()->bank_name }}: </p>
    <p>=============================================================</p>
    <p>
        AMOUNT TO PAY: {{ number_format($naira->trf_amount, 2) }} Naira ({{ number_format($naira->trf_amount, 2) }} + Deposit
        fee: {{ number_format($naira->deposit_fee, 2) }}) <br>
        TRANSFER MEMO/NARRATION: {{ settings()->memo }} <br>
        BANK NAME: {{ settings()->bank_name }} <br>
        ACCOUNT NAME: {{ settings()->acct_name }} <br>
        ACCOUNT NUMBER: {{ settings()->acct_num }} <br>
    </p>
    <p>=============================================================</p>
    <p>
       <strong>IMPORTANT!!!</strong>
    </p>
    <h4><strong>WARNING! WARNING!!</strong><i>DO NOT INCLUDE BITCOIN OR BTC ,NO THIRD PARTY AND COMPANY PAYMENT</i></h4>
    <p><i><strong>NOTE-</strong>PAYMENT MUST COME FROM YOUR PERSONAL NAME USED&nbsp;</i></p>
    <p>==================================================</p>
    <p><i><strong>NOTE</strong>-<strong>HOW CBN TRACK BITCOIN TRANSACTION &nbsp;track bitcoin transaction</strong> when
            you include bitcoin or btc or dollar or perfect money or USDT or any form of crypto-currency in &nbsp;ur
            online bank pay remark or memo or when you are paying cash or any means of
            &nbsp;payment.</i><br>===================================================</p>
    <p><i><strong>&nbsp;What do i need put in my memo/remark when transferring money to us ? You can put the Trans ID OR
                UR user I.D on nairadirect or your name, generated for you after making the order for Naira deposit.An
                invoice will be generated for every order you make and you can make use of that when you are
                transferring</strong> money into our
            bank&nbsp;</i><br>====================================================</p>
    <p><i><strong>NOTE</strong>- What if include bitcoin in my payment remark? we would NOT return your money because,
            we believe CBN would have noticed such a payment that carries or comes with the bitcoin as a remark and CBN
            is responsible for withholding the such payment</i></p>

    <p>Your naira wallet will be credited within 1 - 24hrs after your payment has been received.</p>
    <p>Make the payment from your own bank account and use the transfer memo/narration provided, if not, we will not be able to locate your payment and it might not be processed.</p>
    <p>
        You can ignore the narration if you are paying with USSD.
    </p>
    <p>
        We will ONLY process payments from your personal bank account.
    </p>
    <p>
        If payment is not received within 3hrs, the transaction will be automatically cancelled.
    </p>
    {{-- <p>View the transaction a here.</p> --}}
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
