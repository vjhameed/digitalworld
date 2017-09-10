
<a href="<?php echo site_url()?>/auth/backworld">back</a>

<?php foreach($data as $value){?>
		<div style="padding: 1em;border-bottom: 3px solid gray;">
			<h3>Subject :<?php echo $value['subject'];?></h3>
			<h5>Date :<?php echo $value['date'];?></h5>
			<h6>UserName :<?php echo $value['userName'];?></h6>
			<h6>UserEmail :<?php echo $value['userEmail']?></h6>
			<h6>Phone No :<?php echo $value['number']?></h6>
			<h6 style="display:inline">Body :</h6>
			<p style="display:inline"> <?php echo $value['body'];?></p>
			<br>
			<a href="<?php echo site_url()?>/auth/readmsg/<?php echo $value['id']?>">Checked</a>
		</div>
		<br>
<?php }?>
