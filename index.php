<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <title>Klasy PHP</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <table>
        <thead>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">img_src</th>
            <th scope="col">title</th>
            <th scope="col">level</th>
            <th scope="col">parent_id</th>
        </thead>
        <tbody>
    <?php

        $data = array();
        $connection = @new mysqli("localhost", "root", "", "zaliczenie");

        $sql = "SELECT * FROM classes";
        $result = $connection->query($sql);
        while($row = $result->fetch_assoc())
        {
            echo "<tr>";
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['img_src'].'</td>';
            echo '<td>'.$row['title'].'</td>';
            echo '<td>'.$row['level'].'</td>';
            echo '<td>'.$row['parent_id'].'</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
        echo '<h1>Dziedziczenie</h1>';

        $sql = "SELECT * FROM classes ORDER BY level, parent_id";
        $result = $connection->query($sql);

        $act_level = 1;
        while($row = $result->fetch_assoc())
        {
            array_push($data, 
                array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "img_src" => $row['img_src'],
                    "title" => $row['title'],
                    "level" => $row['level'],
                    "parent" => $row['parent_id']
                )
            );
        }

        $connection->close();

        function generatePageTree($data, $parent = 0, $depth=0){
            $ni=count($data);
            if($ni === 0) return '';
            $tree = '<ul>';
            for($i=0; $i < $ni; $i++){
                if($data[$i]['parent'] == $parent){
                    $tree .= '<li>';
                    $tree .= '<a href="forms/'.$data[$i]['name'].'.php" title="'.$data[$i]['title'].'">';
                    $tree .= '<img src="'.$data[$i]['img_src'].'">';
                    $tree .= '</a>';

                    $tree .= '<br><form method="post" enctype="multipart/form-data" action="uploaders/'.$data[$i]['name'].'.php">';
                    $tree .= '<input type="file" name="'.$data[$i]['name'].'" accept=".png"><br>';
                    $tree .= '<button type="submit">Zapisz</button>';
                    $tree .= '</form>';

                    $tree .= generatePageTree($data, $data[$i]['id'], $depth+1);

                    $tree .= '</li>';
                }
            }
            $tree .= '</ul>';
            return $tree;
        }

        echo '<div id="list">'.generatePageTree($data).'</div>';

    ?>
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
     <script src="js/file_upload_info.js"></script>
    <script>
        <?php

            session_start();
            if(!empty($_SESSION['result']))
            {
                echo 'alert("'.$_SESSION['result'].' został zapisany");';
                unset($_SESSION['result']);
            }
            elseif(!empty($_SESSION['feedback']))
            {
                echo 'alert("'.$_SESSION['feedback'].'");';
                echo 'location.reload(true)';
                unset($_SESSION['feedback']);
            }
            session_destroy();

        ?>
    </script>
</body>
</html>