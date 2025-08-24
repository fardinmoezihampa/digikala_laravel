<div>
    @if(session('paymentSuccess'))
        <div class="callback-success">
            {{session('paymentSuccess')}}
        </div>
    @endif

    @if(session('paymentError'))
        <div class="callback-error">
            {{session('paymentError')}}
        </div>
    @endif
</div>
