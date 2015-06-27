<html>
    <head>
        <meta charset="utf-8"/>
        <title>NEW COLLEGE MODULE</title>
        <link rel="icon" href="images/LOGOFINAL.png" type="image/png">
        <link type="text/css" rel="stylesheet" href="materialize-v0.97.0/materialize/css/materialize.min.css" media="screen, projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <style>
            body{
                font-family: "Roboto", sans-serif;
            }
            .modal.modal-fixed-footer{
                    width: 65%;
            }
        </style>
    </head>
    <body>
        <script type="text/javascript" src="ckeditor/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="jq/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="materialize-v0.97.0/materialize/js/materialize.min.js"></script>
        
        <button class="btn modal-trigger" data-target="adddean">ADD Dean</button>
        <a class="waves-effect waves-light btn modal-trigger" href="#adddean">ADD Dean &lt;a&gt;</a>
        
        <div id="adddean" class="modal modal-fixed-footer">
            <div class="modal-content">
                Set Acad cycle
                <div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s3"><a href="#test1">Test 1</a></li>
                            <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
                            <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
                            <li class="tab col s3"><a href="#test4">Test 4</a></li>
                        </ul>
                    </div>
                    <div id="test1" class="col s12">Test 1</div>
                    <div id="test2" class="col s12">Test 2</div>
                    <div id="test3" class="col s12">Test 3</div>
                    <div id="test4" class="col s12">Test 4</div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Add</a>
            </div>
            
        </div>
        
        <script>
            $(document).ready(function(){
                $('.tooltipped').tooltip({delay: 50});
                $('.modal-trigger').leanModal({
                    dismissible: false,
                    opacity: .5, 
                    in_duration: 300, 
                    out_duration: 200, 
                    }                         
                );
              });
        </script>
    </body>
</html>