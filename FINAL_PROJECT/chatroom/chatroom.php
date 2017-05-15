<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>AJAX Chat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <style>
            .bubble-recv {
                position: relative;
                width: 330px;
                height: 75px;
                padding: 10px;
                background: #AEE5FF;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                border: #000000 solid 1px;
                margin-bottom: 10px;
            }

            .bubble-recv:after {
                content: '';
                position: absolute;
                border-style: solid;
                border-width: 15px 15px 15px 0;
                border-color: transparent #AEE5FF;
                display: block;
                width: 0;
                z-index: 1;
                left: -15px;
                top: 12px;
            }

            .bubble-recv:before {
                content: '';
                position: absolute;
                border-style: solid;
                border-width: 15px 15px 15px 0;
                border-color: transparent #000000;
                display: block;
                width: 0;
                z-index: 0;
                left: -16px;
                top: 12px;
            }

            .bubble-sent {
                position: relative;
                width: 330px;
                height: 75px;
                padding: 10px;
                background: #00E500;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                border: #000000 solid 1px;
                margin-bottom: 10px;
            }

            .bubble-sent:after {
                content: '';
                position: absolute;
                border-style: solid;
                border-width: 15px 0 15px 15px;
                border-color: transparent #00E500;
                display: block;
                width: 0;
                z-index: 1;
                right: -15px;
                top: 12px;
            }

            .bubble-sent:before {
                content: '';
                position: absolute;
                border-style: solid;
                border-width: 15px 0 15px 15px;
                border-color: transparent #000000;
                display: block;
                width: 0;
                z-index: 0;
                right: -16px;
                top: 12px;
            }

            .spinner {
                display: inline-block;
                opacity: 0;
                width: 0;
                -webkit-transition: opacity 0.25s, width 0.25s;
                -moz-transition: opacity 0.25s, width 0.25s;
                -o-transition: opacity 0.25s, width 0.25s;
                transition: opacity 0.25s, width 0.25s;
            }

            .has-spinner.active {
                cursor: progress;
            }

            .has-spinner.active .spinner {
                opacity: 1;
                width: auto;
            }

            .has-spinner.btn-mini.active .spinner {
                width: 10px;
            }

            .has-spinner.btn-small.active .spinner {
                width: 13px;
            }

            .has-spinner.btn.active .spinner {
                width: 16px;
            }

            .has-spinner.btn-large.active .spinner {
                width: 19px;
            }

            .panel-body {
                overflow-y: auto;
                padding-right: 35px;
                padding-left: 35px;
            }

        </style>
</head>

<body>
    <h1 style="text-align:center"><?php echo 'No.'.$_SESSION['RoomNo'].' '.$_SESSION['Content'].' '?>Chat Room</h1>
    <div class="">
        <a href="./chatlist_front.php"><-- Back to Chat Room List</a>
    </div>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Let's Chat</h2> </div>
            <div class="panel-body" id="chatPanel">

            </div>
            <div class="panel-footer">
                <span>User:</span>
                <span id="username"><? echo isset($_SESSION['uname'])?$_SESSION['uname']:'Anonymous'?></span>
                <div class="input-group">
                    <input type="text" class="form-control" id="chatMessage" placeholder="Send a message here..." />
                    <span class="input-group-btn">
                        <button id="sendMessageBtn" class="btn btn-primary has-spinner" type="button">

                            <span class="spinner"><i class="icon-spin icon-refresh"></i></span>

                            Send
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-2.2.3.min.js"></script>
    <script src="client.js"></script>
</body>

</html>
<?php
 //}else{ }
?>
