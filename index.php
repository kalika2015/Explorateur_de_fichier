<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <title>Explorateur de fichiers en PHP</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
     <header>
         <a href="#"><i class="fas fa-angle-double-left fa-lg"></i></a>
         <a href="#"><i class="fas fa-angle-double-right fa-lg"></i></a>
         <a href="index.php"><i class="fas fa-home fa-lg"></i></a>
         <a href=""><i class="fas fa-sync-alt fa-spin fa-lg"></i></a>
         <a href="#" id="upload"><i class="fas fa-cloud-upload-alt fa-lg"></i></a>
         <a href="<?php $url?>" download=""><i class="fas fa-cloud-download-alt fa-lg"></i></a>
         <a href="#"><i class="fas fa-cut fa-lg"></i></a>
         <a href="#" id="copy"><i class="fas fa-copy fa-lg"></i></a>
         <a href="#"><i class="fas fa-paste fa-lg"></i></a>
         <a href="#" id="sup"><i class="fas fa-trash-alt fa-lg"></i></a>
         <a href="#"><i class="fas fa-info-circle fa-spin fa-lg"></i></a>
     </header>

     <aside>
         <div>
             <?php include "alldoc.php" ?>
         </div>
     </aside>

     <section id="ajax">
         <div>
             <?php include "traitement.php" ?>
         </div>
     </section>

     <div class="bg-modal">
         <div class="modal-content">
             <div class="close">+</div>
             <h1>Que Voulez-vous supprimer</h1>
             <form action="delete.php" method="post">
                 <label for="">Dossier ou Fichier</label>
                 <input type="text" placeholder="Nom du dossier ou du fichier" class="txt" name="doc" id="doc"><br><br>
                 <input type="submit" value="Supprimer" class="btn" name="delete" id="delete">
             </form>
         </div>
     </div>

     <div class="bg-modal1">
         <div class="modal-content1">
             <div class="close1">+</div>
             <h1>Upload de fichier</h1>
             <form action="upload.php" method="post" enctype="multipart/form-data">
                 <label for="">Dossier ou Fichier</label>
                 <input type="file" name="file" id="file"><br><br>
                 <input type="submit" value="Uploader" class="btn" name="upload" id="upload">
             </form>
         </div>
     </div>

     <div class="bg-modal2">
         <div class="modal-content2">
             <div class="close2">+</div>
             <h1>Copier un dossier ou un fichier</h1>
             <form action="copier.php" method="post">
                 <input type="text" placeholder="Nom du fichier a copier" class="txt" name="doc1"><br><br>
                 <input type="text" placeholder="Nom du nouveau fichier" class="txt" name="doc2"><br><br>
                 <input type="submit" value="Copier" class="btn" name="copy" id="copy">
             </form>
         </div>
     </div>

     <script src="js/main.js"></script>
</body>
</html>