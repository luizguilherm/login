<?php
# Back=end
if(isset($_GET['nome']));{
echo "\n<pre>\n";
print_r($_GET); #Array
echo "\n<pre>\n";

print("\n<br><strong>Nome:</strong>");
print("$_GET{nome}");

print("<br><strong>E-mail:</strong>");
print("$_GET{email}");

print("<br><strong>Senha:</strong>");
print("$_GET{senha}");

print("<br><strong>Data de nascimento:</strong>");
print("$_GET{data_de_nascimento}");

}
if(isset($_POST['nome'])){
    print("\n<br><strong>Nome:</strong>");
    print("$_GET{nome}");

    print("<br><strong>E-mail:</strong>");
    print("$_GET{email}");

    print("<br><strong>Senha:</strong>");
    print("$_GET{senha}");

    print("<br><strong>Data de nascimento:</strong>");
    print("$_{data_de_nascimento}");
}
