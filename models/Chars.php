<?

class Chars
{
    
    public static function getCharsItemById($id)
    {
        $id = intval($id);
        if($id) {
          
            
            $db = Db::getConnection();

            $result = $db->query('SELECT * from chars WHERE id=' . $id);
           

            //$result->setFetchMode(PDO::FETCH_NUM);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $charsItem = $result->fetch();
            
            return $charsItem;
        }
    }

    
    public static function getCharsList()
    {
        $db = Db::getConnection();

        $charsList = array();
        
        $result = $db->query('SELECT id, name, age, faculty, curs '
        . 'FROM chars '
        . 'ORDER BY age DESC '
        . 'LIMIT 8');

        $i = 0;

        while($row = $result->fetch()) {
            $charsList[$i]['id'] = $row['id'];
            $charsList[$i]['name'] = $row['name'];
            $charsList[$i]['age'] = $row['age'];
            $charsList[$i]['faculty'] = $row['faculty'];
            $charsList[$i]['curs'] = $row['curs'];
            $i++;
        }

        return $charsList;
    }
}

?>