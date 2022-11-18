<?php 
    require_once('connection.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        /* .jumbotron{
            position: relative;
            overflow: hidden;
        }

        video{
            position:absolute;
            z-index: 1;
            top:0;
            width:100%;
            height: 100%;
            object-fit: cover;
        }

        .container{
            z-index: 2;
            position: relative;
        } */

    </style>
    <title>Query Data</title>
</head>
<body style="background-image: url(https://cdn.pixabay.com/photo/2022/05/19/23/37/space-7208322_960_720.jpg);"
onload="get_data()">
      <P>
      </P>
      
      <div class=" container "  >

        <div class=" col card container " style="width: 70rem;" >
          <div class=" alert alert-secondary " role="alert" type="text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
              <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
              
                    Query Data
                  </div >
                  <input type="text" hidden>
                  <details>
                    <summary></summary>
                  
                    <div class="row card-body " >
                  <a  class=" col-12  btn btn-info  "  href="#" role="button"   >MateriaiData</a>
                  <a class=" col-12  btn btn-info "  href="#" role="button"  >NonReport</a>
                  <a class=" col-12  btn btn-info   "  href="#" role="button">frenef ormfacel</a>
                  <a class=" col-12  btn btn-info  "  href="#" role="button">ShipmentSearch</a>
                  <a class=" col-12  btn btn-info   "  href="#" role="button">Repgrt003</a>
                  <a class=" col-12  btn btn-info  "  href="#" role="button">Repcit004</a>
                  </div >
                  <!-- </div class=" container"> -->
                 </div >
               
               </details>
                  
                 <!-- <div class="row">
                    <div class="col-1">oops</div>
                    <div class="col-1">oop2</div>
                    <div class="col-1">oop3</div>
                    <div class="col-1">oop4</div>
                   </div> -->
                   <P>

                   </P>
                   <!-- <div class="  container " style="width: 60rem;"> -->
                    <div class=" col card container " style="width: 70rem;" >
                      <div class=" alert alert-secondary " role="alert" type="text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                          <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                           System Seiting
                          </div >
                          <input type="text" hidden>
                          
                            
                          <div class="row card-body " >
                          <a class="col-12  btn btn-info "  href="#" role="button" >SystemChang </a>
                          <a class="col-12  btn btn-info "  href="#" role="button" >UserData </a>
                          <a class="col-12  btn btn-info "  href="#" role="button">CuhsmnerSet </a>
                        
                        </div >
                         <!-- </div class=" container"> -->
                        </div >
                      
                      
                         <P>

                         </P>
                         <!-- <div class="  container" style="width: 60rem;"> -->
                          <div class="card col " style="width: 70rem;">
                              <div class="  alert alert-secondary" id="navbarDropdown" role="button"   data-toggle="dropdown" aria-haspopup="true text" aria-expanded="false text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                  <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                </svg>
                                    Working
                                      </div>
                                      <details>
                                        <summary></summary>
                                        <div class="row card-body " >
                                     <a class="col-12  btn btn-info "  href="add.php" role="button">SMD Recive </a>
                                     <a class="col-12  btn btn-info "  href="index.php" role="button">APMT100 Receive </a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">MPC Rerive Pering </a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">MergLabel </a>
                                     <a class="col-12   btn btn-info " href="#" role="button">CoompietedStorage </a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">PickUpGoods </a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">CheckGoods </a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">Evenltem</a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">Meetihg </a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">PrintLabel</a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">QAList </a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">MatenalSeting</a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">LadelCheck</a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">CheckMPC5can</a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">SettingyNW</a>
                                     <a class="col-12  btn btn-info "  href="#" role="button">MPC SMD Out</a>
                                    </div class=" container">
                                     <!-- </div class="  container"> -->
                                    </div class=" container">
                                  </details>
                                     <p>

                                     </p>
                                     <!-- <div class="  container " style="width: 60rem;"> -->
                                      <div class="card col " style="width: 70rem;">
                                        <div class="  alert alert-secondary " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true text" aria-expanded="false text">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                            <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                          </svg>
                                               
                                                 Stitting
                                                  </div>
                                                  <details>
                                                    <summary></summary>
                                                  <!-- <div   class="row dropdown-menu container card-body " aria-labelledby="navbarDropdown" > -->
                                                    <div class="row card-body "  aria-labelledby="navbarDropdown" >
                                                  <a class="col-12  btn btn-info "  href="#" role="button">Recive </a>
                                                 <a class="col-12 btn btn-info "  href="#" role="button">PatNo Check </a>
                                                 <a class="col-12  btn btn-info "  href="#" role="button">PatNo Add </a>
                                                 <a class="col-12  btn btn-info "  href="#" role="button">KnifeRangeRecord </a>
                                                 <a class="col-12  btn btn-info "  href="#" role="button">PassKSet </a>
                                                 <a class="col-12  btn btn-info "  href="#" role="button">ModifyKnife </a>
                                                 <a class="col-12  btn btn-info "  href="#" role="button">ModifyStae</a>
                                                 <a class="col-12  btn btn-info "  href="#" role="button">Print Packing</a>
                                                </div >
                                                 <!-- </div class="  container"> -->
                                                 </div class=" container">
                                                </details>
                                                 <P>
                                                 </P>
                                                 <!-- <div class="  container " style="width: 60rem;"> -->
                                                  <div class="card col " style="width: 70rem;">
                                                    <div class=" alert alert-secondary " role="alert">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                        <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                      </svg>
                                                            QAQC
                                                              </div>
                                                              <div class="row card-body " >
                                                              <a class="col-12  btn btn-info "   role="button">Print Ladel1 </a>
                                                            </div class=" container">
                                                             <!-- </div class="container"> -->
                                                            </div class=" container">
                                                            <p>
                                                            </p>
                                                        <!-- <div class="  container " > -->
                                                           <div class="card col" style="width: 70rem;">
                                                            <div class=" alert alert-secondary " role="alert">
                                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                              </svg>
                                                                SMD
                                                                     </div>
                                                                     <div  class="row card-body">
                                                                     <a class="col-12   btn btn-info "  href="#" role="button">SMD Packing </a>
                                                                     <a class="col-12   btn btn-info "  href="#" role="button">RePrinBarCode </a>
                                                                     <a class="col-12   btn btn-info "  href="#" role="button">Packing Check </a>
                                                                   </div>
                                                                    </div class="container">
                                                                    <p>
                                                                    </p>
      </script>


      <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>

