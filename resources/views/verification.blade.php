<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script>
        // Redirect to the home page after 2 seconds
        setTimeout(function(){
            window.location.href = "{{ url('/') }}";
        }, 2000);
    </script>
</head>
<body>
    <div class="container">
        <div class="alert-container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if (session('info'))
                <div class="alert alert-info">
                    {{ session('info') }}
                </div>
            @endif
        </div>
    </div>
</body>
</html>

