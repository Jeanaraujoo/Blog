<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
         <!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <main>
        <div class="container">   
        <form action="envia.php" method="POST" enctype="multipart/form-data">
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
         </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Data</label>
            <input type="date" name="data" class="form-control" id="exampleInputData1">
        </div>
        <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">Texto Descritivo</label>
             <input type="text" name="description" class="form-control" id="exampleInputTextoDescritivo1">
        </div>
             <input type="file" id="formGroupExampleInput3" placeholder="Insira uma imagem" name="image"/>
             <button type="submit" class="btn btn-primary">Submit</button>        
        </form>
        </div>
    </main>   
</body>
</html>