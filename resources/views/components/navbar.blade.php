<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Alex+Brush&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,400;1,300&display=swap');

    .navbar {
      background-color: black !important;
    }

    .title {
      color: white !important;
      font-family: Alex Brush;
      font-size: 40px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
    }

    .nav-link {
      color: white !important;
    }

    .navbar-toggler-icon {
      color: white !important;
    }

    .card {
      border: none !important;
    }

    .dsc-title-footer {
      color: #FFF;
      font-family: Source Sans 3;
      font-size: 18px;
      font-style: normal;
      font-weight: 600;
      line-height: normal;

    }

    .card-text {
      list-style: none;
    }

    .footer-con {
      padding: 25px;
      display: flex;
      flex-direction: column;
      justify-content: center;

    }

    .dsc-footer {
      color: #d1d1d1;
      font-family: Source Sans 3;
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      padding: 5px 0;
      list-style: none;
    }

  </style>

  <style>
    .contain-kota {
      font-family: Arial, sans-serif;
      width: 1269px;
      height: 816px;
      flex-shrink: 0;
      border-top: 5px solid #E58409;
      border-bottom: 5px solid #E58409;
      background: #FFF;
      box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .catalog-container {
      display: flex;
      flex-wrap: wrap;
      height: 221px;
      width: 338px;
      padding: 20px;
      align-items: flex-start;
    }

    .pati {
      display: inline-flex;
      align-items: flex-start;
      gap: 10px;
      text-align: center;
    }

    .pati img {
      width: 383px;
      height: 221px;
      border-bottom: 5px solid #6DC2FF;
      background: url(pati.jpg), lightgray 50% / cover no-repeat;
    }

    .pati text {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 20px;
    }

    .pati h3 {
      color: #6DC2FF;
      font-family: Source Sans 3;
      font-size: 18px;
      font-style: normal;
      font-weight: 700;
      line-height: 100%;
      /* 18px */
      letter-spacing: 0.36px;
    }

    .pati h1 {
      width: 383px;
      color: #000;
      font-family: Amethysta;
      font-size: 24px;
      font-style: normal;
      font-weight: 400;
      line-height: 100%;
      /* 24px */
    }

    .pati p {
      width: 383px;
      color: #414141;
      font-family: Source Sans 3;
      font-size: 18px;
      font-style: normal;
      font-weight: 400;
      line-height: 100%;
      /* 18px */
      letter-spacing: 0.36px;
    }

    .pati h2 {
      width: 383px;
      color: #414141;
      font-family: Source Sans 3;
      font-size: 18px;
      font-style: normal;
      font-weight: 400;
      line-height: 100%;
      /* 18px */
      letter-spacing: 0.36px;
    }

  </style>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: white;
    }

    header {
      position: relative;
      width: 100%;
      margin: 0 auto;
      overflow: hidden;
    }

    header img {
      width: 100%;
      height: 50vh;
      object-fit: cover;
      display: block;
    }

    #detail {
      margin: 100px auto;
      min-width: 300px;
      width: 40%;
      font-size: 18px;
      font-family: 'Source Sans 3', sans-serif;
    }

    #detail h1 {
      text-align: center;
      font-size: 48px;
      font-family: Amethysta;
    }

    #detail h4 {
      color: #6DC2FF;
    }

    span {
      color: black;
    }

    #pojokAtas {
      display: block;
      position: absolute;
      right: -30px;
    }

    #hiasan {
      display: block;
      position: absolute;
      top: 118vh;
      left: 24%;
    }

    #pojokBawah {
      display: block;
      position: absolute;
      left: -30px;
      top: 100vh;
    }

  </style>
  <style>
    .section-bottom {
      margin: 0;
      padding: 0;
      background-color: white;
    }

    section {
      max-width: 90%;
      margin: 100px auto;
      display: flex;
      flex-direction: column;
      gap: 50px;


    }

    section .hiasan {
      width: 100px;

    }

    section .card {
      display: flex;
      gap: 15px;

    }

    section .card .desc {
      display: flex;
      width: 40%;
      flex-direction: column;
      text-indent: 6;

    }

    section .card img {
      width: 400px;
      height: 250px;

    }

    .card h1 {
      line-height: 12px;
      font-size: 34px;
      font-family: Amethysta;
    }

    .card p,
    .card a {
      color: black;
      font-size: 18px;
      font-family: 'Source Sans 3', sans-serif;
      text-decoration: none;
    }

    .card .desc h4 {
      font-size: 18px;
      font-family: 'Source Sans 3', sans-serif;
      color: #6DC2FF;
    }

    #reverse {
      flex-direction: row-reverse;
      text-align: right;
    }

    .hiasan1 {
      height: 120px;
      display: block;
      position: absolute;
      right: -30px;
    }

    .hiasan2 {
      height: 200px;
      display: block;
      position: absolute;
      top: 500px;
      left: -20px;
    }

    .hiasan3 {
      height: 200px;
      display: block;
      position: absolute;
      bottom: -300px;
      right: -30px;
    }

  </style>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" />
  <style>
    body {
      margin: 0px;
      padding: 0px;
      scroll-behavior: smooth;
    }

    .mail {
      text-decoration: none;
      color: #fff;
      cursor: pointer;
    }

    #about {
      cursor: pointer;
    }

    #wrapper {
      background-image: linear-gradient(rgba(0, 0, 0, 0.7),
          rgba(0, 0, 0, 0.8)),
        url("hero-img.jpg");
      background-position: center;
      background-size: cover;
      height: 100vh;
      text-align: center;
    }

    #form-box {
      /*    background-color: aqua;*/
      padding: 1%;
      top: 50%;
      position: absolute;
      left: 40%;
    }

    .choose-lang {
      text-decoration: none;
      color: black;
      background-color: #fff;
      margin-left: 30px;
      border: 2px solid #ff9933;
      padding: 15px;
      border-radius: 20px;
      font-family: monospace;
      /*    letter-spacing: 1.5px;*/
      /*    font-weight: 400;*/
      transition: background-color 0.3s, border 0.2s, color 0.2s;
    }

    .choose-lang:hover {
      background-color: #ff9933;
      color: #fff;
      cursor: pointer;
      /*    width: 120px;*/
      font-size: 110%;
    }

    #language {
      background-color: white;
      padding: 12px;
      border-radius: 5px;
      cursor: pointer;
      border: 2px solid black;
    }

    #language:hover {
      background-color: #fff;
    }

    #language option {
      background-color: #fff;
    }

    .quiz {
      background-color: #fff;
      text-align: center;
      /*    padding: 0%;*/
      margin-top: 20px;
      height: 100vh;
    }

    #info {
      height: 25px;
      background-color: #fff;
    }

    #score {
      width: 50%;
      float: left;
      font-size: 25px;
    }

    #ques-left {
      width: 50%;
      float: left;
      font-size: 25px;
    }

    #ques-view {
      /*    background-color:aqua;*/
      height: 35px;
      margin-top: 10px;
      padding: 2px;
    }

    .ques-circle {
      float: left;
      border-radius: 50%;
      width: 35px;
      height: 90%;
      margin-left: 10px;
      margin-top: 10px;
    }

    .correct {
      background-color: #2ecc71;
    }

    .incorrect {
      background-color: #fc5c65;
      color: #fff;
    }

    .question {
      /*    background-color: antiquewhite;*/
      font-family: "Roboto Slab", sans-serif;
      letter-spacing: 0.13em;
    }

    .choice {
      background-color: #fff;
      padding: 3%;
    }

    .options {
      background-color: #fff;
      display: block;
      margin-left: 13%;
      font-size: 25px;
      font-weight: 100;
      margin-top: 30px;
      text-align: left;
    }

    input[type="radio"] {
      border: 5px solid white;
      width: 20px;
      height: 1.3em;
      float: left;
    }

    .ans-btn {
      background-color: #fff;
      padding: 2%;
    }

    .submit-answer {
      background-color: white;
      border: 2px solid #ff9933;
      padding: 15px;
      border-radius: 20px;
      font-family: monospace;
      transition: background-color 0.3s, border 0.2s, color 0.2s;
    }

    .submit-answer:hover {
      background-color: #ff9933;
      padding: 16px;
      color: #fff;
      cursor: pointer;
      border-radius: 20px;
    }

    .view-results {
      text-decoration: none;
      color: black;
      background-color: white;
      border: 2px solid #ff9933;
      padding: 15px;
      border-radius: 20px;
      font-family: monospace;
      transition: background-color 0.3s, border 0.2s, color 0.2s;
    }

    .view-results:hover {
      background-color: #ff9933;
      padding: 16px;
      color: #fff;
      cursor: pointer;
      border-radius: 20px;
    }

    /*Final Results*/

    .final-result {
      background-color: #fff;
      text-align: center;
      padding: 10px;
      font-size: 1.5em;
      height: 100vh;
    }

    .solved-ques-no {
      padding: 10px;
    }

    .right-wrong {
      padding: 10px;
    }

    #display-final-score {
      padding: 5%;
    }

    .remark {
      padding: 5%;
    }

    #restart {
      background-color: #ff9933;
      margin-left: 30px;
      border: 2px solid #ff9933;
      padding: 15px;
      border-radius: 20px;
      font-size: 80%;
      transition: background-color 0.3s, border 0.2s, color 0.2s;
    }

    #restart:hover {
      background-color: #ff9933;
      color: #fff;
      cursor: pointer;
      /*    width: 120px;*/
      font-size: 90%;
    }

    @media only screen and (max-width: 1250px) {
      .options {
        margin-left: 8%;
      }
    }

    @media only screen and (max-width: 850px) {
      .options {
        margin-left: 4%;
      }
    }

    @media only screen and (max-width: 650px) {
      .options {
        display: block;
        margin-top: 3%;
      }
    }

    @media only screen and (max-width: 550px) {
      .options {
        margin-top: 3%;
      }

      .choose-lang {
        display: block;
        margin-top: 25px;
        margin-left: 0px;
      }

      #language {
        display: block;
      }
    }

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="container-md">
        <a class="navbar-brand title" href="/">Berbudayo</a>
      </div>
    </div>
  </nav>
