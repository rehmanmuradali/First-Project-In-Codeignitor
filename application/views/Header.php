<html>
<head>
        <title>First Project in Codeignitor</title>
</head>
<body>

        <h1>Welcome to User Profiles!</h1>
        <h2>List of All Users:</h2>
        <strong>ID &nbsp Name</strong><br/>
        <?php
                foreach($result as $row)
                {
                      echo $row['ID'];
                      echo '&nbsp';
                      echo $row['Name'];
                      echo "<br>";

                }
         ?>
         <br>
         <br>
         <br>
         <?php  echo form_open(base_url()."index.php/my_controller/deleteUser"); ?>
                Enter ID you want to delete:<?php echo form_input("id_delete",""); ?> <br/>
                <?php echo form_submit("input_delete","Delete Id"); ?>
         </form>
         <?php  echo form_open(base_url()."index.php/my_controller/insertUser"); ?>
                Enter Name you want to insert:<?php echo form_input("name_insert",""); ?> <br/>
                <?php echo form_submit("input_insert","Insert Name"); ?>
         </form>
         <?php  echo form_open(base_url()."index.php/my_controller/editUser"); ?>
                Enter Details to Edit Records:<br/>
                Enter ID :<?php echo form_input("id_edit",""); ?> <br/>
                Enter Name :<?php echo form_input("name_edit",""); ?> <br/>
                <?php echo form_submit("input_edit","Edit Name"); ?>
         </form>

         <br>
         <br>

        <footer> Made by <strong> Rehman Murad Ali</strong></footer>
</body>
</html>
