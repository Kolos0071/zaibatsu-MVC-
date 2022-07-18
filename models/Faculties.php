<?
class Faculties
{
    public static function getFaculties()
    {
        $db = Db::getConnection();

        $facultiesList = array();

        $result = $db->query('SELECT * FROM faculties');

        $i = 0;

        while ($row = $result->fetch()) {
            $facultiesList[$i]['id'] = $row['id'];
            $facultiesList[$i]['name'] = $row['name'];
            $i++;
        }

        return $facultiesList;
    }
}


?>