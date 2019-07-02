
   
<form action = "action.php" method="post">                     
    <label for="Surname">Фамилия:</label>
       <input id="Surname" type ="text" class="fam" name="Surname" size="25" autocomplete="off">
    <label for="Name">Имя:</label>
       <input type ="text" class="nam" name="Name" size="25" autocomplete="off">
    <label for="Patronimic">Отчество:</label>
       <input type ="text" class="nam" name="Patronymic" size="25" autocomplete="off">
    <label for="Birthdate">Дата рождения:</label>
        <input type="date" class="nam" name="Birthdate" size="25">
    <label for="Country">Страна:</label>
        <select  size="1"  name="Country">
            <option value="Россия" selected> Россия </option>
            <option value="Ирландия" >Ирландия </option>
            <option value="Мексика">Мексика</option>
            <option value="Италия"> Италия</option>  
        </select>
    <input type="submit" class="cursor" value="Отправить">
</form>

<style>
.fam {//стиль для фамилии
    padding:5px;
    border-radius: 5px;
    width : 1350px;
    white-space: normal;
    display: block;
}
.nam{// cтиль для имени и отчества
    padding: 5px;
    border-radius: 5px;
    width : px;
    white-space: normal;
    display: block;
}
.cursor{ //стиль для кнопки "отправить"
    cursor: pointer;
    width: 150px;
    height:100px;
    border-radius: 5px;
    background-color: #FFD700;//золотой цвет
}
</style>