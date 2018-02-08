<?php
#Undefined index: sex in C:\wamp64\www\cs306_final\pro\searchstudents_out.php on line 7
require ('connector.php');
?>

<?php include 'basics.php'; ?>
<div class="page">
    <h1>Students</h1>
    <div class="forms">
        <form action="searchstudents_out.php" method="post">
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" placeholder=" " value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="age">Age: </label><label><i> <span class="pta">(To unspecify, enter "NULL")</span> </i></label>
                <input type="text" name="age" id="age" class="form-control" required>
            </div>
            
            <div class="form-group">
            <label for="age">Sex: </label><br>
                <input type="radio" name="sex" value="NULL" checked> All
                <input type="radio" name="sex" value="2"> Female
                <input type="radio" name="sex" value="1"> Male <br>
                
            </div>
            <div class="form-group">
                <label for="class">Class: </label>
                <input type="text" name="class" id="class" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="dosmoke">Does Smoke?: </label><br>
                <input type="radio" name="dosmoke" value="NULL" checked> All
                <input type="radio" name="dosmoke" value="1"> Yes 
                <input type="radio" name="dosmoke" value="2"> No<br>
            </div>
            <div class="form-group">
                <label for="alcohol">Use Alcohol?: </label><br>
                <input type="radio" name="alcohol" value="NULL" checked> All
                <input type="radio" name="alcohol" value="1"> Yes 
                <input type="radio" name="alcohol" value="2"> No<br>
            </div>
            <div class="form-group">
                <label for="edudur">Education Duration: </label><label><i> <span class="pta">(To unspecify, enter "NULL")</span> </i></label>
                <input type="text" name="edudur" id="edudur" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="freeze">Freeze Status: </label>
                <input type="text" name="freeze" id="freeze" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="alrg">Allergies: </label>
                <input type="text" name="alrg" id="alrg" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for=pet>Has Pet?: </label>
                <input type="radio" name="pet" value="NULL" checked> All
                <input type="radio" name="pet" value="1"> Yes 
                <input type="radio" name="pet" value="2"> No<br>
            </div>
            <div class="form-group">
                <label for=stay>Staying Duration: </label><label><i> <span class="pta">(To unspecify, enter "NULL")</span> </i></label>
                <input type="text" name="stay" id="stay" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<?php include 'scripts.php'; ?>