<?php
class Pdoconnection
{

    private $db_details = 'mysql:dbname=bootcamp2021;host=localhost';
    private $db_username = 'root';
    private $db_password = '';
    private $mypdo;

    public function __construct()
    {
        $this->mypdo = new PDO($this->db_details, $this->db_username, $this->db_password);
        $this->mypdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function validator(array $fields)
    {
        $msg = '';
        foreach ($fields as $key => $field) {
            if ($field == null && strlen($field) == '') {
                $msg .= $key . ' is required <br>';
            }
        }
        return $msg;
    }

    public function ourquery($query, array $variables){
        $stmt = $this->mypdo->prepare($query);
        $stmt->execute($variables);
        return $stmt;
    }

    
}

$pdo = new Pdoconnection();
// var_dump($pdo);
$title = 'First';
$author = 'Nanan';
$query = 'SELECT * FROM blogs WHERE blog_title = ? AND author = ?';
$variables = [$title, $author];

$resp = $pdo->ourquery($query, $variables);
$row = $resp->fetchAll(PDO::FETCH_ASSOC);
// var_dump($row);

$sql = "INSERT INTO blogs (blog_title, slug, author, image, content) VALUES (?,?,?,?,?)";
$sth = $pdo->ourquery($sql, ['php', 'php', 'kgkf', 'ldldl', 'dddd']);
var_dump($sth);
// $sth->execute([$title, $author]);
// $rowsCount = $rows->fetch()->rows;
die;



