<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post">
<h3>How many book U wanna save</h3>
<input type="number" name="len"><br>
<button type="submit" name="save">Save</button>
</form>

<?php
if(isset($_POST["save"]))
{
    $count = $_POST["len"];

    echo "<form method='post'>";
    for($i=0; $i < $count; $i++)
    {
    
        echo "price: <input type='number' name='price[]'><br>";
    }
    echo "<button type='submit' name='calulate'>submit</button>";
    echo "</form>";
}

if(isset($_POST['calulate'])){
    $price = $_POST['price'];
    $count = count($price);
    $total=0;
    for($x=0; $x<$count; $x++)
{
    $total = $total + $price[$x];
}

echo "<div class='card'>";
echo "<div class='card-body'>";
echo "<p>total price is P$total</P>";
echo "</div>";
echo "</div>";

}
?>

<div class="container mt-5">
        <div class="container"></div>
        <div style="border: 1px solid #000000; padding: 10px;">
        <h3>Book Infomation</h3>

        <form method="post">
             
            <form method="post">
            <div class="form-group">
            <label>New Book</label>
            <input type="number" class="form-control">

            <form method="post">
            <div class="form-group">
            <label>Jungle Book</label>
            <input type="number" class="form-control">

            <form method="post">
            <div class="form-group">
            <label>Umbrella Academy</label>
            <input type="number" class="form-control">

        <div class="text-right">
    <button class="btn btn-secondary">Submit</button>
    
         </form>

</body>
</html>