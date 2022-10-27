<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
    
</head>

<body>
   



   <!-- Category container starts here -->
    <div class="container my-4" id="ques">
        <div class="row my-4">
          <!-- Fetch all the categories and use a loop to iterate through categories -->
         <?php 
         $sql = "SELECT * FROM `user`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['category_id'];
          $name = $row['category_name'];
          $type = $row['category_type'];
          $desc = $row['category_description'];
          echo 
          
          '<div class="col-md-4 my-2">
                <div class="container">
                    <div class="card">
                        <div class="img">
                            <img src="img/card' .$id. '.jpg">
                        </div> 
                        <div class="name-type">
                            <div class="name">'.$name.'</div>
                            <p>'.$type.'</p>
                        </div>
                        <div class="description">
                            <div class="text">'.$desc.'</div>
                    <center>
                        <div class="btn">
                            <a href="threadlist.php?catid=' . $id . '">View Threads</a>
                        </div>
                    </center>
                        </div>
                    </div> 
                </div>
            </div>'
                ;
      
         } 
         ?>
        </div>
    </div>




    <style>@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');


.container{
  padding: 0 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.card{
  height: 300px;
  max-width: 350px;
  margin: 0 20px;
  background: white;
  transition: 0.4s;
  box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
}
.card:hover{
  height: 470px;
  box-shadow: 5px 5px 10px rgba(0,0,0,0.2);
}
.card .img{
  height: 200px;
  width: 100%;
}
.card .img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.card .name-type{
  padding: 5px;
}
.card .name-type .name{
  font-size: 25px;
  font-weight: 800;
  color: #202020;
  text-align: center;
}
.card .name-type p{
  font-size: 18px;
  font-weight: 800;
  color: red;
  line-height: 20px;
  text-align: center;

}
.card .description{
  padding: 0 20px 10px 20px;
  margin-top: 5px;
  background: white;
  opacity: 0;
  visibility: hidden;
  transition: 0.1s;
}
.card:hover .description{
  opacity: 1;
  visibility: visible;
}

.card .description .btn{
  margin: 10px 0;
  text-align: left;
}
.card .description .btn a{
  text-decoration: none;
  background: red;
  color: white;
  padding: 5px 8px;
  border-radius: 3px;
  display: inline-flex;
  transition: 0.2s;
}
.card .description .btn a:hover{
  transform: scale(0.9);
}
@media screen and (max-width: 978px) {
  .container{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .card{
    max-width: 700px;
    margin: 20px 0;
  }
}</style>   
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>