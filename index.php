<!-- 
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
 -->
 <!doctype html>


 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="p-3 mb-2  bg-dark text-white">
<form>
<div class="form-group">
    <label for="inputSurname">Фамилия:</label>
    <input type="text"  class="form-control bg-warning " id="inputSurname" >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">Имя:</label>
      <input type="text" class="form-control bg-warning" id="inputName" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPatronymic">Отчество:</label>
      <input type="text" class="form-control bg-warning" id="inputPatronymic" >
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputBirthdate">Дата рождения:</label>
    <input type="date" class="form-control bg-warning">
  </div>
    <div class="form-row">
    <div class="dropdown">
    <label for="inputCountry">Страна:</label>
    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Россия
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Россия</a>
    <a class="dropdown-item" href="#">Испания</a>
    <a class="dropdown-item" href="#">Мексика</a>
  </div>
</div>
</div>
</div>
  <button type="submit" class="btn btn-warning btn-lg btn-block">Отправить</button>
</form>

