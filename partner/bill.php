<?php 
include("includes/conn.php");
session_start();



$bid=$_REQUEST['bid'];
$id=$_SESSION['pid'];													
$sql = "SELECT i.bookingid,i.totalsubservice,u.name,sp.pname,i.date,s.s_name, sp.address , sp.contact, sp.email , u.address , u.email , i.invoicedate , i.date , i.visitingcharge
 , i.servicecharge , i.materialcost , i.totalsubservice
from invoice i, booking b, user u ,service_provider sp ,services s 
where i.bookingid= b.bookingid AND i.bookingid='$bid' 
AND i.uid=u.uid AND u.uid=b.uid AND i.pid=sp.pid AND sp.pid=b.pid AND
 b.pid='$id' AND i.sid=s.sid AND s.sid=b.sid AND b.invoice=2 GROUP BY b.date";
$result =  mysqli_query($conn , $sql);

    											     if (mysqli_num_rows($result) > 0) {
          													  while($row = mysqli_fetch_row($result)) {    




 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bill</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="css/invoice.css" rel="stylesheet">
</head>
<body>

<div>

    <div class="invoice overflow-auto" id="invoice">
        <div style="min-width: 600px">
            <header>
			
			<h4 style="text-align:center">INVOICE </h4>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="#">
                            <img src="gallery/logo.png" data-holder-rendered="true" />
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a  href="#">
                            
                            </a>
                        </h2>
                        <div><h3>City Service Provider<h3></div>
                        <div>9724946024</div>
                        <div class="email"><a href="mailto: info.homeserviceprovider@gmail.com"> info.homeserviceprovider@gmail.com</a></div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to"><?php echo $row[2];?></h2>
                        <div class="address"><?php echo $row[9];?></div>
                        <div class="email"><a href="mailto:<?php echo $row[10];?>"><?php echo $row[10];?></a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE  <?php echo $row[0];?></h1>
                        <div class="date">Date of Invoice: <?php echo date("d/m/yy", strtotime( $row[11]) );?></div>
                        <div class="date">Appointment date: <?php echo date("d/m/yy", strtotime( $row[12]) );?></div>
						 <div class="date">Provider: <?php echo $row[3];?></div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0" >
                    <thead class="bg bg-success " align="center" >
                        <tr>
                            <th style="text-align:center"  width="7%">service.no</th>
                            <th class="text-align:center" >Booking service</th>
                            <th class="text-align:center" colspan="2">Quantity</th>
                            
                            <th class="text-align:center" >TOTAL</th>
                        </tr>
                    </thead>
					<?php   $query = "SELECT * FROM booking WHERE  bookingid='$bid'";
													 $provider = mysqli_query($conn,$query);
													$cnt=1;
													 
    											     if (mysqli_num_rows($provider) > 0) {
          													  while($row1 = mysqli_fetch_row($provider)) { 
																		
												
									?>
                    <tbody>
					
					
                        <tr>
                            <td class="no" style="text-align:center" width="7%"><?php echo $cnt;?></td>
                            <td style="text-align:center"><h3>
                                <?php $ssid = $row1[3];
														 $query1 = "SELECT * FROM Service_detail WHERE  ssid=$ssid ";
														$service= mysqli_query($conn,$query1);
													 
															if (mysqli_num_rows($service) > 0) {
          													  while($row2 = mysqli_fetch_row($service)) {    
																echo $row2[1]; 
													 }}
											?> of <?php echo $row1[7];?>
                                
                            </td>
                        
                            <td class="qty" colspan="2" style="text-align:center"><?php echo $row1[12];?></td>
                            <td class=" qty" style="text-align:center">#All charges Calculated in service charge</td>
                        </tr>
                        
                      
                      
													 
                    </tbody>
					<?php $cnt=$cnt+1;  }} ?>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2"style="text-align:center">Visiting charges</td>
                            <td style="text-align:center">Rs <?php echo $row[13];?>.00/-</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2" style="text-align:center">Material cost</td>
                            <td style="text-align:center">Rs <?php echo $row[15];?>.00/-</td>
                        </tr>
						 <tr>
                            <td colspan="2"></td>
                            <td colspan="2" style="text-align:center">Service charge </td>
                            <td style="text-align:center">Rs <?php echo $row[14];?>.00/-</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2" style="text-align:center">GRAND TOTAL</td>
                            <td style="text-align:center " class="total">Rs <?php echo $row[16];?>.00/-</td>
                        </tr>
                    </tfoot>
                </table>
               
				<div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">Payment or invoice valid when customer and provider sign of the bills.</div>
					
                </div>
				<br/>
				<div class="row">
					<div class="col-md-12">
					 <div class="col-md-6"><h3>Customer :-</h3></div><br/>
				<div class="col-md-6"><h3>Service Provider :-</h3></div><br/>
				</div>
				</div>
				<div style="padding-top:50px;"><pre><center><input type="submit" class="btn btn-warning" value="print" id="print" >   <a href="<?php echo $_SERVER['HTTP_REFERER']?>" class="btn btn-secondary">Back </a></center></pre>
				
				
				
				</div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature aof Provider and Customer.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
	<script>
	 $('#print').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
	</script>
</body>
</html>
													 <?php }} ?>