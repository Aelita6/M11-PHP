<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Practice Module 11 </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<header>
            <div class="links">
                <a href="">ОБО МНЕ</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="">ПРОЕКТЫ</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="">РЕКЛАМА</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="">КОНТАКТЫ</a>
            </div>
</header>
    <div class="flex-container">       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>


            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/photo.png">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут:&nbsp; 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          ?>                                      
                    </p>
                    <p> Город:&nbsp;
                        <?php echo $city;  
                        ?>
                    </p>
           
                    <p> Мне:&nbsp;
                    <?php  echo $age;   
                    ?>          
                    лет </p> <br>
                    
          <div class="line"></div>

                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними <br> <br> Посмотрите ниже </p>
                </div>
            </div>

            <div class="line"></div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br><br>
                                                     
                     <?php
                        echo $d;
                    ?>  <br><br>

                    <?php
                        echo $y, ' ', $x;
                    ?> <br><br>

                    <?php
                        echo 'Результат сложения чисел 18 и 10 будет равно ', $num2;
                    ?> <br><br>

                    <?php
                    echo MY_CONST;
                    ?>
            </div>

            <div class="line"></div>

            <div class="article">
                <p class="text">
                Если бы строители строили дома так, как программисты пишут код, то первый же дятел, присевший на фасад, уничтожил бы цивилизацию.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>