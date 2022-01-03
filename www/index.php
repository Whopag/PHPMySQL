<style>
    table, tr, td, th {
        border: 1px solid black;
    }
</style>

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    error_reporting(E_ALL);
?>

<?php
    define('HOST', 'mysql');
    define('DATABASE', 'db');
    define('USER', 'root');
    define('PASSWORD', 'secret');
    define('PORT', 3306);
?>

<?php
    $pdo = new PDO(sprintf("mysql:host=%s;dbname=%s;port=%s", HOST, DATABASE, PORT), USER, PASSWORD);

    if ($pdo instanceof \PDO) {
        $stm = $pdo->query("SELECT VERSION()");

        $version = $stm->fetch();

        echo "mysql --version: " . $version[0] . "<br />";

        echo "php --version: " . phpversion() . "<br />";

        $pdo->query("CREATE TABLE colors ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, color VARCHAR(32));");

        echo "Connected to MySQL<br />";

        $pdo->query("INSERT INTO colors (color) VALUES ('GREEN')");

        $stm = $pdo->query("SELECT * FROM colors");

        $rows = $stm->fetchAll(PDO::FETCH_OBJ);

        printf("<table>");

        printf("
            <thead>
                <tr>
                    <th>#</th>
                    <th>color</th>
                </tr>
            </thead>");

        printf("<tbody>");

        foreach ($rows as $row) {
            printf(
                "<tr>
                    <td>%s</td>
                    <td>%s</td>
                </tr>",
                $row->id,
                $row->color
            );
        }

        printf("</tbody>");

        printf("</table>");
    }
