
        <?php
        if(isset($_POST)){
            //var_dump($_POST);
            echo "Фамилия: \n". ($_POST['Surname']). '<br>';
            echo "Имя: \n". ($_POST['Name']). '<br>';
            echo "Отчество: \n". ($_POST['Patronymic']). '<br>';
            echo "Дата рождения: \n". ($_POST['Birthdate']). '<br>';
            echo "Страна: \n". ($_POST['Country']). '<br>';
        }
        
        ?>