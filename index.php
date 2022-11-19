<?php

    echo("Pediremos una fecha por pantalla y comprobaremos su formato \n");
    echo("Pediremos primero el día, luego el año y luego el mes \n");

    echo("Introduzca el día: ");
    fscanf(STDIN, "%d", $day);

    echo("Introduzca el mes: ");
    fscanf(STDIN, "%d", $month);

    echo("Introduzca el año: ");
    fscanf(STDIN, "%d", $year);

    $current_date = date("Y");
    //Con date("L") podríamos haber obtenido si el año es bisisesto o no y generar una función en base a ello.

    if($year < 1000 or $year > $current_date){
        echo("El año no puede ser menor a 1000 ni mayor al actual \n");
        echo("El año actual es: ".$current_date);
    }
    else{

        if($year % 4 == 0){

            if($month > 12 or $month < 1){
                echo("Los meses deben indicarse en el intervalo 1-12");
            }else{

                if($month == 1 or $month == 3 or $month == 5 or $month == 7 or $month == 8 or $month == 10 or $month == 12){
                    if($day > 31 or $day < 1){
                        echo("Este mes tiene 31 días");
                    }
                    else{
                        echo("La fecha es correcta");
                    }
                }
        
                if($month == 2){
                    if($day > 29 or $day < 1){
                        echo("Febrero de un año bisiesto tiene 29 días");
                    }else{
                        echo("La fecha es correcta");
                    }
                }
        
                if($month == 4 or $month == 6 or $month == 9 or $month == 11){
                    if($day > 30 or $day < 1){
                        echo("Este mes tiene 30 días");
                    }else{
                        echo("La fecha es correcta");
                    }
                }

            }
        }
        else{
            if($month > 12 or $month < 1){
                echo("Los meses deben indicarse en el intervalo 1-12");
            }else{

                if($month == 1 or $month == 3 or $month == 5 or $month == 7 or $month == 8 or $month == 10 or $month == 12){
                    if($day > 31 or $day < 1){
                        echo("Este mes tiene 31 días");
                    }else{
                        echo("La fecha es correcta");
                    }
                }
        
                if($month == 2){
                    if($day > 28 or $day < 1){
                        echo("Febrero tiene 28 días");
                    }else{
                        echo("La fecha es correcta");
                    }
                }
        
                if($month == 4 or $month == 6 or $month == 9 or $month == 11){
                    if($day > 30 or $day < 1){
                        echo("Este mes tiene 30 días");
                    }else{
                        echo("La fecha es correcta");
                    }
                }

            }
        }

    }

?>