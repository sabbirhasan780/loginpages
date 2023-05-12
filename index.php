<?php $pageTitle = "Let's Start a Conversation"; ?>

<?php
if(isset($_POST['Add'])){
   $name = $_POST['name'];
   $name = $_POST['name'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $jobtitle = $_POST['jobtitle'];
   $country = $_POST['country'];
   $business = $_POST['business'];
   $comments = $_POST['comments'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle?></title>
    

</head>
<body>

    <h1 align = "center"><?php echo $pageTitle?></h1>
    
    <form action="" method="POST" class=" ">
        <input type="text"  placeholder="First Name" name="name" > <br> <br>
        <input type="text"  placeholder="Last Name" name="name"> <br> <br>
        <input type="text"  placeholder="Company Name" name="name"> <br> <br>
        <input type="email" placeholder="Company Email" name="email"> <br> <br>
        <input type="text"  placeholder="Job Title" name="jobtitle"> <br> <br>
        <input type="text"  placeholder="Country" name="country"> <br> <br>
        <input type="text"  placeholder="Business type" name="business"> <br> <br>
        <input type="text"  placeholder="Comments" name="comments"> <br> <br>
        <input type="submit" value="Add" name="Add">

    </form>
    <br>
    <br>

    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Company Name</th>
            <th>Company Email</th>
            <th>Job Title</th>
            <th>Country</th>
            <th>Business Type</th>
            <th>Comments</th>
        </tr>
        <tr>
            <td><?php if(isset($name)) {echo $name;}?></td>
            <td><?php if(isset($name)) {echo $name;}?></td>
            <td><?php if(isset($name)) {echo $name;}?></td>
            <td><?php if(isset($email)) {echo $email;}?></td>
            <td><?php if(isset($jobtitle)) {echo $jobtitle;}?></td>
            <td><?php if(isset($country)) {echo $country;}?></td>
            <td><?php if(isset($business)) {echo $business;}?></td>
            <td><?php if(isset($comments)) {echo $comments;}?></td>

        </tr>
    </table>




      
</body>
</html>