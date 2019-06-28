
   
<form action = "action.php" method="post">                     
    Фамилия:<p><input type ="text" name="Surname" size="25" autocomplete="off"> </p>
    Имя:<p> <input type ="text" name="Name" size="25"autocomplete="off"> </p>                         
    Отчество:<p> <input type ="text" name="Patronymic" size="25" autocomplete="off"></p>    
    Дата рождения:<p> <input type="date" name="Birthdate" size="25"></p>
    Страна:<p> <select  size="1"  name="Country"></p>
                <option value="Россия" selected> Россия </option>
                <option value="Ирландия" >Ирландия </option>
                <option value="Мексика">Мексика</option>
                <option value="Италия"> Италия</option>  
                </select> </p>                
            <p><input type="submit" value="Отправить" ></p>
</form>