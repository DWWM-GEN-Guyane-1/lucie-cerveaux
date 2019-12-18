<?php
$produits = array(
    'Tagada' => 15,
    'Schtroumpfs' => 4,
    'Croco' => 6)
?>

<form action="" method="post">
<input type="text" name="username" id="sbmt">
<input type="text" name="qte" id="qte">
<input type="submit" value="Ok">
</form>

<?php 
    if($_POST['username']);
        
        $key = array_key_exists($_POST['username'], $produits);
        if($key) {
            $produits[$_POST['username']] = $_POST['qte'];
        } else {
            echo 'Kath';
        }
        
    
    ?>

<ul>    
<?php foreach ($produits as $key => $produit) { ?>

    <li><?php echo $produit.$key ?></li> 
    
<?php } 
?>
</ul>