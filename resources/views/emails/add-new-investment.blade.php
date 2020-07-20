
<img src="{{ asset('binary_traders_forum_logo.png') }}" width="100">

<h3>Dear {{ $name }},</h3>

<p>
    Your Investment has been Initiated.<br>
    Once payment is approved, your wallet would be funded in 24 hours.<br><br>
</p>

<p><strong>Below are your payment details:</strong></p>
<ul>
    <li><strong>Investment ID:</strong> {{ $investment_id }}</li>
    <li><strong>Amount:</strong> ${{ $amount }}</li>
    <li><strong>Investment Package:</strong> {{ $investment_package }}</li>
    <li><strong>Status:</strong> {{ $status ? 'Approved' : 'Unapproved' }}</li>
</ul>

<p align="center">Need more information?<br>
    Please contact <strong>info@binarytradersforum.com</strong>.</p>


