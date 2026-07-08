<!DOCTYPE html>
<html>
<head>
    <title>{{ $metatitle ?? 'Processing Payment' }}</title>
    <script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script>
</head>
<body style="font-family:Arial;display:flex;align-items:center;justify-content:center;height:100vh;">
    <div>
        <h2>Redirecting to payment...</h2>
        <p>Please wait.</p>
    </div>

    <script>
        const cashfree = Cashfree({
            mode: "{{ $cashfreeMode }}"
        });

        cashfree.checkout({
            paymentSessionId: "{{ $paymentSessionId }}",
            redirectTarget: "_self"
        });
    </script>
</body>
</html>