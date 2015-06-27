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
            #studentOutcomesGroup input{
                height: 1.5em;
            }
            
            .modal.modal-fixed-footer{
                width: 65%;
                height: 100%;
            }
            
            #c_head{
                padding-left: 0;
            }
            
            fieldset{
                border-color: darkgray;
            }
            
            input[type=text].invalid, input[type=text]:focus.invalid, 
                input[type=password].invalid, input[type=password]:focus.invalid, 
                input[type=email].invalid, input[type=email]:focus.invalid, 
                input[type=url].invalid, input[type=url]:focus.invalid, 
                input[type=time].invalid, input[type=time]:focus.invalid, 
                input[type=date].invalid, input[type=date]:focus.invalid, 
                input[type=datetime-local].invalid, input[type=datetime-local]:focus.invalid, 
                input[type=tel].invalid, input[type=tel]:focus.invalid, input[type=number].invalid, 
                input[type=number]:focus.invalid, input[type=search].invalid, input[type=search]:focus.invalid, 
                textarea.materialize-textarea.invalid, textarea.materialize-textarea:focus.invalid {
                    border-bottom: 1px solid #4CAF50;
                    box-shadow: 0 1px 0 0 #4CAF50;
            }
            
        </style>
    </head>
    <body>
        <script type="text/javascript" src="ckeditor_full/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="jq/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="materialize-v0.97.0/materialize/js/materialize.min.js"></script>
       
        
<!--        <a class="btn-floating btn-large waves-effect waves-light red modal-trigger"><i class="material-icons">add</i></a>-->
        <button class="btn modal-trigger" data-target="addcollege">ADD COLLEGE button</button>
        <a class="waves-effect waves-light btn modal-trigger" href="#addcollege">ADD COLLEGE &lt;a&gt;</a>
<!-- ADD COLLEGE MODAL -->
        <div id="addcollege" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h5 style="border-bottom: 2px solid #f1f1f1; margin-bottom: 20px;">Add College</h5>
                <form class="col s12">
                    <div class="input-field col s12">
                        <input id="college_name" type="text" class="validate" autofocus>
                        <label for="college_name">College Name</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s6" id="c_head">
                            <select>
                              <option value="1">Melvin Ninal, MBA, MSIT</option>
                              <option value="2">Artemio Sanchez</option>
                              <option value="3">A</option>
                              <option value="4">OIC-Chairperson</option>
                              <option value="5">Mr.</option>
                              <option value="6">Mrs.</option>
                              <option value="7">Ms.</option>
                            </select>
                            <label>College Head</label>
                        </div>
                        <div class="file-field input-field col s6">
                            <div class="btn">
                                <span><small>browse</small></span>
                                <input id="college_logo" name="college_logo" type="file" accept="image/jpeg, image/jpg, image/png">
                            </div>
                            <div class="file-path-wrapper col s6">
                                <input id="file_field" class="file-path validate" type="text" placeholder="choose college logo" readonly>
                            </div>
                            
                        </div>
                    </div>
                    <fieldset>
                        <legend>College Statements</legend>
                        <div class="row">
                        <div class="input-field col s12">
                            <textarea id="college_vmgo" class="materialize-textarea"></textarea>
<!--                            <label for="college_vmgo">College VMGO-CV</label>-->
                            <!--<script>
                                CKEDITOR.disableAutoInline = true;
                                CKEDITOR.inline("college_vmgo");
                            </script>-->
                            <script>CKEDITOR.replace("college_vmgo");</script>
<!--                            <script>CKEDITOR.replace( 'college_vmgo', { customConfig: 'ckeditor/ckeditor/custom_config.js', height:200, width:500 } );</script>-->
                        </div>
                        
                      </div>
<!--                    </fieldset>-->
                    
<!--                    <fieldset>-->
                        <legend>Student Outcomes</legend>
                        <div id='studentOutcomesGroup'>
                            <div id="SO1">
                                <input type="text" id="SO1" name="SO1" value="">
                            </div>
                            <div id="SO2">
                                <input type="text" id="SO2" name="SO2" value="">
                            </div>
                            <div id="SO3">
                                <input type="text" id="SO3" name="SO3" value="">
                            </div>
                            <div id="SO4">
                                <input type="text" id="SO4" name="SO4" value="">
                            </div>
                            <div id="SO5">
                                <input type="text" id="SO5" name="SO5" value="">
                            </div>
                        </div>
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default" id="addSO">Add</button>
                            <button type="button" class="btn btn-default" id="removeSO">Remove</button>
                        </div>
                    </fieldset>
                    
                </form>
                
                
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Save</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
<!--                <button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons right">send</i></button>-->
            </div>
        </div>
<!--add college modal END        -->
        <script>
            $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal({
                    dismissible: false,
                    opacity: .5, // Opacity of modal background
                    in_duration: 300, // Transition in duration
                    out_duration: 200, // Transition out duration
                    } // Callback for Modal close
                );
               /* 
                if(typeof('#file_field') != "undefined" && ("#file_field") !== null) {
                    var ext = $('#file_field').val().split('.').pop().toLowerCase();
                        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {  
                        alert('Invalid file extension! Must input an image only.');
                    }
                }*/
               /* 
                try{
                    jQuery.validator.setDefaults({
                        debug: true,
                        success: "valid"
                    });
                    $( "#file_field" ).validate({
                        rules: {
                            field: {
                            required: true,
                            accept: "image/*"
                            }
                        }
                    });
                }catch(err){
                    
                }
                */
                
            });
        </script>
        <script>
 
            $(document).ready(function(){
                $('select').material_select();
                var counter = 6;

                $("#addSO").click(function () {


                var newTextBoxDiv = $(document.createElement('div'))
                     .attr("id", 'SO' + counter);

                newTextBoxDiv.after().html('<input type="text" id="so"' + counter + '" name="so"' + counter + '" value="">');
                newTextBoxDiv.appendTo("#studentOutcomesGroup");

                counter++;
                 });

                 $("#removeSO").click(function () {
                    if(counter==1){
    //                      alert("No more textbox to remove");
                          return false;
                       }

                    counter--;
                        $("#SO" + counter).remove();

                 });

              });
        </script>
    </body>
</html>