<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:image" content="saura1.jpg"/>
   <link rel="icon" href="images/favicon.jpg">
   <title>Hello! ♥</title>
   <!-- FontAwesome-cdn include -->
   <link rel="stylesheet" href="all.min.css">
   <!-- Google fonts include -->
   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&amp;family=Roboto:wght@700&amp;display=swap" rel="stylesheet">
   <!-- Bootstrap-css include -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!-- Animate-css include -->
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <!-- Main-StyleSheet include -->
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<script>
function myFunction() {
  alert("Aba! Pinipindot mo pa ako focus ka!! HAHAHA!");
}
</script>

<body>
   <div class="wrapper position-relative overflow-hidden">
      <!-- Top content -->
      <div class="container-fluid p-0">
         <div class="row">
            <div class="col-md-6">
               <div class="logo_area mt-5 ms-5">
                  <a href="#" onclick="myFunction()">
                     <img src="work.gif" alt="image_not_found">
                  </a>
               </div>
            </div>
        
         </div>
      </div>
      <div class="container">
         <form class="multisteps_form" id="wizard" method="POST" action="quiz-checker.php">
            <!------------------------- Step-1 ----------------------------->
            <div class="multisteps_form_panel">
               <div class="row">
                  <div class="content_box position-relative text-center bg-white py-5 position-relative">
                     <div class="form_question_mark rounded-pill position-absolute">
                        <img src="question.png" alt="image_not_found">
                     </div>
                     <div class="question_title py-4 text-white text-uppercase"><br><br>
                        <h1>Q1. Sino ba gumawa nento?</h1>
                     </div>
                  </div>
               </div>

               <div class="row row-cols-2 mt-5 form_items">
                  <div class="col">
                     <div class="card float-end box_1">
                        <div class="card-body">
                           <label class="step_1 position-relative text-center" for="opt_1">
                              <div class="card-title text-white">Martel</div>
                              <span class="position-absolute rounded-pill bg-white">1</span>
                              <input type="radio" id="opt_1" name="question1" value="Martel" required>
                           </label>
                        </div>
                     </div>
                  </div>

                  <div class="col">
                     <div class="card float-start">
                        <div class="card-body box_2">
                           <label class="step_1 position-relative text-center active" for="opt_2">
                              <div class="card-title text-white">Caloocan boy</div>
                              <span class="position-absolute rounded-pill bg-white">2</span>
                              <input type="radio" id="opt_2" name="question1" value="Caloocan Boy">
                           </label>
                        </div>
                     </div>
                  </div>

                  <div class="col">
                     <div class="card float-end mt-5">
                        <div class="card-body box_3">
                           <label class="step_1 position-relative text-center" for="opt_3">
                              <div class="card-title text-white">Imong mama</div>
                              <span class="position-absolute rounded-pill bg-white">3</span>
                              <input type="radio" id="opt_3" name="question1" value="Imong Mama">
                           </label>
                        </div>
                     </div>
                  </div>
                  
                  <div class="col">
                     <div class="card float-start mt-5">
                        <div class="card-body box_4">
                           <label class="step_1 position-relative text-center" for="opt_4">
                              <div class="card-title text-white">Bby</div>
                              <span class="position-absolute rounded-pill bg-white">4</span>
                              <input type="radio" id="opt_4" name="question1" value="Bby">
                           </label>
                        </div>
                     </div>
                  </div>
               </div>


            </div>
            <!------------------------- Step-2 ----------------------------->
            <div class="multisteps_form_panel">
               <div class="row">
                  <div class="content_box position-relative text-center bg-white py-5 position-relative">
                     <div class="form_question_mark rounded-pill position-absolute">
                     <img src="question.png" alt="image_not_found">
                     </div>
                     <div class="question_title py-4 text-white text-uppercase"><br><br>
                        <h1>Q2. Para kanino ba etong quiz?</h1>
                     </div>
                  </div>
               </div>
               <div class="row row-cols-2 mt-5 form_items">
                  <div class="col">
                     <div class="card float-end box_1">
                        <div class="card-body">
                           <label class="step_2 position-relative text-center" for="opt_5">
                              <div class="card-title text-white">Berry</div>
                              <span class="position-absolute rounded-pill bg-white">1</span>
                              <input type="radio" id="opt_5" name="question2" value="Berry" required>
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card float-start">
                        <div class="card-body box_2">
                           <label class="step_2 position-relative text-center" for="opt_6">
                              <div class="card-title text-white">Saura</div>
                              <span class="position-absolute rounded-pill bg-white">2</span>
                              <input type="radio" id="opt_6" name="question2" value="Saura">
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card float-end mt-5">
                        <div class="card-body box_3">
                           <label class="step_2 position-relative text-center" for="opt_7">
                              <div class="card-title text-white">Calvin</div>
                              <span class="position-absolute rounded-pill bg-white">3</span>
                              <input type="radio" id="opt_7" name="question2" value="Calvin">
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card float-start mt-5">
                        <div class="card-body box_4">
                           <label class="step_2 position-relative text-center" for="opt_8">
                              <div class="card-title text-white">Yuri</div>
                              <span class="position-absolute rounded-pill bg-white">4</span>
                              <input type="radio" id="opt_8" name="question2" value="Yuri">
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!------------------------- Step-3 ----------------------------->
            <div class="multisteps_form_panel">
               <div class="row">
                  <div class="content_box position-relative text-center bg-white py-5 position-relative">
                     <div class="form_question_mark rounded-pill position-absolute">
                     <img src="question.png" alt="image_not_found">
                     </div>
                     <div class="question_title py-4 text-white text-uppercase"><br><br>
                        <h1>Q3. Ano madalas sinasabe ko kapag 1:43 am na?</h1>
                     </div>
                  </div>
               </div>
               <div class="row row-cols-2 mt-5 form_items">
                  <div class="col">
                     <div class="card float-end box_1">
                        <div class="card-body">
                           <label class="step_3 position-relative text-center" for="opt_9">
                              <div class="card-title text-white">Wala</div>
                              <span class="position-absolute rounded-pill bg-white">1</span>
                              <input type="radio" id="opt_9" name="question3" value="Wala" required>
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card float-start">
                        <div class="card-body box_2">
                           <label class="step_3 position-relative text-center" for="opt_10">
                              <div class="card-title text-white">Baliw ka ba?</div>
                              <span class="position-absolute rounded-pill bg-white">2</span>
                              <input type="radio" id="opt_10" name="question3" value="Baliw ka ba?">
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card float-end mt-5">
                        <div class="card-body box_3">
                           <label class="step_3 position-relative text-center" for="opt_11">
                              <div class="card-title text-white">Okayy!</div>
                              <span class="position-absolute rounded-pill bg-white">3</span>
                              <input type="radio" id="opt_11" name="question3" value="Okayy">
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card float-start mt-5">
                        <div class="card-body box_4">
                           <label class="step_3 position-relative text-center" for="opt_12">
                              <div class="card-title text-white">Goodnight!</div>
                              <span class="position-absolute rounded-pill bg-white">4</span>
                              <input type="radio" id="opt_12" name="question3" value="Goodnight">
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!------------------------- Step-4 ----------------------------->
            <div class="multisteps_form_panel">
               <div class="row">
                  <div class="content_box position-relative text-center bg-white py-5 position-relative">
                     <div class="form_question_mark rounded-pill position-absolute">
                     <img src="question.png" alt="image_not_found">
                     </div>
                     <div class="question_title py-4 text-white text-uppercase"><br><br>
                        <h1>Q4. Sino pinaka maganda sa mga nabanggit sa baba?</h1>
                     </div>
                  </div>
               </div>
               <div class="row row-cols-2 mt-5 form_items">
                  <div class="col">
                     <div class="card float-end box_1">
                        <div class="card-body">
                           <label class="step_4 position-relative text-center" for="opt_13">
                              <div class="card-title text-white">Rosaura</div>
                              <span class="position-absolute rounded-pill bg-white">1</span>
                              <input type="radio" id="opt_13" name="quest4" value="Rosaura" required>
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card float-start">
                        <div class="card-body box_2">
                           <label class="step_4 position-relative text-center" for="opt_14">
                              <div class="card-title text-white">Ura</div>
                              <span class="position-absolute rounded-pill bg-white">2</span>
                              <input type="radio" id="opt_14" name="quest4" value="Ura">
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card float-end mt-5">
                        <div class="card-body box_3">
                           <label class="step_4 position-relative text-center" for="opt_15">
                              <div class="card-title text-white">Sau</div>
                              <span class="position-absolute rounded-pill bg-white">3</span>
                              <input type="radio" id="opt_15" name="quest4" value="Sau">
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card float-start mt-5">
                        <div class="card-body box_4">
                           <label class="step_4 position-relative text-center" for="opt_16">
                              <div class="card-title text-white">Syempre lahat!!</div>
                              <span class="position-absolute rounded-pill bg-white">4</span>
                              <input type="radio" id="opt_16" name="quest4" value="Lahat">
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
         <!-- Service img -->
         <div class="service_img">
            <img class="position-absolute" src="couple.gif" alt="image_not_found">
         </div>
         <!-- Step-progress -->
         <div class="step_progress position-absolute">
            <div class="step position-relative text-center rounded-pill bg-white active">1</div>
            <div class="step position-relative text-center rounded-pill bg-white mt-5">2</div>
            <div class="step position-relative text-center rounded-pill bg-white mt-5">3</div>
            <div class="step position-relative text-center rounded-pill bg-white mt-5">4</div>
         </div>
         <!------------------------- Form button ----------------------------->
         <div class="row float-end my-5">
            <div>
               <button type="button" class="f_btn prev_btn text-uppercase position-absolute" id="prevBtn" onclick="nextPrev(-1)"><span><i class="fas fa-arrow-left"></i></span> Last
                  Question</button>
               </div>
               <div>
                  <button type="button" class="f_btn next_btn text-uppercase position-absolute" id="nextBtn"
                  onclick="nextPrev(1)">Next</button>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery-js include -->
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <!-- jQuery-js include -->
      <script src="assets/js/countdown.js"></script>
      <!-- Bootstrap-js include -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- jQuery-validate-js include -->
      <script src="assets/js/jquery.validate.min.js"></script>
      <!-- Custom-js include -->
      <script src="assets/js/script.js"></script>
   </body>
   

</html>