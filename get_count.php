<!DOCTYPE html>
<html>
    <head>
        <title>Get Count Solution PHP,Javascript</title>
    </head>
    <body>
	<!-- SOLVED CORRECTLY 16/4/19 FROM CODEWARS.COM
	Return the number (count) of vowels in the given string.
	We will consider a, e, i, o, and u as vowels for this Kata.
	The input string will only consist of lower case letters and/or spaces.
	-->
	
    <?php
	//SOLUTION IN PHP
        function get_Count($str){
            $vowelsCount = 0;
			$vowels = preg_match_all("/[aeiou]/",$str);
			if($vowels === 0){
				echo $vowelsCount;
				return $vowelsCount;
			} else {
				echo $vowels;
				return $vowelsCount = $vowels;
			}
        }
        get_Count("javascript php and c sharp");
    ?>

<script>
/* SOLUTION IN JAVASCRIPT */
	function getCount(str) {
		var vowelsCount = 0;
		var vowels = str.match(/[aeiuo]/g);
		if (str.match(/[aeiuo]/g) === null) {
			console.log(vowelsCount);
			return vowelsCount;
		} else {
			console.log(vowels.length);
			return vowelsCount = vowels.length;
		}
	}
	getCount("javascript php and c sharp");
</script>

<!-- SOLUTION IN C#
namespace get_count
{
    class Program
    {
        static void Main(string[] args)
        {
            string name = "javascript php and c sharp";
            int count = VowelCount(name);
            Console.WriteLine(count);
           
        }

        static int VowelCount(string name)
        {
            int vowelcount = 0;
            string vowelsToFind = "[aeiou]";
            foreach (Match match in Regex.Matches(name, vowelsToFind))
            {
                vowelcount++;
            }
            return vowelcount;
        }
    }
}
	-->
    </body>
</html>

