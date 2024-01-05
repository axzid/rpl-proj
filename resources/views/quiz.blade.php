@include('components.navbar')
<div id="wrapper">
  <div id="form-box">
    <form>
      <select id="language">
        <option value="HTML" selected="selected">Budaya</option>
      </select>
      <a href="#lb3" class="choose-lang">Mulai Quiz</a>
    </form>
  </div>
</div>

<div class="quiz">
  <div id="info">
    <div id="score">Score: 0</div>
    <div id="ques-left">Question:1/20</div>
  </div>
  <div id="ques-view"></div>
  <div class="question">
    <h1>Question</h1>
  </div>

  <div class="choice">
    <div class="options">
      <input type="radio" name="options" value="option1" id="opt0" /><label for="opt0" id="lb0">Option1</label>
    </div>
    <div class="options">
      <input type="radio" name="options" value="option2" id="opt1" /><label for="opt1" id="lb1">Option2</label>
    </div>
    <div class="options">
      <input type="radio" name="options" value="option3" checked="checked" id="opt2" /><label for="opt2" id="lb2">Option3</label>
    </div>
    <div class="options">
      <input type="radio" name="options" value="option4" id="opt3" /><label for="opt3" id="lb3">Option4</label>
    </div>
  </div>

  <div class="ans-btn">
    <button type="button" class="submit-answer">Submit Answer</button>
    <a href="#display-final-score" type="button" class="view-results">View Results</a>
  </div>
</div>

