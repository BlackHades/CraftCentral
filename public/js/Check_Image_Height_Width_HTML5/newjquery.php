<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
echo "<script> alert('yes it worked') </script>";	
}


?>




<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post" id="myform" >
<input type="file" id="fileUpload" />
<input id="upload" type="button" name="submit" value="submit" onClick="<?php echo 'Upload()'?>" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
    $("#upload").bind("click", function () {
        //Get reference of FileUpload.
        var fileUpload = $("#fileUpload")[0];

        //Check whether the file is valid Image.
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif)$");
        if (regex.test(fileUpload.value.toLowerCase())) {

            //Check whether HTML5 is supported.
            if (typeof (fileUpload.files) != "undefined") {
                //Initiate the FileReader object.
                var reader = new FileReader();

                //Read the contents of Image File.
                reader.readAsDataURL(fileUpload.files[0]);
                reader.onload = function (e) {

                    //Initiate the JavaScript Image object.
                    var image = new Image();

                    //Set the Base64 string return from FileReader as source.
                    image.src = e.target.result;
                    image.onload = function () {

                        //Determine the Height and Width.
                        var height = this.height;
                        var width = this.width;
                        if (height > 100 || width > 100) {
                           // alert("Height and Width must not exceed 100px.");
                            return false;
                        }
                        alert("Uploaded image has valid Height and Width.");
						document.getElementById("myform").submit();
                        return true;
						
						
                    };
                }
            } else {
                alert("This browser does not support HTML5.");
                return false;
            }
        } else {
            alert("Please select a valid Image file.");
            return false;
        }
    });
});
</script>
    </form>
</body>
</html>
