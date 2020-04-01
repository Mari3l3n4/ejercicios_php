<?php include('header.php') ?>
<!--CONTENIDO DEL SITIO WEB -->
<section class="container">
 <div class="row">
     <div class="col-md-7 bg-danger text-white p-5">
         <main>
             <h1>Titulo del sitio web</h1>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis quaerat fugiat necessitatibus ipsam repudiandae ea at magni libero. Soluta voluptas neque vitae reiciendis velit. Debitis maxime hic quos molestiae ducimus
             </p>
        </main>
     </div>

       <div class="col-md-5 bg-success text-white p-5">
           <?php required('asides.php') ?> 
       </div>
<!-- la diferencia entre include y required es que con "include" al pder haber una equivocacion en la direccion del archivo no carga ese archivo y con "required" no carga ese archivo ni los otros que estan debajo de el--> 
 </div>
</section>
    

<?php include('footer.php') ?>

