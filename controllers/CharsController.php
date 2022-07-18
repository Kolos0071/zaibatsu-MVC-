<?

include_once ROOT.'/models/Chars.php';
include_once ROOT.'/models/Faculties.php';
include_once ROOT.'/models/Skills.php';

class CharsController
{
    public function actionIndex()
        {
            $charsList = array();
            $charsList = Chars::getCharsList();
            $faculties = array();
            $faculties = Faculties::getFaculties();
            
            require_once(ROOT.'/views/chars/index.php');
                echo '<pre>';
                print_r($charsList);
                echo '<pre>'; 
                echo '<pre>';
                print_r($faculties);
                echo '<pre>'; 

            return true;
        }

    public function actionView($id)
        {
            if ($id) {
                $charsItem = Chars::getCharsItemById($id);
                $skills = array();
                $skills = Skills::getSkills();
                require_once(ROOT.'/views/char/index.php');
               /*  echo '<pre>';
                print_r($charsItem);
                echo '<pre>'; 
                echo '<pre>';
                print_r($skills);
                echo '<pre>'; */ 
                
            } 



            return true;
        }
    
}
?>