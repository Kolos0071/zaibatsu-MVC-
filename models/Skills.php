<?
class Skills
{
    public static function getSkills()
    {
        $db = Db::getConnection();
        $skillsList = array();
        $result = $db->query('SELECT id, name, rarity, code FROM skills '
        . 'ORDER BY rarity ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $skillsList[$i]['id']=$row['id'];
            $skillsList[$i]['name']=$row['name'];
            $skillsList[$i]['code']=$row['code'];
            $skillsList[$i]['rarity']=$row['rarity'];
            $i++;
        }

        return $skillsList;
    }
}


?>