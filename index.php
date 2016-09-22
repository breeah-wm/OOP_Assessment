<!Doctype html>
    <html>
    <head>
    <meta charset="UMF-8">
    <title>OOP in PHP</title>
    <?php include("class_lib.php");?>
    </head>

    <body>

    </body>

        <?php
            spl_autoload_register(function($class_name){
                include $class_name. '.php';
            });

            $slytherin = new Slytherin;
           // $gryffindor = new Gryffindor;

            $slytherin->sayHello();
            //$gryffindor->sayHello();

            echo ravenclaw::$maxHouseNumber. '</br>';

            $rowena = new Rowena();
            $rowena->name = 'Rowena';
            $rowena->color = 'blue';

            echo $rowena->describe();
            echo $rowena->personality();


             $helga = new Helga();
             $helga->name = 'Helga';
             $helga->color = 'yellow';

              echo $helga->describe();
              echo $helga->personality();

             $salzar = new salzar();
             $salzar->name = 'Salzar';
             $salzar->color = 'green';

             echo $salzar->describe();
             echo $salzar->personality();

             $godric = new godric();
             $godric->name = 'Godric';
             $godric->color = 'red';

             echo $godric->describe();
             echo $godric->personality();



            $diadem = new ravenclaw("The Diadem");
            echo $diadem->get_name() . " is dangerous" . '</br>';

            $cup = new

            hufflepuff("The Cup");
            echo $cup->get_name() . " is dangerous" . '</br>';
                    ?>
</html>