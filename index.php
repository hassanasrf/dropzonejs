<!DOCTYPE html>
<html>
<head>
  <title>How to Delete Uploaded File in Dropzone JS?</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>

<div class="card bg-light">
  <div class="card-header" style="text-align: center;">
    <h4>How Uploaded and Remove Files Using Dropzone JS</h4>
  </div>
  <div class="card-body">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form action="upload.php" enctype="multipart/form-data" class="dropzone" id="image-upload">
            <input type="hidden" name="request" value="add">
          </form>
        </div>
      </div>
    </div>
  </div>
  <span class="badge badge-pill badge-primary">@hassanasrf</span>
</div>
  
<script type="text/javascript">
    Dropzone.autoDiscover = false;
  
    var myDropzone = new Dropzone(".dropzone", { 
       maxFilesize: 10,
       acceptedFiles: ".jpeg,.jpg,.png,.gif",
       addRemoveLinks: true,
       removedfile: function(file) {
         var fileName = file.name; 
           
         $.ajax({
           type: 'POST',
           url: 'upload.php',
           data: {name: fileName,request: 'delete'},
           sucess: function(data){
              console.log('success: ' + data);
           }
         });
  
         var _ref;
          return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
       }
    });
</script>
  
</body>
</html>