 <!-- Pertama Layout Buat Postingan -->
 <?php foreach ($profile as $p) { ?>
     <section class="statistic">
         <div class="section__content section__content--p30">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <i class="fa fa-edit"></i>
                                 <strong class="card-title pl-2">Edit Profile </strong>
                             </div>
                             <div class="card-body card-block">
                                 <form action="<?= base_url() ?>/user/editProfile" method="post" enctype="multipart/form-data" class="form-horizontal">

                                     <div class="row form-group">
                                         <div class="col col-md-3">
                                             <label for="text-input" class=" form-control-label">Name</label>
                                         </div>
                                         <div class="col-12 col-md-9">
                                             <input required type="text" id="text-input" name="nama" placeholder="Judul Curahan Hati" class="form-control" value="<?= $p['nama'] ?>"></input>
                                         </div>
                                     </div>


                                     <div class="row form-group">
                                         <div class="col col-md-3">
                                             <label for="text-input" class=" form-control-label">NIM</label>
                                         </div>
                                         <div class="col-12 col-md-9">
                                             <input readonly required type="text" id="text-input" name="nim" placeholder="Judul Curahan Hati" class="form-control" value="<?= $p['nim'] ?>"></input>
                                         </div>
                                     </div>


                                     <div class="row form-group">
                                         <div class="col col-md-3">
                                             <label for="text-input" class=" form-control-label">Email</label>
                                         </div>
                                         <div class="col-12 col-md-9">
                                             <input readonly required type="email" id="text-input" name="email" placeholder="Judul Curahan Hati" class="form-control" value="<?= $p['email'] ?>"></input>
                                         </div>
                                     </div>
 




                             </div>
                             <div class="card-footer">
                                 <button type="submit" class="btn btn-danger btn-sm">
                                     <i class="fa fa-edit"></i>&nbsp; Edit
                                 </button>
                                 </form>

                             </div>
                         </div>

                     </div>

                 </div>
             </div>

         <?php } ?> <br><br><br><br><br>