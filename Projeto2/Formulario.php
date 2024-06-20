<php>

$$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-edu'

$conexao = new mysqli($dbHost, $$dbUsername, $$dbPassword, $$dbName);

if($conexao->connect-errno)
{

    echo "Erro";

}
else
{


    echo "conexao efetuada com sucesso"
}












</php>