<?php

//echo "Coucou";


//La fonctioh var_dump est une fonction de debug


/*var_dump("coucou bibi");
 *var_dump("coucou bobo");
 *var_dump('unexpected_error');
 *var_dump('coucou bob dit l\'ane');
 */


// name prend la valeur "bob dit l'ane
//$name = "bob dit l'âne";

//debug de la variable name
//var_dump($name);


//concaténation !
//var_dump("coucou $name");
//var_dump("coucou " . $name);


//Quelques addition
//$a = 4;
//$b = $a +11;

//var_dump($b);

/*if($b > 10) {
 *var_dump("Sup à 10");
 *}
 */

// si egal a 10
/*if($b == 10) {
 *   var_dump("Ok pour 10");
 *} else {
 *   var_dump("pas egal a 10");
 *}
 */

//si egal a 10 ou 15
/*if($b == 10) {
 *  var_dump("Ok pour 10");
 *}else if($b == 15) {
 *  var_dump("Egal a 15 !");
 * }
 */

//$t = array(1, 100, 3);
//var_dump($t);

//echo ne marche pas avec tableau
//echo $t;

//acces a une valeur par index du tableau
//ecrire t[1]
//var_dump($t[1]);

// t[3] <- 1234

//$t[3]=1234;
//var_dump($t[3]);
//var_dump($t);

// pour i allant de 0 a 9 de 1 en 1
//action
//fin

/*for($i = 0; $i < 4; $i ++) {
  *var_dump("t[$i] = " . $t[$i]);
  */

// compter le nombre de valeur de ce tableau
//puis l'afficher dans votre terminal

//$list = array(1, 2, 300, 4556, 4566, 8745);
//var_dump(count($list));


//$count = 0;
//for ($i = 0; $i < 6; $i ++ ){
//    $count ++;
//}
//var_dump($count);


//$user = array(
//    "firstname"=> "bob",
//    "lastname" => "marley",
//    "age" => "30",
//    "key" => "valeur",
//    );
//var_dump($user);

//foreach ($user as $firstname => $bob) {
//    var_dump($user[$firstname]);
//    var_dump("$firstname => $bob");
//}

/*
 * L'objectif est de compléter le tableau $incompletUsers (ajouter les lastnames)
 * avec le tableau $lastnames
 *
 */

//$users = array(
 //   array(
 //       "firstname" => "bob",
 //       "mail" => "bob@gmail.com",
//        ),
 //   array(
  //      "firstname" => "john",
  //      "mail" => "john@gmail.com",
 //       ),
//);

//$lastname = array("Dit l'ane", "Doe", "Die");

//$users = array(
//    array(
 //       "firstname" => "bob",
 //       "mail" => "bob@gmail.com",
 //   ),
 //   array(
  //      "firstname" => "john",
  //      "mail" => "john@gmail.com",
 //   ),
  //  array(
  //      "firstname" => "janne",
  //      "mail" => "janne@gmail.com",
  //  ),
//);

//foreach ($users as $index => $user){
  //  $users[$index]["lastname"] = $lastname[$index];
  //  var_dump($users);
//}

//for ($k =0; $k < 3; $k++){
 //   foreach ($users[$k]){
  //      $users["lastname"] = $lastname[$k];
  //  }
//}
//var_dump($users);

//$incompletUsers = array(
//    array(
//        "firstname" => "bob",
//        "lastname" => "Dit l'âne",
//        "email" => "bob@domain.tld"
//    ),
//    array(
//        "firstname" => "john",
//        "lastname" => "doe",
//        "email" => "john@domain.tld"
//    ),
//    array(
//        "firstname" => "jane",
//        "lastname" => "die",
//        "email" => "jane@domain.tld"
//    )
//);

//$person = array(
//    "firstname" => "john",
 //   "lastname" => ""
//);

//function helloArray($user) {
// var_dump("Hello " . $user["firstname"] . " "  . $user["lastname"]);
//}
//helloArray($person);
/**
 * Reprendre la fonction helloArray :
 * - Contrôler que le firtname et lastname sont bien remplis
 * - Afficher le message "Des champs sont obligatoires (...)"
 * - Afficher les firstname et lastname avec la première lettre
 * en majuscule et le reste en minuscule
 *
 * firstname => john
 * firstname => dOE
 *
 * => Hello John Doe
 */
$user = array(
    "firstname" => "jOHN",
    "lastname" => "DoE"
);

function helloUser($user) {
//    if(empty($user["fisrtname"]) == false) {
    if(empty($user["firstname"])) {
        var_dump("Des champs sont obligatoires (fisrtname)");
        return;
    }
    if(empty($user["lastname"])) {
        var_dump("Des champs sont obligatoires (lastname)");
        return;
    }
    $user["firstname"] = ucfirst(strtolower($user["firstname"]));
    $user["lastname"] = ucfirst(strtolower($user["lastname"]));
    var_dump("Hello " . $user["firstname"] . " "  . $user["lastname"]);
}
helloUser($user);