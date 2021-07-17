<?php
include "assets/db.php";
$db = new db();

$f = $db->query("SELECT * FROM location WHERE id = '1'")->find();


?>                                
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triptap - Admin</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
  
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logobanner.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">เมนู</li>

                        <li class="sidebar-item  ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>หน้าหลัก</span>
                            </a>
                        </li>

                        <li class="sidebar-item active">
                            <a href="edit.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>แก้ไขข้อมูลร้านค้า</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>แก้ไขข้อมูลร้านค้า</h3>
                            <!-- <p class="text-subtitle text-muted">Give textual form controls like input upgrade with
                                custom styles,
                                sizing, focus states, and more.</p> -->
                        </div>
                        <!-- <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Input</li>
                                </ol>
                            </nav>
                        </div> -->
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">ข้อมูลทั่วไป</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basicInput">ชื่อร้าน</label>
                                        <input type="text" class="form-control" id="name"
                                            value="<?php echo $f->name; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="helpInputTop">รายละเอียด</label>
                                        <!-- <small class="text-muted">eg.<i>someone@example.com</i></small> -->
                                        <input type="text" class="form-control" id="location_detail" value="<?php echo $f->location_detail; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="helpInputTop">Latitude</label>
                                        <!-- <small class="text-muted">eg.<i>someone@example.com</i></small> -->
                                        <input type="text" class="form-control" id="lat" value="<?php echo $f->lat; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   
                                        <h6>ประเภท</h6>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="location_type" value="<?php echo $f->location_type; ?>">
                                                <option value=1>ร้านกาแฟ</option>
                                                <option value=2>ร้านทั่วไป</option>
                                            </select>
                                        </fieldset>
                                    
                                        <div class="form-group">
                                            <label for="helpInputTop">Hashtag #</label>
                                            <!-- <small class="text-muted">eg.<i>someone@example.com</i></small> -->
                                            <input type="text" class="form-control" id="hashtag" value="<?php echo $f->hashtag; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="helpInputTop">Longitude</label>
                                            <!-- <small class="text-muted">eg.<i>someone@example.com</i></small> -->
                                            <input type="text" class="form-control" id="lon" value="<?php echo $f->lon; ?>">
                                        </div>
                                </div>
                                <div class="button">
                                    <center>
                                        <a href="#" class="btn btn-success rounded-pill" onclick="update()">บันทึกข้อมูล</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Basic File Browser start -->
                
                <section id="input-file-browser">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                               
                                    <h4 class="card-title">รูปภาพ</h4>

                                </div>
                                

                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">รูปหน้าปกการ์ด
                                                    </label>
                                                    <form id='img_maincard' action='upload.php' method='post' enctype='multipart/form-data'>
                                                <input class="form-control" type="file" name= "img_maincard" id="img_maincard"> 
                                            </div>

                                            <div class="mb-3">
                                                <label for="formFileMultiple" class="form-label">รูปเพิ่มเติม 1
                                                    </label>
                                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-6 col-md-12">

                                            <div class="mb-3">
                                                <label for="formFileSm" class="form-label">รูปเพิ่มเติม 2
                                                    </label>
                                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                                            </div>

                                            <div class="mb-3">
                                                <label for="formFileSm" class="form-label">รูปเพิ่มเติม 3
                                                    </label>
                                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="button">
                                            <center>
                                            
                                                <a href="#" class="btn btn-success rounded-pill" type="submit" value="upload" onclick="upload()">บันทึกข้อมูล</a>
                                            </center>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- Basic File Browser end -->




            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script>
        const update = () => {
            var name = $('#name').val();
            var location_detail = $('#location_detail').val();     
            var location_type = $('#location_type').val();            
            var lat = $('#lat').val(); 
            var lon = $('#lon').val();
            var hashtag = $('#hashtag').val();       
            $.post('assets/update.php', {name: name,location_detail: location_detail,location_type: location_type,lat: lat,lon: lon,hashtag: hashtag}).done(()=>{
                Swal.fire("อัพเดทแล้ว", "", "success").then(()=>{
                    location.reload();
                })
            })
        }
    </script>
    <script>
                const upload = () => {
                    var img_maincard = $('#img_maincard').file();
                    $.post('assets/upload.php', {img_maincard: img_maincard }).done(()=>{
                Swal.fire("อัพเดทแล้ว", "", "success").then(()=>{
                    location.reload();
                })
            })
                }



        </script>
   
    
  
</body>

</html>