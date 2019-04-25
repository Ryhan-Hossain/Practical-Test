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
                    break;
                case '2':
                    i.style.display='none';
                    ex.style.display='block';
                    break;
                default:
                    i.style.display='none';
                    ex.style.display='none';
                    break;
            }
        }
    </script>

</head>
<body>
    


<div class="container contact-form" align="center">
    <h1>Add Product</h1>
    <hr>

         <div class="form-group">
            <label>Prouct Type</label>
                
                <div>
                    <select onchange="elements(this,I,Ex)" name="pro_type">
                        <option value="0">Select Option</option>
                        <option value="1">Touch Screen</option> 
                        <option value="2">Others</option>
                    </select>
                
                    <select id="I" style="display:none;" name="pro_type">
                        <option value="0">Select Option</option>
                        <option value="Android">Android</option>
                        <option value="IOS">iOS</option>
                    </select>
                

                    <select id="Ex" style="display:none;" name="pro_type">
                        <option value="0">Select Option</option>
                        <option value="Symbian">Symbian</option>
                        <option value="Java">Java</option>
                    </select>
                
                </div>
                
            
         </div>
       

       <div class="col-md-6">
        <form action="" method="post">
         <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="pro_name" id="name" required="required" placeholder="Product Name" class="form-control">
         </div>



         <div class="form-group">
            <label>Product Brand</label>
            <input type="text" name="pro_brand" id="brand" required="required" placeholder="Product Brand" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Price</label>
            <input type="number" name="pro_price" id="price" required="required" placeholder="Product Price" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Ram (GB)</label>
            <input type="text" name="pro_ram" id="ram" required="required" placeholder="Product Ram" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Storage (GB)</label>
            <input type="text" name="pro_storage" id="storage" required="required" placeholder="Product Storage" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Camera</label>
            <input type="text" name="pro_camera" id="camera" required="required" placeholder="Product Camera" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Image</label>
            <input type="file" name="pro_image" accept="image/*" id="camera" required="required">
         </div>

         <div class="form-group">
            <label>Prouct Quantity</label>
            <input type="number" name="pro_qty" id="quantity" required="required" placeholder="Product Quantity" class="form-control">
         </div>

         <div class="form-group">
            <label>Prouct Status</label>
            <div>
                <select name="pro_status">
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>
            </div>
         </div>

         <div class="form-group">
            <input type="submit" value="Upload" name="submit" class="btn btn-primary btn-block">
         </div>
        </form>
       </div>

    

</div>

    <?php
        if(isset($_POST["submit"])){
        $hostname='localhost';
        $username='root';
        $password='';

        try {
        $dbh = new PDO("mysql:host=$hostname;dbname=test",$username,$password);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
        $sql = "INSERT INTO product (product_name, product_type, product_brand, product_price, Product_ram, product_storage, Product_camera, product_image, Product_quantity, Product_status)
        VALUES ('".$_POST["pro_name"]."','".$_POST["pro_type"]."','".$_POST["pro_brand"]."','".$_POST["pro_price"]."','".$_POST["pro_ram"]."','".$_POST["pro_storage"]."','".$_POST["pro_camera"]."','".$_POST["pro_image"]."','".$_POST["pro_qty"]."','".$_POST["pro_status"]."')";
        if ($dbh->query($sql)) {
        echo "<script type= 'text/javascript'>alert('Message Sent Successfully');</script>";
        }
        else{
        echo "<script type= 'text/javascript'>alert('Message sent unsuccessful.');</script>";
        }

        $dbh = null;
        }
        catch(PDOException $e)
        {
        echo $e->getMessage();
        }

        }
    ?>


</body>
</html>
