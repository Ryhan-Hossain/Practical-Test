<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <style>
        body{
            background-image: url(image/back.jpg);
            background-size:cover;
        }
        hr{
            background: white;  
        }

        .contact-form{
            background:rgba(0,0,0, .6);
            color:white;
            margin-top: 100px;
            padding: 20px;
            box-shadow: 0px 0px 10px 3px grey;
        }
        /* Set the size of the div element that contains the map */
      #map {
        height: 300px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
   </style>

   <script>
            function elements(el,i,ex){
                switch(el.value){
                    case '1':
                        i.style.display='block';
                        ex.style.display='none';
                        en.style.display='none';
                        break;
                    case '2':
                        i.style.display='none';
                        ex.style.display='block';
                        en.style.display='none';
                        break;
                    case '3':
                        i.style.display='none';
                        ex.style.display='none';
                        en.style.display='block';
                        break;
                    default:
                        i.style.display='none';
                        ex.style.display='none';
                        en.style.display='none';
                        break;
                }
            }
        </script>

  </head>
<body>
    


<div class="container contact-form" align="center">
    <h1>Add Product</h1>
    <hr>

   
       

       <div class="col-md-6">
        
         <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Type</label>
                
                <div>
                    <select onchange="elements(this,I,Ex)" name="Elements">
                        <option value="0">Select Option</option>
                        <option value="1">Touch Screen</option> 
                        <option value="2">Others</option>
                    </select>
                
                    <select id="I" style="display:none;" name="Touch Screen">
                        <option value="0">Select Option</option>
                        <option value="1">Android</option>
                        <option value="2">iOS</option>
                    </select>
                

                    <select id="Ex" style="display:none;" name="Others">
                        <option value="0">Select Option</option>
                        <option value="1">Symbian</option>
                        <option value="2">Java</option>
                    </select>
                
                </div>
                
            
         </div>

         <div class="form-group">
            <label>Product Brand</label>
            <input type="text" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Price</label>
            <input type="text" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Ram (GB)</label>
            <input type="text" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Storage (GB)</label>
            <input type="text" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Camera</label>
            <input type="text" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Image</label>
            <input type="file" name="pic" accept="image/*">
         </div>

         <div class="form-group">
            <label>Prouct Quantity</label>
            <input type="number" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Status</label>
            <div>
                <select>
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>
            </div>
         </div>

         <div class="form-group">
            <button class="btn btn-primary btn-block">Send</button>
         </div>

       </div>

    

</div>




</body>
</html>
