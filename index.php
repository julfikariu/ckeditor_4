<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>A Simple Page with CKEditor 4</title>
    <!-- Make sure the path to CKEditor is correct. -->
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="" style="width:80%; margin: 70px auto;">
    <form>
        <textarea name="myeditor" id="myeditor" rows="10" cols="80">
            This is my textarea to be replaced with CKEditor 4.
        </textarea>
    </form>
</div>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    CKEDITOR.replace( 'myeditor', {
		filebrowserBrowseUrl: '/fb',
		filebrowserUploadUrl: '/fb',
        extraPlugins: 'ckeditor_wiris',
	
		
    } );
</script>
</body>
</html>