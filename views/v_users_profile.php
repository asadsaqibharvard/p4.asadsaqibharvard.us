<h1>This is the profile of <?=$user->first_name?></h1>

<img src='/uploads/<?=$user->user_id?>.jpg' width='100' height='100' />

<form method='POST' action='/users/saveprofile' method="post" enctype="multipart/form-data">

<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
    <br><br>
    <input type='submit' value='Save'>
</form> 

<h1>My followers:</h1>



<?php foreach($followers as $user): ?>

    <!-- Print this user's name -->
    <img src='/uploads/<?=$user['user_id']?>.jpg' width='50' height='50' />
    <?=$user['first_name']?> <?=$user['last_name']?>
    <br><br>

<?php endforeach; ?>