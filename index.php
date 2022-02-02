<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="vuejs/style.css">
    <title>PRUEBA CLOUDAPP</title>
</head>
<body>
    
    <div class="container mt-5" id="app">
        <div class="row">
            <div class="card">
            <div class="card-body text-center">
                <span class="titulo">LISTA DE USUARIOS</span>
                <hr />
                <table class="table table-striped">
                    <thead>
                      <tr>
                        
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Detalle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="(listUsuario, index) in listUsuarios" v-on:click="detalle(index)">
                        
                        <td>{{ listUsuario.name }}</td>
                        <td>{{ listUsuario.email }}</td>
                        <td><button class="btn btn-primary" v-on:click="detalle(index)">Detalle</button></td>
                        
                      </tr>
                      
                     
                    </tbody>
                  </table>
                  <div class="card col-6" style="width: 18rem;" v-if="detalleUsuarios != null">
                    <div class="row">
                        <div class="card-body ">
                            <ul class="list-group list-group-flush" >
                            <li class="list-group-item">{{listUsuarios[detalleUsuarios].id}} {{listUsuarios[detalleUsuarios].name}} </li>
                            <li class="list-group-item">{{listUsuarios[detalleUsuarios].email}}  </li>
                            <li class="list-group-item"><button class="btn btn-success" v-on:click="ocultar()">ocultar</button> </li>
                            </ul>
                        </div>
                        
                    </div>  
                  </div>
            </div>
        </div>
        </div>
   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="vuejs/conexion-api.js"></script>
</body> 
</html>