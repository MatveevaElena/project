
   
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

<style>
.fam {/*стиль для фамилии*/
    padding:5px;
    border-radius: 5px;
    width : 100%;

    display: block;
}
.nam{ /*cтиль для имени*/
    padding: 5px;
    border-radius: 5px;
    width: 45%;
    margin:3px;
}
form{
    border-radius: 5px;
    background-color:#9ACD32;
    padding: 5px;
    border-style: hidden;
}
.otch{
    padding: 5px;
    border-radius: 5px;
    width: 46%;
}
.bdat{
    padding: 5px;
    display: block;
    padding: 5px;
    border-radius: 5px;
    width: 655px;
    
}
.cursor{ /*стиль для кнопки "отправить"*/
    cursor: pointer;
    width: 250px;
    height:100px;
    border-radius: 15px;
    background-color: #FFD700;/*золотой цвет*/
    margin-left :65%;
}
input[type=submit]:hover { /*hover - определяет стиль элемента при наведении на него курсора мыши*/
    background-color: #B22222;
    }
    
    option [value="Россия" ] :hover { /*hover - определяет стиль элемента при наведении на него курсора мыши*/
    background-color: #B22222;
    }
</style>