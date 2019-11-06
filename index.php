<html>
 <head>
  <meta charset="utf-8">
  <title>output</title>

<p>fjgrjggle</p>
<style>
  .header-h1 {
    position: relative;
    margin-bottom: .5rem;
  }
  .header-h1::after {
    content: "";
    position: absolute;
    border-top: 2px solid #00FF00;
    border-bottom: 2px solid #00FF00;
    height: .375rem;
    left: 0;
    top: 50%;
    width: 100%;
    transform: translateY(-50%);
    z-index: -999;
  }
  .header-h1 h1 {
    font-size: 1.5rem;
    color: #00FF00;
    display: inline-block;
    background: #000000;
    margin-bottom: 0;
    padding-right: 1rem;
    text-transform: uppercase;
  }
  .header-h1-center {
    text-align: center;
  }
  .header-h1-center h1 {
    padding-left: 1rem;
  }
  .header-h1-right {
    text-align: right;
  }
  .header-h1-right h1 {
    padding-left: 1rem;
    padding-right: 0;
  }
</style>
<div class="header-h1 header-h1-center">
  <h1>Курсы валют в Днепре</h1>
</div>




<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




<table class="table table-inverse">
  <thead>

    <tr style="color:#66CDAA;">
      <th>№</th>
      <th>Валюта</th>
      <th>Покупка</th>
      <th>Продажа</th>
    </tr>
  </thead>
  <tbody>
     <tr style="color:#EE82EE;">
      <th scope="row">1</th>
      <td>USD/UAH</td>
      <td>24.3</td>
      <td>24.45</td>
    </tr>
     <tr style="color:#EE82EE;">
      <th scope="row">2</th>
      <td>EUR/UAH</td>
      <td>26.85</td>
      <td>27.05</td>
    </tr>
     <tr style="color:#EE82EE;">
      <th scope="row">3</th>
      <td>BYN/UAH</td>
      <td>11</td>
      <td>13</td>
    </tr>
 <tr style="color:#EE82EE;">
      <th scope="row">4</th>
      <td>RUB/UAH</td>
      <td>0.372</td>
      <td>0.378</td>
    </tr>
  </tbody>
</table>
 </head>





 <body>
 <h5 style="color:#483D8B;">ПОКУПКА</h5>
<form method="POST">
<select name="currency">
<option value="usd" >USD</option>
<option value="eur" >EUR</option>
<option value="byn" >BYN</option>
<option value="rub" >RUB</option>

</select>
<input name="cena"  type="text"/>
</form>

 
<p style="color:#483D8B;">Получаете:</p>

<?php 
$currency = $_POST['currency'];
$cena = $_POST['cena'];

$usd = 24.3; 
$eur = 26.85; 
$byn = 11;
$rub = 0.372;
$grn = гривен;

switch ($currency)
{
case "usd":
$sumausd = $cena * $usd; 
echo "<p style='color:#00FF00;'>$sumausd $grn</p>";
break;

case "rub":
$sumarub= $cena * $rub; 
echo "<p style='color:#00FF00;'>$sumarub $grn</p>";
break;

case "byn":
$sumabyn = $cena * $byn; 
echo "<p style='color:#00FF00;'>$sumabyn $grn</p>";
break;

case "eur":
$sumaeur = $cena * $eur; 
echo "<p style='color:#00FF00;'>$sumaeur $grn</p>";
break;

default:
echo "<p style='color:#00FF00;'>$cena $currency</p>";
break;
}
?>
</p>

 </body>





<body>
 <h5 style="color:#483D8B;">ПРОДАЖА</h5> 
<form method="POST">
<select name="currenc">
<option value="usd" >USD</option>
<option value="eur" >EUR</option>
<option value="byn" >BYN</option>
<option value="rub" >RUB</option>

</select>
<input name="cen"  type="text"/>
</form>

<p style="color:#483D8B;">Отдаёте:</p>


<?php 
$currenc = $_POST['currenc'];
$cen = $_POST['cen'];

$usd = 24.45; 
$eur = 27.05; 
$byn = 13;
$rub = 0.378;
$grn = гривен;

switch ($currenc)
{
case "usd":
$sumausd = $cen * $usd; 
echo "<p style='color:#00FF00;'>$sumausd $grn</p>";
break;

case "rub":
$sumarub= $cen * $rub; 
echo "<p style='color:#00FF00;'>$sumarub $grn</p>"; 
break;

case "byn":
$sumabyn = $cen * $byn; 
echo "<p style='color:#00FF00;'>$sumabyn $grn</p>";
break;

case "eur":
$sumaeur = $cen * $eur; 
echo "<p style='color:#00FF00;'>$sumaeur $grn</p>";
break;

default:
echo "<p style='color:#00FF00;'>$cen $currenc</p>";
break;
}
?>
</p>
</body>
</html>