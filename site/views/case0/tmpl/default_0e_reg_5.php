<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<!--<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">-->

<h1>Registration</h1>
<div class="row-fluid">

    <div class="span4 center topspacing" >
        <img src="components/com_wizard/images/gufo.png" width="150" />
    </div>

    <div class="span8">

        <?php
        if($this->sessione['reg_type'] == 'individual')
            echo "<h4>You can provide us your picture to be published within your profile in the Supporting Partner page of our website.</h4>";
        else
            echo "<h4>Please provide us the logo of your institution to be published in the Supporting Partners page of our website.</h4>";
        ?>

        <form action="index.php?option=com_wizard&task=handler.upload&type=tipo1"
              method="post"
              class="dropzone"
              id="my-awesome-dropzone"
              maxFiles="1">
        </form>

        <form id="form" method="post" action="index.php">
            <div class="">

                <input type="hidden"  name="image" id="image" >
                <input type="hidden"  name="option" value="com_wizard">
                <input type="hidden"  name="view" value="case0">
                <input type="hidden"  name="position" value="0e_reg_6">
                <!--                                <input type="hidden"  name="position" value="0f">-->
                <br>
                <button type="submit" class="btn btn-primary" onclick="send(event)">Next</button>
            </div>
        </form>
    </div>
</div>


<script>

    function send(e){
        // if(!$('#image').val()) {
        //     alert("Please upload an image");
        //     e.preventDefault();
        // }
    }

    $(function(){
        Dropzone.options.myAwesomeDropzone = {
            maxFilesize: 5,
            maxFiles: 1,
            addRemoveLinks: true,
            uploadMultiple: false,
            multiple: false,
            dictResponseError: 'Server not Configured',
            acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
            init:function(){
                var self = this;
                // config
                self.options.addRemoveLinks = true;
                self.options.dictRemoveFile = "Delete";
                //New file added
                self.on("addedfile", function (file) {
                    console.log('new file added ', file);
                });
                // Send file starts
                self.on("sending", function (file) {
                    console.log('upload started', file);
                    $('.meter').show();
                });

                // File upload Progress
                self.on("totaluploadprogress", function (progress) {
                    console.log("progress ", progress);
                    $('.roller').width(progress + '%');
                });

                self.on("queuecomplete", function (progress) {
                    $('.meter').delay(999).slideUp(999);
                });

                self.on("success", function (file, response) {
                    $('#image').val(response);
                });

                self.on("maxfilesexceeded", function(file){
                    alert("You can upload only one file!");
                });


            }
        };
    })


</script>