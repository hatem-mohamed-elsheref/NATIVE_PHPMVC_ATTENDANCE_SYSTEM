<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Hatem Mohamed Elsheref">

    <title>Confirmation</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/auth.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 centralize">
            <div class="account-wall">
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active" id="login">
                        <form class="form-signin" action="/authentication/confirm" method="post">
                            <input type="text" class="form-control" name="confirmed_code" placeholder="Enter Code Here" required autofocus>
                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Confirm" />
                        </form>

                        <div id="tabs" data-tabs="tabs">
                            <p class="text-center"><a href="login.php">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>