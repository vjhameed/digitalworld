<table border=1>

<!-- if the transactions are registeration type -->
<?php if ($detail[0] == 0) {?>
<a href="<?php echo site_url()?>/auth/pendingTransactions">Go Back</a>
    <tr>
        <td>id</td>
        <td>transid</td>
        <td>trxid</td>
        <td>method</td> 
        <td>amount</td>                        
        <td>cnic</td>                        
        <td>phone</td>
        <td>code</td>
    </tr>
    <tr>
        <td><?php echo $detail[1][0]['id']?></td>
        <td><?php echo $detail[1][0]['transid']?></td>
        <td><?php echo $detail[1][0]['trx']?></td>
        <td><?php echo $detail[1][0]['method']?></td> 
        <td><?php echo $detail[1][0]['amount']?></td>        
        <td><?php echo $detail[1][0]['cnic']?></td>        
        <td><?php echo $detail[1][0]['phone']?></td>        
        <td><?php echo $detail[1][0]['code']?></td>        
    </tr>
    <!-- if the transaction are withdrawal type -->
<?php } elseif ($detail[0] == 1) { ?>
<a href="<?php echo site_url()?>/auth/withdrawTransactions">Go Back</a>
    <tr>
        <td>id</td>
        <td>transid</td>
        <td>method</td>
        <td>cnic</td>                        
        <td>phone</td>
    </tr>
    <tr>
        <td><?php echo $detail[1][0]['id']?></td>
        <td><?php echo $detail[1][0]['transid']?></td>
        <td><?php echo $detail[1][0]['method']?></td>
        <td><?php echo $detail[1][0]['cnic']?></td>        
        <td><?php echo $detail[1][0]['phone']?></td>        
    </tr>
<?php } ?>
</table>
