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
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
 
<div class="p-3 mb-2  bg-dark text-white">
  <form action = "action.php" method="post">  
    <div class="form-group">
      <label for="Surname">Фамилия:</label>
      <input type="text"  class="form-control bg-warning " name="Surname" autocomplete="off" >
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Name">Имя:</label>
        <input type="text" class="form-control bg-warning" name="Name" autocomplete="off" >
      </div>
      <div class="form-group col-md-6">
        <label for="Patronymic">Отчество:</label>
        <input type="text" class="form-control bg-warning" name="Patronymic" autocomplete="off">
      </div>
      <div class="form-group col-md-6">
        <label for="Birthdate">Дата рождения:</label>
        <input type="date" class="form-control bg-warning" name="Birthdate">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="Country">Страна:</label>
        <select class="form-control bg-warning " name="Country">
          <option selected>Россия</option>
          <option>Испания</option>
          <option>Германия</option>
          <option>Япония</option>
          <option>Мексика</option>
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-warning btn-lg btn-block">Отправить</button>
  </form>
</div>
