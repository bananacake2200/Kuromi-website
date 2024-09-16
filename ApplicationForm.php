<!DOCTYPE html>
<html>
<head>
    <title>Application Form</title>
</head>
<body>

<fieldset>
<h2 style="color:#6F4E37;"><b>Hogwarts Application Form</b></h2>
</fieldset>
<form action="process_registration.php" method="POST" enctype="multipart/form-data"> <br>
    <fieldset>
        <legend> <b> Enter your admission Information below</b></legend><br>   
        <label for="name"><b>Name:</b></label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="gender"><b>Gender:</b></label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <input type= "radio" id="non-binary" name="gender" value="Non-binary">
        <label for="non-binary">Non-binary</label><br><br>

        <label for="age"><b>Age:</b></label>
        <input type="number" id="age"  name="Age" required> <br><br>
        <label for="birthdate"><b>Birthdate:</b></label>
        <input type="date" id="birthdate" name="birthdate" min="1900-01-01" max="2023-12-31"><br><br>
        <label for="wand"><b>Wand:</b></label>
        <input type="text" id="wand" name="Wand"><br><br>
        <label for="bloodtype"><b>Blood type:</b></label><br>
        <input type="checkbox" id="bloodtype1" name="bloodtype[]" value="Pure-blood">
        <label for="bloodtype1">Pure-blood</label> <br>
        <input type="checkbox" id="bloodtype2" name="bloodtype[]" value="Halfblood">
        <label for="bloodtype2">Half-blood </label> <br>
        <input type="checkbox" id="bloodtype3" name="bloodtype[]" value="Muggle">
        <label for="bloodtype3">Muggle-born</label> <br><br>
        <div class="form-group">
        <label for="house"><b>Preferred House:</b></label>
        <select id="house" name="house" multiple>
        <option value="gryffindor">Gryffindor</option>
        <option value="hufflepuff">Hufflepuff</option>
        <option value="ravenclaw">Ravenclaw</option>
        <option value="slytherin">Slytherin</option>
        </select>
        </div><br>
        <label for="patronus"><b>Patronus:</b></label>
        <input type="patronus" id="patronus" name="patronus" required><br><br>
        <label for="Contact number"><b>Contact number:</b></label>
        <input type="number" id="Contact number" name="Contact number" required> <br><br>
        <label for="E-mail"><b>E-mail:</b></label>
        <input type="email" id="email" name="email" required><br>
    </fieldset><br>

    <fieldset>
        <legend><b>Subjects</b></legend>
        <label for="classes"><b>Mandatory classes:</b></label>
        <UL>
        <li> Charms
        <li> Defense against the dark arts
        <li> Potions
        <li> Transfiguration
        <li> History of Magic
        </UL>
        <label for="classes"><b>Elective classes:</b></label> <br> <br>
        <input type="checkbox" id="class1" name="class[]" value="Alchemy">
        <label for="class1">Alchemy</label> <br>
        <input type="checkbox" id="class2" name="class2[]" value="Apparition">
        <label for="class2">Apparition</label><br> 
        <input type="checkbox" id="class3" name="class[]" value="Care of magical creatures">
        <label for="class3">Care of magical creatures</label><br>
        <input type="checkbox" id="class4" name="class[]" value="Divination">
        <label for="class4">Divination</label><br>
        <input type="checkbox" id="class5" name="class[]" value="Muggles studies">
        <label for="class5">Muggles studies</label><br><br>
        <label for="Which position do you want to play in Quidditch?"><b>Which position do you want to play in Quidditch?</b></label><br> 
        <input type="radio" id="lol1" name="lol1" value="Seeker">
        <label for="seeker">Seeker</label>
        <input type="radio" id="beater" name="beater" value="Beater">
        <label for="beater">Beater</label><br>
        <input type="radio" id="keeper" name="keeper" value="Keepee">
        <label for="keeper">Keeper</label>
        <input type="radio" id="chaser" name="chaser" value="Chaser">
        <label for="chaser">Chaser</label><br><br> <hr>
        <label for="file">Upload your file here:</label>
        <input type="file" id="file" name="file"><br><br>
        
</fieldset>
      
    <fieldset>
        <legend><b>NOTE</b></legend>
       <label for="classes">"Make sure you're crystal clear. First year students can't ride on a broomsticks!"</label> <br>
       <input type= "checkbox" id="non-binary" name="gender" value="Non-binary"required>
       <label for="non-binary">I totally understand</label><br>
    </fieldset><br>

    <button type="button" onclick="alert('You are a muggle, You cant see the magic :P')">click here to see the magic</button>
    <button type="submit" name="submit" value="Register">Submit</button>
</form>

</body>
</html>