<!-- <?php 
function greet($name, $color){
    echo "<p>Hi, my name is $name and my faviourt color is $color</p>";
}
greet('John', 'blue');
greet('Jane', 'green');
// arguments and parameters examples
?>  -->

---

<!-- <?php 
$names = array('Amin', 'Noori', 'Jane', 'Hame');
$counting = 1;
while ($counting <=100){
    echo "<li> $counting</li>";
    $counting ++;
}

?> -->

<!-- <p> Hi, my name is <?php echo $names[2]; ?></p> -->

 <!-- This is an example of Array, we can use it for looping. -->


<!-- while loop example for setting blog posts at home page and ther pages of Wordpress
 <?php 
while(have_posts()){
the_post();?>
<h2><a href="<?php the_permalink();?>"><?php echo the_title(); ?> </a> </h2>
<?php the_content(); ?>
<hr> 
<?php } 

?> -->

<!-- This is a single page/ post simple example: you need to create new file with the name of single.php or page.php
<?php 
while(have_posts()){
the_post();?>
<h2><?php echo the_title(); ?> </h2>
<?php the_content(); ?>

<?php } 

?> -->
