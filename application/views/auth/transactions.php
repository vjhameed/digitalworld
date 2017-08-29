

<a href="<?php echo site_url()?>/auth/backworld">Back to Main</a>
<table border=1>
    <tr><td>ID</td><td>User Id</td><td>Name</td><td>Email</td><td>Username</td><td>Status</td><td>Type</td><td>Amount</td><td>Date</td></tr>
 <?php foreach($trans as $key=>$value){?>
<tr>
<td><?php echo $value['id']?></td>
<td><?php echo $value['userid']?></td>
<td><?php echo $value['name']?></td>
<td><?php echo $value['email']?></td>
<td><?php echo $value['username']?></td>
<td><?php echo $value['status']?></td>
<td><?php echo $value['type']?></td>
<td><?php echo $value['Amount']?></td>
<td><?php echo $value['date']?></td>
<td><a href="<?php echo site_url()?>/auth/transDetails/<?php echo $value['id']?>/<?php echo $value['type']?>">Details</a></td>
<td><a href="<?php echo site_url()?>/auth/completeTransaction/<?php echo $value['userid']?>">Complete</a></td>
</tr>    
<?php } ?> 

</table>
