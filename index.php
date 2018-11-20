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

$list = array(1, 2, 300, 4556, 4566, 8745);
var_dump(count($list));


$count = 0;
for ($i = 0; $i < 6; $i ++ ){
    $count ++;
}
var_dump($count);


$user = array(
    "firstname"=> "bob",
    "lastname" => "marley",
    "age" => "30",
    "key" => "valeur",
    );
var_dump($user);

//foreach ($user as $firstname => $bob) {
//    var_dump($user[$firstname]);
//    var_dump("$firstname => $bob");
//}


$users = array(
    array(
        "firstname" => "bob",
        "mail" => "bob@gmail.com",
        ),
    array(
        "firstname" => "john",
        "mail" => "john@gmail.com",
        ),
);
var_dump($users);

$janne = array(
    "firstname" => "janne",
    "mail" => "janne@gmail.com",
    );

//array_push($users, $janne);
$users[] = $janne;

var_dump($users);

$lastname = array("Dit l'ane", "Doe", "Die");

$users = array(
    array(
        "firstname" => "bob",
        "mail" => "bob@gmail.com",
    ),
    array(
        "firstname" => "john",
        "mail" => "john@gmail.com",
    ),
    array(
        "firstname" => "janne",
        "mail" => "janne@gmail.com",
    ),
);


