<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FatiguingBan! (test)</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/css/Article-List.css">
    <link rel="stylesheet" href="/css/Footer-Basic.css">
    <link rel="stylesheet" href="/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="/css/styles1.css">
</head>

<body style="background-color: #363232;">
<header>
        <nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: rgba(0,0,0,0.8);padding: 0px 16px;width: 100%;padding-top: 0px;padding-bottom: 0px;">
            <div class="container-fluid"><a class="navbar-brand" href="index" style="font-size: 6vw;font-weight: bold;font-style: italic;padding: 5px;padding-left: 0px;"><img src="Images/Final%20Web%20Logo.png" style="height: 10%;width: 20%;">&nbsp;FatigueB<i class="fa fa-ban" style="color: rgb(232,126,126);font-size: 4vw;"></i>n</a>
                <button
                    data-toggle="collapse" class="navbar-toggler text-danger" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse d-md-flex d-lg-flex justify-content-md-end justify-content-lg-end" id="navcol-1" style="font-size: 3vw;">
                        <ul class="nav navbar-nav d-md-flex d-lg-flex d-xl-flex justify-content-md-end justify-content-lg-end justify-content-xl-end">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="index">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="tips">Tips &amp; Tricks</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="login">Alert Me</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="prompt">Conversation starter</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
    </header>
    <div class="login-dark" style="background-image: url(&quot;Images/luke-stackpoole-ZRsJmpt9pNI-unsplash.jpg&quot;);background-position: center;background-size: cover;background-repeat: repeat;height: 900px;max-height: 900px;">
        <form method="post" style="background-color: rgba(30,40,51,0.81);" action="">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control d-sm-flex justify-content-sm-center" type="email" id="email" name="email" placeholder="User name"></div>
            <div class="btn-toolbar">
                <div class="btn-group" role="group"></div>
            </div>
            <h6>Choose the severity of the alert&nbsp;</h6>
            <div class="form-check"><input class="form-check-input" type="radio" name = "Severity" id="choice" value="high"><label class="form-check-label" for="High">High</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" name = "Severity" id="choice" value="medium"><label class="form-check-label" for="Medium">Medium</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" name = "Severity" id="choice" value="least"><label class="form-check-label" for="Least">Low</label></div>
            <div class="form-group"><button id="submit" class="btn btn-primary btn-block d-sm-flex justify-content-sm-center" type="button">Start Alerting</button></div>
        </form>
    </div>
    <div class="footer-basic" style="height: 100%;padding: 20px;">
        <footer class="text-center" style="padding-bottom: 0;padding-top: 0;">
            <p class="copyright"><img class="img-fluid" src="Images/AZCEnding-Quest%20Logo%20Clean.png" style="width: 10%;height: 10%;margin-bottom: -5px;">AZCEnding-Quest© 2020</p>
        </footer>
    </div>
    <div id="result"></div> 

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script>

        document.getElementById("submit").addEventListener("click", myFunction);

        function myFunction() {
             var choice = document.getElementsByName('Severity');
            var choice_value;
            for(var i = 0; i < choice.length; i++){
                if(choice[i].checked){
                    choice_value = choice[i].value;
                }
            }
            var name = document.getElementById("email").value;
            window.location.href = 'welcome?name='+name+'?&choice='+choice_value;
        }  
    </script>
    <script src="js/prompt.js"></script>

</body>

</html>