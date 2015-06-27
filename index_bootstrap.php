<?php?>

<html>
    <head>
        <title>New College Module</title>
        <link rel="icon" href="images/LOGOFINAL.png" type="image/png">
        <script src="jq/jquery-1.11.3.js"></script>
        <script src="jq/jquery-1.11.3.min.js"></script>
        <script src="bootstrap_tru/bootstrap_sulod/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap_tru/bootstrap_sulod/css/bootstrap.css" type="text/css"/>
        <script src="ckeditor/ckeditor/ckeditor.js"/>
        
        
        <style>
            label {
                padding-top: 5px;
                color: #990033;
            }
            #student_outcomes{
                padding-top: 2px;
            }

            div#studentOutcomesGroup div{
                padding: 3px;
            }
            
        </style>
        
        <script>
 
            $(document).ready(function(){

                var counter = 6;

                $("#addSO").click(function () {

//                if(counter>10){
//                        alert("Only 10 textboxes allow");
//                        return false;
//                }

                var newTextBoxDiv = $(document.createElement('div'))
                     .attr("id", 'SO' + counter);

                newTextBoxDiv.after().html('<input class="form-control" type="text" id="so"' + counter + '" name="so"' + counter + '" value="">');
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

//                 $("#getButtonValue").click(function () {
//
//                var msg = '';
//                for(i=1; i<counter; i++){
//                  msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
//                }
//                      alert(msg);
//                 });
              });
        </script>

    </head>
    <body>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Add College
        </button>

        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add College</h4>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="college_name" class="control-label">College Name</label>
                    <input type="text" class="form-control" id="college_name" title="This is the formal name of the college. Make sure you put the name properly."/>
                    <label for="college_vmgocv" class="control-label">College VMGO-CV</label>
                    <textarea name="editor1" id="editor1">
                    </textarea>
                    <script>CKEDITOR.replace("editor1");</script>
                    <label for="college_SO" class="control-label">College Student Outcomes</label>
                    <div id='studentOutcomesGroup'>
                        <div id="SO1">
                            <input class="form-control" type="text" id="SO1" name="SO1" value="">
                        </div>
                        <div id="SO2">
                            <input class="form-control" type="text" id="SO2" name="SO2" value="">
                        </div>
                        <div id="SO3">
                            <input class="form-control" type="text" id="SO3" name="SO3" value="">
                        </div>
                        <div id="SO4">
                            <input class="form-control" type="text" id="SO4" name="SO4" value="">
                        </div>
                        <div id="SO5">
                            <input class="form-control" type="text" id="SO5" name="SO5" value="">
                        </div>
                    </div>
                   <div class="btn-group" role="group" aria-label="...">
                      <button type="button" class="btn btn-default" id="addSO">Add</button>
                      <button type="button" class="btn btn-default" id="removeSO">Remove</button>
                    </div>
<!--                      <button type='button' class="btn btn-primary" value='Add Outcome' id='addTextbox'>Add Outcome</button>-->
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </div>
       
       
        
    </body>
</html>

