<?php include 'header.php';?>

<div id="leftcol">
    
            <h1>My Profile</h1>
            <img src="profile-image.jpg" alt="My Profile Photo" />
            <p><strong>Name: </strong>Orange Fathead</p>
            <p><strong>Occupation: </strong>Designer</p>
            
            <p><strong>Approximate Age: </strong>
                <?php
                    $target = mktime(0, 0, 0, 8, 20, 1990) ;
                    $today = time () ;
                    $difference =($target-$today) ;
                    $years =abs((int) (($difference/86400)/365)) ;
                    print "I am about $years years old!";
                ?>
            </p>
</div>

<div id="rightcol">
    
    <strong>Send me a message</strong>
    <?php include 'form.php'; ?>
    
</div>

<?php include 'footer.php';?>