<?php
function print_content(){ 
    global $contacts;
    ?>
    <h1>Contacts</h1>
    <hr>
    <article class="form-group">
        <h3>Main office:</h3>
        <ul class="list-group">
        <?php foreach ($contacts as $key => $value) { ?>
            <li class="list-group-item"><b><?=$key?></b>:&nbsp;<span><?=$value?></span></li>    
        <?php } ?>
        </ul>
    </article>
<?php } 

include 'source/view/base.php' 

?>