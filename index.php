<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

 


	<link rel="stylesheet" href="bulma-0.7.2/css/bulma.min.css">
	<title>Calculate calories</title>



    <link rel="stylesheet" type="text/css" href="style_lab4.css">


</head>
<body class="Tbody">
    <div class="tile is-parent">
      <article class="ttile is-child notification is-warning" style="    width: 600px;
    left: 10%;">
        <p class="title">Check Calories</p>
        <p class="subtitle" id = "texttest">Calculate calories your received per day.</p>
        <div class="content">
          <!-- Content -->
  
	

<div>
<form name = "info_form" method="post" enctype="multipart/form-data" action="test.php"  onsubmit="return CheckFrom()">

	
Username: <input class = "control has-icons-left has-icons-right" type="text" name ="input_name"  placeholder="Name*"
title="Please fill out your Username" required>

<br><br>
Age: <input class ="control has-icons-left has-icons-right" type="text" name ="input_age" placeholder="Age*" 
pattern="[0-9][0-9]" title="Please fill out numbers only." required>
<br><br>
Weight (kg.): <input class ="control has-icons-left has-icons-right" type="text" name ="input_weight" placeholder="e.g. 48.4" pattern="[0-9]*.[0-9]" title="Please fill out numbers only." required> 
<br><br>
Hight (cm.): <input class ="control has-icons-left has-icons-right" type="text" name ="input_hight" placeholder="e.g. 158.6" pattern="[0-9]*.[0-9]" title="Please fill out numbers only." required> 
<br><br>

Gender: <input type="radio" id = "gender" name="gender" value="female" checked="">Female
<input type="radio" id = "gender" name="gender" value="male">Male
<br><br>


<div class="file has-name">
  <label class="file-label">
    <input class="file-input" type="file" name="file_pic">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose Image.
      </span>
    </span>
    <span class="file-name">
      Up load your image.
    </span>
  </label>
</div>

<br>




<div class="file has-name">
  <label class="file-label">
    <input class="file-input" type="file" name="file_csv">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose csv file.
      </span>
    </span>
    <span class="file-name">
      Up load your csv file.
    </span>
  </label>
</div>
<div>

<a href="info.csv" >Download CSV</a>

<div class = "submit-btn">

<br>
<input class="button is-info" type="submit" value="submit" style="left: 45%"> 
 </div>

</form>
</div>

     </div>
      </article>
    </div>
  </div>


</body>
</html>