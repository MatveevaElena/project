
        <?php
        
        if(isset($_POST)){
            //var_dump($_POST);
            echo "Фамилия: ". ($_POST['Surname']). '<br>';
            echo "Имя: ". ($_POST['Name']). '<br>';
            echo "Отчество: ". ($_POST['Patronymic']). '<br>';
            echo "Дата рождения: ". ($_POST['Birthdate']). '<br>';
            echo "Страна: ". ($_POST['Country']). '<br>';
        }
        
        ?>