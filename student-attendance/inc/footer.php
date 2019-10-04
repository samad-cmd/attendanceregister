<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#more {display: none;}
</style>
</head>
<div class="container mt-3">
		<div class="card card-body bg-light text-center">
		<h2>INSPIRATION.&nbsp&nbsp&nbspINTELLIGENCE.&nbsp&nbsp&nbspINNOVATION.</h2>
	
<body>

<h3>About Education</h3>
<p>Why is education so important because it is a part of our life.<span id="dots">...</span><span id="more">
Early Childhood and Higher Education Education is so much important for success in life. 
 Higher Education is important for the personal, social and economic development of the nation. 
 Education is important to live with happiness and prosperity.
Education empowers minds that will be able to conceive good thoughts and ideas. 
Education enables students to do the analysis while making life decisions.
Life gives various survival challenges for humans. But education guide human to fight with failure and get success in life..</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>

<script>
function myFunction() {
	var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
	</div>
		</div>
</body>
</html>