
<img src="{{ asset('binary_traders_forum_logo.png') }}" width="100">

<h3>Hello {{ $name }}</h3>

<p>
    @if($is_approved)
        Your Withdrawal of ${{ $amount }} has been Approved.<br>
        You will receive payment in 24 hours
    @else
        Your Withdrawal of ${{ $amount }} has been Cancelled.
    @endif
</p>

<p align="center">Need more information?<br>
    Please contact <strong>info@binarytradersforum.com</strong>.</p>
