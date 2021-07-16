<?php  
 
       if (!isset($_SESSION['CUSID'])){
      redirect("index.php");
     }
     ?>
<form onsubmit="return orderfilter()" action="customer/controller.php?action=processorder" method="post" >   
<section id="cart_items">
    <div class="container">
      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Pembayaran</li>
        </ol>
      </div>
      <div class="row">
        <h1>Silahkan Lakukan Pembayaran ke Rekening Berikut</h1>
    	</div>
    		<div class="table-responsive cart_info"> 
          <?php
          $id = $_SESSION['CUSID'];
          $koneksi = mysqli_connect("localhost","root","","db_ecommerce");
          $mysql = mysqli_query($koneksi,"SELECT * FROM tblsummary WHERE ORDEREDSTATS = 'Pending' AND CUSTOMERID = $id ORDER BY ORDEREDNUM DESC");
          $row = mysqli_fetch_row($mysql);
          ?>
            	<table class="table table-condensed" id="table">
            		<tr>
            			<td>BANK</td>
            			<td>:</td>
            			<td>BRI</td>
            		</tr>
            		<tr>
            			<td>A/N</td>
            			<td>:</td>
            			<td>Alfan Adi Chandra</td>
            		</tr>
            		<tr>
            			<td>NO REKENING</td>
            			<td>:</td>
            			<td>5137782123</td>
            		</tr>
                <tr>
                  <td>Jumlah yang perlu dibayar</td>
                  <td>:</td>
                  <td><?php echo $row[5]; ?></td>
                </tr>
            	</table>
          	</div>
    <div class="col-md-6 pull-right">
      <a href="index.php?q=profile" class="btn btn-default"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;<strong>LANJUT</strong></a>
    </div>
 </div>
      <div class="row">
                aa
    </div>
  </section>
</form>