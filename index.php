
<link rel="stylesheet" type="text/css" href="/../css/main.css">  
<form action = "action.php" method="post">    
    <label for="Surname">Фамилия:</label>
       <input id="Surname" type ="text" class="fam" name="Surname" size="25" autocomplete="off">
    <label for="Name" >Имя:</label>
       <input type ="text" class="nam" name="Name" size="25" autocomplete="off">
    <label for="Patronimic">Отчество:</label>
       <input type ="text" class="otch" name="Patronymic" size="25" autocomplete="off">
    <label for="Birthdate">Дата рождения:</label>
        <input type="date" class="bdat" name="Birthdate" size="25">
    <label for="Country">Страна:</label>
        <select  size="1" class="bdat"  name="Country">
            <option value="Россия" selected  > Россия </option>
            <option value="Ирландия" >Ирландия </option>
            <option value="Мексика">Мексика</option>
            <option value="Италия"> Италия</option>  
        </select>
    <input type="submit" class="cursor" value="Отправить">
</form>

