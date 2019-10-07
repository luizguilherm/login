if(isset($_POST['action']) && $_POST['action']=='cadastro'){
if($_POST['action']=='cadastro'){
//Senão, teste se açõa é igual a cadastro

}else ($_POST['action']=='login'){
//Senão, teste se açõa é login


}else if($_POST['action'] == 'senha'){
//Senão, teste se açõa é recuperar senha

}else{
    echo "<h1>Alo ha!</h1> <h2> acesso negado</h2>";

}
}else{
    echo "<h2> Acesso negado</h2>;"
}