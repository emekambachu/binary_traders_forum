
<img src="{{ asset('binary_traders_forum_logo.png') }}" width="100">

<h3>Dear {{ $name }},</h3>

<p>
    You made a withdrawal request of ${{ $amount }}<br>
    You are to pay a 10% withdrawal tax fee of your withdrawal amount to complete this transaction
</p>

<p><strong>Below are your withdrawal details:</strong></p>
<ul>
    <li><strong>Amount:</strong> ${{ $amount }}</li>
    <li><strong>Withdrawal/Tax Fee:</strong> {{ $withdrawal_fee }}</li>
    <li><strong>Status:</strong> {{ $is_approved ? 'Approved' : 'Unapproved' }}</li>
</ul>

<p align="center">Need more information?<br>
    Please contact <strong>info@binarytradersforum.com</strong>.</p>


