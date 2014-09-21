<?php
class Manipulator
{
    // The string to be manipulated.
    // @contains string
    private $_string;
    
    function __construct($string)
    {
        $this->_string = $string;
    }
    
    // Break the string into an array of strings split by " ".
    // Then rebuild the string starting with the back.
    public function reverseWords()
    {
        $array = explode(" ", $this->_string);
        $returnString = "";
        
        for($i = count($array) - 1; $i >= 0; $i--)
        {
            $returnString .= $array[$i] . " ";
        }

        return $returnString;
    }

    // Break the string into an array of characters
    // and put it back together as a string in reverse order.
    public function reverseCharacters()
    {
        $array = str_split($this->_string);
        $returnString = "";
        
        for($i = count($array) - 1; $i >= 0; $i--)
        {
            $returnString .= $array[$i];
        }

        return $returnString;
    }

    // Break the string into an array of string split by " ".
    // Then simply add each string together as the " " is now
    // gone.
    public function stripWhiteSpace()
    {
        $array = explode(" ", $this->_string);
        $returnString = "";
        
        for($i = 0; $i < count($array); $i++)
        {
            $returnString .= $array[$i];
        }

        return $returnString;
    }

    // Break the string into an array of characters.
    // Add each character into a string and check if it has already been added.
    public function removeDups()
    {
        $array = str_split($this->_string);
        $returnString = "";
        for($i = 0; $i < count($array); $i++)
        {
            if(false !== 
                    !strpbrk(strtolower($returnString), strtolower ($array[$i])) || 
                $array[$i] == " ")
            {
                $returnString .= $array[$i];
            }
        }

        return $returnString;
    }

    // Adds each character of the string to an array.
    // Each character is checked as a testChar and is compared against all past
    // testChars. If there was an equivalent letter in the array 
    // that isn't this particular letter, the counter will be increase and 
    // then breaks to save time.
    // Only when a character finishes checking with a counter of 0, does 
    // it return that letter.
    // If all characters are duplicates, return an empty string as there are no 
    // unqiue characters.
    public function findFirstUnique()
    {
        $array = str_split($this->_string);

        for($i = 0; $i < count($array); $i++)
        {
            $testChar = $array[$i];
            $counter = 0;
            
            for($j = 0; $j < count($array); $j++)
            {
                if(strtolower($testChar) == strtolower($array[$j]) && $j != $i)
                {
                    $counter++;
                    break;
                }
            }


            if($counter == 0)
            {
                return $testChar;
            }
        }

        return "";
    }
}

?>