<div class="final-result">
  <h1>Quiz sudah berahir</h1>
  <div class="solved-ques-no">Anda telah menjawab 10 quiz budaya</div>
  <div class="right-wrong">3 Benar dan 7 Salah</div>
  <div id="display-final-score">Nilai ahir anda: 35</div>
  <button id="restart">Restart Quiz</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/Javascript">
  //function myfunc(){
      //    alert(document.getElementById("language").value);
      //}

      var countQues=0;
      var lang;
      var score=0;

      var HTMLquestions=[

          {
              question: "Budaya apa yang ada di Kudus?",
              choices: ["Luwur","Tari Kecak","Debus","Karapan Sapi"],
              answer: 1

          },

          {
              question: "Tradisi apa yang menarik saat lebaran idul fitri di Jepara?",
              choices: ["Panjat pinang di laut","Syawalan","Dandangan","Wekasan"],
              answer: 1

          },
          {
              question: "Sejak kapan panjat pinang di laut berlangsung?",
              choices: ["Penjajahan Jepang","Penjajahan Spanyol","Penjajahan Inggris","Penjajahan Belanda"],
              answer: 4

          },
          {
              question: "Makanan khas pati manakah yang benar?",
              choices: ["Ayam betutu","Gandul","Nasi kebuli","Rawon"],
              answer: 2

          },
          {/*5*/
              question: "Siapa yang membangun menara Kudus?",
              choices: ["Sunan kalijaga","Sunan ampel","Sunan gunung jati","Sunan kudus"],
              answer: 4

          },
          {
              question: "Apa yang dilakukan dalam tradisi rebo wekasan di makam sunan kudus?",
              choices: ["Pesta rakyat","Ritual bersih bersih","Tumepeng barokah","Ziarah doa bersama"],
              answer: 4

          },
          {
              question: "Apa yang membuat lentog tanjung istimewa?",
              choices: ["Penggunaan daging kerbau sebagai bahan utama","Penggunaan daun jati untuk membungkus makanan","Kuah kental bersantan","Dibuat mbah suro"],
              answer: 2

          },
          {
              question: "Apa yang menjadi tujuan utama tradisi jenang tabokan?",
              choices: ["Merayakan tahun baru islam","Menjaga hubungan harmonis","Menghormati sunan kudus dan para leluhur","Menyelenggarakan pesta rakyat"],
              answer: 2

          },
          {
              question: "Apa yang menjadi puncak acara tradisi dandangan?",
              choices: ["Penyajian nasi kepel","Kirab tandu menuju masjid wali at-taqwah","Pukulan bedug menara kudus","Pembacaan doa bersama"],
              answer: 3

          },
          {/*10*/
              question: "Kapan tradisi wiwit kopi biasanya dilakukan?",
              choices: ["Pada bulan muharram","Pada bulan september","Pada saat menjelang maulid","Pada bulan syawal"],
              answer: 2

          }

      ];

      var CSSquestions=[

          {
              question: "If we want define style for an unique element, then which css selector will we use ?",
              choices: ["Id","text","class","name"],
              answer: 1

          },
          {
              question: "If we don't want to allow a floating div to the left side of an element, which css property will we use ?",
              choices: ["margin","clear","float","padding"],
              answer: 2

          },
          {
              question: "Suppose we want to arragnge five nos. of DIVs so that DIV4 is placed above DIV1. Now, which css property will we use to control the order of stack ?",
              choices: ["d-inex","s-index","x-index","z-index"],
              answer: 4

          },
          {/*4*/
              question: "Can we align a Block element by setting the left and right margins ?",
              choices: ["Yes, we can","Not Possible","Depends on browser","Depends upon operating System"],
              answer: 2

          },
          {
              question: "If we want to wrap a block of text around an image, which css property will we use ?",
              choices: ["wrap","push","float","align"],
              answer: 3

          },
          {/*6*/
              question: "If we want to show an Arrow as cursor, then which value we will use ?",
              choices: ["pointer","default","arrow","arr"],
              answer: 2

          },
          {
              question: "If we want to use a nice looking green dotted border around an image, which css property will we use?",
              choices: ["border-color","border-decoration","border-style","border-line"],
              answer: 3

          },
          {/*8*/
              question: "Which of the following properties will we use to display border around a cell without any content ?",
              choices: ["empty-cell","blank-cell","noncontent-cell","void-cell"],
              answer: 1

          },
          {
              question: "What should be the table width, so that the width of a table adjust to the current width of the browser window?",
              choices: ["640 pixels","100%","full-screen","1024px"],
              answer: 2

          },
          {
              question: "How can we write comment along with CSS code ?",
              choices: ["/* a comment */","// a comment //","/ a comment /","<' a comment'>"],
              answer: 1

          }

      ];
      var JSquestions=[

          {
              question: "Which of the following is true about variable naming conventions in JavaScript?",
              choices: ["JavaScript variable names must begin with a letter or the underscore character.","JavaScript variable names are case sensitive.","Both of the above."," None of the above."],
              answer: 3

          },
          {/*wscubetech*/
              question: " Which of the following is a server-side Java Script object?",
              choices: ["Function","File","FilleUpload","Data"],
              answer: 2

          },
          {
              question: "Java script can be used for Storing the form's contents to a database file on the server",
              choices: ["False","True"],
              answer: 1

          },
          {
              question: "How does Java Script store dates in objects of Date type?",
              choices: ["The number of days since January 1st, 1900","The number of seconds since January 1st, 1970","The number of milliseconds since January 1st, 1970","The number of picoseconds since January 1st, 1970"],
              answer: 3

          },
          {
              question: "C-style block-level scoping is not supported in Java script",
              choices: ["False","True"],
              answer: 2

          },
          {
              question: "JavaScript ignores extra spaces in Syntax",
              choices: ["True","False"],
              answer: 2

          },
          {
              question: "Which of the following is the tainted property of a window object in Java Script?",
              choices: ["Pathname","Protocol","Defaultststus","Host"],
              answer: 3

          },
          {
              question: "Which attribute needs to be changed to make elements invisible?",
              choices: ["visibilty","visible","invisible","None of the above"],
              answer: 1

          },
          {
              question: " Javascript is an object oriented language?",
              choices: ["False","True"],
              answer: 2

          },
          {
              question: "What is the alternate name for Java script?",
              choices: ["LimeScript","ECMScript","Both of the above","ECMAScript"],
              answer: 4

          }

      ];
      var PYquestions=[

          {
              question: "What is the output of the following program : print(Hello World'[::-1])",
              choices: ["dlroW olleH","Hello Worl","d","Error"],
              answer: 1

          },
          {
              question: "Given a function that does not return any value, what value is shown when executed at the shell?",
              choices: ["int","bool","void","None"],
              answer: 4

          },
          {
              question: "Which module in Python supports regular expressions?",
              choices: ["re","regex","pyregex","None of the above"],
              answer: 1

          },
          {
              question: "What is the output of the following program : (tricky ques.)  print (0.1 + 0.2 == 0.3) ",
              choices: ["True","False","Machine Dependent","Error"],
              answer: 2

          },
          {
              question: "Which of the following is not a complex number?",
              choices: ["k = 2 + 3j","k = complex(2, 3)","k = 2 + 3l","k = 2 + 3J"],
              answer: 3

          },
          {
              question: "What does ~~~~~~5 evaluate to?",
              choices: ["+5","-11","+11","-5"],
              answer: 1

          },
          {
              question: "Given a string s = “Welcome”, which of the following code is incorrect?",
              choices: ["print s[0]","print s.lower()","s[1] = ‘r’","print s.strip()"],
              answer: 3

          },
          {
              question: "________ is a simple but incomplete version of a function.",
              choices: ["Stub","Function","A function developed using bottom-up approach","A function developed using top-down approach"],
              answer: 1

          },
          {
              question: "To start Python from the command prompt, use the command ______",
              choices: ["execute python","go python","python","run python"],
              answer: 3

          },
          {
              question: "Which of the following is correct about Python?",
              choices: ["It supports automatic garbage collection.","It can be easily integrated with C, C++, COM, ActiveX, CORBA, and Java","Both of the above","None of the above"],
              answer: 3

          }

      ];
      var Cquestions=[

          {
              question: "C Language was developed in the year ____",
              choices: ["1970","1975","1980","1985"],
              answer: 1

          },
          {
              question: "Which one is not a reserve keyword in C Language?",
              choices: ["auto","main","case","register"],
              answer: 2

          },
          {
              question: "A C variable name can start with a ____",
              choices: ["Number","Plus Sign","Underscore","Asterisk"],
              answer: 3

          },
          {
              question: "Prototype of a function means _____",
              choices: ["Name of Function","Output of Function","Declaration of Function","Input of a Function"],
              answer: 3

          },
          {
              question: "Name the loop that executes at least once.",
              choices: ["for","If","do-while","while"],
              answer: 3

          },
          {
              question: "Far pointer can access _____",
              choices: ["Single memory location","No memory location","All memory location","First and Last Memory Address"],
              answer: 3

          },
          {
              question: "A pointer pointing to a memory location of the variable even after deletion of the variavle is known as _____",
              choices: ["far pointer","dangling pointer","null pointer","void pointer"],
              answer: 2

          },
          {
              question: "An uninitialized pointer in C is called ___",
              choices: ["Constructor","dangling pointer","Wild Pointer","Destructor"],
              answer: 3

          },
          {
              question: "A pointer that is pointing to NOTHING is called ____",
              choices: ["VOID Pointer","DANGLING Pointer","NULL Pointer","WILD Pointer"],
              answer: 3

          },
          {
              question: "Who is known as the father of C Language ?",
              choices: ["Digvijay","James A. Sosling","Dr. E. F. Codd","Dennis Ritchie"],
              answer: 4

          }

      ];





      //alert(questions.length);
      document.getElementById("score").textContent="Score : "+0;
      document.querySelector(".view-results").style.display="none";
      document.querySelector(".quiz").style.display="none";
      document.querySelector(".final-result").style.display="none";








      document.querySelector(".choose-lang").addEventListener("click",function(){

          lang=document.getElementById("language").value+"questions";
          document.getElementById("ques-left").textContent="Question : "+(countQues+1)+"/"+window[lang].length;

      //    alert(window[lang].length);
          //window["anything"] will convert "anything" string to object because window is also an object
          document.querySelector(".quiz").style.display="block";

          document.querySelector(".question").innerHTML="<h1>"+window[lang][countQues].question+"</h1>";
           for (i=0;i<=3;i++){
              document.getElementById("opt"+i).value=window[lang][countQues].choices[i];
              document.getElementById("lb"+i).innerHTML=window[lang][countQues].choices[i];

          };/*For loop Closed*/

      //    window.location.href="#score";

      });





      document.querySelector(".submit-answer").addEventListener("click",function(){
      //     alert(window[lang][countQues].choices[window[lang][countQues].answer-1]);
      //     alert(document.querySelector('input[name="options"]:checked').value);

          if(document.querySelector('input[name="options"]:checked').value===window[lang][countQues].choices[window[lang][countQues].answer-1]){

              score+=10;
              document.getElementById("score").textContent="Score : "+score;
              document.getElementById("ques-view").innerHTML+="<div class='ques-circle correct'>"+(countQues+1)+"</div>";

          }else{

              score-=5;
              document.getElementById("score").textContent="Score : "+score;
              document.getElementById("ques-view").innerHTML+="<div class='ques-circle incorrect'>"+(countQues+1)+"</div>";
          };

          if (countQues<window[lang].length-1){
              countQues++;
          }else{
              document.querySelector(".submit-answer").style.display="none";
              document.querySelector(".view-results").style.display="unset";

          }

          document.getElementById("ques-left").textContent="Question : "+(countQues+1)+"/"+window[lang].length;
          document.querySelector(".question").innerHTML="<h1>"+window[lang][countQues].question+"</h1>";
          for (i=0;i<=3;i++){
              document.getElementById("opt"+i).value=window[lang][countQues].choices[i];
              document.getElementById("lb"+i).innerHTML=window[lang][countQues].choices[i];

          };/*For loop Closed*/

      });

      document.querySelector(".view-results").addEventListener("click",function(){

          document.querySelector(".final-result").style.display="block";

          document.querySelector(".solved-ques-no").innerHTML="Kamu telah menjawab "+(countQues+1)+" Quiz Budaya";

          var correct= document.getElementById("ques-view").getElementsByClassName("correct").length;

          document.querySelector(".right-wrong").innerHTML=correct+" Benar dan "+((countQues+1)-correct)+" Salah";

          document.getElementById("display-final-score").innerHTML="Skor Anda: "+score;


          }

      //    window.location.href="#display-final-score";

      );

      document.getElementById("restart").addEventListener("click",function(){
          location.reload();

      });

      document.getElementById("about").addEventListener("click",function(){
          alert("Quiz Website Project Created By Digvijay Singh");

      });


      /*Smooth Scroll*/


      $(document).on('click', 'a[href^="#"]', function (event) {
          event.preventDefault();

          $('html, body').animate({
              scrollTop: $($.attr(this, 'href')).offset().top
          }, 1000);
      });



      /*Smooth Scroll End*/
</script>

